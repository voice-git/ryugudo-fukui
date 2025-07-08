document.addEventListener("DOMContentLoaded", () => {
  const hamburgerMenu = document.querySelector(".hamburger-menu");
  const drawerMenu = document.querySelector(".drawer-menu");

  // ドロワーメニューの開閉
  hamburgerMenu.addEventListener("click", (e) => {
    e.preventDefault(); // デフォルト防止
    e.stopPropagation(); // 他のイベントを防ぐ

    const isOpen = drawerMenu.classList.contains("open");

    if (isOpen) {
      // ドロワーを閉じる
      drawerMenu.classList.remove("open");
      hamburgerMenu.classList.remove("open");
    } else {
      // ドロワーを開く
      drawerMenu.classList.add("open");
      hamburgerMenu.classList.add("open");
    }
  });

  // LINE・下部固定
  const bottomFixed = document.querySelector(".bottom_fixed");
  const lineFixed = document.querySelector(".line_fixed");
  const footer = document.querySelector(".footer");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // フッターが表示されたら非表示にする
          bottomFixed?.classList.add("hidden");
          lineFixed?.classList.add("hidden");
        } else {
          // フッターが見えなくなったら再表示
          bottomFixed?.classList.remove("hidden");
          lineFixed?.classList.remove("hidden");
        }
      });
    },
    {
      root: null, // ビューポートを基準
      threshold: 0, // フッターが1pxでも見えたら反応
    }
  );

  observer.observe(footer);

  // ヘッダー２階層目
  // const hasChildItems = document.querySelectorAll(".has-child");

  // hasChildItems.forEach((item) => {
  //   const link = item.querySelector("a");
  //   let childMenu = item.querySelectorAll(".megaMenu");
  //   childMenu = childMenu[0];

  //   link.addEventListener("click", (e) => {
  //     e.preventDefault(); // デフォルト動作を防止

  //     const isOpen = item.classList.contains("open");

  //     if (isOpen) {
  //       // 閉じる動作
  //       item.classList.remove("open");
  //       childMenu.style.maxHeight = `${childMenu.scrollHeight}px`; // 一旦現在の高さを設定
  //       requestAnimationFrame(() => {
  //         childMenu.style.maxHeight = "0"; // 高さを0に変更
  //       });
  //     } else {
  //       // 開く動作
  //       item.classList.add("open");
  //       childMenu.style.maxHeight = "0"; // 初期化
  //       requestAnimationFrame(() => {
  //         childMenu.style.maxHeight = `${childMenu.scrollHeight}px`; // 高さを内容に合わせて設定
  //       });
  //     }

  //     // トランジション終了後にmax-heightをリセット
  //     childMenu.addEventListener(
  //       "transitionend",
  //       () => {
  //         if (!isOpen) {
  //           childMenu.style.maxHeight = "none"; // 開いた状態では高さ制限を解除
  //         } else {
  //           childMenu.style.maxHeight = "0"; // 閉じた状態では高さを0にする
  //         }
  //       },
  //       { once: true } // 一度だけイベントを発火
  //     );
  //   });
  // });
});

// newsスライダー
jQuery(function ($) {
  const breakpoint = window.matchMedia('(max-width: 767px)');
  let sliderInitialized = false;

  const initializeSlider = () => {
    if (!sliderInitialized) {
      const dotsContainer = $('.dots-2');
      if (dotsContainer.length) {
        $('#js-slider-2').slick({
          arrows: true,
          dots: true,
          // appendDots: dotsContainer,
          speed: 1000,
          slidesToShow: 1,
          centerMode: true,
          variableWidth: true,
          dotsClass: 'slider-dots',
        });
        sliderInitialized = true;
      }
    }
  };


  const destroySlider = () => {
    if (sliderInitialized) {
      $('#js-slider-2').slick('unslick');
      sliderInitialized = false;
    }
  };

  const handleBreakpointChange = () => {
    if (breakpoint.matches) {
      initializeSlider();
    } else {
      destroySlider();
    }
  };

  handleBreakpointChange();
  breakpoint.addEventListener('change', handleBreakpointChange);
});
// blogスライダー
jQuery(function ($) {
  const breakpoint = window.matchMedia('(max-width: 767px)');
  let sliderInitialized = false;

  const initializeSlider = () => {
    if (!sliderInitialized) {
      const dotsContainer = $('.dots-3');
      if (dotsContainer.length) {
        $('#js-slider-3').slick({
          arrows: true,
          dots: true,
          appendDots: dotsContainer,
          speed: 1000,
          slidesToShow: 1,
          centerMode: true,
          variableWidth: true,
        });
        sliderInitialized = true;
      }
    }
  };

  const destroySlider = () => {
    if (sliderInitialized) {
      $('#js-slider-3').slick('unslick');
      sliderInitialized = false;
    }
  };

  const handleBreakpointChange = () => {
    if (breakpoint.matches) {
      initializeSlider();
    } else {
      destroySlider();
    }
  };

  handleBreakpointChange();
  breakpoint.addEventListener('change', handleBreakpointChange);
});

