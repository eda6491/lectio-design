/////////////////////////////////////////////////////////////////////////////
//jquery.validate.js
/////////////////////////////////////////////////////////////////////////////
$(function () {
  //追加ルールの定義
  var methods = {
    phone: function (value, element) {
      return (
        this.optional(element) || /^\d{11}$|^\d{3}-\d{4}-\d{4}$/.test(value)
      );
    },
  };

  //全角ひらがな･カタカナのみ
  jQuery.validator.addMethod(
    "kana",
    function (value, element) {
      return this.optional(element) || /^([ァ-ヶーぁ-ん]+)$/.test(value);
    },
    "全角ひらがな･カタカナを入力してください",
  );
  //電話番号（例:012-345-6789）
  jQuery.validator.addMethod(
    "telnum",
    function (value, element) {
      return this.optional(element) || /^[0-9-]{12}$/.test(value);
    },
    "電話番号を入力してください（例:012-345-6789）",
  );
  //携帯番号
  jQuery.validator.addMethod(
    "mobilenum",
    function (value, element) {
      return this.optional(element) || /^0\d0-\d{4}-\d{4}$/.test(value);
    },
    "携帯番号を入力してください（例:010-2345-6789）",
  );

  //携帯番号または電話番号
  jQuery.validator.addMethod(
    "mtnum",
    function (value, element) {
      return (
        this.optional(element) ||
        /^0[9876]0[-]?\d{4}[-]?\d{4}$/.test(value) ||
        /^[0-9-]{12}$/.test(value) ||
        /^\d{10}$/.test(value)
      );
    },
    "携帯番号または電話番号を入力してください",
  );
  // //携帯番号または電話番号
  // jQuery.validator.addMethod("mtnum", function(value, element) {
  //   return this.optional(element) || /^0\d0-\d{4}-\d{4}$/.test(value) || /^[0-9-]{12}$/.test(value);
  //   }, "携帯番号または電話番号を入力してください"
  // );

  //半角アルファベット（大文字･小文字）もしくは数字のみ
  jQuery.validator.addMethod(
    "alphanum",
    function (value, element) {
      return (
        this.optional(element) ||
        /^([a-zA-Z0-9!#$%&()*+,.:;=?@\[\]^_{}-]+)$/.test(value)
      );
      // return this.optional(element) || /^([a-zA-Z0-9]+)$/.test(value);
    },
    "半角英数字を入力してください",
  );

  var required_select = "必須項目です";
  var required_txt = "入力してください";

  $("form").validate({
    // エラーエレメントの変更
    // errorElement: "span",

    //ルールの設定
    rules: {
      // 名前
      名前: {
        required: true,
      },

      // 会社名
      会社名: {
        required: true,
      },

      // 電話番号
      電話番号: {
        required: true,
        alphanum: true,
        mtnum: true,
        // number: true,
        // telnum: true,
        // mobilenum: true
      },

      // 電話番号（物件紹介フォーム）
      電話番号2: {
        required: false,
        alphanum: true,
        mtnum: true,
        // number: true,
        // telnum: true,
        // mobilenum: true
      },

      // メール
      メール: {
        required: true,
        alphanum: true,
        email: true,
      },

      // 都道府県
      都道府県: {
        required: true,
      },

      // 住所
      // 住所: {
      //   required: true,
      // },

      // お問合せ内容
      お問合せ内容: {
        required: true,
        maxlength: 500,
      },

      // 物件情報（物件紹介フォーム）
      物件情報: {
        required: true,
        maxlength: 500,
      },

      // 個人情報同意
      // pp_consent: {required: true}
    },

    //エラーメッセージの設定
    messages: {
      名前: {
        required: "※お名前は" + required_select,
      },
      会社名: {
        required: "※会社名は" + required_select,
      },
      電話番号: {
        required: "※電話番号は" + required_select,
        number: "※半角数字のみ" + required_txt,
      },
      電話番号2: {
        number: "※半角数字のみ" + required_txt,
      },
      メール: {
        required: "※メールアドレスは" + required_select,
        email: "※メールアドレスを正確に" + required_txt,
        alphanum: "※半角英数字を" + required_txt,
      },
      都道府県: {
        required: "※都道府県は" + required_select,
      },
      お問合せ内容: {
        required: "※お問合せ内容は" + required_select,
        maxlength: "※入力は500文字までです",
      },
      物件情報: {
        required: "※物件情報は" + required_select,
        maxlength: "※入力は500文字までです",
      },
    },

    //エラーメッセージ出力箇所調整
    errorPlacement: function (error, element) {
      var ename = element.attr("name");
      if (element.attr("name") === ename) {
        error.appendTo($("." + ename + "_error"));

        // スタイル用クラス付け
        $("." + ename + "_error").addClass("error_message");
        // 個人情報～個別の指示
        // $('.pp_consent_error.error_message').css("margin-top","5px");
      }

      // else {
      //   error.insertAfter(element);
      // }
    },
  });
});

// tel数字のみ入力
// $(function() {
//   $('.tel').on('keydown', function(e) {
//       var k = e.keyCode;
//       // 0～9, テンキ―0～9, スペース, backspace, delete, →, ←, 以外は入力キャンセル
//       if(!((k >= 48 && k <= 57) || (k >= 96 && k <= 105) || k == 32 || k == 8 || k == 46 || k == 39 || k == 37)) {
//           return false;
//       }
//   });
// });
