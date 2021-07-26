<?php get_header(); ?>

  <!-- page head -->
  <div class="page-head -plan">
    <div class="page-title">コース・料金</div>
  </div>

  <?php get_template_part('template-parts/breadcrumbs'); ?>

  <!-- plan -->
  <div class="plan">
    <div class="inner">
      <div class="plan-system">
        <h2 class="page-title">料金体系</h2>
        <div class="system-wrap">
          <div class="plan-price">
            <div class="plan-box">入会金 39,800円</div>
            <div class="plan-plus">
              <div class="plan-bar1"></div>
              <div class="plan-bar2"></div>
            </div>
            <div class="plan-box">月額費用</div>
          </div>
          <p class="plan-text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
        </div>
      </div>
      <div class="plan-table">
        <h2 class="page-title">料金表</h2>
        <div class="table-wrap js-scrollable">
          <ul class="table-list">
            <li class="table-item">
              <div class="table-head">基礎プラン</div>
              <div class="table-body">
                <?php if ( get_field( 'basic' ) ) : ?>
                <div class="table-price"><?php the_field( 'basic' ); ?>~</div>
                <?php endif; ?>
                <p class="table-attention">*月額（税抜価格）</p>
                <ul class="plan-contents">
                  <li class="plan-item">カリキュラム作成</li>
                  <li class="plan-item">TOEFL学習サポート</li>
                  <li class="plan-item">週一回のビデオMTG</li>
                </ul>
              </div>
            </li>
            <li class="table-item">
              <div class="table-head">演習プラン</div>
              <div class="table-body">
                <?php if ( get_field( 'exercise' ) ) : ?>
                <div class="table-price"><?php the_field( 'exercise' ); ?>~</div>
                <?php endif; ?>
                <p class="table-attention">*月額（税抜価格）</p>
                <ul class="plan-contents">
                  <li class="plan-item">カリキュラム作成</li>
                  <li class="plan-item">TOEFL学習サポート</li>
                  <li class="plan-item">週一回のビデオMTG</li>
                  <li class="plan-item">月二回の模試（解説 付き）</li>
                </ul>
              </div>
            </li>
            <li class="table-item">
              <div class="table-head -orange">おすすめ<br>志望校対策プラン</div>
              <div class="table-body">
                <?php if ( get_field( 'recommended' ) ) : ?>
                <div class="table-price -orange"><?php the_field( 'recommended' ); ?>~</div>
                <?php endif; ?>
                <p class="table-attention">*月額（税抜価格）</p>
                <ul class="plan-contents">
                  <li class="plan-item">カリキュラム作成</li>
                  <li class="plan-item">TOEFL学習サポート</li>
                  <li class="plan-item">週一回のビデオMTG</li>
                  <li class="plan-item">月二回の模試（解説 付き）</li>
                  <li class="plan-item">週一の英語面接対策</li>
                </ul>
              </div>
            </li>
            <li class="table-item">
              <div class="table-head">フレックスプラン</div>
              <div class="table-body">
                <?php if ( get_field( 'flex' ) ) : ?>
                <div class="table-price"><?php the_field( 'flex' ); ?>~</div>
                <?php endif; ?>
                <p class="table-attention">*月額（税抜価格）</p>
                <div class="plan-info">
                  <p>＊別途ご相談ください</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /.plan -->

  <?php get_template_part('template-parts/closing'); ?>

  <?php get_template_part('template-parts/contact'); ?>

<?php get_footer();