// 屏風スライダー
jQuery(document).ready(function($){
  $('.slick-slider-byobu').slick({
    autoplay: false,
    autoplaySpeed: 3000,
    dots: true,         // ドットナビゲーションを表示
    arrows: true,       // 前後の矢印を表示
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });
});

// オークションについてよくある質問
document.addEventListener("DOMContentLoaded", function () {
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach((item) => {
    const answer = item.querySelector(".faq-answer");
    const icon = item.querySelector(".faq-icon");

    // 初期状態ですべて閉じる (非表示状態)
    answer.style.maxHeight = "0px";
    answer.style.overflow = "hidden";
    icon.textContent = "＋";

    const question = item.querySelector(".faq-question");
    question.addEventListener("click", () => {
      const isOpen = item.classList.contains("open");

      // 他のすべてのアコーディオンを閉じる
      faqItems.forEach((faq) => {
        if (faq !== item) {
          faq.classList.remove("open");
          let ans = faq.querySelector(".faq-answer");
          ans.style.maxHeight = "0px"; // 高さを0にする
          faq.querySelector(".faq-icon").textContent = "＋";
        }
      });

      if (!isOpen) {
        item.classList.add("open");
        answer.style.maxHeight = answer.scrollHeight + "px"; // 開く
        answer.style.transition = "max-height 0.3s ease-out";
        icon.textContent = "ー";
      } else {
        item.classList.remove("open");
        answer.style.maxHeight = answer.scrollHeight + "px"; // 一度高さを固定
        setTimeout(() => {
          answer.style.maxHeight = "0px"; // スムーズに閉じる
        }, 10);
        icon.textContent = "＋";
      }
    });
  });
});

// 士業の方へスライダー
jQuery(function ($) {
  $('#js-slider-pro').slick({
	  slidesToShow: 1, // PCで表示するスライド数
	  slidesToScroll: 2,
	  autoplay: true,
	  autoplaySpeed: 4000,
	  speed: 1000, // スライドさせるスピード（ミリ秒）
	  dots: false, // ドットナビゲーションを有効化
	  arrows: false, // 矢印を非表示
	  centerMode: true, // センターモードを有効化
	  centerPadding: '10%', // 中央スライドの左右余白を調整
	  variableWidth: true, // スライド幅の自動計算を無効化
	  pauseOnFocus: false,
	  pauseOnHover: false,
	  pauseOnDotsHover: false,
	  responsive: [
		  {
			  breakpoint: 768, // スマホのブレイクポイント
			  settings: {
				  slidesToShow: 1, // スマホで表示するスライド数
				  slidesToScroll: 1,
				  centerMode: true, // センターモードを有効化
				  centerPadding: '0%', // 中央スライドの左右余白を調整
		  }
		}
	  ]
  });
});
// チェック吐き出し
document.addEventListener("DOMContentLoaded", function () {
  const inputs = document.querySelectorAll("input[name='radio-376[]']");
  const template = document.getElementById("template");

  if (!template) return; // ← template がないページではスクリプト終了

  // 複製された要素を入れるコンテナ（templateの親要素）
  const cloneContainer = template.parentElement;

  const addedItems = {};

  inputs.forEach(function (input) {
    input.addEventListener("change", function () {
      const selectedValue = this.value;
      if (this.checked) {
        if (template.style.display !== "none") {
          template.style.display = "none";
        }
        if (addedItems[selectedValue]) {
          return;
        }
        const clone = template.cloneNode(true);
        clone.removeAttribute("id");
        clone.style.display = "flex";
        // 複製された要素と判別するためのクラスを追加
        clone.classList.add("cloned-item");

        // 複製要素内のテキスト更新
        const quantityName = clone.querySelector(".contact-contents_quantity_name");
        if (quantityName) {
          quantityName.textContent = selectedValue;
        }
        // 初回の name 設定は後で順番に更新するので、とりあえず任意の値
        const inputField = clone.querySelector("input[name='item-quantity']");
        if (inputField) {
          inputField.setAttribute("name", "item-quantity-temp");
        }
        addedItems[selectedValue] = clone;
      } else {
        if (addedItems[selectedValue]) {
          addedItems[selectedValue].remove();
          delete addedItems[selectedValue];
        }
      }
      // 並び替えと番号の再設定
      reorderClones();
    });
  });

  // 並び替えと番号振りの関数
  function reorderClones() {
    // チェックボックスのDOM順に沿って再追加
    inputs.forEach(input => {
      if (input.checked && addedItems[input.value]) {
        cloneContainer.appendChild(addedItems[input.value]);
      }
    });

    // 現在の並び順に従って番号を再割り当て
    const clones = cloneContainer.querySelectorAll(".cloned-item");
    clones.forEach((clone, index) => {
      const inputField = clone.querySelector("input[name^='item-quantity']");
      if (inputField) {
        // 1からスタートする番号に更新
        inputField.setAttribute("name", "item-quantity-" + (index + 1));
      }
    });
  }
});


