<?php


function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
// 	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

// Google Fontsのpreconnectリンクを追加する
function add_google_fonts_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'add_google_fonts_preconnect', 0 );

// css読み込み
function my_css() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Zen+Maru+Gothic:wght@400;500;700&display=swap', array(), null);
	wp_enqueue_style("typekit", "https://use.typekit.net/nwy1wcj.css", array(), null, "all");
	wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'slick-theme-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.1', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_css' );

// JS読み込み
function my_script() {
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.js', "", "1.1.1");
	wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', "", "1.1.1");
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array( 'jquery' ), '1.0.1');
	wp_enqueue_script( 'assets', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.1');
}
add_action( 'wp_enqueue_scripts', 'my_script' );


 
// 買取実績ページ表示件数
function my_pre_get_posts($query) {
if (!is_admin() && $query->is_main_query() && is_post_type_archive('buylist')) {
  $query->set('posts_per_page', 8);
  }
}
add_action('pre_get_posts', 'my_pre_get_posts');

// Contact form 7 タグ削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

// contact form 7 バリデーション追加
add_action(
	'wpcf7_swv_create_schema',
	'wpcf7_swv_add_checkbox_rules_horibe',
	9, 2
);

function wpcf7_swv_add_checkbox_rules_horibe( $schema, $contact_form ) {
	$tags = $contact_form->scan_form_tags( array(
		'type' => array( 'checkbox*', 'radio' ),
	) );

	foreach ( $tags as $tag ) {
		$schema->add_rule(
			wpcf7_swv_create_rule( 'required', array(
				'field' => $tag->name,
				'error' => '選択してください',
			) )
		);
	}
}

function cf7_home_url() {
    return esc_url( home_url( '/' ) );
}
wpcf7_add_form_tag('home_url', 'cf7_home_url'); 

// themeUrl定義
function add_theme_url_to_js() {
    ?>
    <script>
        var themeUrl = "<?php echo get_template_directory_uri(); ?>";
    </script>
    <?php
}
add_action('wp_footer', 'add_theme_url_to_js');

//お品物の来歴 入力チェック
add_filter('wpcf7_validate_checkbox', 'custom_history_validation', 20, 2);
add_filter('wpcf7_validate_textarea', 'custom_history_validation', 20, 2);
function custom_history_validation($result, $tag) {
  $referer = $_SERVER['HTTP_REFERER'] ?? '';
  if (strpos($referer, 'reservation01') === false) {
    return $result; // 違うページからならバリデーションしない
  }
  
  $tag_name = $tag->name;

  $checkbox_name = 'checkbox-774';
  $textarea_name = 'item-history';

  $checkbox_value = isset($_POST[$checkbox_name]) ? $_POST[$checkbox_name] : [];
  $textarea_value = isset($_POST[$textarea_name]) ? trim($_POST[$textarea_name]) : '';

  if ($tag_name === $checkbox_name || $tag_name === $textarea_name) {
    $is_checkbox_checked = is_array($checkbox_value) && count($checkbox_value) > 0;
    $is_text_filled = $textarea_value !== '';

    if (!$is_checkbox_checked && !$is_text_filled) {
      $result->invalidate($tag, 'お品物の来歴を入力してください。');
    }
  }

  return $result;
}

//reCAPTCHA
function load_recaptcha_js(){
 if (!(is_page(array("contact","reservation01","reservation02","confirm","confirm01","confirm02")))){
  wp_deregister_script( 'google-recaptcha' );
 }
}
add_action( 'wp_enqueue_scripts', 'load_recaptcha_js',100 );