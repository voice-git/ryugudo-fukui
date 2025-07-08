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
        <div class="l_item_head_box l_item_head_box-youshoku">
          <div class="container-in">
            <div class="l_item_head_txtimg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/item-sec1-txt-youshoku.webp" alt="西洋アンティーク・洋食器" class="is-pc" />
            </div>
          </div>
          <div class="l_item_head_txt_box is-sp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/item-sec1-txt-kakejiku-head-sp.webp" alt="名品の買取例をご紹介">
            <div class="l_item_head_bottom">
              西洋アンティーク<br>
              洋食器
            </div>
          </div>
        </div>
        <section class="l_item">
          <div class="container-in">
            <!-- 西洋アンティーク -->
            <div class="l_item_content">
              <div class="l_item_ttl">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
                <h3>西洋アンティーク</h3>
              </div>
              <div class="l_item_box l_item_seiyou_box">
                <ul class="l_item_list">
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/seiyou1.webp" alt="アンティーク洋風飾皿" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        アンティーク洋風<br class="is-pc">
                        飾皿
                      </h4>
                      <p class="l_item_list_txt">
                        すべて手書きで作銘はありませんが大変細密な絵皿です。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/seiyou2.webp" alt="アンティークランプ" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        アンティークランプ
                      </h4>
                      <p class="l_item_list_txt">
                        火屋の部分がアールデコ様式でとても美しいです。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/seiyou3.webp" alt="銅器テミス＆天使" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        銅器<br class="is-pc">
                        テミス＆天使
                      </h4>
                      <p class="l_item_list_txt">
                        重量感がありコレクター方大事に飾っていたお品です。とても良い作品です。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/seiyou4.webp" alt="フランツ ヘルムレ置時計" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        フランツ ヘルムレ<br>
                        置時計
                      </h4>
                      <p class="l_item_list_txt">
                        ドイツ フランツ ヘルムレ製の時計です。とても優雅なお品です。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/seiyou5.webp" alt="ユンハンス時計" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        ユンハンス時計
                      </h4>
                      <p class="l_item_list_txt">
                        こちらもドイツのユンハンス製です。ユンハンスの掛け時計も人気があります。
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- 洋食器 -->
            <div class="l_item_content">
              <div class="l_item_ttl">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
                <h3>洋食器</h3>
              </div>
              <div class="l_item_box l_item_youshoki_box">
                <ul class="l_item_list">
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/youshoki1.webp" alt="ロイヤルアルバートティーセット" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        ロイヤルアルバート<br>
                        ティーセット
                      </h4>
                      <p class="l_item_list_txt">
                        イギリス製。ブランド名は創業者が英国王室を愛するがゆえに、ヴィクトリア女王の夫アルバート公と女王夫妻の孫アルバート・ジョージ王子（のちのジョージ5世）にちなみ「アルバート」と名付けました。花柄の品が多く人気が高いです。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/youshoki2.webp" alt="ロイヤルコペンハーゲンティーセット" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        ロイヤルコペンハーゲン<br>
                        ティーセット
                      </h4>
                      <p class="l_item_list_txt">
                        デンマーク製で絵付けはすべて手描きで、製品の裏側にはロイヤルコペンハーゲンのマークと、アーティストのサイン、シェーブナンパーが入れられています。コバルトブルーが特徴です。
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_item_list_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/youshoki3.webp" alt="マイセン 波の戯れティーセット" />
                    </div>
                    <div class="l_item_list_right">
                      <h4 class="l_item_list_ttl">
                        マイセン 波の戯れ<br>
                        ティーセット
                      </h4>
                      <p class="l_item_list_txt">
                        ドイツのマイセン地方で生産される磁器の呼称。名実ともに西洋白磁の頂点に君臨する名窯です。アンティークのお品は世界的にコレクターがあり人気が高いです。
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </article>
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
                  'terms' => 'western_style_antique', 
                )
              )
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <div class="t_purch_wrapper">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<!--             <a href="<?php echo $home; ?>jisseki_cat/western_style_antique/#post-<?php the_ID(); ?>" class="t_purch_item"> -->
            <a href="<?php the_permalink(); ?>" class="t_purch_item">
              <div class="t_purch_img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full'); ?>
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
            <a href="<?php echo $home; ?>jisseki_cat/western_style_antique/">MORE</a>
          </div>
        </div>
      </section>
      <?php echo get_template_part('./template-part/kaitori'); ?>
      <?php echo get_template_part('./template-part/info'); ?>
    </main>
<?php get_footer(); ?>