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
          <div class="sec_ttl_box acn-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">竜宮オークション</h2>
            <p class="sec_sub_ttl">Ryugu auction</p>
          </div>
        </div>
      </div>
      <article class="l_color">
        <!-------------- ページタイトル ---------------->
        <div class="l_acn_head_box">
          <div class="l_item_head_txt_box is-sp">
            <div class="l_item_head_top">
              <span>北陸最大級！</span><br>
              <span>独自運営の古物市場</span>
            </div>
            <div class="l_item_head_bottom">
              竜宮オークションとは？
            </div>
          </div>
          <div class="container-in">
            <div class="l_acn_head_txtimg is-pc">
              <img src="<?php echo get_template_directory_uri(); ?>/img/acn-sec1-txt.webp" alt="竜宮オークションとは？" />
            </div>
            <div class="l_sec1-txt">竜宮堂ならではの「もう一つの売り方」</div>
            <div class="l_sec1_cat">
              <p>毎月第４日曜日開催</p>
            </div>
          </div>
        </div>
        <!-------------- 2024年開催スケジュール ---------------->
        <section class="l_scd">
          <div class="container-in">
            <div class="l_scd_box">
              <h3 class="l_scd_ttl">2025年開催スケジュール</h3>
              <div class="l_scd_info">
                <div class="l_scd_info_cat">会場</div>
                <div class="l_scd_info_place">
                  <span class="ttl">竜宮堂</span><br class="is-sp">
                  <span class="is-pc">〒920-0052 石川県金沢市薬師堂町イ52</span>
                </div>
                <span class="w-100 is-sp">〒920-0052 <br class="is-sp">石川県金沢市薬師堂町イ52</span>
              </div>
              <div class="l_scd_content <?php if(is_page('auction')) {echo 'auction-table';};?>">
                <ul>
                  <li>
                    <div class="l_scd_list_left">第<span>39</span>回</div>
                    <div class="l_scd_list_right">
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_white">下見会</div>
                        <div class="l_scd_day">2月22日（土）</div>
                      </div>
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_yellow">開催日</div>
                        <div class="l_scd_day">2月23日（日）</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="l_scd_list_left">第<span>40</span>回</div>
                    <div class="l_scd_list_right">
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_white">下見会</div>
                        <div class="l_scd_day">3月22日（土）</div>
                      </div>
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_yellow">開催日</div>
                        <div class="l_scd_day">3月23日（日）</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="l_scd_list_left">第<span>41</span>回</div>
                    <div class="l_scd_list_right">
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_white">下見会</div>
                        <div class="l_scd_day">4月26日（土）</div>
                      </div>
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_yellow">開催日</div>
                        <div class="l_scd_day">4月27日（日）</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="l_scd_list_left">第<span>42</span>回</div>
                    <div class="l_scd_list_right">
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_white">下見会</div>
                        <div class="l_scd_day">5月24日（土）</div>
                      </div>
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_yellow">開催日</div>
                        <div class="l_scd_day">5月25日（日）</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="l_scd_list_left">第<span>43</span>回</div>
                    <div class="l_scd_list_right">
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_white">下見会</div>
                        <div class="l_scd_day">6月21日（土）</div>
                      </div>
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_yellow">開催日</div>
                        <div class="l_scd_day">6月22日（日）</div>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul>
                  <li>
                    <div class="l_scd_list_left">第<span>44</span>回</div>
                    <div class="l_scd_list_right">
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_white">下見会</div>
                        <div class="l_scd_day">7月26日（土）</div>
                      </div>
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_yellow">開催日</div>
                        <div class="l_scd_day">7月27日（日）</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="l_scd_list_left">第<span>45</span>回</div>
                    <div class="l_scd_list_right">
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_white">下見会</div>
                        <div class="l_scd_day">9月27日（土）</div>
                      </div>
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_yellow">開催日</div>
                        <div class="l_scd_day">9月28日（日）</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="l_scd_list_left">第<span>46</span>回</div>
                    <div class="l_scd_list_right">
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_white">下見会</div>
                        <div class="l_scd_day">10月25日（土）</div>
                      </div>
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_yellow">開催日</div>
                        <div class="l_scd_day">10月26日（日）</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="l_scd_list_left">第<span>47</span>回</div>
                    <div class="l_scd_list_right">
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_white">下見会</div>
                        <div class="l_scd_day">11月22日（土）</div>
                      </div>
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_yellow">開催日</div>
                        <div class="l_scd_day">11月23日（日）</div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="l_scd_list_left">第<span>48</span>回</div>
                    <div class="l_scd_list_right">
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_white">下見会</div>
                        <div class="l_scd_day">12月27日（土）</div>
                      </div>
                      <div class="l_scd_list">
                        <div class="l_scd_cat bg_yellow">開催日</div>
                        <div class="l_scd_day">12月28日（日）</div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!-- 特徴 -->
        <section class="l_acn_feature">
          <div class="container-in">
            <div class="l_acn_feature_content l_acn_feature_content1">
              <div class="l_acn_feature_left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/acn-feature1.webp" alt="特徴1" />
              </div>
              <div class="l_acn_feature_right">
                <div class="l_acn_feature_no">特徴<span>1</span></div>
                <h3 class="l_acn_feature_ttl">
                  <span>竜宮堂主催の</span><br />
                  <span>リアルオークション</span>
                </h3>
                <p class="l_acn_feature_txt">
                  弊社倉庫にて実際に目の前で競売し、<br class="is-sp">最高値の方に販売します。<br />
                  <span
                    >※オークションへの参加は<br class="is-sp">物商許可証を持つ業者様に限ります。<br />
                    （事前に登録が必要となります）</span
                  >
                </p>
              </div>
            </div>
            <div class="l_acn_feature_content l_acn_feature_content2">
              <div class="l_acn_feature_left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/acn-feature2.webp" alt="特徴2" />
              </div>
              <div class="l_acn_feature_right">
                <div class="l_acn_feature_no">特徴<span>2</span></div>
                <h3 class="l_acn_feature_ttl">
                  <span>全国・海外から</span><br />
                  <span><i class="din font-big">100</i>社以上が参加！</span>
                </h3>
                <p class="l_acn_feature_txt">
                  国内外の骨董品関係者が集まり、<br class="is-sp">様々な品が取引されています。
                </p>
              </div>
            </div>
            <div class="l_acn_feature_content">
              <div class="l_acn_feature_left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/acn-feature3.webp" alt="特徴3" />
              </div>
              <div class="l_acn_feature_right">
                <div class="l_acn_feature_no">特徴<span>3</span></div>
                <h3 class="l_acn_feature_ttl">
                  <span>一般のお客様も出品可能！</span><br />
                  <span>（出品代行）</span>
                </h3>
                <p class="l_acn_feature_txt">
                  竜宮オークションでは、<br class="is-sp">同業者さまだけでなく、<br class="is-sp">一般のお客様の出品代行も承っております。
                </p>
              </div>
            </div>
          </div>
        </section>
        <!-------------- 出品メリット ---------------->
        <section class="l_acn_merit">
          <div class="container-in">
            <div class="l_acn_merit_box">
              <h3 class="l_acn_merit_ttl">竜宮オークション<br class="is-sp">出品メリット</h3>
              <div class="l_acn_merit_wrapper">
                <div class="l_acn_merit_content l_acn_merit_content_col3">
                  <p class="l_acn_merit_content_col3_txt">
                    100社以上に一括<br />
                    見積をとるのと同じ！
                  </p>
                </div>
                <div class="l_acn_merit_content l_acn_merit_content_col3">
                  <p class="l_acn_merit_content_col3_txt">
                    知識･時間がないけど、<br />
                    適切に売却したい方に！
                  </p>
                </div>
                <div class="l_acn_merit_content l_acn_merit_content_col3">
                  <p class="l_acn_merit_content_col3_txt">
                    ネットやアプリ以上の<br />
                    高額売却に期待！
                  </p>
                </div>
                <div class="l_acn_merit_content l_acn_merit_content_col3">
                  <p class="l_acn_merit_content_col3_txt">
                    顧客への対応が<br />
                    一切不要！
                  </p>
                </div>
                <div class="l_acn_merit_content l_acn_merit_content_col3">
                  <p class="l_acn_merit_content_col3_txt">当日に現金化可能！</p>
                </div>
                <div class="l_acn_merit_content l_acn_merit_content_col3">
                  <p class="l_acn_merit_content_col3_txt">
                    大型商品も出品可能！
                  </p>
                </div>
                <div class="l_acn_merit_content l_acn_merit_content_col1">
                  <p class="l_acn_merit_content_col1_ttl">
                    出品者のサポートも充実！
                  </p>
                  <ul>
                    <li>
                      荷下ろし・<br class="is-pc" />
                      積み込みの<br />
                      お手伝いサービス
                    </li>
                    <li>
                      <div>
                        引取り仕分け<br class="is-pc" />サービス<br />
                        <span>※別途手数料が発生します</span>
                      </div>
                    </li>
                    <li>
                      リユース品も<br class="is-pc" />
                      OK
                    </li>
                    <li>
                      <div>
                        カンタン！<br class="is-pc" />LINE問合せ<br />
                        <span
                          >出品希望アイテムの<br class="is-pc" />画像を送るだけ</span
                        >
                      </div>
                    </li>
                    <li>
                      <div>
                        防犯対策！<br />
                        <span
                          >防犯カメラの設置・<br class="is-pc" />セキュリティサービス</span
                        >
                      </div>
                    </li>
                    <li>
                      古物商許可業者<br class="is-pc" />
                      のみの参加で<br />
                      秘密厳守！
                    </li>
                    <li>
                      初参加の方も<br class="is-pc" />安心♪
                    </li>
                    <li class="last">
                      長期在庫品も<br class="is-pc" />OK
                    </li>
                  </ul>
                </div>
              </div>
              <!-- チェック -->
              <div class="b_check acn_check">
                <ul class="b_check_list">
                  <li>少しでも高値で売りたい</li>
                  <li>オークションに興味が<br class="is-sp">あるけど、<br class="is-pc" />出品作業が面倒</li>
                  <li>諸経費や手数料を抑えたい</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!-------------- 古物業者様へ ---------------->
        <section class="l_acn_tob">
          <div class="container-in">
            <div class="l_acn_tob_box">
              <h3 class="l_acn_tob_ttl">古物業者様へ</h3>
              <p class="l_acn_tob_txt">
                古物商許可証を持つ業者様は<br class="is-sp">オークションへ直接参加いただけます。<br />
                （事前に登録が必要です）
              </p>
              <div class="l_acn_tob_content">
                <h4 class="l_acn_tob_content_ttl">手数料について</h4>
                <div class="l_acn_tob_area">
                  <div class="l_acn_tob_area_left">
                    <div>
                      <p>北陸エリア<br class="is-sp"><span>最安値</span></p>
                    </div>
                  </div>
                  <div class="l_acn_tob_area_right">
                    <p>
                      落札手数料<br class="is-sp"><span class="font_big din">5</span>%<span
                        class="font_small"
                        >（税別）</span
                      >
                    </p>
                  </div>
                </div>
                <p class="l_acn_tob_content_txt">
                  例えば<br class="is-sp">九谷焼の花瓶・皿・香炉等を<span>300,000</span>円で売った場合
                </p>
                <ul class="l_acn_tob_wrapper">
                  <li class="l_acn_tob_item">
                    <div class="l_acn_tob_item_left">
                      <h5 class="l_acn_tob_item_ttl">竜宮オークション</h5>
                      <div class="l_acn_tob_item_cmsn">
                        <div class="l_acn_tob_item_cmsn_left">手数料</div>
                        <div class="l_acn_tob_item_cmsn_right">
                          <span>5</span>%
                        </div>
                      </div>
                    </div>
                    <ul class="l_acn_tob_item_right">
                      <li class="l_acn_tob_item_list_profit">
                        <p>利益<span>283,500</span>円</p>
                      </li>
                      <li class="l_acn_tob_item_list_cmsn">手数料</li>
                      <li class="l_acn_tob_item_list_personnel">人件費</li>
                    </ul>
                  </li>
                  <!-- フリマアプリ -->
                  <li class="l_acn_tob_item">
                    <div class="l_acn_tob_item_left">
                      <h5 class="l_acn_tob_item_ttl">フリマアプリ</h5>
                      <div class="l_acn_tob_item_cmsn">
                        <div class="l_acn_tob_item_cmsn_left">手数料</div>
                        <div class="l_acn_tob_item_cmsn_right">
                          <span>10</span>%
                        </div>
                      </div>
                    </div>
                    <ul class="l_acn_tob_item_right">
                      <li class="l_acn_tob_item_list_profit">
                        <p>利益<span>264,000</span>円</p>
                      </li>
                      <li class="l_acn_tob_item_list_cmsn">手数料</li>
                      <li class="l_acn_tob_item_list_postage">送料</li>
                      <li class="l_acn_tob_item_list_personnel">人件費</li>
                    </ul>
                  </li>
                  <!-- ネットオークション -->
                  <li class="l_acn_tob_item">
                    <div class="l_acn_tob_item_left">
                      <h5 class="l_acn_tob_item_ttl">ネットオークション</h5>
                      <div class="l_acn_tob_item_cmsn">
                        <div class="l_acn_tob_item_cmsn_left">手数料</div>
                        <div class="l_acn_tob_item_cmsn_right">
                          <span>8</span>%
                        </div>
                      </div>
                    </div>
                    <ul class="l_acn_tob_item_right">
                      <li class="l_acn_tob_item_list_profit">
                        <p>利益<span>269,500</span>円</p>
                      </li>
                      <li class="l_acn_tob_item_list_cmsn">手数料</li>
                      <li class="l_acn_tob_item_list_postage">送料</li>
                      <li class="l_acn_tob_item_list_personnel">人件費</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!-------------- 一般のお客様へ（出品代行） ---------------->
        <section class="l_acn_toc" id="ippan">
          <div class="container-in">
            <div class="l_acn_toc_box">
              <h3 class="l_acn_toc_ttl">一般のお客様へ<br class="is-sp">（出品代行）</h3>
              <p class="l_acn_toc_txt">
                竜宮オークションや国内•海外大手<br class="is-sp">オークションへの出品をお手伝い！<br />
                出品手続きや梱包などは<br class="is-sp">すべて竜宮堂にお任せください！
              </p>
              <div class="l_acn_toc_wrapper">
                <div class="l_acn_toc_item">
                  <div class="l_acn_toc_cat">出品方法<span>1</span></div>
                  <div class="l_acn_toc_item_ttl">
                    弊社運営 <br />
                    「竜宮オークション」<br />
                    出品
                  </div>
                  <p class="l_acn_toc_item_txt">
                    美術品から骨董•古美術<br class="is-sp">アート作品まで
                  </p>
                </div>
                <div class="l_acn_toc_item">
                  <div class="l_acn_toc_cat">出品方法<span>2</span></div>
                  <div class="l_acn_toc_item_ttl">
                    国内•海外<br />
                    大手オークション<br />
                    委託代理出品
                  </div>
                  <p class="l_acn_toc_item_txt">
                    世界的アート作品から<br class="is-sp">貴重な古美術品まで
                  </p>
                </div>
              </div>
              <div class="l_acn_toc_col1">
                <h4 class="l_acn_toc_col1_ttl">手数料について</h4>
                <p class="l_acn_toc_col1_txt">
                  売り上げ総額により<br class="is-sp">変動いたします
                </p>
                <ul>
                  <li>
                    <div class="l_acn_toc_col1_left">
                      <div>
                        <div class="l_acn_toc_col1_left_head">総売り上げ</div>
                        <div class="l_acn_toc_col1_left_price">
                          <span class="price-small din">50</span>万円〜<span
                            class="price-big din"
                            >100</span
                          ><span class="price-mid">万円</span>未満
                        </div>
                      </div>
                    </div>
                    <div class="l_acn_toc_col1_right">
                      <p>
                        落札手数料<br class="is-sp"><span class="price-big din">24.2</span
                        >%<span class="price-mid">（税別）</span>
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_acn_toc_col1_left">
                      <div>
                        <div class="l_acn_toc_col1_left_head">総売り上げ</div>
                        <div class="l_acn_toc_col1_left_price">
                          <span class="price-small din">100</span>万円〜<span
                            class="price-big din"
                            >300</span
                          ><span class="price-mid">万円</span>未満
                        </div>
                      </div>
                    </div>
                    <div class="l_acn_toc_col1_right">
                      <p>
                        落札手数料<br class="is-sp"><span class="price-big din">22</span>%<span
                          class="price-mid"
                          >（税別）</span
                        >
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="l_acn_toc_col1_left">
                      <div>
                        <div class="l_acn_toc_col1_left_head">総売り上げ</div>
                        <div class="l_acn_toc_col1_left_price">
                          <span class="price-big din">300</span
                          ><span class="price-mid">万円</span>以上
                        </div>
                      </div>
                    </div>
                    <div class="l_acn_toc_col1_right">
                      <p>
                        落札手数料<br class="is-sp"><span class="price-big din">16.5</span
                        >%<span class="price-mid">（税別）</span>
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!-------------- 出品の流れ ---------------->
        <section class="l_acn_flow">
          <div class="container-in">
            <div class="sec_ttl_box">
              <div class="sec_ttl_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
              </div>
              <h3 class="sec_ttl">出品の流れ</h3>
              <p class="sec_sub_ttl">LISTING PROCESS</p>
            </div>
            <div class="l_acn_flow_box">
              <ul>
                <li>
                  <div class="l_acn_flow_left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/anc-flow1.webp" alt="流れ1" class="is-pc" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/anc-flow1-sp.webp" alt="流れ1" class="is-sp" />
                  </div>
                  <div class="l_acn_flow_right">
                    <div>
                      <h4 class="l_acn_flow_right_ttl">出品依頼</h4>
                      <p class="l_acn_flow_right_txt">
                        お電話・フォーム・メール・LINEにて「竜宮オークション出品希望」の旨ご連絡をお願いいたします。ご依頼の際に出品したいお品物の詳細をお知らせください。
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="l_acn_flow_left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/anc-flow2.webp" alt="流れ2" class="is-pc" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/anc-flow2-sp.webp" alt="流れ2" class="is-sp" />
                  </div>
                  <div class="l_acn_flow_right">
                    <div>
                      <h4 class="l_acn_flow_right_ttl">当社からご連絡</h4>
                      <p class="l_acn_flow_right_txt">
                        頂戴した情報を検討し、弊社よりご連絡させていただきます。オークション市場での売却価値があまりないなど、出品に問題があると判断した場合はこの段階でその旨ご連絡させていただきます。
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="l_acn_flow_left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/anc-flow3.webp" alt="流れ3" class="is-pc" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/anc-flow3-sp.webp" alt="流れ3" class="is-sp" />
                  </div>
                  <div class="l_acn_flow_right">
                    <div>
                      <h4 class="l_acn_flow_right_ttl">お品物の搬入</h4>
                      <p class="l_acn_flow_right_txt">
                        最低落札価格や予想落札価格などの基本合意を頂いた上でオークション前日までにご自身にてお品物を搬入いただきます。トラックでの引き取りサービスもございます。（※別途手数料が発生します）
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="l_acn_flow_left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/anc-flow4.webp" alt="流れ4" class="is-pc" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/anc-flow4-sp.webp" alt="流れ4" class="is-sp" />
                  </div>
                  <div class="l_acn_flow_right">
                    <div>
                      <h4 class="l_acn_flow_right_ttl">オークション当日</h4>
                      <p class="l_acn_flow_right_txt">
                        AM９時～開始となります。<br />
                        オークションには古物許可証を持つ業者様のみご参加いただけます。<br />
                        （事前に登録必須）
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="l_acn_flow_left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/anc-flow5.webp" alt="流れ5" class="is-pc" />
                    <img src="<?php echo get_template_directory_uri(); ?>/img/anc-flow5-sp.webp" alt="流れ5" class="is-sp" />
                  </div>
                  <div class="l_acn_flow_right">
                    <div>
                      <h4 class="l_acn_flow_right_ttl">お支払い</h4>
                      <p class="l_acn_flow_right_txt">
                        オークション終了後、手数料などを差し引いた金額を現金又はお振込みにて決済させていただきます。
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <!-------------- よくある質問 ---------------->
        <section class="l_acn_faq">
          <div class="container-in">
            <div class="sec_ttl_box">
              <div class="sec_ttl_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
              </div>
              <h3 class="sec_ttl">オークションについて<br class="is-sp">よくある質問</h3>
              <p class="sec_sub_ttl">QUESTION</p>
            </div>
            <div class="l_acn_faq-wrapper">
              <div class="faq-item"> <!-- 初期状態で開いている -->
                <button class="faq-question">
                  店頭買取との違いはなんですか？<span class="faq-icon">ー</span> 
                </button>
                <div class="faq-answer">
                  ネットオークションやフリマアプリの販売とは違い<br>
                  現物を目の前にしてのリアルオークションです。<br>
                  <br>
                  ネットオークションやフリマアプリと違い画像では判断が難しい品物や希少な品物はより高く落札されます。
                </div>
              </div>
            
              <div class="faq-item">
                <button class="faq-question">
                  出品したい品物が沢山あるのですが可能ですか？<span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                  もちろん可能です。<br>
                  事前に弊社にてオークションに出品が可能なお品物か確認させていただきます。<br>
                  また法律に抵触するようなお品物はご出品頂けません。
                </div>
              </div>
            
              <div class="faq-item">
                <button class="faq-question">
                  落札されなかった場合はどうなりますか？<span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                  落札されなかったお品物はご返却させていただきます。必ずお持ち帰りください。<br>
                  （※不落札の場合は別途手数料が発生致します）
                </div>
              </div>
            
              <div class="faq-item">
                <button class="faq-question">
                  車両がないのですがどのように持っていけば良いですか？<span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                弊社にて直接、引取り仕分けサービスを行っております。<br>
                （※別途手数料が発生致します)<br>
                また、郵送、宅配でのご出品もお受けしております。<br>
                詳細等はお問合せくださいませ。
                </div>
              </div>
            
              <div class="faq-item">
                <button class="faq-question">
                  搬入はいつまで大丈夫ですか？<span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                  オークション開催日の（毎月第４日曜日）前日までの搬入となります。<br>
                  開催日の前日は商品の下見日となりますので、お早目の搬入をおすすめ致します。
                </div>
              </div>
            </div>
          </div>
        </section>
      </article>
      <?php echo get_template_part('./template-part/item'); ?>
      <?php echo get_template_part('./template-part/kaitori'); ?>
      <?php echo get_template_part('./template-part/info'); ?>
    </main>
<?php get_footer(); ?>