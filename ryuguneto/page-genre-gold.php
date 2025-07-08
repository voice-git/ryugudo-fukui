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
        <div class="container-in">
          <!-------------- ページタイトル ---------------->
          <div class="l_item_head_box l_item_head_box-gold">
            <div class="l_item_head_txtimg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/item-sec1-txt-gold.webp" alt="金・プラチナ・銀製品" class="is-pc" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/item-sec1-txt-gold-sp.webp" alt="金・プラチナ・銀製品" class="is-sp" />
            </div>
          </div>
          <!-------------- 金 買取相場 ---------------->
          <section class="l_item-gold_price">
            <div class="l_item_ttl l_item_ttl-gold">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
              <h3>貴金属 店頭買取価格</h3>
            </div>
            <div class="l_item-gold_price_content">
              <div class="l_item-gold_price_head">
                <p><span class="din"><?php echo get_field('time','option'); ?></span>更新<br class="is-sp"><span>※1gあたり</span></p>
              </div>
              <div class="l_item-gold_price_body">
                <dl>
                  <dt>純金 K24</dt>
                  <dd><?php echo get_field('price1','option'); ?><span>円</span></dd>
                </dl>
                <dl>
                  <dt>金 K18</dt>
                  <dd><?php echo get_field('price1_1','option'); ?><span>円</span></dd>
                </dl>
                <dl>
                  <dt>プラチナ PT850</dt>
                  <dd><?php echo get_field('price2','option'); ?><span>円</span></dd>
                </dl>
                <dl>
                  <dt>純銀 Sv1000</dt>
                  <dd><?php echo get_field('price3','option'); ?><span>円</span></dd>
                </dl>
              </div>
            </div>
            <p class="l_item-gold_price_txt">
              ※当日のお持込みの店頭買取価格となります。<br>
              ※他の金・プラチナ・銀製品の品位買取価格についてはお問い合わせください。
            </p>
            <div class="l_item-gole_price-read">
              <p>この価格が<span>買取価格</span>です。<br>
              その他<span>買取手数料等</span>は<br class="is-sp"><span>かかりません</span>。</p>
            </div>
          </section>
          <!-- 金・貴金属買取品目 -->
          <section class="l_item-gold_product">
            <div class="l_item_ttl">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
              <h3>金・貴金属買取品目</h3>
            </div>
            <div class="l_item_gold_product_wrapper">
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">リング</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold1.webp" alt="リング" />
                </div>
                <p class="l_item-gold_product_txt">
                  純金・18金・プラチナなど婚約指輪や結婚指輪はもちろん、石が取れたり傷がついたファッションリングなどでも喜んで買取いたします。
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">ネックレス</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold2.webp" alt="ネックレス" />
                </div>
                <p class="l_item-gold_product_txt">
                  ブランド品などはブランド価値を加味してお買取。喜平ネックレス・カジュアルなネックレスなど、切れていても買取可能です。
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">アクセサリー</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold3.webp" alt="アクセサリー" />
                </div>
                <p class="l_item-gold_product_txt">
                  絡まってしまったブレスレットや片方しかない・壊れているピアスなどのお品物も買取できます。
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">インゴット</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold4.webp" alt="インゴット" />
                </div>
                <p class="l_item-gold_product_txt">
                  田中貴金属、三菱マテリアルなど国産インゴットの他、購入証明書があれば海外産も買取可能です。
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">貨幣・記念コイン</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold5.webp" alt="貨幣・記念コイン" />
                </div>
                <p class="l_item-gold_product_txt">
                  メイプルリーフ金貨やプラチナ貨、各種記念金貨・コインなどもリアルタイムの相場から最大限の買取額をご提示!
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">小判・古銭</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold6.webp" alt="小判・古銭" />
                </div>
                <p class="l_item-gold_product_txt">
                  各時代の小判・古銭なども骨董的価値を加味した価格での買取対応が可能です。
                </p>
              </div>
              <div class="l_item-gold_product_item icon-gold">
                <h4 class="l_item-gold_product_ttl">金杯・仏像 他</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold7.webp" alt="金杯・仏像 他" />
                </div>
                <p class="l_item-gold_product_txt">
                  金杯は材質が確認できるものについては買取可能です。金製の像などは美術的・骨董的価値を加味して買取価格をご提示致します。
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">金瓶・銀瓶</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold8.webp" alt="金瓶・銀瓶" />
                </div>
                <p class="l_item-gold_product_txt">
                  金製瓶・銀製瓶も査定・買取致します。箱や付属品があるものはもちろん、ないものもしっかり見極め査定・買取させていただきます。
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">銀製品</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold9.webp" alt="銀製品" />
                </div>
                <p class="l_item-gold_product_txt">
                  シルバー製のアクセサリーをはじめ、銀貨や銀製杯などの銀製品全般も査定・買取致します。
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">ブランドジュエリー</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold10.webp" alt="ブランドジュエリー" />
                </div>
                <p class="l_item-gold_product_txt">
                  カルティエやエルメス・シャネルなど、デザイン性やブランドの価値もプラスして査定致します。
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">ダイヤモンド</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold11.webp" alt="ダイヤモンド" />
                </div>
                <p class="l_item-gold_product_txt">
                  ダイヤは流通量が多く人気や資産価値が比較的安定しております。保証書、鑑定書、ケースがないお品も鑑定・買取致します。
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">ルビー・サファイア</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold12.webp" alt="ルビー・サファイア" />
                </div>
                <p class="l_item-gold_product_txt">
                  ミャンマー産や非加熱のルビー、ブルーサファイア・イエローサファイアなども買取致します。有名ブランドのものはさらに高価買取!
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">エメラルド</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold13.webp" alt="エメラルド" />
                </div>
                <p class="l_item-gold_product_txt">
                  ノンオイル・非加熱エメラルド・透明度が高いエメラルドは高額買取が期待できます。石のみ（ルース）の状態でも買取可能です!
                </p>
              </div>
              <div class="l_item-gold_product_item">
                <h4 class="l_item-gold_product_ttl">その他の宝石</h4>
                <div class="l_item-gold_product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gold14.webp" alt="その他の宝石" />
                </div>
                <p class="l_item-gold_product_txt">
                  オパールやトルマリン、アレキサンドライト、翡翠や珊瑚、真珠なども鑑定や買取が可能です。お気軽にお問い合わせください。
                </p>
              </div>
            </div>
          </section>
        </div>
    </article>
    <!-------------- 竜宮堂が選ばれるわけ ---------------->
    <section class="l_item-gold_reason">
        <div class="container-in">
            <div class="sec_ttl_box">
              <div class="sec_ttl_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
              </div>
              <h2 class="sec_ttl">竜宮堂が選ばれるわけ</h2>
              <p class="sec_sub_ttl">WHY RYUGUDO IS CHOSEN</p>
            </div>
            <div class="l_item-gold_reason_content">
                <div class="l_item-gold_reason_item">
                    <div class="l_item-gold_reason_num col_num">
                        理由<span>1</span>
                    </div>
                    <div class="l_item-gold_reason_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sleep-photo-01.webp" alt="理由1">
                    </div>
                    <div class="l_item-gold_reason_right">
                        <h3 class="l_item-gold_reason_ttl">
                            <span>破損・デザインが古い<br class="is-sp">ジュエリー</span>でも<br>
                            買取が可能です
                        </h3>
                        <p class="l_item-gold_reason_txt">
                            ご実家の整理で出てきた数十年前のジュエリーなど、古いデザインのものでも当店なら喜んで買取いたします。切れたり絡まったりしているチェーン、片方しか残っていないイヤリングやピアス、石の取れたリングなど、そのままでは使用できないような状態のものもお気軽にお問い合わせください。
                        </p>
                    </div>
                </div>
                <div class="l_item-gold_reason_item">
                    <div class="l_item-gold_reason_num col_num">
                        理由<span>2</span>
                    </div>
                    <div class="l_item-gold_reason_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sleep-photo-02.webp" alt="理由2">
                    </div>
                    <div class="l_item-gold_reason_right">
                        <h3 class="l_item-gold_reason_ttl">
                            <span>保証書・鑑別書・鑑定書がなくても</span><br class="is-pc">しっかり査定
                        </h3>
                        <p class="l_item-gold_reason_txt">
                            鑑定書や保証書などがどこに行ったかわからない・・・。<br class="is-pc">
                            本物かどうか判別がつかない宝石が出てきた・・・・。<br class="is-pc">
                            こんな場合もご遠慮なくお問合せください。 経験豊富な査定士がしっかりと査定し価値に見合った買取価格をご提示させていただきます。
                        </p>
                    </div>
                </div>
                <div class="l_item-gold_reason_item">
                    <div class="l_item-gold_reason_num col_num">
                        理由<span>3</span>
                    </div>
                    <div class="l_item-gold_reason_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sleep-photo-03.webp" alt="理由3">
                    </div>
                    <div class="l_item-gold_reason_right">
                        <h3 class="l_item-gold_reason_ttl">
                            ブランド品は<br>
                            <span>ブランド価値を考慮し査定</span>
                        </h3>
                        <p class="l_item-gold_reason_txt">
                            ブランド品の買取も行う当店では、宝石の価値だけでなく、地金やブランドの価値も考慮したトータルでの買取価格をご提示させていただきます。
                        </p>
                    </div>
                </div>
                <div class="l_item-gold_reason_item">
                    <div class="l_item-gold_reason_num col_num">
                        理由<span>4</span>
                    </div>
                    <div class="l_item-gold_reason_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sleep-photo-04.webp" alt="理由4">
                    </div>
                    <div class="l_item-gold_reason_right">
                        <h3 class="l_item-gold_reason_ttl">
                            <span>他店で断られたものでも</span><br>
                            買取できる場合あり
                        </h3>
                        <p class="l_item-gold_reason_txt">
                            幅広い販路を持ち美術骨董にも精通した当社なら、美術的価値や骨董品としての価値も含めて多角的に価値を鑑定することができるため、他店で買取ができなかったものでも買取が可能な場合があります。まずは一度お気軽にお問い合わせください。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                  'terms' => 'gold_jewelry', 
                )
              )
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <div class="t_purch_wrapper">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<!--             <a href="<?php echo $home; ?>jisseki_cat/gold_jewelry/#post-<?php the_ID(); ?>" class="t_purch_item"> -->
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
            <a href="<?php echo $home; ?>jisseki_cat/gold_jewelry/">MORE</a>
          </div>
        </div>
      </section>
      <?php echo get_template_part('./template-part/kaitori'); ?>
      <?php echo get_template_part('./template-part/info'); ?>
    </main>
<?php get_footer(); ?>