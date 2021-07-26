<?php get_header(); ?>

  <!-- page head -->
  <div class="page-head -blog">
    <div class="page-title">ブログ</div>
  </div>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- archive -->
  <div class="blog-archive">
    <div class="inner">
      <h2 class="page-title"><?php the_archive_title(); //一覧ページ名を表示 ?>一覧</h2>
      <div class="archive-cont">
      <?php if ( have_posts() ): ?>
        <ul class="archive-list">
        <?php while ( have_posts() ): the_post(); 
        $link = get_permalink($post->ID);
        $title = get_the_title($post->ID);
        $desc = get_the_excerpt($post->ID);
        $date = get_the_time('Y-m-d', $post->ID);
        $datetime = get_the_time('c', $post->ID);
        $category = get_the_category($post->ID)[0]->name;
        $thumbnail = get_the_post_thumbnail($post->ID, 'large');
        $noimage = '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimage.png" alt="">';
        ?>
          <!-- 一個目 -->
          <li class="archive-item">
            <a href="<?php echo $link; ?>">
              <div class="archive-text">
                <time class="archive-date" datetime="<?php echo $datetime; ?>"><?php echo $date; ?></time>
                <h3 class="archive-title">
                <?php
                if(mb_strlen($post->post_title, 'UTF-8')>45){
                  $title= mb_substr($post->post_title, 0, 45, 'UTF-8');
                  echo $title.'…';
                }else{
                  echo $post->post_title;
                }
                ?>
                </h3>
                <p class="archive-desc">
                <?php
                    //brとspanを残す
                    if(mb_strlen($post->post_content, 'UTF-8')>80){
                      $content= mb_substr(strip_tags($post->post_content, '<br><span>'), 0, 80, 'UTF-8');
                      echo $content.'……';
                    }else{
                      echo strip_tags($post->post_content, '<br><span>');
                    }
                  ?>  
                </p>
              </div>
              <div class="archive-image__wrap">
              <?php if ($category) {
                      echo '<div class="archive-category">' . $category . '</div>';
                      } ?>
                <div class="archive-image">
                <?php
                  if (has_post_thumbnail()) {
                  echo $thumbnail;
                  } else {
                  echo $noimage;
                  }
                  ?>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        <?php if( paginate_links() ): //ページが1ページ以上あれば以下を表示  ?> 
        <!-- pagenation -->
        <div class="pagenation">
        <?php
          echo
          paginate_links(
          array(
            'end_size' => 0,
            'mid_size' => 2,
            'prev_next' => false,
          )
        );
        ?>
        </div><!-- /pagenation -->
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- /.blog -->

  <?php get_template_part('template-parts/closing'); ?>

  <?php get_template_part('template-parts/contact'); ?>

<?php get_footer();