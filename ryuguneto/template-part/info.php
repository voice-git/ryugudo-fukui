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

<!-------------- info ---------------->
<section class="info_footer">
    <div class="container-in">
        <div class="info">
        <div class="info_tel">
            <a href="tel:0120-947-265">
                <img src="<?php echo get_template_directory_uri(); ?>/img/info-tel-pc.webp" alt="" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/info-tel-sp.webp" alt="" class="is-sp" />
            </a>
        </div>
        <div class="info_btn_wrapper">
              <a href="<?php echo $reservation01; ?>" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-syuchou.webp" alt="出張予約" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-trip-info.webp" alt="出張予約" class="is-sp" />
              </a>
              <!-- <a href="<?php echo $reservation02; ?>" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-raiten.webp" alt="来店予約" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-raiten.webp" alt="来店予約" class="is-sp" />
              </a> -->
              <a href="<?php echo $contact; ?>" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-contact.webp" alt="お問い合わせ" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-contact-info.webp" alt="お問い合わせ" class="is-sp" />
              </a>
              <a href="https://line.me/ti/p/YD-7m1oJXw" target="_blank" class="info_btn">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-line.webp" alt="LINEお問い合わせ" class="is-pc" />
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-line-info.webp" alt="LINEお問い合わせ" class="is-sp" />
              </a>
        </div>
    </div>
</section>