<!-- footer -->
<footer class="footer">
    <div class="footer-head">
      <div class="inner footer-inner">
        <nav class="footer-nav">
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
        <div class="footer-info">
          <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="engress">
          </div>
          <div class="footer-text">
            <strong>0123-456-7890</strong>
            <span>平日08:00~20:00</span>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="inner">
        <small class="copyright">&copy; 2020 Engress.</small>
      </div>
    </div>
  </footer>
  <!-- /.footer -->

  <?php wp_footer(); ?>
</body>

</html>