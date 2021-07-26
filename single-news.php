<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumbs'); ?>
  
  <!-- news-single -->
  <?php
    if(have_posts()):
      while(have_posts()): the_post();
      $title = get_the_title(); //記事タイトルを取得する
      $content = get_the_content(); //記事の本文を取得する
      $category = get_the_category($post->ID)[0]->name; //カテゴリーの中の一番目のものを取得する
      $date = get_the_time('Y-m-d', $post->ID);
      $datetime = get_the_time('c', $post->ID);
      $link = get_permalink();
      $thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().$NO_IMAGE_URL;//アイキャッチ画像を表示（設定されていない場合はデフォルト画像を表示）
      $thumbID = get_post_thumbnail_id( $postID ); //アイキャッチのID
      $alt = get_post_meta($thumbID,'_wp_attachment_image_alt',true); //アイキャッチIDからaltを取得
      $categories = get_the_category(); //カテゴリ
      $categoryList = '';
      foreach( $categories as $val ){
      $categoryList = ($categoryList) ? $categoryList.','.$val->slug : $categoryList.$val->slug;
    };
  ?>
  <article class="news-single">
    <div class="inner">
      <div class="news-single__head">
        <h2 class="news-title"><?php echo $title; ?></h2>
        <time class="news-date" datetime="<?php echo $datetime; ?>"><?php echo $date; ?></time>
      </div>
      <div class="news-single__cont">
        <?php echo $content; ?>
      </div>
    </div>
  </article>
  <?php
    endwhile;
    else:
    // 記事がない場合
    echo 'すみません。お探しの記事は存在しません。';
    endif;
  ?>
  <!-- /.news-single -->

  <?php get_template_part('template-parts/closing'); ?>

  <?php get_template_part('template-parts/contact'); ?>

<?php get_footer();