// フォーム画像添付
document.addEventListener("DOMContentLoaded", function () {
  const accordionButtons = document.querySelectorAll(".contact_accordion-button");

  accordionButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const accordionContent = this.nextElementSibling; // 直後の .contact_accordion-content を取得

      if (accordionContent.classList.contains("active")) {
        accordionContent.classList.remove("active");
        this.classList.remove("active");
        jQuery(this).next().slideUp();
      } else {
        accordionContent.classList.add("active");
        this.classList.add("active");
        jQuery(this).next().slideDown();
      }

      this.querySelector(".plus-icon").textContent =
        accordionContent.classList.contains("active") ? "−" : "＋";
    });
  });
});

// 買取実績MOREボタン
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".l_work_item").forEach(item => {
      const moreBtn = item.querySelector(".more-btn");
      const text = item.querySelector(".l_work_txt");
      const icon = document.createElement("img"); // アイコンを作成

      // 初期状態のアイコンを設定
      icon.src = themeUrl + "/img/plus-icon.png";
      icon.alt = "開く";
      icon.classList.add("toggle-icon");

      // ボタンのテキストを設定し、アイコンを追加
      moreBtn.innerHTML = "MORE ";
      moreBtn.appendChild(icon);

      moreBtn.addEventListener("click", function () {
          const isOpen = text.classList.toggle("open");

          // ボタンのテキストを変更
          moreBtn.childNodes[0].textContent = isOpen ? "CLOSE " : "MORE ";

          // アイコンの `src` を変更
          icon.src = isOpen ? themeUrl + "/img/minus-icon.png" : themeUrl + "/img/plus-icon.png";
          icon.alt = isOpen ? "閉じる" : "開く";

          // `.minus-icon` クラスを適切に追加 / 削除
          if (isOpen) {
              icon.classList.add("minus-icon");
          } else {
              icon.classList.remove("minus-icon");
          }
      });
  });
});

// 買取実績カテゴリー表示非表示
document.addEventListener("DOMContentLoaded", function () {
  const sideberTtl = document.querySelector(".sideber_ttl");
  const categoryList = document.querySelector(".category-list");

  if (sideberTtl && categoryList) {
    function toggleMenu() {
        if (window.innerWidth <= 768) { // SP版のみ適用
            categoryList.classList.toggle("open");
            sideberTtl.classList.toggle("active");
        }
    }
    sideberTtl.addEventListener("click", toggleMenu);
  }
});

