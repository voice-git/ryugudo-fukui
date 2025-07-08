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
          <div class="sec_ttl_box kaitori-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">出張買取・店頭買取</h2>
            <p class="sec_sub_ttl">For professionals</p>
          </div>
        </div>
      </div>
      <article class="l_color">
        <!-------------- ページタイトル ---------------->
        <div class="l_item_head_box l_item_head_box-kaitori">
          <div class="container-in">
            <div class="l_item_head_txtimg is-pc">
              <img src="<?php echo get_template_directory_uri(); ?>/img/item-sec1-txt-kaitori.webp" alt="買取に重視したいのは？" />
            </div>
          </div>
          <div class="l_item_head_txt_box is-sp">
            <div class="l_item_head_top">
              <span>竜宮堂の2つの</span><br />
              <span>買取方法をご紹介！</span>
            </div>
            <div class="l_item_head_bottom">
              <img src="<?php echo get_template_directory_uri(); ?>/img/kaitori-txt-sp.webp" alt="買取に重視したいのは？" />
            </div>
          </div>
          <div class="container-in">
            <ul class="l_kaitori_wrapper">
              <li class="l_kaitori_tab sec_btn">
                <a href="#sec01">手軽さ</a>
              </li>
              <li class="l_kaitori_tab sec_btn">
                <a href="#sec02">素早さ</a>
              </li>
            </ul>
          </div>
        </div>
        <!-------------- 大切にしていること ---------------->
        <section class="l_kaitori_about">
          <div class="container-in">
            <div class="l_kaitori_about_wrapper">
              <div class="l_kaitori_about_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
              </div>
              <h3>
                <span>竜宮堂の買取で</span><br class="is-sp" /><span
                  >大切にしていること</span
                >
              </h3>
              <p>
                店頭買取も出張買取も、竜宮堂はお客様に寄り添った対応を心掛けております。<br
                  class="is-pc"
                />
                大切なお品は1点ずつ確かな眼で丁寧に査定し、根拠をしっかりご説明します。<br
                  class="is-pc"
                />
                査定額にご納得いただいたうえでお取引するので、ご安心ください。
              </p>
            </div>
          </div>
        </section>
        <!-------------- 手軽さ ---------------->
        <section class="l_kaitori_easy" id="sec01">
          <div class="container-in">
            <div class="l_kaitori_head_box l_kaitori_head_box_easy">
              <div class="l_kaitori_head_fukidasi">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kaitori-easy-fukidasi.webp" alt="手軽さなら" />
              </div>
              <h3>出張買取</h3>
            </div>
            <h4 class="l_kaitori_easy_ttl">
              <span>北陸（石川県、福井県、</span><br class="is-sp" /><span
                >富山県）全域、</span
              ><br />
              <span>出張見積もり無料！</span>
            </h4>
            <p class="l_kaitori_easy_txt">
              竜宮堂では、<br
                class="is-sp"
              />8割のお客様が出張買取を希望。<br />
              プロ査定士がご自宅に伺い、<br
                class="is-sp"
              />査定と搬出の全てを行います。<br
                class="is-sp"
              />お客様はお家で待つだけ！<br />
              事前にお知らせいただければ、<br
                class="is-sp"
              />お見積もりや相見積も大歓迎です！
            </p>
            <div class="l_kaitori_easy_box">
              <div class="l_kaitori_easy_point">
                <div class="l_kaitori_easy_point_cat">Point<span>1</span></div>
                <h4>
                  隅々まで査定！<br />
                  予想外ものも買取対象に！
                </h4>
                <p>
                  意外なものが買取・高額買取になることもあります。汚れた着物や壊れたものでも、遠慮なくご相談ください。
                </p>
              </div>
              <div class="l_kaitori_easy_point">
                <div class="l_kaitori_easy_point_cat">Point<span>2</span></div>
                <h4>そのままで<br class="is-pc" />出張査定OK！</h4>
                <p>
                  選別・片付け・掃除で価値のあるものを誤って処分することがあります。価値判断はせず、お気軽にご相談ください。
                </p>
              </div>
              <div class="l_kaitori_easy_point">
                <div class="l_kaitori_easy_point_cat">Point<span>3</span></div>
                <h4>
                  蔵まるごと・<br />
                  家まるごとにも対応！
                </h4>
                <p>
                  埃だらけの蔵や空き家の中身全てなど、大量査定も喜んで承ります。
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-------------- 素早さ ---------------->
        <section class="l_kaitori_fast" id="sec02">
          <div class="container-in">
            <div class="l_kaitori_head_box l_kaitori_head_box_fast">
              <div class="l_kaitori_head_fukidasi">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kaitori-fast-fukidasi.webp" alt="素早さなら" />
              </div>
              <h3>店頭買取</h3>
            </div>
            <h4 class="l_kaitori_fast_ttl">
              <span>店舗にてその場で</span><br class="is-sp" /><span
                >査定・買取！</span
              ><br />
              <span>お見積のみもOK！</span>
            </h4>
            <div class="l_kaitori_fast_time is-pc">
              <p>
                受付時間 <span class="din">9:00-17:00</span>(日･祝
                <span class="din">16:00</span>迄）
              </p>
            </div>
            <div class="l_kaitori_fast_time is-sp">
              <p class="cat">受付時間</p>
              <p>
                <span class="din">9:00-17:00</span>(日･祝
                <span class="din">16:00</span>迄）
              </p>
            </div>
            <p class="l_kaitori_fast_txt">
              査定士が出張買取で<br class="is-sp" />不在の場合もあります。<br />
              事前に来店フォームよりご予約か<br
                class="is-sp"
              />お電話いただければ幸いです。
            </p>
            <div class="l_kaitori_fast_box">
              <div class="l_kaitori_fast_point">
                <div class="l_kaitori_fast_point_cat">Point<span>1</span></div>
                <h4>早朝から対応可能！</h4>
                <p>
                  朝7:30から電話受付を致しております。店頭での朝早くからの対応も可能です。
                </p>
              </div>
              <div class="l_kaitori_fast_point">
                <div class="l_kaitori_fast_point_cat">Point<span>2</span></div>
                <h4>随時査定・買取！</h4>
                <p>
                  店頭買取受付時間9:00〜17:00のお好きな時間にお気軽にご来店ください。
                </p>
              </div>
              <div class="l_kaitori_fast_point">
                <div class="l_kaitori_fast_point_cat">Point<span>3</span></div>
                <h4>即現金にてお支払い！</h4>
                <p>買取が成立した際は、その場で現金でお支払いします。</p>
              </div>
            </div>
          </div>
        </section>
        <!-------------- 買取の流れ ---------------->
        <section class="l_kaitori_flow">
          <div class="container-in">
            <div class="sec_ttl_box">
              <div class="sec_ttl_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
              </div>
              <h3 class="sec_ttl">買取の流れ</h3>
              <p class="sec_sub_ttl">Purchase Process</p>
            </div>
            <div class="l_kaitori_flow_box">
              <div class="l_kaitori_flow_head_wrap">
                <div class="l_kaitori_flow_head trip fukui-trip">
                  <p>出張買取</p>
                </div>
                <div class="l_kaitori_flow_head shop is-pc">
                  <p>店頭買取</p>
                </div>
              </div>
              <div class="l_kaitori_flow_block l_kaitori_flow_block_first">
                <div class="l_kaitori_flow_block_wrap">
                  <div
                    class="l_kaitori_flow_block_item l_kaitori_flow_block_item-left"
                  >
                    <h4 class="l_kaitori_flow_block_ttl">出張買取のご依頼</h4>
                    <p class="l_kaitori_flow_block_txt">
                      お電話・出張予約フォームにて出張査定依頼をお願い致します。依頼内容をある程度お聞きした上で訪問日時を決定させていただきます。
                    </p>
                    <div class="l_kaitori_flow_block_img">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/kaitori-flow.webp" alt="出張買取のご依頼" />
                    </div>
                    <div class="l_kaitori_flow_btn">
                      <a href="<?php echo $reservation01; ?>">出張予約</a>
                    </div>
                  </div>
                  <div
                    class="l_kaitori_flow_block_item l_kaitori_flow_block_item-right is-pc"
                  >
                    <h4 class="l_kaitori_flow_block_ttl">店頭へご来店</h4>
                    <p class="l_kaitori_flow_block_txt">
                      下記住所までへお気軽にどうぞ。<br />
                      来店予約フォームからご予約いただけるとスムーズです。
                    </p>
                    <div class="l_kaitori_flow_block_note">
                      【注】店頭買取は日曜祝日休み
                    </div>
                    <div class="l_kaitori_flow_block_code">
                      〒920-0052<br />
                      石川県金沢市薬師堂町イ52番地<br />
                      株式会社 浦嶋 竜宮堂<br />
                      ●渋谷工業さん　桜田カジマートさん　戸板小学校近く<br />
                      ●金沢駅から車で10分
                    </div>
                    <div class="l_kaitori_flow_btn">
                      <a href="<?php echo $reservation02; ?>">来店予約</a>
                    </div>
                  </div>
                </div>
                <div class="l_kaitori_flow_tel">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/kaitori-flow-tel.webp" alt="電話番号" class="is-pc" />
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/kaitori-flow-tel-sp.webp"
                    alt="電話番号"
                    class="is-sp"
                  />
                </div>
              </div>
              <!-- 2行目 -->
              <div class="l_kaitori_flow_block l_kaitori_flow_block_second">
                <div class="l_kaitori_flow_block_item">
                  <h4 class="l_kaitori_flow_block_ttl">ご自宅へ訪問・査定</h4>
                  <p class="l_kaitori_flow_block_txt">
                    ご指定の日に訪問し、品物を丁寧に査定して買取価格をご提示します。
                  </p>
                </div>
                <div class="l_kaitori_flow_block_item is-pc">
                  <h4 class="l_kaitori_flow_block_ttl">その場で査定</h4>
                  <p class="l_kaitori_flow_block_txt">
                    ご持参いただいた品物を丁寧に査定し、買取価格をご提示します。
                  </p>
                </div>
              </div>
              <!-- 3行目 -->
              <div class="l_kaitori_flow_block l_kaitori_flow_block_third">
                <div class="l_kaitori_flow_block_item">
                  <h4 class="l_kaitori_flow_block_ttl">成約・お支払い</h4>
                  <p class="l_kaitori_flow_block_txt">
                    買取価格にご納得いただければ、「買取同意書」にご記入いただき、その場で現金にてお支払いさせていただきます。ご納得いただけない場合はその場でお断りいただけます。
                  </p>
                </div>
              </div>
              <!-- 4行目 -->
              <div class="l_kaitori_flow_block l_kaitori_flow_block_four">
                <div class="l_kaitori_flow_block_item">
                  <h4 class="l_kaitori_flow_block_ttl">搬出</h4>
                  <p class="l_kaitori_flow_block_txt">
                    買取にご了承頂けましたら、お引き取りできるものはその場で弊社の車にて搬出させていただきます。
                  </p>
                </div>
                <div class="l_kaitori_flow_block_item is-pc">
                  <h4 class="l_kaitori_flow_block_ttl">ご帰宅</h4>
                  <p class="l_kaitori_flow_block_txt">
                    お支払い後、すぐにご帰宅いただけます。お気をつけてお帰りください。
                  </p>
                </div>
              </div>
              <!-- sp版 -->
              <div class="l_kaitori_flow_head_wrap">
                <div class="l_kaitori_flow_head shop is-sp">
                  <p>店頭買取</p>
                </div>
              </div>
              <div
                class="l_kaitori_flow_block_item l_kaitori_flow_block_item-right is-sp"
              >
                <h4 class="l_kaitori_flow_block_ttl">店頭へご来店</h4>
                <p class="l_kaitori_flow_block_txt">
                  下記住所までへお気軽にどうぞ。<br />
                  来店予約フォームからご予約いただけるとスムーズです。
                </p>
                <div class="l_kaitori_flow_block_note">
                  【注】店頭買取は日曜祝日休み
                </div>
                <div class="l_kaitori_flow_block_code">
                  〒920-0052<br />
                  石川県金沢市薬師堂町イ52番地<br />
                  株式会社 浦嶋 竜宮堂<br />
                  ●渋谷工業さん　桜田カジマートさん　<br class="is-sp">戸板小学校近く<br />
                  ●金沢駅から車で10分
                </div>
                <div class="l_kaitori_flow_btn">
                  <a href="<?php echo $reservation02; ?>">来店予約</a>
                </div>
                <div class="l_kaitori_flow_tel">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/img/kaitori-flow-tel-sp.webp"
                    alt="電話番号"
                    class="is-sp"
                  />
                </div>
              </div>
              <div class="l_kaitori_flow_block is-sp">
                <div class="l_kaitori_flow_block_item l_kaitori_flow_block_item-sp">
                  <h4 class="l_kaitori_flow_block_ttl">その場で査定</h4>
                  <p class="l_kaitori_flow_block_txt">
                    ご持参いただいた品物を丁寧に査定し、買取価格をご提示します。
                  </p>
                </div>
              </div>
              <div class="l_kaitori_flow_block l_kaitori_flow_block_third is-sp">
                <div class="l_kaitori_flow_block_item">
                  <h4 class="l_kaitori_flow_block_ttl">成約・お支払い</h4>
                  <p class="l_kaitori_flow_block_txt">
                    買取価格にご納得いただければ、「買取同意書」にご記入いただき、その場で現金にてお支払いさせていただきます。ご納得いただけない場合はその場でお断りいただけます。
                  </p>
                </div>
              </div>
              <div class="l_kaitori_flow_block is-sp">
                <div class="l_kaitori_flow_block_item l_kaitori_flow_block_item-sp">
                  <h4 class="l_kaitori_flow_block_ttl">ご帰宅</h4>
                  <p class="l_kaitori_flow_block_txt">
                    お支払い後、すぐにご帰宅いただけます。お気をつけてお帰りください。
                  </p>
                </div>
              </div>
              <div class="l_kaitori_flow_ID">
                <h4><span>【買取の際は下記</span><br class="is-sp"><span>いずれかの身分証を</span><br class="is-sp"><span>ご提示下さい】</span></h4>
                <p>
                  古物営業法に定められた手順に基づき、買取の際は必ず身分証明が必要になります。
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/kaitori-ID.webp" alt="身分証" class="is-pc"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/kaitori-ID-sp.webp" alt="身分証" class="is-sp"/>
                <div class="l_kaitori_flow_txt">
                  在留カード／特別永住者証明書／住民票（発行から3
                  か月以内の原本）
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="cta_parts">
          <div class="container-in">
            <div class="cta_parts_item faq_cta_btn faq_cta_btn-kaitori sec_btn">
              <a href="<?php echo $qa; ?>"><span>買取について<br class="is-sp">よくある質問</span></a>
            </div>
            <div class="cta_parts_item sec_btn">
              <a href="<?php echo $auction; ?>#ippan">もう一つの売却方法<br class="is-sp">「出品代行」について</a>
            </div>
          </div>
        </section>
      </article>
      <?php echo get_template_part('./template-part/item'); ?>
      <?php echo get_template_part('./template-part/kaitori'); ?>
      <?php echo get_template_part('./template-part/info'); ?>
    </main>
<?php get_footer(); ?>