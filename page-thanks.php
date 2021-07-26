<?php get_header(); ?>

  <!-- breadcrumb -->
<?php if (function_exists('bcn_display')) : ?>
  <div class="breadcrumbs -thanks">
    <div class="inner">
      <?php bcn_display(); ?>
    </div>
  </div>
<?php endif; ?>
<!-- /.breadcrumb -->

  <!-- thanks -->
  <div class="thanks">
    <div class="inner"> 
      <p class="thanks-text">お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします</p>
      <div class="thanks-back">
        <a href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a>
      </div>
    </div>
  </div>
  <!-- /.thanks -->

<?php get_footer();