jQuery(function($){
  // リクルート鑑定体験スライダー
  document.addEventListener("DOMContentLoaded", function () {
    function initSlick() {
        if (window.innerWidth <= 768) { // SP版のみ適用
            if (!$('.recruit_ex_wrapper').hasClass('slick-initialized')) { // slickが未適用なら適用
                $('.recruit_ex_wrapper').slick({
                    slidesToShow: 1,  // **表示枚数は可変**
                    slidesToScroll: 1, // **スワイプ時に1枚ずつ動く**
                    dots: true,  // インジケーター表示
                    arrows: false, // 矢印非表示
                    autoplay: false, // 自動スライドなし
                    infinite: false, // **無限ループなしで左端スタート**
                    initialSlide: 0, // **最初のスライドを左端に設定**
                    variableWidth: true, // **スライドの幅をコンテンツサイズに合わせる**
                    centerMode: false, // **中央配置を無効にする**
                    swipeToSlide: true, // **スワイプで自由にスクロール**
                    touchThreshold: 10, // **スワイプの反応を良くする**
                    rtl: false, // **右から左への動作を防ぐ**
                });
            }
        } else {
            if ($('.recruit_ex_wrapper').hasClass('slick-initialized')) { // PC版で適用されていたら解除
                $('.recruit_ex_wrapper').slick('unslick');
            }
        }
    }
  
    initSlick(); // 初回実行
    $(window).resize(function () {
        initSlick(); // 画面サイズ変更時に適用
    });
  });
});


//アニメーション
new WOW().init();

// 202503 追記
jQuery(function($){
  $('.has-child').click(function(){
    $(this).toggleClass('open');
    $(this).find('.megaMenu').slideToggle();
  });

  // form
/*
  setTimeout(function() {
    $('.reserved_hope input[name="your-hope1"], .reserved_hope input[name="your-hope2"], .reserved_hope input[name="your-hope3"]').each(function() {
      if ($(this).val().trim() !== "") {
        $(this).closest('.reserved_hope').addClass('inputed');
      }
    });
  }, 100); 

  $(document).on('change', '.reserved_hope input[name="your-hope1"]', function() {
    $(this).closest('.reserved_hope').addClass('inputed');
  });
  $(document).on('change', '.reserved_hope input[name="your-hope2"]', function() {
    $(this).closest('.reserved_hope').addClass('inputed');
  });
  $(document).on('change', '.reserved_hope input[name="your-hope3"]', function() {
    $(this).closest('.reserved_hope').addClass('inputed');
  });

  $('.reserved_hope input').on('focus', function(){
    $(this).prop('type', 'date');
  }).on('blur', function(){
    var dateVal = $(this).val(); 
    if(dateVal) {
      var parts = dateVal.split('-'); 
      if(parts.length === 3) {
        var year  = parts[0];
        var month = parseInt(parts[1], 10); 
        var day   = parseInt(parts[2], 10);
        var formattedDate = year + '年' + month + '月' + day + '日';
        $(this).prop('type', 'text').val(formattedDate);
      }
    } else {
      $(this).prop('type', 'text');
    }
  });
*/

  $(".file-input__select input").on("change", function(e) {
    var fileName = this.files.length ? this.files[0].name : "ファイルを未選択";
    $(this).closest('.wpcf7-form-control-wrap').siblings(".file-name").text(fileName);
  });

  // recruit モーダル

  $('.js-recruit-modal-open').click(function(){
    let index = $(this).closest('.recruit_ex_item').index();
    $('.recruit-modal').addClass('is-active');
    $('html').addClass('is-fixed');
    $('.recruit-modal__content').eq(index).addClass('is-active');
  });

  $('.js-modal-close').click(function(){
    $('.recruit-modal').removeClass('is-active');
    $('.recruit-modal__content').removeClass('is-active');
    $('html').removeClass('is-fixed');
  });
  
  if (window.matchMedia('(max-width: 768px)').matches) {
    $('.js-recruit-slider').slick({
      slidesToShow:1,
      dots:false,
      arrows:false,
      autoplay:false,
      infinite:false,
      variableWidth: true,
    });
  }

  // 買取実績
  if (window.matchMedia('(max-width: 768px)').matches) {
    $('.sideber_ttl').click(function(){
      $(this).next().slideToggle();
    });

  }

  // console.log($('.contact_comfirm_input.goods p').text());
  
  jQuery(function($) {
    $('.contact_comfirm_input.goods p').each(function(i) {
      var $this = $(this);
      var text = $this.text();
      
      var numberMatch = text.match(/(\d+(?:,\d+)*)\s*$/);
      var numberPart = "";
      if (numberMatch) {
        numberPart = $.trim(numberMatch[1]);
        text = text.substring(0, numberMatch.index);
      }
      
      var arr = text.split(',').map(function(item) {
        return $.trim(item);
      }).filter(function(item) {
        return item !== "";
      });
      
      if (arr[i] !== undefined) {
        var newText = arr[i] + '：' + numberPart + '点';
        $this.text(newText);
      } else {
        $this.text('');
      }
    });
  });
  

});
