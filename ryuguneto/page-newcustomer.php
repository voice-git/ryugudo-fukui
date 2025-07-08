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
          <div class="sec_ttl_box new-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">初めての方へ</h2>
            <p class="sec_sub_ttl">For beginner</p>
          </div>
        </div>
      </div>
      <!-------------- ５つの理由 ---------------->
      <div class="reason_sec1">
        <div class="reason_sec1_inner">
          <div class="reason_sec1_txtimg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/new-sec1-txt.webp" alt="買取で竜宮堂が選ばれる5つの理由" class="is-pc" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/new-sec1-txt-sp.webp" alt="買取で竜宮堂が選ばれる5つの理由" class="is-sp" />
          </div>
          <p class="reason_sec1_txt">
            伝統文化継承会社の竜宮堂だからできること
          </p>
        </div>
      </div>
      <!-------------- 理由１ ---------------->
      <section class="reason1">
        <div class="container-in">
          <div class="reason_top">
            <div class="reason_top_num">理由<span>1</span></div>
            <h2 class="reason_top_ttl">
              <span>経験豊富な鑑定士による</span><span>確かな鑑定</span>
            </h2>
            <p class="reason_top_txt">
              アルバイトスタッフではなく<br />
              美術骨董品鑑定歴20年の専門知識を持った<br
                class="is-sp"
              />鑑定士が丁寧に対応いたします。
            </p>
          </div>
          <div class="reason1_content reason_content">
            <h3 class="reason_ttl">竜宮堂の鑑定士ご紹介</h3>
            <div class="reason1_wrapper">
              <div class="reason1_item">
                <div class="reason1_item_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/y_urashima.webp" alt="浦嶋裕介" />
                </div>
                <div class="reason1_item_post">鑑定士</div>
                <div class="reason1_item_name">浦嶋裕介</div>
                <div class="reason1_item_like">好きな骨董分類</div>
                <div class="reason1_item_cat">明治金工<br class="is-sp" /><span class="is-pc">・</span>七宝<br>日本美術全般<span class="is-pc">・</span>洋画<br class="is-sp" />など</div>
              </div>
              <div class="reason1_item">
                <div class="reason1_item_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/s_urashima.webp" alt="浦嶋秀則" />
                </div>
                <div class="reason1_item_post">鑑定士</div>
                <div class="reason1_item_name">浦嶋秀則</div>
                <div class="reason1_item_like">好きな骨董分類</div>
                <div class="reason1_item_cat">陶磁器類<br class="is-sp" /><span class="is-pc">・</span>中国美術品全般<br class="is-sp" /><span class="is-pc">・</span>書画・掛軸<br class="is-sp" />など</div>
              </div>
              <div class="reason1_item">
                <div class="reason1_item_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/hamamoto.webp" alt="浜本" />
                </div>
                <div class="reason1_item_post">鑑定士</div>
                <div class="reason1_item_name">浜本</div>
                <div class="reason1_item_like">好きな骨董分類</div>
                <div class="reason1_item_cat">ガラス工芸<br class="is-sp" /><span class="is-pc">・</span>薩摩切子<br>古酒<br class="is-sp" /><span class="is-pc">・</span>アンティーク家具<br class="is-sp" />など</div>
              </div>
              <div class="reason1_item">
                <div class="reason1_item_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/okitu.webp" alt="沖津" />
                </div>
                <div class="reason1_item_post">鑑定士</div>
                <div class="reason1_item_name">沖津</div>
                <div class="reason1_item_like">好きな骨董分類</div>
                <div class="reason1_item_cat">九谷焼<br class="is-sp" /><span class="is-pc">・</span>工芸作家<br>書画・掛軸<br class="is-sp" />など</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-------------- 理由2 ---------------->
      <section class="reason2">
        <div class="reason_top">
          <div class="reason_top_num">理由<span>2</span></div>
          <h2 class="reason_top_ttl">
            <span>越前焼・九谷焼・輪島塗</span><br class="is-sp"><span>など</span><br class="is-pc"/><span>地元の工芸品は</span
            ><br class="is-sp" /><span>特に高価買取！</span>
          </h2>
          <p class="reason_top_txt">
            地元に根ざした会社なので、<br />
            歴史的な視点を持って、<br
              class="is-sp"
            />本来の価値を見極めることができます。
          </p>
        </div>
        <div class="container-in">
          <div class="reason2_content reason_content reason_content_white">
            <div class="reason2_icon">
              <h3 class="reason_ttl">
                地元の工芸品を<br class="is-sp" />高価買取できる訳は…
              </h3>
              <div class="reason2_item">
                <div class="reason2_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/reason2_item1.webp" alt="理由1" />
                </div>
                <div class="reason2_item_txtbox">
                  <h4 class="reason2_item_ttl">
                    地元の作家・作品の知識が<br />
                    豊富で売れ筋が分かる。
                  </h4>
                  <p class="reason2_item_txt">
                    北陸の骨董品や美術品は、地元買取業者が特に高く評価します。竜宮堂は北陸に根付いた豊富な経験を活かし、地元作家や作品に精通しています。相場は国内外の需要で日々変動するため、最新の動向を基に適正な評価を行います。
                  </p>
                </div>
              </div>
              <div class="reason2_item">
                <div class="reason2_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/reason2_item2.webp" alt="理由2" />
                </div>
                <div class="reason2_item_txtbox">
                  <h4 class="reason2_item_ttl">
                    お客様との距離が近く、<br />
                    低コスト最短でお伺いできる。
                  </h4>
                  <p class="reason2_item_txt">
                    首都圏や遠方の業者と違い、竜宮堂は地元北陸にて営業していますので、移動費や人件費が抑えられ、お客様に還元できるように徹底したコスト削減も行っておりますので高額での買取が可能になります。また、ご都合に合わせ最短でお伺いすることができます。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-------------- 理由3 ---------------->
      <section class="reason3">
        <div class="container-in">
          <div class="reason_top">
            <div class="reason_top_num">理由<span>3</span></div>
            <h2 class="reason_top_ttl">
              <span>北陸最大級のオークションを</span><br class="is-sp" /><span
                >運営しているから</span
              ><br />
              <span>他店では買取できないもの</span><br class="is-sp" /><span
                >でも買取可能！</span
              >
            </h2>
            <p class="reason_top_txt">
              自社でオークションを運営しており、<br
                class="is-sp"
              />日本全国や世界中の愛好者が集まります。<br />
              リアルタイムで市場の相場を<br
                class="is-sp"
              />把握できるので売れ筋を瞬時に判断し、<br
                class="is-sp"
              />高額査定を実現します。
            </p>
          </div>
          <div class="reason3_content reason_content">
            <h3 class="reason_ttl">
              竜宮堂独自の古物市場<br class="is-sp" />「竜宮オークション」
            </h3>
            <div class="reason3_cat">毎月第４日曜日開催</div>
            <p class="reason3_txt">
              古物市場運営・一般顧客・収集家の方から<br
                class="is-sp"
              />海外のバイヤー、全国の道具市場、<br
                class="is-sp"
              />催事の出店など、<br class="is-pc" />
              独自の幅広い<br class="is-sp" />販売網を持っている竜宮堂だから<br
                class="is-sp"
              />あらゆるお品を高額買取!
            </p>
            <div class="reason3_wrapper">
              <div class="reason3_item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/auction-icon.webp" alt="竜宮オークション" class="icon1" />
                <p class="reason3_item_txt">竜宮オークション</p>
              </div>
              <div class="reason3_item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reason3_icon2.webp" alt="一般顧客" class="icon2" />
                <p class="reason3_item_txt">一般顧客</p>
              </div>
              <div class="reason3_item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reason3_icon3.webp" alt="収集家" class="icon3" />
                <p class="reason3_item_txt">収集家</p>
              </div>
              <div class="reason3_item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reason3_icon4.webp" alt="海外のバイヤー" class="icon4" />
                <p class="reason3_item_txt">海外のバイヤー</p>
              </div>
              <div class="reason3_item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reason3_icon5.webp" alt="全国の道具市場" class="icon5" />
                <p class="reason3_item_txt">全国の道具市場</p>
              </div>
              <div class="reason3_item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/reason3_icon6.webp" alt="催事の出店" class="icon6" />
                <p class="reason3_item_txt">催事の出店</p>
              </div>
            </div>
            <div class="sec_btn">
              <a href="<?php echo $auction; ?>">竜宮オークション</a>
            </div>
          </div>
          <div class="reason3-2_content reason_content">
            <h3 class="reason_ttl">
              他店で判断が<br class="is-sp" />つかないものでも<br />
              当社なら買取できる事例が<br class="is-sp" />多数ございます！
            </h3>
            <div class="reason3-2_cat_wrapper">
              <div class="reason3-2_cat">汚く埃だらけ</div>
              <div class="reason3-2_cat">他店で買取を断られた</div>
              <div class="reason3-2_cat">壊れている</div>
            </div>
            <p class="reason3-2_txt">
              このような状態でも<br
                class="is-sp"
              />個人主観で捨ててしまわず、<br
                class="is-sp"
              />一度竜宮堂で査定させてください。
            </p>
          </div>
        </div>
      </section>
      <!-------------- 理由4 ---------------->
      <section class="reason4">
        <div class="container-in">
          <div class="reason_top">
            <div class="reason_top_num">理由<span>4</span></div>
            <h2 class="reason_top_ttl">
              <span>竜宮堂だからできる</span><br class="is-sp"><span>適切な売却方法のご提案！</span>
            </h2>
            <p class="reason_top_txt">
              買取だけでなく、オークションへの<br class="is-sp">出品代行も承っているので、<br />
              より高く売却できるように<br class="is-sp">適切な売却方法のご提案ができます。
            </p>
          </div>
          <div class="reason4_content reason_content reason_content_white">
            <!-- メソッド1 -->
            <div class="t_feature_item t_feature_item1">
              <div class="t_feature_wrap">
                <h3 class="t_feature_item_ttl">
                  竜宮堂だからできる<br class="is-sp">2つの売却方法
                </h3>
                <!-- 方法１ここまで -->
                <!-- チェック -->
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
                    <li>オークションに興味があるけど、出品作業が面倒</li>
                    <li>諸経費や手数料を抑えたい</li>
                  </ul>
                </div>
                <!-- チェックここまで -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-------------- 理由５ ---------------->
      <section class="reason5">
        <div class="container-in">
          <div class="reason_top">
            <div class="reason_top_num col_num">理由<span>5</span></div>
            <h2 class="reason_top_ttl">
              <span>蔵まるごと家まるごと</span><br class="is-sp"><span>査定も丁寧に対応！</span>
            </h2>
            <p class="reason_top_txt">
              お掃除前やお片付けする前の状態でOK！<br />
              数が多すぎて手がつけられない等<br class="is-sp">もちろん対応可能です。
            </p>
          </div>
          <div class="sec_btn">
            <a href="<?php echo $kaitori; ?>#sec01">出張買取</a>
          </div>
        </div>
      </section>
      <!-------------- よくある質問cta ---------------->
      <section class="faq_cta">
        <div class="container-in">
          <div class="faq_cta_btn sec_btn">
            <a href="<?php echo $qa; ?>"><span>買取についてよくある質問</span></a>
          </div>
        </div>
      </section>
      <?php echo get_template_part('./template-part/item'); ?>
      <?php echo get_template_part('./template-part/info'); ?>
    </main>
<?php get_footer(); ?>