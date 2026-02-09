<?php include(__DIR__ . '/../include/config_thanks.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>お問合せありがとうございました｜株式会社レクティオデザイン LECTIO DESIGN｜不動産プロジェクトマネジメント コンサルティング 開発 仲介</title>
<meta name="description" content="不動産プロジェクトマネジメントおよびコンサルティング、開発、仲介を展開するレクティオデザイン">
<meta name="keywords" content="株式会社レクティオデザイン,LECTIO DESIGN,プロジェクトマネジメント,PJM,PM,不動産コンサルティング,不動産開発,不動産仲介,不動産ビジネス,TANGO LEX AOYAMA">

<meta property="og:title" content="お問合せありがとうございました｜株式会社レクティオデザイン LECTIO DESIGN｜不動産プロジェクトマネジメント コンサルティング 開発 仲介" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://lectio.co.jp/secure/contact/thanks.php" />
<meta property="og:image" content="" />
<meta property="og:site_name"  content="株式会社レクティオデザイン LECTIO DESIGN" />
<meta property="og:description" content="不動産プロジェクトマネジメントおよびコンサルティング、開発、仲介を展開するレクティオデザイン" />
<meta name="twitter:card" content="" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content="" />

<?php $path="../../"; include(__DIR__ . '/../include/common-css.php'); ?>
<link rel="stylesheet" href="../css/contact.css" type="text/css" media="all">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">

<?php include(__DIR__ . '/../include/ga-tag.php'); ?>
</head>
<body>
<?php $path="../../"; include(__DIR__ . '/../include/site-header.php'); ?>

<div id="contents">
  <div class="con_inner">

    <div class="df">
      <h3><img src="../../img/contact_sttl01.png" width="93" height="24"  alt="お問合せ"></h3>
      <a href="../../property-info/" target="_blank"><img src="../../img/contact_link-btn.png" width="164" height="34" alt="物件情報はこちらへ"></a>
    </div>
      <!-- <p style="font-size:14px;">このたびは、<strong>【LECTIO DESIGN】</strong>へお問い合せいただき誠にありがとうございます。<br>担当者より追ってご連絡させて頂きます。<br>もうしばらくお待ちくださいませ。</p> -->

      <?php
        if($mailsousin2 == true) {
          echo '<p style="font-size:14px;">このたびは、<strong>【LECTIO DESIGN】</strong>へお問い合せいただき誠にありがとうございます。<br>担当者より追ってご連絡させて頂きます。<br>もうしばらくお待ちくださいませ。</p>';
        } else {
          echo '<h2 style="margin-top:5px;">お問い合わせメールの送信に失敗しました。</h2><h4 style="margin-top:5px;">恐れ入りますが、入力画面より再度ご入力いただきますようよろしくお願い致します。</h4><br /><br />';
        }
      ?>

    <div class="pagetop"><img src="../../common/img/pagetop.png" width="79" height="12" alt="pagetop" class="jquery-hover"></div>

  </div>

</div>

<?php $path="../../"; include(__DIR__ . '/../include/common-footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../../libs/common-script.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/contact.js"></script>
</body>
</html>