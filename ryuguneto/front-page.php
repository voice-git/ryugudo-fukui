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
          <img src="<?php echo get_template_directory_uri(); ?>/img/top-fv-pc.webp" alt="骨董品の買取業者というより、伝統文化継承会社です。" class="is-pc" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/top-fv-sp.webp" alt="骨董品の買取業者というより、伝統文化継承会社です。" class="is-sp" />
        </div>
      </div>
      <!-------------- 背景 ---------------->
      <div class="t_sec_back">
        <!-------------- sec1 ---------------->
        <section class="t_sec sec1">
          <div class="container">
            <div class="t_sec_head"><img src="<?php echo get_template_directory_uri(); ?>/img/dentoubunka-fukidasi.webp" alt=""></div>
            <h1 class="t_sec_ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/t-sec1-ttl.png" alt="歴史的価値を鑑定する。だから高価買取できます。" />
            </h1>
            <p class="t_sec_txt">
              越前焼、九谷焼、輪島塗、高岡銅器…地元に根ざした会社なので、<br
                class="is-pc"
              />
              歴史的な視点を持って、本来の価値を見極めることができます。
            </p>
            <div class="t_sec_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-sec1.webp" alt="ロゴ" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-sec1-sp.webp" alt="ロゴ" class="is-sp" />
            </div>
          </div>
        </section>
        <!-------------- sec2 ---------------->
        <section class="t_sec sec2">
          <div class="container">
            <div class="t_sec_head"><img src="<?php echo get_template_directory_uri(); ?>/img/koukakaitori-fukidasi.webp" alt=""></div>
            <h1 class="t_sec_ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/t-sec2-ttl.png" alt="北陸最大級のオークションを運営して、全国・世界中の愛好者と繋がっています。" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/t-sec2-ttl-sp.webp" alt="北陸最大級のオークションを運営して、全国・世界中の愛好者と繋がっています。" class="is-sp" />
            </h1>
            <p class="t_sec_txt">
              自社でオークションを運営しており、日本全国や世界中の愛好者が集まります。<br class="is-pc" />
              独自のネットワークから得られる情報を駆使し、高額査定を実現。<br
                class="is-pc"
              />
              国内外から約100社の骨董品関係者が参加し、毎月第4日曜日に開催しています。
            </p>
            <div class="t_sec_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-sec2-country.webp" alt="ロゴ" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-sec2-country-sp.webp" alt="ロゴ" class="is-sp" />
            </div>
          </div>
          <div class="sec_btn t_sec_btn">
            <a href="<?php echo $auction; ?>">竜宮オークション</a>
          </div>
        </section>
        <!-------------- sec3 ---------------->
        <section class="t_sec sec3">
          <div class="sec3_back">
            <div class="t_sec_head"><img src="<?php echo get_template_directory_uri(); ?>/img/dentoubunka-fukidasi.webp" alt=""></div>
            <h1 class="t_sec_ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/t-sec3-ttl.png" alt="地元の伝統工芸品を中心に年間10万点以上の買取実績" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/t-sec3-ttl-sp.webp" alt="地元の伝統工芸品を中心に年間10万点以上の買取実績" class="is-sp" />
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
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
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
                      <?php the_post_thumbnail('full'); ?>
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
            <a href="<?php echo $news; ?>">MORE</a>
          </div>
        </div>
      </section>
      <!-------------- 新着買取実績 ---------------->
      <section class="t_purch">
        <div class="container-in">
          <div class="sec_ttl_box">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
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
                      <?php the_post_thumbnail('full'); ?>
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
          <!-- 共通インフォ -->
          <div class="info t_purch_info">
            <div class="info_tel">
              <a href="tel:0120-947-265">
                <img src="<?php echo get_template_directory_uri(); ?>/img/info-tel-pc.webp" alt="電話番号" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/info-tel-sp.webp" alt="電話番号" class="is-sp" />
              </a>
            </div>
            <div class="info_btn_wrapper">
              <a href="<?php echo $reservation01; ?>" class="info_btn shuttyou">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-syuchou.webp" alt="出張予約" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-trip-info.webp" alt="出張予約" class="is-sp" />
              </a>
              <!-- <a href="<?php echo $reservation02; ?>" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-raiten.webp" alt="来店予約" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-raiten.webp" alt="来店予約" class="is-sp" />
              </a> -->
              <a href="<?php echo $contact; ?>" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-contact.webp" alt="お問い合わせ" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-contact-info.webp" alt="お問い合わせ" class="is-sp" />
              </a>
              <a href="https://line.me/ti/p/YD-7m1oJXw" target="_blank" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-line.webp" alt="LINEお問い合わせ" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-line-info.webp" alt="LINEお問い合わせ" class="is-sp" />
              </a>
            </div>
            <div class="info_txt">
              <img src="<?php echo get_template_directory_uri(); ?>/img/info-txt.webp" alt="メールフォーム・LINEからのお問い合わせにはお時間をいただきます。何卒ご了承ください。" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/info-txt-sp.webp" alt="メールフォーム・LINEからのお問い合わせにはお時間をいただきます。何卒ご了承ください。" class="is-sp" />
            </div>
          </div>
        </div>
      </section>
      <!-------------- 買取アイテム ---------------->
      <section class="purch_item">
        <div class="container-in">
          <div class="sec_ttl_box">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">買取アイテム</h2>
            <p class="sec_sub_ttl">PURCHASE ITEMS</p>
          </div>
          <div class="purch_item_wrapper">
            <a href="<?php echo $kutani; ?>" class="purch_item_link purch_item1_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/yoshidaya.webp" alt="九谷焼・輪島塗" />
              </div>
              <h3 class="purch_item_ttl">
                越前焼<br>
                河和田塗<br>
                九谷焼<br>
                輪島塗<br>
                その他漆芸品
              </h3>
              <div class="simple_btn">
                <p>MORE</p>
              </div>
            </a>
            <a href="<?php echo $kotto; ?>" class="purch_item_link purch_item2_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kobijutu.webp" alt="骨董・古美術品" />
              </div>
              <h3 class="purch_item_ttl">
                骨董<br />
                古美術品
              </h3>
              <div class="simple_btn">
                <p>MORE</p>
              </div>
            </a>
            <a href="<?php echo $china; ?>" class="purch_item_link purch_item3_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/china.webp" alt="中国美術品" />
              </div>
              <h3 class="purch_item_ttl">中国美術品</h3>
              <div class="simple_btn">
                <p>MORE</p>
              </div>
            </a>
            <a href="<?php echo $gold; ?>" class="purch_item_link purch_item4_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gold.webp" alt="金・プラチナ・銀製品" />
              </div>
              <h3 class="purch_item_ttl">
                金･プラチナ<br />
                銀製品
              </h3>
              <div class="simple_btn">
                <p>MORE</p>
              </div>
            </a>
            <a href="<?php echo $chadougu; ?>" class="purch_item_link purch_item-col_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sadou.webp" alt="茶道具" />
              </div>
              <h3 class="purch_item_ttl">茶道具類</h3>
              <div class="simple_btn">
                <p>MORE</p>
              </div>
            </a>
            <a href="<?php echo $kakejiku; ?>" class="purch_item_link purch_item-col_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/painting.webp" alt="書画・掛軸・絵画・屏風" />
              </div>
              <h3 class="purch_item_ttl">
                書画<br />
                掛軸<br />
                絵画<br />
                屏風
              </h3>
              <div class="simple_btn">
                <p>MORE</p>
              </div>
            </a>
            <a href="<?php echo $antique; ?>" class="purch_item_link purch_item-col_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tansu.webp" alt="古道具・アンティーク家具" />
              </div>
              <h3 class="purch_item_ttl">
                古道具<br />
                アンティーク家具
              </h3>
              <div class="simple_btn">
                <p>MORE</p>
              </div>
            </a>
            <a href="https://ryugunosake.com/" target="_blank" class="purch_item_link purch_item-col_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Alcohol.webp" alt="洋酒・ウィスキー・世界の酒" />
              </div>
              <h3 class="purch_item_ttl">
                洋酒<br />
                ウイスキー<br />
                世界の酒
              </h3>
              <div class="simple_btn">
                <p>MORE</p>
              </div>
            </a>
            <a href="<?php echo $youshoku; ?>" class="purch_item_link purch_item-col_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/cup.webp" alt="西洋アンティーク・洋食器" />
              </div>
              <h3 class="purch_item_ttl">
                西洋アンティーク<br />
                洋食器
              </h3>
              <div class="simple_btn">
                <p>MORE</p>
              </div>
            </a>
            <a href="<?php echo $retro; ?>" class="purch_item_link purch_item-col_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/camera.webp" alt="昭和レトロ・大正モダン・玩具・カメラ・時計" />
              </div>
              <h3 class="purch_item_ttl">
                昭和レトロ<br />
                大正モダン<br />
                玩具･カメラ<br />
                時計等
              </h3>
              <div class="simple_btn">
                <p>MORE</p>
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-------------- 竜宮堂の買取 ---------------->
      <section class="t_feature">
        <div class="container-in">
          <div class="sec_ttl_box">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
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
                <p class="t_feature_item_txt is-pc">
                  より高く売却できるように<br class="is-sp" />専門の鑑定士が<br
                    class="is-sp"
                  />適切な売却方法をご提示します。<br />
                  お客様所有のお品を無料鑑定！
                </p>
                <!-- 方法１ -->
                <div id="method1" class="t_feature_item_method">
                  <div class="method_num">方法<span>1</span></div>
                  <!-- <h4 class="method_ttl">出張•店頭買取</h4> -->
                  <!-- <p class="t_feature_item_txt method_txt method_ov">
                    お客様のご都合に合わせて<br
                      class="is-sp"
                    />選べる２つの買取方法！
                  </p> -->
                  <h5 class="t_feature_item1_method_sub_ttl is-sp">出張買取</h5>
                  <div class="t_feature_item1_method_wrap">
                    <!-- 出張買取 -->
                    <div class="t_feature_item1_method_left trip">
                    <h5 class="t_feature_item1_method_sub_ttl is-pc ">出張買取</h5>
                      <div class="t_feature_item1_method_content syuttyou">
                        <p
                          class="t_feature_item1_method_sub_txt t_feature_item_txt trip_text"
                        >
                          経験豊富な査定士がお伺い！<br />
                          北陸地方どこでも即対応！<br />
                          出張料無料！即現金買取！
                        </p>
                        <div class="t_feature_item1_method_img">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/truck-icon.webp" alt="トラックアイコン" />
                        </div>
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
                    <!-- <div class="t_feature_item1_method_right">
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
                          <span class="din">9:00-17:00</span>(日･祝 <span class="din">16:00</span>迄)
                        </div>
                      </div>
                      <div class="sec_btn t_feature_item1_btn sec_more_btn">
                        <a href="<?php echo $kaitori; ?>#sec02">MORE</a>
                      </div>
                    </div> -->
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
                美術骨董品鑑定歴<span class="big din">20</span
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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
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
                        <?php the_post_thumbnail('full'); ?>
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
      </section>
      <!-------------- バナーコンテンツ ---------------->
      <section class="t_banner">
        <div class="container">
          <ul class="t_banner_wrap">
            <li>
              <a href="<?php echo $auction; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-auction.webp" alt="竜宮オークション" class="is-pc"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-auction-sp.webp" alt="竜宮オークション" class="is-sp"/>
              </a>
            </li>
            <li>
              <a href="<?php echo $sigyo; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-profession.webp" alt="士業の方へ" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-profession-sp.webp" alt="士業の方へ" class="is-sp" />
              </a>
            </li>
            <li>
              <a href="<?php echo $recruit; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-recruit.webp" alt="採用情報" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner-recruit-sp.webp" alt="採用情報" class="is-sp" />
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
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
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
          <!-- 共通インフォ -->
          <div class="info">
            <div class="info_tel">
              <a href="tel:0120-947-265">
                <img src="<?php echo get_template_directory_uri(); ?>/img/info-tel-pc.webp" alt="電話番号" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/info-tel-sp.webp" alt="電話番号" class="is-sp" />
              </a>
            </div>
            <div class="info_btn_wrapper">
              <a href="<?php echo $reservation01; ?>" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-syuchou.webp" alt="出張予約" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-trip-info.webp" alt="出張予約" class="is-sp" />
              </a>
              <!-- <a href="<?php echo $reservation02; ?>" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-raiten.webp" alt="来店予約" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-raiten.webp" alt="来店予約" class="is-sp" />
              </a> -->
              <a href="<?php echo $contact; ?>" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-contact.webp" alt="お問い合わせ" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-contact-info.webp" alt="お問い合わせ" class="is-sp" />
              </a>
              <a href="https://line.me/ti/p/YD-7m1oJXw" target="_blank" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-line.webp" alt="LINEお問い合わせ" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-line-info.webp" alt="LINEお問い合わせ" class="is-sp" />
              </a>
            </div>
            <div class="info_txt">
              <img src="<?php echo get_template_directory_uri(); ?>/img/info-txt.webp" alt="メールフォーム・LINEからのお問い合わせにはお時間をいただきます。何卒ご了承ください。" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/info-txt-sp.webp" alt="メールフォーム・LINEからのお問い合わせにはお時間をいただきます。何卒ご了承ください。" class="is-sp" />
            </div>
          </div>
          <div class="access_wrapper">
            <div class="sec_ttl_box">
              <div class="sec_ttl_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
              </div>
              <h2 class="sec_ttl">アクセス</h2>
              <p class="sec_sub_ttl">ACCESS</p>
            </div>
            <div class="access_code">
              〒910-0854 福井県福井市御幸4丁目13-10　<br class="is-sp">Tel.0120-947-265
            </div>
            <div class="access_map">
              <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3225.6031508166575!2d136.241064!3d36.054390000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8bfb8bb140ceb%3A0x2846b694164eaa80!2z56uc5a6u5aCCIOemj-S6leW6lyDlj6Tnvo7ooZMg6aqo6JGjIOOCouODs-ODhuOCo-ODvOOCryDosrflj5Y!5e0!3m2!1sja!2sjp!4v1744078188007!5m2!1sja!2sjp"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.603168338645!2d136.23848747580433!3d36.0543895724693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8be9d27bd5291%3A0xdf079cc0188a5b1!2z44CSOTEwLTA4NTQg56aP5LqV55yM56aP5LqV5biC5b6h5bm477yU5LiB55uu77yR77yT4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1745556945736!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>