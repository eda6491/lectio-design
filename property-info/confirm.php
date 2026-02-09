<?php include(__DIR__ . '/../secure/include/config_confirm.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>入力内容の確認 - 物件紹介フォーム｜株式会社レクティオデザイン LECTIO DESIGN｜不動産プロジェクトマネジメント コンサルティング 開発 仲介</title>
<meta name="description" content="不動産プロジェクトマネジメントおよびコンサルティング、開発、仲介を展開するレクティオデザイン">
<meta name="keywords" content="株式会社レクティオデザイン,LECTIO DESIGN,プロジェクトマネジメント,PJM,PM,不動産コンサルティング,不動産開発,不動産仲介,不動産ビジネス,TANGO LEX AOYAMA">

<meta property="og:title" content="入力内容の確認 - 物件紹介フォーム｜株式会社レクティオデザイン LECTIO DESIGN｜不動産プロジェクトマネジメント コンサルティング 開発 仲介" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://lectio.co.jp/property-info/confirm.php" />
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

<?php include(__DIR__ . '/../secure/include/ga-tag.php'); ?>
</head>
<body>
  <?php $path="../"; include(__DIR__ . '/../secure/include/site-header.php'); ?>

<div id="contents">
<div class="con_inner">

<h3><img src="./img/contact_sttl02.png" width="189" height="23" alt="物件紹介フォーム"></h3>

<form action="./thanks.php" method="post">

<p>入力内容にお間違いがないか、今一度ご確認下さい。<br>お間違いがなければ「送信する」ボタンを押して下さい。<br>（携帯メールアドレスを入力される方はメール指定受信/拒否の設定にご注意下さい。）</p>

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
<tr>
<th>電話番号（任意）</th>
<td><?php echo h($_POST["電話番号2"]) ?></td>
</tr>
<tr>
<th>物件情報 <em class="asterisk">＊</em></th>
<td><?php echo h($_POST["物件情報"]) ?></td>
</tr>
</tbody>
</table>

<p class="btn">
  <input type="reset" value="戻る" class="btn-style"  onclick="history.back(); return false;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="送信する" class="btn-style" />
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
</body>
</html>