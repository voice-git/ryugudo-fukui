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
    <main class="main">
      <div class="l_fv">
        <div class="l_fv_back">
          <div class="sec_ttl_box blog-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="" />
            </div>
            <h2 class="sec_ttl">スタッフブログ</h2>
            <p class="sec_sub_ttl">STAFF BLOG</p>
          </div>
        </div>
      </div>
      <section class="l_archive">
        <div class="container-in">
        <?php if (have_posts()): ?>
          <ul class="t_news_wrapper l_archive_wrapper">
            <?php while (have_posts()) : the_post(); ?>
            <li class="t_news_item">
              <a href="<?php the_permalink(); ?>">
                <div class="t_news_img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full'); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/test-purchase1.webp" alt="" />
                <?php endif; ?>
                </div>
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="published"><?php echo get_the_date('Y.m.d'); ?></time>
                <h3 class="t_news_ttl post_ttl">
                  <?php the_title(); ?>
                </h3>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>
          <section class="parts_pagenation">
            <div class="archive_icon">
              <img src="<?php echo get_template_directory_uri(); ?>/img/archive-icon.webp" alt="">
            </div>
            <div class="l_arhcive_pagenation">
              <div class="post-navigation is-pc">
                <?php the_posts_pagination(
                    array(
                        'prev_text' => '<img src="'.get_template_directory_uri().'/img/prev-white-icon.png" alt="前へ"/>',
                        'next_text' => '<img src="'.get_template_directory_uri().'/img/arrow-white-icon.png" alt="前へ"/>',
                        'show_all' => false,
                        'end_size' => 1,
                        'mid_size' => 2,
                    )
                ); ?>       
              </div>
              <div class="post-navigation is-sp">
                <?php the_posts_pagination(
                    array(
                        'prev_text' => '<img src="'.get_template_directory_uri().'/img/prev-white-icon.png" alt="前へ"/>',
                        'next_text' => '<img src="'.get_template_directory_uri().'/img/arrow-white-icon.png" alt="前へ"/>',
                        'show_all' => false,
                        'end_size' => 1,
                        'mid_size' => 1,
                    )
                ); ?>       
              </div>           
            </div>
          </section>
        </div>
      </section>
      <?php get_template_part('./template-part/info'); ?>
    </main>
<?php get_footer(); ?>