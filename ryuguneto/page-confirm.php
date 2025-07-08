<?php
/*
Template Name: 確認ページ（お問い合わせ）
*/
?>
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
          <div class="reserved-step2">
            <div class="form_top confirm">
              <p>入力内容にお間違いがないかどうかご確認ください。</p>
              <?php echo do_shortcode('[contact-form-7 id="a7820d0" title="確認（お問い合わせ）"]'); ?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>