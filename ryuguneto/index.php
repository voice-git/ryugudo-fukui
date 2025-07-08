<?php 
    $home = esc_html(home_url('/'));
    $contact = esc_html(home_url('/contact/'));
    $privacypolicy = esc_html(home_url('/privacypolicy/'));
    $qa = esc_html(home_url('/qa/'));
    $recruit = esc_html(home_url('/recruit/'));
    $china = esc_html(home_url('/genre-china/'));
    $kutani = esc_html(home_url('/genre-kutani/'));
    $company = esc_html(home_url('/company/'));
    $reservation01 = esc_html(home_url('/reservation01/'));
    $reservation02 = esc_html(home_url('/reservation02/'));
    $kaitori = esc_html(home_url('/kaitori/'));
    $newcustomer = esc_html(home_url('/newcustomer/'));
    $antique = esc_html(home_url('/antique/'));
    $sigyo = esc_html(home_url('/sigyo/'));
    $retro = esc_html(home_url('/retro-goods/'));
    $kakejiku = esc_html(home_url('/kakejiku/'));
    $auction = esc_html(home_url('/auction/'));
    $chadougu = esc_html(home_url('/chadougu/'));
    $youshoku = esc_html(home_url('/youshoku/'));
    $gold = esc_html(home_url('/genre-gold/'));
    $kotto = esc_html(home_url('/genre-kotto/'));
    $column = esc_html(home_url('/column/'));
    $news = esc_html(home_url('/news/'));
    $buylist = esc_html(home_url('/buylist/'));
