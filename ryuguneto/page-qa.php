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
      <section class="qa">
        <div class="container-in">
          <div class="sec_ttl_box">
            <div class="sec_ttl_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/chara.webp" alt="ロゴ" />
            </div>
            <h2 class="sec_ttl">よくあるご質問</h2>
            <p class="sec_sub_ttl">QUESTION</p>
          </div>
          <div class="qa_wrapper">
            <div class="faq-item">
              <!-- 初期状態で開いている -->
              <button class="faq-question">
                買取にはどのような方法がありますか？<span class="faq-icon">ー</span>
              </button>
              <div class="faq-answer">
                ●出張買取<br>
                専門の査定員がご指定日にお伺いし、その場で鑑定・買取をさせていただきます。<br>
                持込による負担を軽減できます。大量にある場合・重たくて持ち込みできない等、破損等のリスクも軽減できます。<br>
                お客様の方で価値がわからない品をプロ目線で発見できます。<br>
                お家の中の断捨離前やリフォームや解体前に是非こちらのサービスをご利用くださいませ。<br>
                近年、骨董品や美術品を相続時の買取のご依頼を沢山いただいております。 お見積のみでも大歓迎です。<br>
                <br>
                ●店頭買取<br>
                その場で査定して買取即現金にてお支払いいたします。お気軽にご来店ください。お見積のみも大歓迎です。<br>
                査定士が出張買取で不在の場合もあります。事前にお電話いただければ確実です。
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
              査定は無料ですか？<span
                  class="faq-icon"
                  >+</span
                >
              </button>
              <div class="faq-answer">
                北陸三県共にどこでも店頭買取も出張買取ももちろん無料です。<br>
                点数が少量の場合やお品よっては店頭にてお持ち込みをお願いする場合もございます。
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
              無料出張買取の対応エリアを教えてください。<span class="faq-icon"
                  >+</span
                >
              </button>
              <div class="faq-answer">
              【石川県】<br>
              金沢市、川北町、七尾市、津幡町、小松市、内灘町、輪島市、志賀町、珠洲市、宝達志水町、加賀市、中能登町、羽咋市、穴水町、かほく市、能登町、白山市、能美市、野々市市<br>
              【富山県】<br>
              富山市、高岡市、魚津市、氷見市、滑川市、黒部市、砺波市、小矢部市、南砺市、射水市、舟橋村、上市町、立山町、入善町、朝日町<br>
              【福井県】<br>
              福井市、敦賀市、小浜市、大野市、勝山市、鯖江市、あわら市、越前市、坂井市、永平寺町、池田町、南越前町、越前町、美浜町、高浜町、おおい町、若狭町
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
              買取に必要なものは？<span
                  class="faq-icon"
                  >+</span
                >
              </button>
              <div class="faq-answer">
                お客様ご本人の身分証をご用意ください。<br>
                （運転免許証／健康保険証／パスポート／マイナンバーカード／在留カード／特別永住者証明書／住民票（発行から３か月以内の原本）<br>
                法人様の場合は別途ご案内させていただきます。
              </div>
            </div>

            <div class="faq-item">
              <button class="faq-question">
              買取が成立しなかった場合どうなりますか？<span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
              買取価格にご納得頂けなかった場合は、お断りいただいて問題ございません。<br>
              買取不成立の場合でも、出張費や査定料の費用は一切必要ありませんのでご安心ください。
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-question">
              汚れたままになっている物や壊れている物もあるのですが大丈夫ですか？<span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
              そのままで結構です。なるべく捨てたりしないでご依頼くださいませ。<br>
              思ってもみなかった物が買取の対象となるケースが多々あります！<br>
              経験豊富なプロの目線で価値あるモノを見逃しません！
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-question">
              車で伺う予定ですが、駐車場はありますか？<span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
              広い駐車スペースがありますのでご安心くださいませ。
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-question">
              友人や知人から依頼されて売却する場合に必要なものは？<span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
              友人や知人が代理人としての買取は基本的には取扱いしておりませんが<br>
              下記の条件を満たす場合はこの限りではございません。<br>
              <br>
              ●相続人や士業の方や成年後見人の場合は対応可能です。<br>
              ●委任状のみの場合は下記４点の書類が必要です。<br>
              <br>
              ①委任状<br>
              ②代理人の本人確認書類の確認・記録、コピーの取得<br>
              ③取引者本人の本人確認書類（コピー可）の確認・記録、コピーの取得<br>
              ④金融機関の口座番号がわかるもの（取引者本人名義に限る）もしくは成年後見人であれば買取可能です。
              </div>
            </div>
            <div class="faq-item">
              <button class="faq-question">
              未成年でも買取可能ですか？<span class="faq-icon">+</span>
              </button>
              <div class="faq-answer">
              未成年からの買取は取扱いしておりません。
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php echo get_template_part('./template-part/info'); ?>
    </main>

<?php get_footer(); ?>