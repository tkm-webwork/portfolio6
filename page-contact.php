<?php get_header(); ?>

  <!-- page head -->
  <div class="page-head -contact">
    <div class="page-title">お問い合わせ・資料請求</div>
  </div>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- contact -->
  <div class="page-contact">
    <div class="contact-inner">
      <p class="contact-text">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
      <div class="contact-wrap">
        <?php
          while ( have_posts() ) {
            the_post();
            the_content();
          }
        ?>
      </div>
    </div>
  </div>
  <!-- /.contact -->

<?php get_footer();