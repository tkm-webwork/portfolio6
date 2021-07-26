<?php get_header(); ?>

  <!-- page head -->
  <div class="page-head -blog">
    <div class="page-title">ブログ</div>
  </div>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- archive -->
  <div class="blog-archive">
    <div class="inner">
      <h2 class="page-title">新着一覧</h2>
      <div class="archive-cont">
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'order' => 'DESC',
          'post_status' => 'publish',
          'paged' => $paged,
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()):
        ?>
        <ul class="archive-list">
          <?php
            while ($the_query->have_posts()): $the_query->the_post(); 
            $category = get_the_category($post->ID)[0]->name;
            $link = get_permalink($post->ID);
            $date = get_the_time('Y-n-j', $post->ID);
            $datetime = get_the_time('c', $post->ID);
            $thumbnail = get_the_post_thumbnail($post->ID, 'large');
            $noimage = '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimage.png" alt="">';
          ?>
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
        <?php else: //投稿がない場合?>
          <p>現在記事を準備中です。</p>
          <?
          endif;
          wp_reset_postdata();
        ?>
        <div class="pagenation">
          <?php
          // pagination
          global $wp_query;
          $big = 999999999; // need an unlikely integer
          echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '',
            'current' => max(1, get_query_var('paged')),
            'total' => $the_query->max_num_pages,
            'end_size' => 0,
            'mid_size' => 2,
            'prev_next' => false,
          ));
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- /.blog -->

  <?php get_template_part('template-parts/closing'); ?>

  <?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>