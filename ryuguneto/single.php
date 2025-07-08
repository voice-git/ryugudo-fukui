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
  <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
    <main class="main">
      <div class="l_fv">
        <div class="l_fv_back">
          <div class="sec_ttl_box news-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">お知らせ</h2>
            <p class="sec_sub_ttl">News</p>
          </div>
        </div>
      </div>
      <section class="l_single">
        <div class="container-in">
          <div class="l_single_box">
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="published"><?php echo get_the_date('Y.m.d'); ?></time>
            <h3 class="l_single_ttl post_ttl">
              <?php the_title(); ?>
            </h3>
            <?php if (has_post_thumbnail()) : ?>
            <div class="l_single_img">
              <?php the_post_thumbnail('full'); ?>
            </div>
            <?php endif; ?>
            <div class="l_single_txt">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="l_single_btn_wrapper">
            <div class="l_single_btn_prev">
              <p class="is-pc"><?php previous_post_link('%link', '前の記事へ'); ?></p>
              <p class="is-sp"><?php previous_post_link('%link', ''); ?></p>
            </div>
            <div class="l_single_all_btn sec_btn">
              <a href="<?php echo $news; ?>">一覧へ戻る</a>
            </div>
            <div class="l_single_btn_next">
              <p class="is-pc"><?php next_post_link('%link', '次の記事へ'); ?></p>
              <p class="is-sp"><?php next_post_link('%link', ''); ?></p>
            </div>
          </div>
        </div>
      </section>
      <?php get_template_part('./template-part/info'); ?>
    </main>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>