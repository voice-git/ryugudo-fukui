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
          <div class="sec_ttl_box work-fv">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="" />
            </div>
            <h2 class="sec_ttl">買取実績</h2>
            <p class="sec_sub_ttl">Purchase results</p>
          </div>
        </div>
      </div>
      <article class="l_work">
        <div class="l_work_wrapper">
          <section class="sidebar">
            <div class="sidebar_wrap">
              <?php $term = get_queried_object(); if ( isset( $term->name ) ):?>
              <div class="sideber_ttl"><?php echo esc_html( $term->name ); ?></div>
              <?php endif; ?>
              <?php
                $queried_object = get_queried_object();
                $current_slug  = isset( $queried_object->slug ) ? $queried_object->slug : '';
              ?>
              <ul class="category-list">
                <li class="<?php echo ( !is_tax() ) ? 'is-active' : ''; ?>">
                  <a href="<?php echo esc_url( $buylist ); ?>">すべて</a>
                </li>
                <li class="<?php echo ( $current_slug === 'ware_purchase' ) ? 'is-active' : ''; ?>">
                  <a href="<?php echo esc_url( $home ); ?>jisseki_cat/ware_purchase/">九谷焼･輪島塗</a>
                </li>
                <li class="<?php echo ( $current_slug === 'antique_tools' ) ? 'is-active' : ''; ?>">
                  <a href="<?php echo esc_url( $home ); ?>jisseki_cat/antique_tools/">骨董･古美術品</a>
                </li>
                <li class="<?php echo ( $current_slug === 'china' ) ? 'is-active' : ''; ?>">
                  <a href="<?php echo esc_url( $home ); ?>jisseki_cat/china/">中国美術品</a>
                </li>
                <li class="<?php echo ( $current_slug === 'gold_jewelry' ) ? 'is-active' : ''; ?>">
                  <a href="<?php echo esc_url( $home ); ?>jisseki_cat/gold_jewelry/">金･プラチナ･銀製品</a>
                </li>
                <li class="<?php echo ( $current_slug === 'purchase-tea' ) ? 'is-active' : ''; ?>">
                  <a href="<?php echo esc_url( $home ); ?>jisseki_cat/purchase-tea/">茶道具類</a>
                </li>
                <li class="<?php echo ( $current_slug === 'hanging_scroll_purchase' ) ? 'is-active' : ''; ?>">
                  <a href="<?php echo esc_url( $home ); ?>jisseki_cat/hanging_scroll_purchase/">書画･掛軸･絵画･屏風</a>
                </li>
                <li class="<?php echo ( $current_slug === 'antique' ) ? 'is-active' : ''; ?>">
                  <a href="<?php echo esc_url( $home ); ?>jisseki_cat/antique/">古道具･アンティーク家具</a>
                </li>
                <li class="<?php echo ( $current_slug === 'western_style_antique' ) ? 'is-active' : ''; ?>">
                  <a href="<?php echo esc_url( $home ); ?>jisseki_cat/western_style_antique/">西洋アンティーク･洋食器</a>
                </li>
                <li>
                  <a href="https://ryugunosake.com/" target="_blank">洋酒･ウィスキー･世界の酒</a>
                </li>
                <li class="<?php echo ( $current_slug === 'retro_goods_purchase' ) ? 'is-active' : ''; ?>">
                  <a href="<?php echo esc_url( $home ); ?>jisseki_cat/retro_goods_purchase/">昭和レトロ･大正モダン･ 玩具･カメラ･時計等</a>
                </li>
              </ul>
            </div>
          </section>
          <section class="l_work_wrap">
          <?php if (have_posts()): ?>
            <ul class="l_work_items">
              <?php while (have_posts()) : the_post(); ?>
              <?php 
                $terms = get_the_terms($post->ID,'jisseki_cat');
              ?>
              <li class="l_work_item" id="post-<?php the_ID(); ?>">
                <div class="l_work_item_img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full'); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/test-purchase1.webp" alt="" />
                  <?php endif; ?>
                </div>
                <div class="l_work_item_right">
                  <div class="l_work_item_right_head">
                    <div class="l_work_item_info">
                      <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="published"><?php echo get_the_date('Y.m.d'); ?></time>
                      <?php if($terms): ?>
                      <div class="l_work_item_cat">
                        <?php foreach($terms as $term): ?>
                          <?php echo esc_html($term->name); ?>
                        <?php endforeach; ?>
                      </div>
                      <?php endif; ?>
                    </div>
                    <h3 class="l_work_ttl post_ttl">
                      <?php echo the_title(); ?>
                    </h3>
                  </div>
                  <div class="l_work_txt">
                    <?php the_content(); ?>
                  </div>
                  <button class="more-btn">
                    MORE<img src="<?php echo get_template_directory_uri(); ?>/img/plus-icon.png" alt="" />
                  </button>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php endif; ?>
          </section>
        </div>
        <section class="parts_pagenation">
          <div class="archive_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/archive-icon.webp" alt="" />
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
      </article>
      <?php get_template_part('./template-part/info'); ?>
    </main>
<?php get_footer(); ?>