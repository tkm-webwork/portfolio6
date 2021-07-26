
<?php get_header(); ?>
  <!-- page head -->
  <div class="page-head -news">
    <div class="page-title">お知らせ</div>
  </div>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- news-archive -->
  <div class="news-archive">
    <div class="inner">
      <h2 class="page-title">お知らせ一覧</h2>
      <div class="archive-cont">
      <?php
          $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
          $args = array(
            'post_type' => 'news',// 投稿タイプを指定
            'posts_per_page' => 10,// 表示する記事数
            'order' => 'DESC',
            'post_status' => 'publish',
            'paged' => $paged,
          );
          $news_query = new WP_Query( $args );
          if ( $news_query->have_posts() ): 
      ?>
        <ul class="archive-list">
        <?php
            while ( $news_query->have_posts() ): $news_query->the_post(); 
            $link = get_permalink($post->ID);
            $date = get_the_time('Y-m-d', $post->ID);
            $datetime = get_the_time('c', $post->ID);
          ?>
          <li class="archive-item">
            <a href="<?php echo $link; ?>">
              <time class="archive-date" datetime="<?php echo $datetime; ?>"><?php echo $date; ?></time>
              <p class="archive-title">
              <?php
              if(mb_strlen($post->post_title, 'UTF-8')>45){
                $title= mb_substr($post->post_title, 0, 45, 'UTF-8');
                echo $title.'…';
              }else{
                echo $post->post_title;
              }
              ?>
              </p>
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
        <!-- pagenation -->
        <div class="pagenation">
          <?php
          // pagination
          global $wp_query;
          $big = 999999999; // need an unlikely integer
          echo wp_kses_post(
            paginate_links(
              array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '',
                'current' => max(1, get_query_var('paged')),
                'total' => $news_query->max_num_pages,
                'end_size' => 0,
                'mid_size' => 2,
                'prev_next' => false,
              )
            )
          );
          ?>
        </div><!-- /.pagenation -->
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/closing'); ?>

  <?php get_template_part('template-parts/contact'); ?>

<?php get_footer();