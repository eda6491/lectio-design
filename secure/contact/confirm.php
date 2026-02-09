<?php include(__DIR__ . '/../include/config_confirm.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>お問合せ - 入力内容の確認｜株式会社レクティオデザイン LECTIO DESIGN｜不動産プロジェクトマネジメント コンサルティング 開発 仲介</title>
<meta name="description" content="不動産プロジェクトマネジメントおよびコンサルティング、開発、仲介を展開するレクティオデザイン">
<meta name="keywords" content="株式会社レクティオデザイン,LECTIO DESIGN,プロジェクトマネジメント,PJM,PM,不動産コンサルティング,不動産開発,不動産仲介,不動産ビジネス,TANGO LEX AOYAMA">

<meta property="og:title" content="お問合せ - 入力内容の確認｜株式会社レクティオデザイン LECTIO DESIGN｜不動産プロジェクトマネジメント コンサルティング 開発 仲介" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://lectio.co.jp/secure/contact/confirm.php" />
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

<form action="thanks.php" method="post">
<p>入力内容にお間違いがないか、今一度ご確認下さい。<br>お間違いがなければ「送信する」ボタンを押して下さい。<br>
（携帯メールアドレスを入力される方はメール指定受信/拒否の設定にご注意下さい。）</p>

<!-- #content -->

<table id="table-01">
<tbody>
<tr>
<th>お名前 <em class="asterisk">＊</em></th>
<td><?php echo h($_POST["名前"]) ?></td>
</tr>
<tr>
<th>会社名 <em class="asterisk">＊</em></th>
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
<th>電話番号 <em class="asterisk">＊</em></th>
<td><?php echo h($_POST["電話番号"]) ?></td>
</tr>
<tr>
<th>都道府県 <em class="asterisk">＊</em></th>
<td><?php echo h($_POST["都道府県"]) ?></td>
</tr>
<tr>
<th>住 所</th>
<td><?php echo h($_POST["住所"]) ?></td>
</tr>
<tr>
<th>お問合せ内容 <em class="asterisk">＊</em></th>
<td><?php echo h($_POST["お問合せ内容"]) ?></td>
</tr>
</tbody>
</table>

<p class="btn">
  <input type="reset" value="戻る" class="btn-style"  onclick="history.back(); return false;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="送信する" class="btn-style" />
</p>
</form>

<div class="pagetop"><img src="../../common/img/pagetop.png" width="79" height="12"  alt="pagetop" class="jquery-hover"/></div>
</div>

</div>

<?php $path="../../"; include(__DIR__ . '/../include/common-footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../../libs/common-script.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/contact.js"></script>
</body>
</html>