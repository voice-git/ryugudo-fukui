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
<!-------------- footer ---------------->
<footer class="footer">
      <div class="container">
        <div class="footer_wrapper">
          <div class="footer_left">
            <div class="footer_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.webp" alt="竜宮堂" />
            </div>
            <div class="footer_info">
              <p class="footer_info_code">
                〒910-0854 福井県福井市御幸4丁目13-10<br class="is-sp">
                <span>Tel.0776-31-2933</span>
              </p>
              <p class="footer_info_permission">
                美術品商許可 石川県公安委員会 第511020011799号<br />
                美術品市場許可 石川県公安委員会 第511020000077号
              </p>
            </div>
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
                <a href="https://twitter.com/ryugudou" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/x.png" alt="X" class="x-icon" /></a>
              </li><li><a href="https://www.tiktok.com/@ryugudou" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tic.png" alt="TikTok" class="tik-icon"/></a></li>
            </ul>
            <p class="copy">&copy;RYUGUDO Co.,LTD</p>
          </div>
          <div class="footer_right">
            <div class="footer_cat_nav is-pc">
              <p class="footer_cat_ttl">買取カテゴリー</p>
              <ul class="footer_cat_nav_list">
                <li><a href="<?php echo $kutani; ?>">越前焼･河和田塗･九谷焼･輪島塗•その他漆芸品</a></li>
                <li><a href="<?php echo $kotto; ?>">骨董･古美術品</a></li>
                <li><a href="<?php echo $china; ?>">中国美術品</a></li>
                <li><a href="<?php echo $gold; ?>">金･プラチナ･銀製品</a></li>
                <li><a href="<?php echo $chadougu; ?>">茶道具類</a></li>
                <li><a href="<?php echo $kakejiku; ?>">書画･掛軸･絵画･屏風</a></li>
                <li><a href="<?php echo $antique; ?>">古道具･アンティーク家具</a></li>
                <li><a href="https://ryugunosake.com/" target="_blank">洋酒･ウィスキー･世界の酒</a></li>
                <li><a href="<?php echo $youshoku; ?>">西洋アンティーク･洋食器</a></li>
                <li>
                  <a href="<?php echo $retro; ?>">昭和レトロ･大正モダン<br>玩具･カメラ･時計等</a>
                </li>
              </ul>
            </div>
            <div class="footer_main_nav">
              <ul class="footer_nav_list is-pc">
                <li><a href="<?php echo $newcustomer; ?>">初めての方へ</a></li>
                <li><a href="<?php echo $buylist; ?>">買取実績</a></li>
                <li><a href="<?php echo $kaitori; ?>">出張買取</a></li>
                <li><a href="<?php echo $auction; ?>">竜宮オークション</a></li>
                <li><a href="<?php echo $sigyo; ?>">士業の方へ</a></li>
                <li><a href="<?php echo $recruit; ?>">リクルート</a></li>
                <li><a href="<?php echo $company; ?>">会社概要</a></li>
                <li><a href="<?php echo $news; ?>">お知らせ</a></li>
                <li><a href="<?php echo $column; ?>">スタッフブログ</a></li>
                <li><a href="<?php echo $qa; ?>">よくある質問</a></li>
                <li><a href="<?php echo $privacypolicy; ?>">プライバシーポリシー</a></li>
                <li><a href="<?php echo $reservation01; ?>">出張予約</a></li>
                <li><a href="<?php echo $contact; ?>">お問合わせ</a></li>
                <!-- <li><a href="<?php echo $reservation02; ?>">来店予約</a></li> -->
              </ul>
              <ul class="footer_nav_list is-sp">
                <li><a href="<?php echo $newcustomer; ?>">初めての方へ</a></li>
                <li><a href="<?php echo $news; ?>">お知らせ</a></li>
                <li><a href="<?php echo $buylist; ?>">買取実績</a></li>
                <li><a href="<?php echo $column; ?>">スタッフブログ</a></li>
                <li><a href="<?php echo $kaitori; ?>">出張買取</a></li>
                <li><a href="<?php echo $qa; ?>">よくある質問</a></li>
                <li><a href="<?php echo $auction; ?>">竜宮オークション</a></li>
                <li><a href="<?php echo $privacypolicy; ?>">プライバシーポリシー</a></li>
                <li><a href="<?php echo $sigyo; ?>">士業の方へ</a></li>
                <li><a href="<?php echo $reservation01; ?>">出張予約</a></li>
                <li><a href="<?php echo $recruit; ?>">リクルート</a></li>
                <li><a href="<?php echo $contact; ?>">お問合わせ</a></li>
                <li><a href="<?php echo $company; ?>">会社概要</a></li>
                <!-- <li><a href="<?php echo $reservation02; ?>">来店予約</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php wp_footer(); ?>
    </footer>

    <!-------------- LINE固定 ---------------->
    <div class="line_fixed">
      <a href="https://line.me/ti/p/YD-7m1oJXw" target="_blank" class="line_fixed_img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/line-fix.png" alt="LINE" />
      </a>
    </div>

    <!-------------- 固定下部 ---------------->
    <div class="bottom_fixed">
      <a href="<?php echo $contact; ?>" class="bottom_fixed_wrapper">
        <!-- <div class="bottom_fixed_left">
          <div class="bottom_fixed_left_top">北陸の骨董品買取は</div>
          <div class="bottom_fixed_left_center">石川県の竜宮堂へ</div>
          <div class="bottom_fixed_left_code">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bottom-fixed-code.png" alt="住所" />
          </div>
        </div>
        <div class="bottom_fixed_right">
          <div class="bottom_fixed_right_img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bottom-fixed-ttl.png" alt="電話番号" />
          </div>
        </div> -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/bottom-fixed-tel.webp" alt="" class="is-pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/bottom-fixed-tel_sp.webp" alt="" class="is-sp">
      </a>
    </div>
  </body>
</html>
