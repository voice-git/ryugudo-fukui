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

<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PDY1PR3RBR"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-PDY1PR3RBR');
    </script>
	  	  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TGFB2Z3Z');</script>
<!-- End Google Tag Manager -->
	  
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon/cropped-new-favi-32x32.png" sizes="32x32" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon/cropped-new-favi-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/cropped-new-favi-180x180.png" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon/cropped-new-favi-270x270.png" />
    <title>竜宮堂</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Shippori+Mincho&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      rel="stylesheet"
    />
    <?php wp_head(); ?>
  </head>

  <body <?php if(is_page('sigyo')){ echo 'class="sigyo"'; } elseif(is_page('genre-kutani')){ echo 'class="genre-kutani"'; } ?>>
	  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGFB2Z3Z"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	  
    <!-- Header -->
    <header class="header">
      <div class="header-inner">
        <h1 class="logo">
          <a href="<?php echo $home; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="竜宮堂" />
          </a>
        </h1>
        <nav class="nav">
          <ul class="nav-list">
            <li><a href="<?php echo $newcustomer; ?>">初めての方へ</a></li>
            <li class="has-child">
              <a href="javascript:void();">買取アイテム</a>
              <div class="megaMenu">
                <ul>
                  <li><a href="<?php echo $kutani; ?>" class="wrap-lh">越前焼・河和田塗・九谷焼・輪島塗・<br>その他漆芸品</a></li>
                  <li><a href="<?php echo $gold; ?>">金・プラチナ・銀製品</a></li>
                  <li><a href="<?php echo $antique; ?>">古道具・アンティーク家具</a></li>
                  <li>
                    <a href="<?php echo $retro; ?>">昭和レトロ･大正モダン・玩具・カメラ・時計等</a>
                  </li>
                  <li><a href="<?php echo $kotto; ?>">骨董・古美術</a></li>
                  <li><a href="<?php echo $chadougu; ?>">茶道具類</a></li>
                  <li><a href="https://ryugunosake.com/" target="_blank">洋酒・ウィスキー・世界の酒</a></li>
                  <li><a href="<?php echo $china; ?>">中国美術品</a></li>
                  <li><a href="<?php echo $kakejiku; ?>">書画･掛軸･絵画･屏風</a></li>
                  <li><a href="<?php echo $youshoku; ?>">西洋アンティーク･洋食器</a></li>
                </ul>
              </div>
            </li>
            <li><a href="<?php echo $auction; ?>">竜宮オークション</a></li>
            <li><a href="<?php echo $recruit; ?>">リクルート</a></li>
            <li><a href="<?php echo $sigyo; ?>">士業の方へ</a></li>
          </ul>
        </nav>
        <ul class="right-nav">
          <li>
            <a href="<?php echo $reservation01; ?>"
              ><img src="<?php echo get_template_directory_uri(); ?>/img/header_truck.png" alt="トラックアイコン" class="header-truck" />
              <p>出張予約</p></a
            >
          </li>
          <!-- <li>
            <a href="<?php echo $reservation02; ?>"
              ><img
                src="<?php echo get_template_directory_uri(); ?>/img/header-reserved-icon.png"
                alt="来店予約"
                class="header-reserved"
              />
              <p>来店予約</p></a
            >
          </li> -->
          <li>
            <a href="<?php echo $contact; ?>"
              ><img
                src="<?php echo get_template_directory_uri(); ?>/img/header-icon-mail.png"
                alt="お問合わせ"
                class="header-contact"
              />
              <p>お問合わせ</p></a
            >
          </li>
          <div class="is-sp">
            <li class="sp-header-line-icon">
              <a href="https://line.me/ti/p/YD-7m1oJXw" target="_blank"
                ><img src="<?php echo get_template_directory_uri(); ?>/img/sp-header-line-icon.png" alt="LINEお問合わせ" />
                <p>お問合わせ</p></a
              >
            </li>
          </div>
        </ul>
      </div>
    </header>

    <div class="hamburger-menu">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </div>

    <div class="drawer-menu">
      <div class="drawer-menu_wrapper">
        <div class="drawer-menu-left">
          <h2 class="drawer-menu-left_ttl">買取アイテム</h2>
          <div class="purch_item_wrapper">
            <a href="<?php echo $kutani; ?>" class="purch_item_link purch_item1_link">
              <div class="purch_item_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/yoshidaya.webp" alt="九谷焼・輪島塗" />
              </div>
              <h3 class="purch_item_ttl">
                越前焼<br />
                河和田塗<br />
                九谷焼<br />
                輪島塗<br />
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
            <a href="https://ryugunosake.com/" class="purch_item_link purch_item-col_link" target="_blank">
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/camera.webp" alt="昭和レトロ・大正モダン・玩具･カメラ・時計等" />
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
          <div class="is-sp">
            <div class="drawer-info_footer">
              <ul class="drawer-info_footer_list">
                <li><a href="<?php echo $qa; ?>">よくある質問</a></li>
                <li><a href="<?php echo $privacypolicy; ?>">プライバシーポリシー</a></li>
              </ul>
              <ul class="footer_sns">
                <li>
                  <a href="https://www.facebook.com/u.ryugudou" target="_blank"
                    ><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook" class="facebook-icon"
                  /></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/ryugudou/" target="_blank"
                    ><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="instagram-icon"
                  /></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UCAj9xv4MomHO_o_41Ma_Nug" target="_blank"
                    ><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="youtube" class="youtube-icon"
                  /></a>
                </li>
                <li>
                  <a href="https://x.com/ryugudou" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/x.png" alt="X" class="x-icon" /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="drawer-menu_right">
          <ul class="drawer-nav-list">
            <li><a href="<?php echo $newcustomer; ?>">初めての方へ</a></li>
            <li><a href="<?php echo $recruit; ?>">リクルート</a></li>
            <li><a href="<?php echo $buylist; ?>">買取実績</a></li>
            <li><a href="<?php echo $company; ?>">会社概要</a></li>
            <li><a href="<?php echo $kaitori; ?>">出張買取</a></li>
            <li><a href="<?php echo $news; ?>">お知らせ</a></li>
            <li><a href="<?php echo $auction; ?>">竜宮オークション</a></li>
            <li><a href="<?php echo $column; ?>">スタッフブログ</a></li>
            <li><a href="<?php echo $sigyo; ?>">士業の方へ</a></li>
          </ul>
          <ul class="drawer-nav_btn_list">
            <li>
              <a href="<?php echo $reservation01; ?>"
                ><img
                  src="<?php echo get_template_directory_uri(); ?>/img/header_truck.png"
                  alt="出張予約"
                  class="truck-icon"
                />出張予約</a
              >
            </li>
            <!-- <li>
              <a href="<?php echo $reservation02; ?>"
                ><img
                  src="<?php echo get_template_directory_uri(); ?>/img/header-reserved-icon.png"
                  alt="来店予約"
                  class="reserved-icon"
                />来店予約</a
              >
            </li> -->
            <li class="line-btn">
              <div class="is-sp sp-header-line_btn">
                <a href="https://line.me/ti/p/YD-7m1oJXw" target="_blank"
                  ><img
                    src="<?php echo get_template_directory_uri(); ?>/img/line-icon.png"
                    alt="LINEお問合わせ"
                    class="mail-icon"
                  />LINE<br>
                  お問合わせ</a
                >
              </div>
            </li>
            <li>
              <div class="is-sp sp-header-contact_btn">
                <a href="<?php echo $contact; ?>"
                  ><img
                    src="<?php echo get_template_directory_uri(); ?>/img/header-icon-mail.png"
                    alt="お問い合わせ"
                    class="mail-icon"
                  />お問い合わせ</a
                >
              </div>
            </li>
          </ul>
          <div class="drawer-info-wrapper">
            <a href="tel:0120-947-265" class="drawer-info">
              <h2 class="drawer-info_ttl">査定依頼・お問合わせ</h2>
              <div class="drawer-info_img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tel.webp" alt="電話番号" />
              </div>
              <div class="drawer-info_time">受付時間<span>7:30-17:30</span>/日・祝<span>9:00-16:30</span></div>
            </a>
            <ul class="drawer-info-right is-pc">
              <li>
                <a href="<?php echo $contact; ?>"
                  ><img
                    src="<?php echo get_template_directory_uri(); ?>/img/header-icon-mail.png"
                    alt="お問い合わせ"
                    class="mail-icon"
                  />お問い合わせ</a
                >
              </li>
              <li class="line-btn">
                <a href="https://line.me/ti/p/YD-7m1oJXw" target="_blank"
                  ><img
                    src="<?php echo get_template_directory_uri(); ?>/img/line-icon.png"
                    alt="LINEお問合わせ"
                    class="mail-icon"
                  />LINE<br>
                  お問合わせ</a
                >
              </li>
            </ul>
          </div>
          <div class="is-pc">
            <div class="drawer-info_footer">
              <ul class="drawer-info_footer_list">
                <li><a href="<?php echo $qa; ?>">よくある質問</a></li>
                <li><a href="<?php echo $privacypolicy; ?>">プライバシーポリシー</a></li>
              </ul>
              <ul class="footer_sns">
                <li>
                  <a href="https://www.facebook.com/u.ryugudou" target="_blank"
                    ><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook" class="facebook-icon"
                  /></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/ryugudou/" target="_blank"
                    ><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="instagram-icon"
                  /></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UCAj9xv4MomHO_o_41Ma_Nug" target="_blank"
                    ><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="youtube" class="youtube-icon"
                  /></a>
                </li>
                <li>
                  <a href="https://x.com/ryugudou" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/x.png" alt="X" class="x-icon" /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
