<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>CONTACT｜LECTIO DESIGN</title>
<meta name="description" content="Lectio Design is a professional of real estate project management, consulting, development, and agency.">
<meta name="keywords" content="Lectio Design,project management,property consulting,property development,real estate brokerage">

<meta property="og:title" content="CONTACT｜LECTIO DESIGN" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://lectio.co.jp/secure/en/contact/" />
<meta property="og:image" content="" />
<meta property="og:site_name"  content="LECTIO DESIGN" />
<meta property="og:description" content="Lectio Design is a professional of real estate project management, consulting, development, and agency." />
<meta name="twitter:card" content="" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content="" />

<?php $path="../../../"; include(__DIR__ . '/../../include/common-css.php'); ?>
<link rel="stylesheet" href="../../css/contact.css" type="text/css" media="all">
<link rel="stylesheet" href="../../css/style.css" type="text/css" media="all">

<script src="https://www.google.com/recaptcha/api.js?render=6LdBHd0rAAAAAKlpBe1jNaYUPUuMQYyOVYNq882p"></script>
<?php include(__DIR__ . '/../../include/ga-tag.php'); ?>
</head>
<body>
  <?php $path="../../../"; include(__DIR__ . '/../../include/site-header_en.php'); ?>

<div id="contents">
<div class="con_inner">

<h3><img src="http://lectio.co.jp/img/conen_sttl01.png" width="104" height="21"  alt="CONTACT"/></h3>

<form action="./confirm_en.php" method="post">
<p>Please fill in the form and send it to us. Please complete necessary information and press [<strong>TO CONFIRMATION SCREEN</strong>] button.<br /><br />
※Please read through our "<a href="../../../en/privacypolicy.html">Privacy Policy</a> before sending the form.<br />
※Please note that all fields followed by an asterisk (<em class="asterisk">＊</em>) must be filled in. </p>
<div id="content" role="main">

</div>

<!-- #content -->

<table id="table-01">
<tbody>
<tr>
<th>Name <em class="asterisk">＊</em></th>
<td>
  <input name="名前" type="text" value="" maxlength="100" required/>
  <span class="名前_error"></span>
</td>
</tr>
<tr>
<th>Company <em class="asterisk">＊</em></th>
<td>
  <input name="会社名" type="text" value="" maxlength="100" required/>
  <span class="会社名_error"></span>
</td>
</tr>
<tr>
<th>E-mail <em class="asterisk">＊</em></th>
<td>
  <input name="メール" type="text" value="" class="email" maxlength="100" required/>
  <span class="メール_error"></span>
</td>
</tr>
<!-- <tr>
<th>E-mail <em class="asterisk">＊</em>（確認用）</th>
<td><span class="grey">半角英数字（コピーしないで入力してください）</span><input name="メール確認" type="text" value="" class="email-confirm" oncopy="return false" onpaste="return false" oncontextmenu="return false" /></td>
</tr> -->
<tr>
<th>Phone <em class="asterisk">＊</em></th>
<td>
  <span class="grey">Please enter with one-byte alphanumeric characters and symbols.</span><input name="電話番号" type="tel" value="" class="tel" maxlength="20" required/>
  <span class="電話番号_error"></span>
</td>
</tr>
<!--tr>
<th>Prefecture <em class="asterisk">＊</em></th>
<td>
  <select name="都道府県">
    <option value="" selected="selected">Prefectures</option>
    <option value="Hokkaido">Hokkaido</option>
    <option value="Aomori">Aomori</option>
    <option value="Iwate">Iwate</option>
    <option value="Miyagi">Miyagi</option>
    <option value="Akita">Akita</option>
    <option value="Yamagata">Yamagata</option>
    <option value="Fukushima">Fukushima</option>
    <option value="Ibaraki">Ibaraki</option>
    <option value="Tochigi">Tochigi</option>
    <option value="Gumma">Gumma</option>
    <option value="Saitama">Saitama</option>
    <option value="Chiba">Chiba</option>
    <option value="Tokyo">Tokyo</option>
    <option value="Kanagawa">Kanagawa</option>
    <option value="Niigara">Niigata</option>
    <option value="Toyama">Toyama</option>
    <option value="Ishikawa">Ishikawa</option>
    <option value="Fukui">Fukui</option>
    <option value="Yamanashi">Yamanashi</option>
    <option value="Nagano">Nagano</option>
    <option value="Gifu">Gifu</option>
    <option value="Shizuoka">Shizuoka</option>
    <option value="Aichi">Aichi</option>
    <option value="Mie">Mie</option>
    <option value="Shiga">Shiga</option>
    <option value="Kyoto">Kyoto</option>
    <option value="Osaka">Osaka</option>
    <option value="Hyogo">Hyogo</option>
    <option value="Nara">Nara</option>
    <option value="Wakayama">Wakayama</option>
    <option value="Tottori">Tottori</option>
    <option value="Shimane">Shimane</option>
    <option value="Okayama">Okayama</option>
    <option value="Hiroshima">Hiroshima</option>
    <option value="Yamaguchi">Yamaguchi</option>
    <option value="Tokushima">Tokushima</option>
    <option value="Kagawa">Kagawa</option>
    <option value="Ehime">Ehime</option>
    <option value="Kochi">Kochi</option>
    <option value="Fukuoka">Fukuoka</option>
    <option value="Saga">Saga</option>
    <option value="Nagasaki">Nagasaki</option>
    <option value="Kumamoto">Kumamoto</option>
    <option value="Oita">Oita</option>
    <option value="Miyazaki">Miyazaki</option>
    <option value="Kagoshima">Kagoshima</option>
    <option value="Okinawa">Okinawa</option>
  </select>
  <span class="都道府県_error error"></span>
</td>
</tr-->
<tr>
<th>Address</th>
<td>
  <span class="grey">Example: 1−1−1 Koujimachi, Chiyodaku</span><textarea name="住所" cols="30" rows="6" value="" maxlength="200" class="address"></textarea>
  <span class="住所_error error"></span>
</td>
</tr>
<tr>
<th>Inquiry <em class="asterisk">＊</em></th>
<td>
  <textarea name="お問合せ内容" cols="30" rows="8" value="" required></textarea>
  <span class="お問合せ内容_error error"></span>
</td>
</tr>
</tbody>
</table>

<p class="btn">
  <input type="reset" value="RESET" class="btn-style" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" value="TO CONFIRMATION SCREEN" class="btn-style" />
  <input type="hidden" name="recaptcha_token" id="recaptcha_token">
</p>
</form>

<div class="pagetop"><img src="../../../common/img/pagetop.png" width="79" height="12"  alt="pagetop" class="jquery-hover"/></div>
</div>

</div>

<?php $path="../../../"; include(__DIR__ . '/../../include/common-footer_en.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../../../libs/common-script.js"></script>
<script src="../../libs/jquery.validate.min.js"></script>
<script src="../../libs/contact.js"></script>
<script src="../../libs/grecaptcha.js"></script>
</body>
</html>