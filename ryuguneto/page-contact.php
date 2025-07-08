<?php get_header(); ?>
    <main class="main">
      <div class="l_fv">
        <div class="l_fv_back">
          <div class="sec_ttl_box contact-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">お問合わせ</h2>
            <p class="sec_sub_ttl">Contact</p>
          </div>
        </div>
      </div>
      <section class="reserved form">
        <div class="container-in">
          <div class="reserved-step1">
            <div class="form_top">
              <p>
                メールフォームからのお問合わせには<br class="is-pc">お時間をいただいております。お急ぎの方はお電話下さい。
              </p>
              <div class="form_top_tel">
              <a href="tel:0120-947-265"><img src="<?php echo get_template_directory_uri(); ?>/img/form-tel.webp" alt="電話番号" class="is-pc"/></a>
              <a href="tel:0120-947-265"><img src="<?php echo get_template_directory_uri(); ?>/img/form-tel-sp.png" alt="電話番号" class="is-sp"/></a>
              </div>
            </div>
            <div class="form_required_txt">
              ＊印のある項目は入力必須となります。
            </div>
            <div>
              <?php echo do_shortcode('[contact-form-7 id="4ae6276" title="お問い合わせ"]'); ?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>