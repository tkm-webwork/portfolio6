<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール">
  <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header class="header">
    <div class="header-inner">
      <!-- left -->
      <div class="header-left">
        <h1 class="header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="engress">
        </h1>
        <nav class="header-nav">
          <ul class="nav-list">
            <li class="nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo esc_url('/news/'); ?>">お知らせ</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo esc_url('/blog/'); ?>">ブログ</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo esc_url('/plan/'); ?>">コース・料金</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- right -->
      <div class="header-right">
        <div class="header-info">
          <span>平日08:00〜20:00</span>
          <strong>0123-456-7890</strong>
        </div>
        <div class="header-button document-request">
          <a href="<?php echo esc_url('/contact/'); ?>" class="-orange">資料請求</a>
        </div>
        <div class="header-button contact-us">
          <a href="<?php echo esc_url('/contact/'); ?>">お問い合わせ</a>
        </div>
      </div>
    </div>
  </header>
  <!-- /.header -->

  <!-- drawer menu -->
  <!-- drawer icon -->
  <button class="drawer-icon">
    <span class="drawer-bars">
      <span class="drawer-bar1"></span>
      <span class="drawer-bar2"></span>
      <span class="drawer-bar3"></span>
    </span>
  </button>

  <!-- drawer item -->
  <div class="drawer-content">
    <div class="drawer-items">
      <div class="drawer-item"><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></div>
      <div class="drawer-item"><a href="<?php echo esc_url('/news/'); ?>">お知らせ</a></div>
      <div class="drawer-item"><a href="<?php echo esc_url('/blog/'); ?>">ブログ</a></div>
      <div class="drawer-item"><a href="<?php echo esc_url('/plan/'); ?>">コース・料金</a></div>
      <div class="drawer-button document-request">
        <a href="<?php echo esc_url('/contact/'); ?>" class="-orange">資料請求</a>
      </div>
      <div class="drawer-button drawer-contact">
        <a href="<?php echo esc_url('/contact/'); ?>">お問い合わせ</a>
      </div>
    </div>
  </div>

  <!-- drawer bg -->
  <div class="drawer-bg"></div>
  <!-- /.drawer menu -->