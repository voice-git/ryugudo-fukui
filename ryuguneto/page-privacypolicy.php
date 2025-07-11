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
      <section class="policy">
        <div class="container-in">
          <div class="sec_ttl_box">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">プライバシーポリシー</h2>
            <p class="sec_sub_ttl">PRIVACY POLICY</p>
          </div>
          <div class="policy_wrapper">
            <p class="policy_read">
              株式会社
              浦嶋（以下「当社」）は、以下のとおり個人情報保護方針を定め、<br />
              個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを<br />
              徹底させることにより、個人情報の保護を推進致します。
            </p>
            <ul class="policy_content">
              <li>
                <h2>個人情報の管理</h2>
                <p>
                  当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
                </p>
              </li>
              <li>
                <h2>個人情報の利用目的</h2>
                <p>
                  お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。
                </p>
              </li>
              <li>
                <h2>個人情報の第三者への開示・提供の禁止</h2>
                <p>
                  当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第に開示いたしません。<br />
                  ・お客さまの同意がある場合<br />
                  ・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合<br />
                  ・法令に基づき開示することが必要である場合
                </p>
              </li>
              <li>
                <h2>個人情報の安全対策</h2>
                <p>
                  当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。
                </p>
              </li>
              <li>
                <h2>ご本人の照会</h2>
                <p>
                  お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。
                </p>
              </li>
              <li>
                <h2>法令、規範の遵守と見直し</h2>
                <p>
                  当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。
                </p>
              </li>
            </ul>
            <div class="policy_contact">
              お問い合せ<br />
              <span>当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。</span><br />
              株式会社 浦嶋 【竜宮堂】<br />
              〒920-0052 石川県金沢市薬師堂町イ52<br />
              TEL:076-255-0065
            </div>
          </div>
        </div>
      </section>
      <?php echo get_template_part('./template-part/info'); ?>
    </main>

    <?php get_footer(); ?>