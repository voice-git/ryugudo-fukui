<?php
/*
Template Name: サンクスページ（来店予約）
*/
?>
<?php get_header(); ?>
    <main class="main">
      <div class="l_fv">
        <div class="l_fv_back">
          <div class="sec_ttl_box reserved02-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">来店予約</h2>
            <p class="sec_sub_ttl">Visit Reservation</p>
          </div>
        </div>
      </div>
      <section class="reserved form">
        <div class="container-in">
          <div class="reserved-step3">
            <div class="form_top thanks form_completion">
              <p>
                送信完了しました。<br />
                こちらからご確認次第ご返信後、<br />
                予約確定とさせていただきます。
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
