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

<!-- 買取アイテム -->
<section class="purch_item l_purch_item">
    <div class="container-in">
        <div class="sec_ttl_box sec_ttl_flex_box">
        <div class="sec_ttl_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
        </div>
        <div class="sec_ttl_flex_right">
            <h2 class="sec_ttl_flex">買取アイテム</h2>
            <p class="sec_sub_ttl">PURCHASE ITEMS</p>
        </div>
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/gold.webp" alt="金･プラチナ・銀製品" />
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/sadou.webp" alt="茶道具類" />
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
            書画・掛軸<br />
            絵画・屏風
            </h3>
            <div class="simple_btn">
            <p>MORE</p>
            </div>
        </a>
        <a href="<?php echo $antique; ?>" class="purch_item_link purch_item-col_link">
            <div class="purch_item_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tansu.webp" alt="古道具・アンティーク家具" />
            </div>
            <h3 class="purch_item_ttl different_top_ttl">
            古道具<br />
            アンティーク家具
            </h3>
            <div class="simple_btn">
            <p>MORE</p>
            </div>
        </a>
        <a href="https://ryugunosake.com/" target="_blank" class="purch_item_link purch_item-col_link">
            <div class="purch_item_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Alcohol.webp" alt="洋酒・ウイスキー・世界の酒" />
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/camera.webp" alt="昭和レトロ・大正モダン・玩具・時計等" />
            </div>
            <h3 class="purch_item_ttl">
            昭和レトロ<br class="is-pc" />
            大正モダン<span class="is-pc">・</span
            ><br class="is-sp" />玩具<br class="is-pc" />
            カメラ<span class="is-pc">・</span><br class="is-sp" />時計等
            </h3>
            <div class="simple_btn">
            <p>MORE</p>
            </div>
        </a>
        </div>
    </div>
    </section>