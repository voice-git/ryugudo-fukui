<?php get_header(); ?>
    <main class="main">
      <div class="l_fv">
        <div class="l_fv_back">
          <div class="sec_ttl_box reserved01-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">出張予約</h2>
            <p class="sec_sub_ttl">Trip Reservation</p>
          </div>
        </div>
      </div>
      <section class="reserved form">
        <div class="container-in">
          <div class="reserved-step1">
            <div class="form_top">
              <p>
                ご予約はこちらからのご予約確定の返信がありましたら確定となります。<br class="is-pc" />
                返信がない場合はお電話にてお問合せお願いします。<br class="is-pc"/>当日お急ぎのお客様や品数が多い場合や相談ごとがある場合は<br class="is-pc"/>お電話にてお問合せお願いします。
              </p>
              <div class="form_top_tel">
                <a href="tel:0120-947-265"><img src="<?php echo get_template_directory_uri(); ?>/img/form-tel.webp" alt="電話番号" class="is-pc"/></a>
                <a href="tel:0120-947-265"><img src="<?php echo get_template_directory_uri(); ?>/img/form-tel-sp.png" alt="電話番号" class="is-sp"/></a>
              </div>
            </div>
            <div class="form_required_txt">
              ＊印のある項目は入力必須となります。
            </div>
            <?php echo do_shortcode('[contact-form-7 id="e8082b5" title="出張予約"]'); ?>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>