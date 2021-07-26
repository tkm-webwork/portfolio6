<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- single -->
  <div class="single">
    <div class="inner single-inner">
      <div class="single-left">
        <?php
        if(have_posts()):
          while(have_posts()): the_post();
          $title = get_the_title(); //記事タイトルを取得する
          $content = get_the_content(); //記事の本文を取得する
          $category = get_the_category($post->ID)[0]->name; //カテゴリーの中の一番目のものを取得する
          $date = get_the_time('Y-m-d', $post->ID);
          $datetime = get_the_time('c', $post->ID);
          $link = get_permalink();
          $thumbnail = get_the_post_thumbnail($post->ID, 'large');
          $alt = get_post_meta($thumbID,'_wp_attachment_image_alt',true); //アイキャッチIDからaltを取得
          $categories = get_the_category(); //カテゴリ
          $categoryList = ''; //ここらへんよくわからない
          foreach( $categories as $val ){
          $categoryList = ($categoryList) ? $categoryList.','.$val->slug : $categoryList.$val->slug;
          $noimage = '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimage.png" alt="no image">';
        };
        ?>
        <article class="single-article">
          <div class="single-category"><?php my_the_post_category( true ); ?></div>
          <h2 class="single-title"><?php echo $title; ?></h2>
          <div class="single-info">
            <div class="single-sns">
              <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
            </div>
            <time class="single-time" datetime="<?php echo $datetime; ?>"><?php echo $date; ?></time>
          </div>
          <?php
          if ( has_post_thumbnail() ) {
            echo '<div class="single-image">' . $thumbnail . '</div>';
          }else {
            echo '<div class="single-image">' . $noimage . '</div>';
          }
          ?>
          <div class="single-cont">
          <?php echo $content; ?>
          </div>
        </article>
        <?php
          endwhile;
        else:
          // 記事がない場合
          echo 'すみません。お探しの記事は存在しません。';
        endif;
        ?>
        <div class="single-rec">
          <h3 class="single-rec__title">おすすめの記事</h3>
          <?php
            $pickup_posts = get_posts( array(
            'post_type' => 'post', // 投稿タイプ
            'posts_per_page' => '3', // 3件取得
            'tag' => 'pickup', // pickupタグがついたものを
            'orderby' => 'DESC', // 新しい順に
            ) );
          ?>
          <ul class="single-rec__list">
          <?php foreach ( $pickup_posts as $post ) : setup_postdata( $post ); ?>
          <?php
          $link = get_permalink();
          $category = get_the_category($post->ID)[0]->name;
          $date = get_the_time('Y-n-j', $post->ID);
          $datetime = get_the_time('c', $post->ID);
          $thumbnail = get_the_post_thumbnail($post->ID, 'large');
          $noimage = '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimage.png" alt="no image">';
          ?>
            <li class="single-rec__item">
              <a href="<?php echo $link; ?>">
                <div class="rec__text">
                  <time class="rec-date" datetime="<?php echo $datetime; ?>"><?php echo $date; ?></time>
                  <div class="rec__title">
                  <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>40){
                    $title= mb_substr($post->post_title, 0, 40, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo $post->post_title;
                  }
                  ?>
                  </div>
                </div>
                <div class="rec__wrap">
                  <?php if ($category) {
                    echo '<div class="rec-category">' . $category . '</div>';
                  } ?>
                  <div class="rec-image">
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
            <?php endforeach; wp_reset_postdata(); ?>
          </ul>
        </div>
      </div>
      <div class="single-right">
        <aside class="single-related">
          <div class="single-head__title">関連記事</div>
          <?php if( has_category() ) {
          $post_cats = get_the_category();
          $cat_ids = array();
          //所属カテゴリーのIDリストを作っておく
          foreach($post_cats as $cat) {
          $cat_ids[] = $cat->term_id;
          }
          }
          $myposts = get_posts( array(
          'post_type' => 'post', // 投稿タイプ
          'posts_per_page' => '3', // ８件を取得
          'post__not_in' => array( $post->ID ),// 表示中の投稿を除外
          'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
          'orderby' => 'rand' // ランダムに
          ) );
          if( $myposts ): ?>
          <div class="related-item__wrap">
          <?php foreach($myposts as $post): setup_postdata($post);?>
          <?php
          $title = get_the_title();
          $link = get_permalink();
          $thumbnail = get_the_post_thumbnail($post->ID, 'large');
          $noimage = '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimage.png" alt="no image">';
          ?>
            <div class="related-item">
              <a href="<?php echo $link; ?>">
                <div class="related-item__text">
                <?php
                if(mb_strlen($post->post_title, 'UTF-8')>40){
                  $title= mb_substr($post->post_title, 0, 40, 'UTF-8');
                  echo $title.'…';
                }else{
                  echo $post->post_title;
                }
                ?>
                </div>
                <div class="related-item__thumbnail">
                  <div class="thumbnail-image">
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
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <?php else: //投稿がない場合?>
                <p>現在記事を準備中です。</p>
          <?php endif; ?>
        </aside>
        <aside class="single-cat">
          <div class="single-head__title">カテゴリー</div>
          <ul class="cat-list">
          <?php
          $args = array(
              'title_li' => '' //カテゴリーのタイトルを表示しない
          );
          ?>
          <?php wp_list_categories( $args ); ?>
          </ul>
        </aside>
      </div>
    </div>
  </div>
  <!-- /.single -->

  <?php get_template_part('template-parts/closing'); ?>

  <?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>