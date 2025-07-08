<?php
/*
Template Name: 確認ページ（出張予約）
*/
?>
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
          <div class="reserved-step2">
            <div class="form_top">
              <p>
                入力内容にお間違いがないかどうかご確認ください。
              </p>
              <?php echo do_shortcode('[contact-form-7 id="e79ade9" title="確認（出張予約）"]'); ?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>