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
<!-- 選べる買取方法 -->
<section class="select_purch <?php if(is_page('sigyo')) {echo 'sigyo-purch' ;}?>">
    <div class="container-in">
        <?php if(!is_page('sigyo')):?>
        <div class="l_item_flex_ttl kaitori_hedding">
        <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="" />
        <h2>買取方法<br class="is-sp"><span class="is-sp">PURCHASE</span></h2><span class="is-pc">PURCHASE</span>
        </div>
        <?php endif; ?>
        <!-- <h4 class="method_ttl">出張•店頭買取</h4> -->
        <!-- <p class="t_feature_item_txt method_txt method_ov">
        お客様のご都合に合わせて<br
            class="is-sp"
        />選べる２つの買取方法！
        </p> -->
        <div class="t_feature_item1_method_wrap t_feature_item1">
        <!-- 出張買取 -->
         <?php if(!is_page('sigyo')):?>
        <div class="t_feature_item1_method_left trip">
            <h5 class="t_feature_item1_method_sub_ttl">出張買取</h5>
            <div class="t_feature_item1_method_content">
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
        <?php elseif(is_page('sigyo')):?>
            <div class="t_feature_item1_method_left trip">
            <h5 class="t_feature_item1_method_sub_ttl">出張鑑定</h5>
            <div class="t_feature_item1_method_content">
            <p
                class="t_feature_item1_method_sub_txt t_feature_item_txt trip_text"
            >
            自宅などへの出張鑑定<br>
            帯同訪問も可能！
            </p>
            <div class="t_feature_item1_method_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/truck-icon.webp" alt="トラックアイコン" />
            </div>
            </div>
            <div class="sec_btn t_feature_item1_btn sec_more_btn">
            <a href="<?php echo $kaitori ?>#sec01">MORE</a>
            </div>
        </div>
        <?php endif; ?>
        </div>
    </div>
    </section>