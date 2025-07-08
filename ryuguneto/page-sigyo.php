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
          <div class="sec_ttl_box pro-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">士業の方へ</h2>
            <p class="sec_sub_ttl">For professionals</p>
          </div>
        </div>
      </div>
      <article class="l_color">
        <!-------------- ページタイトル ---------------->
        <div class="l_item_head_box l_item_head_box-pro">
          <div class="container-in">
            <div class="l_item_head_txtimg is-pc">
              <img src="<?php echo get_template_directory_uri(); ?>/img/item-sec1-txt-pro.webp" alt="相続する書画骨董の時価評価格を正しく査定します。" />
            </div>
          </div>
          <div class="l_item_head_txt_box is-sp">
            <div class="l_item_head_top">
              <span>相続業務に関わる</span><br>
              <span>士業のみなさまへ</span>
            </div>
            <div class="l_item_head_center">
              相続する書画骨董の時価評価額を
            </div>
            <div class="l_item_head_bottom">
              正しく査定します。
            </div>
          </div>
        </div>
        <!-------------- sec1 ---------------->
        <section class="pro_sec1">
          <div class="pro_sec1_content is-sp">
            <ul class="pro_sec1_wrapper slider-pro" id="js-slider-pro">
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/pro-sec1-1-sp.webp" alt="査定1"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/pro-sec1-2-sp.webp" alt="査定2"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/pro-sec1-3-sp.webp" alt="査定3"></li>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/pro-sec1-4-sp.webp" alt="査定4"></li>
            </ul>
            <div class="pro_sec1_equal">
              <img src="<?php echo get_template_directory_uri(); ?>/img/pro-sec1-under-sp.webp" alt="財産目録">
            </div>
          </div>
          <div class="container-in">
            <div class="pro_sec1_img is-pc">
              <img src="<?php echo get_template_directory_uri(); ?>/img/pro-sec1.webp" alt="財産目録" />
            </div>
            <p class="pro_sec1_txt">
              <span>相続時の評価書作成・財産分与官公庁</span><br class="is-sp"><span>提出書類作成のお手伝いも</span><br class="is-sp"><span>お任せください!</span>
            </p>
          </div>
        </section>
        <!-- 正しい査定を行える2つの理由 -->
        <section class="pro_reason">
          <div class="sec_ttl_box">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">正しい査定を行える<br class="is-sp">2つの理由</h2>
            <p class="sec_sub_ttl">CORRECT ASSESSMENT</p>
          </div>
          <div class="pro_reason_content">
            <div class="container-in">
              <div class="pro_reason1">
                <div class="pro_reason_num col_num">理由<span>1</span></div>
                <h3 class="pro_reason_ttl">
                  <span>年間10万点の</span><br class="is-sp"><span>買取実績と</span><br />
                  <span>年間30万の</span><br class="is-sp"><span>取扱実績があります。</span>
                </h3>
                <div class="pro_reason1_box">
                  <h4 class="pro_reason1_box_ttl">評価書作成対象品例</h4>
                  <ul class="pro_reason1_wrapper">
                    <li class="col_3">
                      <div class="pro_reason1_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-1.webp" alt="九谷焼輪島塗" class="is-pc" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-1-sp.webp" alt="九谷焼輪島塗" class="is-sp" />
                        <p>
                          九谷焼<br />
                          輪島塗
                        </p>
                      </div>
                    </li>
                    <li class="col_3">
                      <div class="pro_reason1_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-2.webp" alt="骨董美術品" class="is-pc" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-2-sp.webp" alt="骨董美術品" class="is-sp" />
                        <p>
                          骨董<br />
                          美術品
                        </p>
                      </div>
                    </li>
                    <li class="col_3">
                      <div class="pro_reason1_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-3.webp" alt="書画･掛軸・絵画･屏風" class="is-pc" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-3-sp.webp" alt="書画･掛軸・絵画･屏風" class="is-sp" />
                        <p>
                          書画･掛軸<br />
                          絵画･屏風
                        </p>
                      </div>
                    </li>
                    <li class="col_3">
                      <div class="pro_reason1_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-4.webp" alt="茶道具類" class="is-pc" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-4-sp.webp" alt="茶道具類" class="is-sp" />
                        <p>茶道具類</p>
                      </div>
                    </li>
                    <li class="col_3">
                      <div class="pro_reason1_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-5.webp" alt="中国美術品" class="is-pc" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-5-sp.webp" alt="中国美術品" class="is-sp" />
                        <p>中国美術品</p>
                      </div>
                    </li>
                    <li class="col_3">
                      <div class="pro_reason1_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-6.webp" alt="古道具・アンティーク家具" class="is-pc" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-6-sp.webp" alt="古道具・アンティーク家具" class="is-sp" />
                        <p>
                          古道具<br />
                          アンティーク家具
                        </p>
                      </div>
                    </li>
                    <li class="col_4">
                      <div class="pro_reason1_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-7.webp" alt="西洋アンティーク・洋食器" class="is-pc" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-7-sp.webp" alt="西洋アンティーク・洋食器" class="is-sp" />
                        <p>
                          西洋アンティーク<br />
                          洋食器
                        </p>
                      </div>
                    </li>
                    <li class="col_4">
                      <div class="pro_reason1_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-8.webp" alt="フィギュア・おもちゃ" class="is-pc" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-8-sp.webp" alt="フィギュア・おもちゃ" class="is-sp" />
                        <p>
                          フィギュア<br />
                          おもちゃ
                        </p>
                      </div>
                    </li>
                    <li class="col_4">
                      <div class="pro_reason1_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-9.webp" alt="楽器・オーディオ" class="is-pc" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-9-sp.webp" alt="楽器・オーディオ" class="is-sp" />
                        <p>
                          楽器<br />
                          オーディオ
                        </p>
                      </div>
                    </li>
                    <li class="col_4">
                      <div class="pro_reason1_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-10.webp" alt="金・プラチナ" class="is-pc" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason1-10-sp.webp" alt="金・プラチナ" class="is-sp" />
                        <p>金・プラチナ</p>
                      </div>
                    </li>
                  </ul>
                  <div class="pro_reason1_ex">
                    <h5>その他の対象品例</h5>
                    <p>
                      高岡銅器・木彫・金工・銀製品・陶磁器・古書・刀剣・甲冑・勲章・<br class="is-pc" />
                      古銭・鉄瓶銀瓶金瓶・建具・和家具・現代作家作品・人間国宝作品・<br class="is-pc" />
                      ウイスキー・ブランデー・中国酒・アクセサリー・模型・店舗在庫品・リサイクル品
                      ほか
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="pro_reason2">
              <div class="pro_reason_num col_num">理由<span>2</span></div>
              <h3 class="pro_reason_ttl">
                <span>北陸最大級の</span><br class="is-sp"><span>自社オークションを運営。</span><br />
                <span>累計<p class="din">200</p>万点もの</span><br class="is-sp"><span>売買データを蓄積。</span>
              </h3>
              <div class="container-in">
                <div class="pro_reason2_box">
                  <h4 class="pro_reason2_box_ttl">
                    竜宮堂独自の古物市場<br class="is-sp">「竜宮オークション」
                  </h4>
                  <div class="pro_reason2_cat">毎月第４日曜日開催</div>
                  <div class="pro_reason2_box_txt">
                    全国・海外から愛好者が集まるオークションの運営を通して、あらゆるお品を取り扱い!<br />
                    様々なお品のリアルタイムな相場を熟知しています！
                  </div>
                  <div class="pro_reason2_img_wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason2-1.webp" alt="竜宮オークション" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason2-2.webp" alt="竜宮オークション" />
                  </div>
                  <div class="sec_btn">
                    <a href="<?php echo $auction; ?>">竜宮オークション</a>
                  </div>
                </div>
                <div class="pro_reason2-2_box">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason2-2_ttl.webp" alt="鑑定歴20年以上の専門家鑑定！" class="is-pc" />
                  <img src="<?php echo get_template_directory_uri(); ?>/img/pro-reason2-2_ttl-sp.webp" alt="鑑定歴20年以上の専門家鑑定！" class="is-sp" />
                  <p>
                    国税庁の「財産評価基本通達」に基づく<span>精通者意見価格</span>として提出いただけます。
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="container-in">
          </div>
        </section>
        <!-- 費用・お時間 -->
        <section class="pro_price">
          <div class="container-in">
            <div class="sec_ttl_box">
              <div class="sec_ttl_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
              </div>
              <h2 class="sec_ttl">費用・お時間</h2>
              <p class="sec_sub_ttl">COST AND TIME</p>
            </div>
            <div class="pro_price_content">
              <div class="pro_price_wrapper">
                <div class="pro_price_item">
                  <div class="pro_price_cat">鑑定作業費</div>
                  <div class="pro_price_body">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro-price1.webp" alt="鑑定作業費" />
                  </div>
                </div>
                <div class="pro_price_item">
                  <div class="pro_price_cat">評価書作成作業費</div>
                  <div class="pro_price_body">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro-price2.webp" alt="評価書作成作業費" />
                  </div>
                </div>
                <div class="pro_price_item">
                  <div class="pro_price_cat">作成の所要時間</div>
                  <div class="pro_price_body">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro-price3.webp" alt="作成の所要時間" />
                  </div>
                </div>
              </div>
              <p class="pro_price_txt">
                ※点数が多い場合、料金はご相談に応じます。また、作成にお時間がかかることがあります。<br />
                ※買取を前提としたお見積もりの場合は無料で対応いたします。<br />
                ※遠方出張の場合は、交通費を別途お見積もり致します。
              </p>
            </div>
          </div>
        </section>
        <!-- 動産処理ワンストップサービス -->
        <section class="pro_service">
          <div class="container-in">
            <div class="sec_ttl_box">
              <div class="sec_ttl_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
              </div>
              <h2 class="sec_ttl">動産処理ワンストップ<br class="is-sp">サービス</h2>
              <p class="sec_sub_ttl">ONE STOP SERVICE</p>
            </div>
            <div class="pro_service_box">
              <div class="pro_service_graph">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pro-service.webp" alt="竜宮堂ならこれら全てをワンステップで完結できます！" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/pro-service-sp.webp" alt="竜宮堂ならこれら全てをワンステップで完結できます！" class="is-sp" />
              </div>
              <div class="pro_service_head">
                <span
                  >遺産相続・成年後見人手続きに係る</span
                ><br class="is-sp"><span>美術品・骨董品の鑑定、</span><br>
                <span>破産手続き等による</span><br class="is-sp"><span>動産換価処分も承っております。</span>
              </div>
              <p class="pro_service_txt">
                司法関係者様・不動産業者様・<br class="is-sp">解体業者様など、<br class="is-sp">ご担当の物件業務について<br>
                お困りごとがございましたら<br class="is-sp">ぜひ竜宮堂ヘご相談ください。
              </p>
              <div class="pro_service_cat"><p>個人宅以外も買取実績多数！</p></div>
              <ul class="pro_service_wrapper">
                <li>個人宅</li>
                <li>事務所</li>
                <li>医院</li>
                <li>旅館</li>
                <li>工場</li>
                <li>倉庫</li>
                <li>店舗</li>
              </ul>
            </div>
          </div>
        </section>
      </article>
      <!-- 選べる買取方法 -->
      <section class="select_purch">
        <div class="container-in">
          <div class="l_item_flex_ttl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            <h2>鑑定方法<br class="is-sp"><span class="is-sp">SELECT PURCHASE</span></h2><span class="is-pc">SELECT PURCHASE</span>
          </div>
          <?php echo get_template_part('./template-part/kaitori')?>
        </div>
      </section>
      <?php echo get_template_part('./template-part/info'); ?>
    </main>
<?php get_footer(); ?>