?>
<?php get_header(); ?>
    <main class="main">
      <div class="mv">
        <div class="mv_inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top-fv-pc.webp" alt="" class="is-pc" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/top-fv-sp.webp" alt="" class="is-sp" />
        </div>
      </div>
      <!-------------- 背景 ---------------->
      <div class="t_sec_back">
        <!-------------- sec1 ---------------->
        <section class="t_sec sec1">
          <div class="container">
            <div class="t_sec_head">伝統文化継承会社だからこそ</div>
            <h1 class="t_sec_ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/t-sec1-ttl.png" alt="" />
            </h1>
            <p class="t_sec_txt">
              九谷焼、輪島塗、高岡銅器…地元に根ざした会社なので、<br
                class="is-pc"
              />
              歴史的な視点を持って、本来の価値を見極めることができます。
            </p>
            <div class="t_sec_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-sec1.webp" alt="" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-sec1-sp.webp" alt="" class="is-sp" />
            </div>
          </div>
        </section>
        <!-------------- sec2 ---------------->
        <section class="t_sec sec2">
          <div class="container">
            <div class="t_sec_head">高価買取のために</div>
            <h1 class="t_sec_ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/t-sec2-ttl.png" alt="" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/t-sec2-ttl-sp.webp" alt="" class="is-sp" />
            </h1>
            <p class="t_sec_txt">
              自社でオークションを運営しており、日本全国や世界中の愛好者が集まります。<br class="is-pc" />
              独自のネットワークから得られる情報を駆使し、高額査定を実現。<br
                class="is-pc"
              />
              国内外から約100社の骨董品関係者が参加し、毎月第4日曜日に開催しています。
            </p>
            <div class="t_sec_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-sec2-country.webp" alt="" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-sec2-country-sp.webp" alt="" class="is-sp" />
            </div>
          </div>
          <div class="sec_btn t_sec_btn">
            <a href="<?php echo $auction; ?>">竜宮オークション</a>
          </div>
        </section>
        <!-------------- sec3 ---------------->
        <section class="t_sec sec3">
          <div class="sec3_back">
            <div class="t_sec_head">伝統文化継承会社だからこそ</div>
            <h1 class="t_sec_ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/t-sec3-ttl.png" alt="" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/t-sec3-ttl-sp.webp" alt="" class="is-sp" />
            </h1>
            <p class="t_sec_txt">
              年間30万点以上の取扱実績と、累計200万点を超える売買データ。<br
                class="is-pc"
              />
              多くの実績から得た経験や知識を活用し、<br class="is-pc" />
              高額買取できるものを決して見逃しません。
            </p>
          </div>
          <div class="container"></div>
        </section>
      </div>
      <!-------------- お知らせ ---------------->
      <section class="t_news">
        <div class="container-in">
          <div class="sec_ttl_box">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="" />
            </div>
            <h2 class="sec_ttl">お知らせ</h2>
            <p class="sec_sub_ttl">NEWS</p>
          </div>
          <?php
            $args = array(
              'post_type' => 'post', 
              'posts_per_page' => 3
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <ul class="t_news_wrapper slider-2" id="js-slider-2">
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li class="t_news_item">
              <a href="<?php the_permalink(); ?>">
                <div class="t_news_img">
                  <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('thumbnail'); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/test-purchase1.webp" alt="" />
                  <?php endif; ?>
                </div>
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="published"><?php echo get_the_date('Y.m.d'); ?></time>
                <h3 class="t_news_ttl post_ttl">
                  <?php the_title(); ?>
                </h3>
              </a>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          </ul>
          <?php endif; ?>
          <div class="dots-2"></div>
          <div class="sec_btn t_news_btn sec_more_btn">
            <a href=<?php echo $news; ?>">MORE</a>
          </div>
        </div>
      </section>
      <!-------------- 新着買取実績 ---------------->
      <section class="t_purch">
        <div class="container-in">
          <div class="sec_ttl_box">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="" />
            </div>
            <h2 class="sec_ttl">新着買取実績</h2>
            <p class="sec_sub_ttl">NEW PURCHASE</p>
          </div>
          <?php
            $args = array(
              'post_type' => 'buylist', 
              'posts_per_page' => 8 
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <div class="t_purch_wrapper">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <a href="<?php echo $buylist ?>#post-<?php the_ID(); ?>" class="t_purch_item">
              <div class="t_purch_img">
                <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('thumbnail'); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/test-purchase1.webp" alt="" />
                  <?php endif; ?>
              </div>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="published"><?php echo get_the_date('Y.m.d'); ?></time>
              <h3 class="t_purch_ttl post_ttl">
                <?php the_title(); ?>
              </h3>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <?php endif; ?>
          <div class="sec_btn t_purch_btn sec_more_btn">
            <a href="<?php echo $buylist; ?>">MORE</a>
          </div>
          <?php echo get_template_part('./template-part/info'); ?>
        </div>
      </section>
      <?php echo get_template_part('./template-part/item'); ?>
      <!-------------- 竜宮堂の買取 ---------------->
      <section class="t_feature">
        <div class="container-in">
          <div class="sec_ttl_box">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="" />
            </div>
            <h2 class="sec_ttl">竜宮堂の買い取り</h2>
            <p class="sec_sub_ttl">RYUGUDO PURCHASE</p>
          </div>
          <div class="t_feature_txt">
            文化を買い取るための6つの特徴をご紹介！
          </div>
          <div class="t_feature_wrapper">
            <!-- メソッド1 -->
            <div class="t_feature_item t_feature_item1">
              <div class="t_feature_wrap">
                <h3 class="t_feature_item_ttl">
                  竜宮堂だからできる<br class="is-sp" />2つの売却方法
                </h3>
                <p class="t_feature_item_txt">
                  より高く売却できるように<br class="is-sp" />専門の鑑定士が<br
                    class="is-sp"
                  />適切な売却方法をご提示します。<br />
                  お客様所有のお品を無料鑑定！
                </p>
                <!-- 方法１ -->
                <div class="t_feature_item_method">
                  <div class="method_num">方法<span>1</span></div>
                  <h4 class="method_ttl">出張•店頭買取</h4>
                  <p class="t_feature_item_txt method_txt">
                    お客様のご都合に合わせて<br
                      class="is-sp"
                    />選べる２つの買取方法！
                  </p>
                  <div class="t_feature_item1_method_wrap">
                    <!-- 出張買取 -->
                    <div class="t_feature_item1_method_left">
                      <h5 class="t_feature_item1_method_sub_ttl">出張買取</h5>
                      <p
                        class="t_feature_item1_method_sub_txt t_feature_item_txt"
                      >
                        経験豊富な査定士がお伺い！<br />
                        北陸地方どこでも即対応！<br />
                        出張料無料！即現金買取！
                      </p>
                      <div class="t_feature_item1_method_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/truck-icon.webp" alt="" />
                      </div>
                      <div class="sec_btn t_feature_item1_btn sec_more_btn">
                        <a href="<?php echo $kaitori ?>#sec01">MORE</a>
                      </div>
                    </div>
                    <!-- sp用チェック -->
                    <div class="is-sp">
                      <div class="b_check b_check_single">
                        <ul class="b_check_list">
                          <li>たくさんものがある</li>
                          <li>高価なものがある</li>
                          <li>選別できない</li>
                        </ul>
                      </div>
                    </div>
                    <!-- 店頭買取 -->
                    <div class="t_feature_item1_method_right">
                      <h5 class="t_feature_item1_method_sub_ttl">店頭買取</h5>
                      <p
                        class="t_feature_item1_method_sub_txt t_feature_item_txt"
                      >
                        広い店舗＆広い駐車場完備！<br />
                        お客様のペースで売却ができる！<br />
                        即現金買取！
                      </p>
                      <div class="t_feature_item1_method_info">
                        <div class="t_feature_item1_method_info_ttl">
                          受付時間
                        </div>
                        <div class="t_feature_item1_method_info_time">
                          9:00-17:00(日･祝 16:00迄)
                        </div>
                      </div>
                      <div class="sec_btn t_feature_item1_btn sec_more_btn">
                        <a href="<?php echo $kaitori; ?>#sec02">MORE</a>
                      </div>
                    </div>
                    <!-- sp用チェック -->
                    <div class="is-sp t_feature_item1_method_right-sp-check">
                      <div class="b_check b_check_single">
                        <ul class="b_check_list">
                          <li>査定結果がすぐ知りたい</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 方法１ここまで -->
                <!-- チェック -->
                <div class="is-pc">
                  <div class="b_check b_check_flex">
                    <div class="b_check_left">
                      <ul class="b_check_list">
                        <li>たくさんものがある</li>
                        <li>高価なものがある</li>
                        <li>選別できない</li>
                      </ul>
                      <p class="b_check_txt">
                        ご自分で持ち運ぶ必要がないので<br />
                        手間や破損リスクがありません。
                      </p>
                    </div>
                    <div class="b_check_right">
                      <ul class="b_check_list">
                        <li>
                          査定結果が<br />
                          すぐ知りたい
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- チェックここまで -->
                <!-- 方法2 -->
                <div class="t_feature_item_method t_feature_item_method2">
                  <div class="method_num">方法<span>2</span></div>
                  <h4 class="method_ttl">出品代行</h4>
                  <p class="t_feature_item_txt method_txt">
                    竜宮オークションや国内•海外大手<br class="is-sp">オークションへの出品をお手伝い！<br />
                    出品手続きや梱包などは<br class="is-sp">すべて竜宮堂にお任せを！
                  </p>
                  <!-- sp用白バック -->
                  <div class="t_feature_method_sp_back">
                    <div class="t_feature_item1_method_wrap">
                      <!-- 出張買取 -->
                      <div class="t_feature_item1_method_left">
                        <h5 class="t_feature_item1_method_sub_ttl">
                          弊社運営 <br />
                          「竜宮オークション」<br />
                          出品
                        </h5>
                        <p
                          class="t_feature_item2_method_sub_txt t_feature_item_txt"
                        >
                          美術品から<br class="is-sp">骨董•古美術アート作品まで
                        </p>
                      </div>
                      <!-- 店頭買取 -->
                      <div class="t_feature_item1_method_right">
                        <h5 class="t_feature_item1_method_sub_ttl">
                          国内•海外<br />
                          大手オークション<br />
                          委託代理出品
                        </h5>
                        <p
                          class="t_feature_item2_method_sub_txt t_feature_item_txt"
                        >
                          世界的アート作品から<br class="is-sp">貴重な古美術品まで
                        </p>
                      </div>
                    </div>
                    <!-- point -->
                    <ul class="t_feature_point_flex">
                      <li class="t_feature_point_item">
                        <div class="t_feature_point_num">Point<br class="is-sp"><span>1</span></div>
                        <p class="t_feature_point_txt">
                          100社以上に一括<br />
                          見積をとるのと同じ！
                        </p>
                      </li>
                      <li class="t_feature_point_item">
                        <div class="t_feature_point_num">Point<br class="is-sp"><span>2</span></div>
                        <p class="t_feature_point_txt">
                          知識･時間がないけど、<br />
                          適切に売却したい方に！
                        </p>
                      </li>
                      <li class="t_feature_point_item">
                        <div class="t_feature_point_num">Point<br class="is-sp"><span>3</span></div>
                        <p class="t_feature_point_txt">
                          ネットやアプリ以上の<br />
                          高額売却に期待！
                        </p>
                      </li>
                    </ul>
                    <div class="sec_btn t_feature_method_btn">
                      <a href="<?php echo $auction; ?>">竜宮オークション</a>
                    </div>
                  </div>
                  <!-- /sp用白バック -->
                </div>
                <!-- 方法2ここまで -->
                <!-- チェック -->
                <div class="b_check b_check_single">
                  <ul class="b_check_list">
                    <li>少しでも高値で売りたい</li>
                    <li>オークションに興味が<br class="is-sp">あるけど、出品作業が面倒</li>
                    <li>諸経費や手数料を抑えたい</li>
                  </ul>
                </div>
                <!-- チェックここまで -->
              </div>
            </div>
            <!-- メソッド2 -->
            <div class="t_feature_half t_feature_item2">
              <h3 class="t_feature_item_ttl">
                経験豊富な査定士に<br />
                よる確かな鑑定眼
              </h3>
              <p class="t_feature_item_txt">
                美術骨董品鑑定歴<span class="big">20</span
                ><span class="small">年以上</span>の<br />
                専門家だからできる高価買取！<br />
                適切な仕分けのプロ！
              </p>
            </div>
            <!-- メソッド3 -->
            <div class="t_feature_half t_feature_item3">
              <h3 class="t_feature_item_ttl">
                地元に根ざした<br />
                親切丁寧な対応！
              </h3>
              <p class="t_feature_item_txt">
                専門知識のあるスタッフがお伺い！<br />
                強引な営業は一切いたしません。<br />
                ご納得いただいてから、お買取りします。<br />
                1点からでも大歓迎です！
              </p>
            </div>
            <!-- メソッド4 -->
            <div class="t_feature_half t_feature_item4">
              <h3 class="t_feature_item_ttl">
                蔵まるごと家まるごと<br />
                査定も丁寧に対応！
              </h3>
              <div class="t_feature_half_cat">大量査定にも即日対応可！</div>
              <p class="t_feature_item_txt">
                お掃除前やお片付けする前の状態でOK！<br />
                数が多すぎて手がつけられない等<br />
                もちろん対応可能！！
              </p>
            </div>
            <!-- メソッド5 -->
            <div class="t_feature_half t_feature_item5">
              <h3 class="t_feature_item_ttl">
                竜宮堂独自に古物市場<br />
                「竜宮オークション」<br class="is-sp">を運営
              </h3>
              <div class="t_feature_half_cat">毎月第４日曜日開催</div>
              <p class="t_feature_item_txt">
                100社以上の古物バイヤー参加！！<br />
                九谷焼から骨董品や<br class="is-sp">美術品の相場や人気の品を熟知！
              </p>
              <div class="sec_btn t_feature_method_btn">
                <a href="<?php echo $auction; ?>">竜宮オークション</a>
              </div>
            </div>
            <!-- メソッド6 -->
            <div class="t_feature_full t_feature_item6">
              <h3 class="t_feature_item_ttl">
                他店で判断が<br class="is-sp">つかないものでも<br />
                当社なら買取できる事例が<br class="is-sp">多数ございます！
              </h3>
              <div class="t_feature_item6_flex">
                <div class="t_feature_item6_cat">汚く埃だらけ</div>
                <div class="t_feature_item6_cat">他店で買取を断られた</div>
                <div class="t_feature_item6_cat">壊れている</div>
              </div>
              <p class="t_feature_item_txt">
                このような状態でも<br class="is-sp">個人主観で捨ててしまわず、<br class="is-sp">一度竜宮堂で査定させてください。
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-------------- スタッフブログ ---------------->
      <section class="t_blog">
        <div class="container-in">
          <div class="t_blog_flex">
            <div class="t_blog_left">
              <div class="sec_ttl_box">
                <div class="sec_ttl_logo">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="" />
                </div>
                <h2 class="sec_ttl">スタッフブログ</h2>
                <p class="sec_sub_ttl">STAFF BLOG</p>
              </div>
              <p class="t_blog_txt">
                買取のコツやヒント、<br class="is-pc" />プロの知識を大公開！
              </p>
              <div class="sec_btn sec_more_btn is-pc">
                <a href="<?php echo $column; ?>">MORE</a>
              </div>
            </div>
            <?php
              $args = array(
                'post_type' => 'column',
                'posts_per_page' => 3
              );
              $the_query = new WP_Query($args); if($the_query->have_posts()):
            ?>
            <div class="t_blog_right">
              <ul class="t_blog_list slider-3" id="js-slider-3">
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('thumbnail'); ?>
                  <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/thumbnail.jpg" alt="">
                  <?php endif; ?>
                    <time class="published" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <h3 class="t_blog_ttl"><?php the_title(); ?></h3>
                  </a>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
              <?php endif; ?>
              <div class="dots-3"></div>
              <div class="sec_btn sec_more_btn is-sp">
                <a href="<?php echo $column; ?>">MORE</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-------------- バナーコンテンツ ---------------->
      <section class="t_banner">
        <div class="container">
          <ul class="t_banner_wrap">
            <li>
              <a href="<?php echo $auction; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-auction.webp" alt="" class="is-pc"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-auction-sp.webp" alt="" class="is-sp"/>
              </a>
            </li>
            <li>
              <a href="<?php echo $sigyo; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-profession.webp" alt="" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-profession-sp.webp" alt="" class="is-sp" />
              </a>
            </li>
            <li>
              <a href="<?php echo $recruit; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-recruit.webp" alt="" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-recruit-sp.webp" alt="" class="is-sp" />
              </a>
            </li>
          </ul>
        </div>
      </section>
      <!-------------- Youtube ---------------->
      <section class="youtube">
        <div class="container">
          <div class="sec_ttl_box">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="" />
            </div>
            <h2 class="sec_ttl">YouTube</h2>
            <p class="sec_sub_ttl">骨董買取お役立ち情報を発信中！</p>
          </div>
          <?php if(have_rows('youtube_row','option')): ?>
          <ul class="youtube_wrapper">
            <?php while(have_rows('youtube_row','option')): the_row(); ?>
            <li>
              <a href="https://m.youtube.com/watch?v=<?php echo get_sub_field('id'); ?>" target="_blank">
                <img src="https://img.youtube.com/vi/<?php echo get_sub_field('id'); ?>/maxresdefault.jpg" alt="" />
              </a>
            </li>
            <?php endwhile; ?>
            <div class="youtube_txt">
              <p>
                「石川さん情報LIVE リフレッシュ」にて<br />
                「竜宮オークション」について放映！
              </p>
            </div>
          </ul>
          <?php endif; ?>
          <div class="sec_btn sec_more_btn">
            <a href="https://www.youtube.com/channel/UCAj9xv4MomHO_o_41Ma_Nug" target="_blank">MORE</a>
          </div>
        </div>
      </section>
      <!-------------- アクセス ---------------->
      <section class="access">
        <!-- インフォ -->
        <div class="container-in">
          <?php echo get_template_part('./template-part/info'); ?>
          <div class="access_wrapper">
            <div class="sec_ttl_box">
              <div class="sec_ttl_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="" />
              </div>
              <h2 class="sec_ttl">アクセス</h2>
              <p class="sec_sub_ttl">ACCESS</p>
            </div>
            <div class="access_code">
              〒920-0052 石川県金沢市薬師堂町イ52　<br class="is-sp">Tel.076-255-0065<br />
              <br class="is-sp">
              金沢駅から車で10分<br />
              渋谷工業様　桜田カジマート様　<br class="is-sp">桜田郵便局様　近く
            </div>
            <div class="access_caution">
              <div class="access_caution_ttl">ご注意事項</div>
              <p class="access_caution_txt">
                ※（薬師町）ではなく（薬師堂町）です。お間違えのないようご来店くださいませ。<br />
                ※店頭での買取受付は9:00-17:00となっております。
                日曜・祝日はお休みです。<br />
                ※査定士が出張買取で不在の場合もあります。事前にお電話いただければ幸いです。
              </p>
            </div>
            <div class="access_map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3204.039473733857!2d136.62731837620754!3d36.57726657231172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff9ccd2686bb719%3A0xd44f4a7302a2f38b!2z56uc5a6u5aCCIOWPpOe-juihkyDpqqjokaMg5Lmd6LC354S8IOi8quWztuWhlyDjgqLjg7Pjg4bjgqPjg7zjgq8g6LK35Y-W!5e0!3m2!1sja!2sjp!4v1734935922533!5m2!1sja!2sjp"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>