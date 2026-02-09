<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>物件紹介フォーム｜株式会社レクティオデザイン LECTIO DESIGN｜不動産プロジェクトマネジメント コンサルティング 開発 仲介</title>
<meta name="description" content="不動産プロジェクトマネジメントおよびコンサルティング、開発、仲介を展開するレクティオデザイン">
<meta name="keywords" content="株式会社レクティオデザイン,LECTIO DESIGN,プロジェクトマネジメント,PJM,PM,不動産コンサルティング,不動産開発,不動産仲介,不動産ビジネス,TANGO LEX AOYAMA">

<meta property="og:title" content="物件紹介フォーム｜株式会社レクティオデザイン LECTIO DESIGN｜不動産プロジェクトマネジメント コンサルティング 開発 仲介" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://lectio.co.jp/property-info/" />
<meta property="og:image" content="" />
<meta property="og:site_name"  content="株式会社レクティオデザイン LECTIO DESIGN" />
<meta property="og:description" content="不動産プロジェクトマネジメントおよびコンサルティング、開発、仲介を展開するレクティオデザイン" />
<meta name="twitter:card" content="" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content="" />

<?php $path="../"; include(__DIR__ . '/../secure/include/common-css.php'); ?>
<link rel="stylesheet" href="../secure/css/contact.css" type="text/css" media="all">
<link rel="stylesheet" href="../secure/css/style.css" type="text/css" media="all">

<script src="https://www.google.com/recaptcha/api.js?render=6LdBHd0rAAAAAKlpBe1jNaYUPUuMQYyOVYNq882p"></script>
<?php include(__DIR__ . '/../secure/include/ga-tag.php'); ?>
</head>
<body>
  <?php $path="../"; include(__DIR__ . '/../secure/include/site-header.php'); ?>

<div id="contents">
<div class="con_inner">

<h3><img src="./img/contact_sttl02.png" width="189" height="23" alt="物件紹介フォーム"></h3>

<form action="./confirm.php" method="post">
<p>こちらのページでは物件情報を受け付けております。<br>必要事項を入力のうえ、「確認画面へ」ボタンを押してください。<br><br>
担当者が確認後、お話をうかがいたい案件については、折り返しご連絡いたします。<br>
すべての案件にご返信はできかねますので、予めご了承ください。<br><br>
※<em class="asterisk">＊</em>は入力必須となります。</p>

<!-- #content -->

<table id="table-01">
<tbody>
<tr>
<th>お名前 <em class="asterisk">＊</em></th>
<td>
  <input name="名前" type="text" value="" required/>
  <span class="名前_error"></span>
</td>
</tr>
<tr>
<th>会社名 <em class="asterisk">＊</em></th>
<td>
  <input name="会社名" type="text" value="" required/>
  <span class="会社名_error"></span>
</td>
</tr>
<tr>
<th>E-mail <em class="asterisk">＊</em></th>
<td>
  <span class="grey">半角英数字</span>
  <input name="メール" type="text" value="" class="email" required/>
  <span class="メール_error"></span>
</td>
</tr>
<tr>
<th>電話番号（任意）</th>
<td>
  <span class="grey">半角英数字</span>
  <input name="電話番号2" type="tel" value="" class="tel">
  <span class="電話番号2_error"></span>
</td>
</tr>
<tr>
<th>物件情報 <em class="asterisk">＊</em></th>
<td>
  <textarea name="物件情報" cols="30" rows="8" value="" required></textarea>
  <span class="物件情報_error error"></span>
</td>
</tr>
</tbody>
</table>

<p class="btn">
  <input type="reset" value="リセット" class="btn-style" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" value="確認画面へ" class="btn-style" />
  <input type="hidden" name="recaptcha_token" id="recaptcha_token">
</p>

</form>

<div class="pagetop"><img src="../common/img/pagetop.png" width="79" height="12" alt="pagetop" class="jquery-hover"></div>
</div>

</div>

<?php $path="../"; include(__DIR__ . '/../secure/include/common-footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../libs/common-script.js"></script>
<script src="../secure/libs/jquery.validate.min.js"></script>
<script src="../secure/libs/contact.js"></script>
<script src="../secure/libs/grecaptcha.js"></script>
</body>
</html>