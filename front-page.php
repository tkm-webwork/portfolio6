<?php get_header(); ?>

  <!-- mv -->
  <div class="mv">
    <div class="mv-cont">
      <div class="mv-title">TOEFL対策はEngress</div>
      <p class="mv-lead">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
      <div class="mv-button">
        <a href="<?php echo esc_url('/contact/'); ?>">資料請求</a>
      </div>
      <div class="mv-text">
        <a href="<?php echo esc_url('/contact/'); ?>">お問い合わせ</a>
      </div>
    </div>
  </div>
  <!-- /.mv -->

  <!-- main -->
  <main class="main">
    <!-- about -->
    <section class="about">
      <div class="inner">
        <h2 class="section-title">TOEFL学習でこんな悩みありませんか？</h2>
        <div class="about-trouble">
          <p class="trouble-text">勉強の習慣が<br class="hidden-sp">身についていない</p>
          <p class="trouble-text">勉強しているはず<br class="hidden-sp">なのに点数が伸びない</p>
          <p class="trouble-text">正しい勉強方法が<br class="hidden-sp">わからない</p>
        </div>
        <div class="about-cont">
          <div class="about-wrap">
            <div class="about-title">Engressは<br><span>TOEFLに特化したスクール</span>です</div>
            <p class="about-desc">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="hidden-sp">TOEFLの苦手分野を克服します。</p>
          </div>
        </div>
      </div>
    </section>
    <!-- /.about -->

    <!-- feature -->
    <section class="feature">
      <div class="inner">
        <h2 class="section-title">TOEFL対策に特化したEngress3つの強み</h2>
        <div class="feature-cont">
          <ul class="feature-list">
            <li class="feature-item">
              <div class="feature-text">
                <div class="feature-label">特長 １</div>
                <h3 class="feature-title">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
                <p class="feature-desc">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
              </div>
              <div class="feature-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature01.png" alt="feature1">
              </div>
            </li>
            <li class="feature-item">
              <div class="feature-text">
                <div class="feature-label">特長 ２</div>
                <h3 class="feature-title">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
                <p class="feature-desc">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
              </div>
              <div class="feature-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature02.png" alt="feature1">
              </div>
            </li>
            <li class="feature-item">
              <div class="feature-text">
                <div class="feature-label">特長 ３</div>
                <h3 class="feature-title">平均3ヶ月でTOEFL iBT20点アップ</h3>
                <p class="feature-desc">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
              </div>
              <div class="feature-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature03.png" alt="feature1">
              </div>
            </li>
          </ul>
        </div>
        <div class="feature-price">
          <h3 class="price-title">Engressの料金プランはこちら</h3>
          <div class="price-button">
            <a href="<?php echo esc_url('/plan/'); ?>">料金を見てみる</a>
          </div>
        </div> 
      </div>
    </section>
    <!-- /.feature -->

    <!-- success -->
    <section class="success">
      <div class="inner">
        <h2 class="section-title">TOEFL成功事例</h2>
        <div class="success-cont">
          <ul class="success-list">
            <li class="success-item">
            <?php if ( get_field( 'result',35 ) ) : ?>
              <p class="success-text"><?php the_field( 'result',35 ); ?></p>
              <?php endif; ?>
              <div class="success-model">
                <?php if ( get_field( 'image',35 ) ) : ?>
                <img src="<?php the_field( 'image',35 ); ?>" alt="model1">
                <?php endif; ?>
              </div>
              <div class="success-body">
                <div class="success-person">
                <?php if ( get_field( 'profession',35 ) ) : ?>
                  <div class="success-profession"><?php the_field( 'profession',35 ); ?></div>
                  <?php endif; ?>
                  <?php if ( get_field( 'name',35 ) ) : ?>
                  <div class="success-name"><?php the_field( 'name',35 ); ?></div>
                  <?php endif; ?>
                </div>
                <?php if ( get_field( 'score',35 ) ) : ?>
                <div class="success-result"><?php the_field( 'score',35 ); ?></div>
                <?php endif; ?>
              </div>
            </li>
            <li class="success-item">
            <?php if ( get_field( 'result',42 ) ) : ?>
              <p class="success-text"><?php the_field( 'result',42 ); ?></p>
              <?php endif; ?>
              <div class="success-model">
                <?php if ( get_field( 'image',42 ) ) : ?>
                <img src="<?php the_field( 'image',42 ); ?>" alt="model2">
                <?php endif; ?>
              </div>
              <div class="success-body">
                <div class="success-person">
                <?php if ( get_field( 'profession',42 ) ) : ?>
                  <div class="success-profession"><?php the_field( 'profession',42 ); ?></div>
                  <?php endif; ?>
                  <?php if ( get_field( 'name',42 ) ) : ?>
                  <div class="success-name"><?php the_field( 'name',42 ); ?></div>
                  <?php endif; ?>
                </div>
                <?php if ( get_field( 'score',42 ) ) : ?>
                <div class="success-result"><?php the_field( 'score',42 ); ?></div>
                <?php endif; ?>
              </div>
            </li>
            <li class="success-item">
            <?php if ( get_field( 'result',44 ) ) : ?>
              <p class="success-text"><?php the_field( 'result',44 ); ?></p>
              <?php endif; ?>
              <div class="success-model">
                <?php if ( get_field( 'image',44 ) ) : ?>
                <img src="<?php the_field( 'image',44 ); ?>" alt="model3">
                <?php endif; ?>
              </div>
              <div class="success-body">
                <div class="success-person">
                <?php if ( get_field( 'profession',44 ) ) : ?>
                  <div class="success-profession"><?php the_field( 'profession',44 ); ?></div>
                  <?php endif; ?>
                  <?php if ( get_field( 'name',44 ) ) : ?>
                  <div class="success-name"><?php the_field( 'name',44 ); ?></div>
                  <?php endif; ?>
                </div>
                <?php if ( get_field( 'score',44 ) ) : ?>
                <div class="success-result"><?php the_field( 'score',44 ); ?></div>
                <?php endif; ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- /.success -->

    <!-- flow -->
    <section class="flow">
      <div class="inner">
        <h2 class="section-title">ご利用の流れ</h2>
        <div class="flow-cont">
          <ul class="flow-list">
            <li class="flow-item">
              <div class="flow-head">
                <div class="flow-label">01</div>
                <div class="flow-title">お問い合わせ</div>
              </div>
              <div class="flow-body">
                <p class="flow-text">まずはフォームまたはお電話からお申し込みください。</p>
              </div>
            </li>
            <li class="flow-item">
              <div class="flow-head">
                <div class="flow-label">02</div>
                <div class="flow-title">ヒアリング</div>
              </div>
              <div class="flow-body">
                <p class="flow-text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
              </div>
            </li>
            <li class="flow-item">
              <div class="flow-head">
                <div class="flow-label">03</div>
                <div class="flow-title">学習プランのご提供</div>
              </div>
              <div class="flow-body">
                <p class="flow-text">目標達成のために最適な学習プランをご提案致します。</p>
              </div>
            </li>
            <li class="flow-item">
              <div class="flow-head">
                <div class="flow-label">04</div>
                <div class="flow-title">ご入会</div>
              </div>
              <div class="flow-body">
                <p class="flow-text">お申込み完了後、レッスンがスタートします。</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- /.flow -->

    <!-- faq -->
    <section class="faq">
      <div class="inner">
        <h2 class="section-title">よくある質問</h2>
        <div class="faq-cont">
          <ul class="faq-items">
            <li class="faq-item">
              <div class="faq-box">
                <div class="faq-question">
                  Engressはサラリーマンでも学習を続けられるでしょうか？
                  <div class="faq-icon is-open">
                    <div class="faq-bar1"></div>
                    <div class="faq-bar2"></div>
                  </div>
                </div>
                <div class="faq-answer" style="display: block;">
                  <div class="faq-text">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                  </div>
                </div>
              </div>
            </li>
            <li class="faq-item">
              <div class="faq-box">
                <div class="faq-question">
                  教材はオリジナルのものを使用しているのでしょうか？
                  <div class="faq-icon">
                    <div class="faq-bar1"></div>
                    <div class="faq-bar2"></div>
                  </div>
                </div>
                <div class="faq-answer">
                  <div class="faq-text">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                  </div>
                </div>
              </div>
            </li>
            <li class="faq-item">
              <div class="faq-box">
                <div class="faq-question">
                  講師に日本人はいますか？
                  <div class="faq-icon">
                    <div class="faq-bar1"></div>
                    <div class="faq-bar2"></div>
                  </div>
                </div>
                <div class="faq-answer">
                  <div class="faq-text">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                  </div>
                </div>
              </div>
            </li>
            <li class="faq-item">
              <div class="faq-box">
                <div class="faq-question">
                  TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？
                  <div class="faq-icon">
                    <div class="faq-bar1"></div>
                    <div class="faq-bar2"></div>
                  </div>
                </div>
                <div class="faq-answer">
                  <div class="faq-text">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- /.faq -->

    <!-- blog news -->
    <section class="blog-news">
      <div class="inner">
        <div class="blog-news__wrap">
          <div class="blog">
            <h2 class="section-title blog-news__title">ブログ</h2>
            <div class="blog-cont">
            <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC',
                'post_status' => 'publish',
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()):
            ?>
              <ul class="blog-list">
              <?php
                while ($the_query->have_posts()): $the_query->the_post(); 
                  $link = get_permalink($post->ID);
                  $date = get_the_time('Y-m-d', $post->ID);
                  $datetime = get_the_time('c', $post->ID);
                  $category = get_the_category($post->ID)[0]->name;
                  $thumbnail = get_the_post_thumbnail($post->ID, 'large');
                  $noimage = '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimage.png" alt="">';
                ?>
                <li class="blog-item">
                  <a href="<?php echo $link; ?>">
                    <div class="blog-text">
                      <div class="blog-title">
                      <?php
                      if(mb_strlen($post->post_title, 'UTF-8')>40){
                        $title= mb_substr($post->post_title, 0, 40, 'UTF-8');
                        echo $title.'…';
                      }else{
                        echo $post->post_title;
                      }
                      ?>
                      </div>
                      <time class="blog-date" datetime="<?php echo $datetime; ?>"><?php echo $date; ?></time>
                    </div>
                    <div class="blog-image__wrap">
                      <?php if ($category) {
                      echo '<div class="blog-category">' . $category . '</div>';
                      } ?>
                      <div class="blog-image">
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
            </div>
          </div>
          <div class="news">
            <h2 class="section-title blog-news__title">お知らせ</h2>
            <div class="news-cont">
            <?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3,
                'order' => 'DESC',
                'post_status' => 'publish',
                'orderby'=>'post_date',
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()):
            ?>
              <ul class="news-list">
                <?php
                while ($the_query->have_posts()): $the_query->the_post(); 
                  $link = get_permalink($post->ID);
                  $date = get_the_time('Y-m-d', $post->ID);
                  $datetime = get_the_time('c', $post->ID);
                ?>
                <li class="news-item">
                  <a href="<?php echo $link; ?>">
                    <time class="news-date" datetime="<?php echo $datetime; ?>"><?php echo $date; ?></time>
                    <div class="news-title">
                    <?php
                    if(mb_strlen($post->post_title, 'UTF-8')>20){
                      $title= mb_substr($post->post_title, 0, 20, 'UTF-8');
                      echo $title.'…';
                    }else{
                      echo $post->post_title;
                    }
                    ?>
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
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.blog-news -->
  </main>
  <!-- /.main -->

  <?php get_template_part('template-parts/closing'); ?>

  <?php get_template_part('template-parts/contact'); ?>

<?php get_footer();