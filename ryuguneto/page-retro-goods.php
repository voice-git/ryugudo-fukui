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
    <main class="main l_main">
      <!-------------- fv ---------------->
      <div class="l_fv">
        <div class="l_fv_back">
          <div class="sec_ttl_box antique-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">買取アイテム</h2>
            <p class="sec_sub_ttl">Purchase items</p>
          </div>
        </div>
      </div>
      <article class="l_color">
        <!-------------- ページタイトル ---------------->
        <div class="l_item_head_box l_item_head_box-nottl l_item_head_box-retro">
          <div class="container-in">
            <div class="l_item_head_txtimg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/item-sec1-txt-retro.webp" alt="昭和レトロ・大正モダン・玩具・カメラ・時計等" class="is-pc" />
            </div>
          </div>
          <div class="l_item_head_txt_box is-sp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/item-sec1-txt-kakejiku-head-sp.webp" alt="名品の買取例をご紹介">
            <div class="l_item_head_bottom">
              昭和レトロ<br>
              大正モダン<br>
              玩具・カメラ<br>
              時計等
            </div>
          </div>
        </div>
        <section class="l_item">
          <div class="container-in">
            <!-- レトロ -->
            <div class="l_item_content">
              <div class="l_item_box l_item_retro_box">
                <ul class="l_item_list">
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/retro1.webp" alt="日本軍軍服" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        日本軍軍服
                      </h4>
                      <p class="l_item_list_txt">
                        当時の資料やコレクションとして需要があります。軍服が家にあると（怖いイメージ）あるからと捨てられてしまいます。資料としてまた受け継いでいただくとの選択の１つかと思います。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/retro2.webp" alt="オリンパスカメラ" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        オリンパスカメラ
                      </h4>
                      <p class="l_item_list_txt">
                        近年デジタルカメラの時代ですが一眼レフコレクターの方は多いです。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/retro3.webp" alt="ローライフレックスカメラ" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        ローライフレックスカメラ
                      </h4>
                      <p class="l_item_list_txt">
                        名機と名高いローライフレックス二眼レフカメラです。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/retro4.webp" alt="加賀獅子" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        加賀獅子
                      </h4>
                      <p class="l_item_list_txt">
                        石川県の加賀獅子です。江戸時代～現代作品迄幅広く取り扱いしております。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/retro5.webp" alt="懐中時計" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        懐中時計
                      </h4>
                      <p class="l_item_list_txt">
                        昔は腕時計より懐中時計でした。こちらの懐中時計は修理も必要なく稼働品でした。今も刻を刻んでいます。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/retro6.webp" alt="記章勲章" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        記章勲章
                      </h4>
                      <p class="l_item_list_txt">
                        勲章制度は明治時代から開始されました。こちらも資料やコレクターの方の修習の対象となります。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/retro7.webp" alt="渦巻プレスガラスの茶托小皿" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        渦巻プレスガラスの茶托<br>
                        小皿
                      </h4>
                      <p class="l_item_list_txt">
                        昭和初期頃のプレスの小皿になります。夏には茶托としての代用も可能です。日本の古き良き技術が伝わるお品です。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/retro8.webp" alt="落雁の型" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        落雁の型
                      </h4>
                      <p class="l_item_list_txt">
                        昭和初期。お菓子屋さんの倉庫眠っていた昔の落雁です。今では使用する事がないので買取のご依頼がありました。可愛いデザインのお品が人気があります。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/retro9.webp" alt="加州住 瀧本石見藤原尹次作 三つ具足" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        加州住 瀧本石見<br>
                        藤原尹次作 三つ具足
                      </h4>
                      <p class="l_item_list_txt">
                        加州藤左衛門と並び石川県では有名な加賀の金工師です。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/retro10.webp" alt="新5円金貨" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        新5円金貨
                      </h4>
                      <p class="l_item_list_txt">
                        品位金900/銅100。昭和唯一の新五円金貨の発行年である昭和5年製のものは大変希少です。
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </article>
      <!-- 買取実績 -->
      <section class="l_item_purch">
        <div class="container-in">
          <div class="l_item_flex_ttl l_item_purch_ttl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            <h2>新着買取実績<br class="is-sp"><span class="is-sp">NEW PURCHASE</span></h2><span class="is-pc">NEW PURCHASE</span>
          </div>
          <?php
            $args = array(
              'post_type' => 'buylist', 
              'posts_per_page' => 8 ,
              'tax_query' => array(
                array(
                  'taxonomy' => 'jisseki_cat', 
                  'field' => 'slug',
                  'terms' => 'retro_goods_purchase', 
                )
              )
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <div class="t_purch_wrapper">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<!--             <a href="<?php echo $home; ?>jisseki_cat/retro_goods_purchase/#post-<?php the_ID(); ?>" class="t_purch_item"> -->
            <a href="<?php the_permalink(); ?>" class="t_purch_item">
              <div class="t_purch_img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/thumbnail.jpg" alt="サムネイル">
                <?php endif; ?>
              </div>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="published"><?php echo get_the_date('Y.m.d'); ?></time>
              <h3 class="t_purch_ttl post_ttl">
                <?php the_title(); ?>
              </h3>
            </a>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
          <div class="sec_btn t_purch_btn sec_more_btn">
            <a href="<?php echo $home; ?>jisseki_cat/retro_goods_purchase/">MORE</a>
          </div>
        </div>
      </section>
      <?php echo get_template_part('./template-part/kaitori'); ?>
      <?php echo get_template_part('./template-part/info'); ?>
    </main>
<?php get_footer(); ?>