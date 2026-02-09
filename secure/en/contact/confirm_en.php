<?php include(__DIR__ . '/../../include/config_confirm.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Confirm - CONTACT｜LECTIO DESIGN</title>
<meta name="description" content="Lectio Design is a professional of real estate project management, consulting, development, and agency.">
<meta name="keywords" content="Lectio Design,project management,property consulting,property development,real estate brokerage">

<meta property="og:title" content="Confirm - CONTACT｜LECTIO DESIGN" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://lectio.co.jp/secure/en/contact/confirm.php" />
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

<?php include(__DIR__ . '/../../include/ga-tag.php'); ?>
</head>
<body>
<?php $path="../../../"; include(__DIR__ . '/../../include/site-header_en.php'); ?>

<div id="contents">
<div class="con_inner">

<h3><img src="http://lectio.co.jp/img/conen_sttl01.png" width="104" height="21"  alt="CONTACT"/></h3>

<form action="./thanks_en.php" method="post">

<p>Please check once again whether there is any mistake in the input contents.If there is no mistake please push [<strong>SUBMIT</strong>] button.<br>(Those who enter mobile e-mail address please pay attention to e-mail designation reception / rejection setting.</p>

<!-- #content -->

<table id="table-01">
<tbody>
<tr>
<th>Name <em class="asterisk">＊</em></th>
<td><?php echo h($_POST["名前"]) ?></td>
</tr>
<tr>
<th>Company <em class="asterisk">＊</em></th>
<td><?php echo h($_POST["会社名"]) ?></td>
</tr>
<tr>
<th>E-mail <em class="asterisk">＊</em></th>
<td><?php echo h($_POST["メール"]) ?></td>
</tr>
<!-- <tr>
<th>E-mail <em class="asterisk">＊</em>（確認用）</th>
<td></td>
</tr> -->
<tr>
<th>Phone <em class="asterisk">＊</em></th>
<td><?php echo h($_POST["電話番号"]) ?></td>
</tr>
<!-- <tr>
<th>都道府県 <em class="asterisk">＊</em></th>
<td></td>
</tr> -->
<tr>
<th>Address</th>
<td><?php echo h($_POST["住所"]) ?></td>
</tr>
<tr>
<th>Inquiry <em class="asterisk">＊</em></th>
<td><?php echo h($_POST["お問合せ内容"]) ?></td>
</tr>
</tbody>
</table>

<p class="btn">
  <input type="reset" value="RETURN" class="btn-style"  onclick="history.back(); return false;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="SUBMIT" class="btn-style" />
</p>
</form>

<div class="pagetop"><img src="../../../common/img/pagetop.png" width="79" height="12" alt="pagetop" class="jquery-hover"></div>
</div>

</div>

<?php $path="../../../"; include(__DIR__ . '/../../include/common-footer_en.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../../../libs/common-script.js"></script>
<script src="../../libs/jquery.validate.min.js"></script>
<script src="../../libs/contact.js"></script>
</body>
</html>