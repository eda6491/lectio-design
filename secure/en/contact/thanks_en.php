<?php include(__DIR__ . '/../../include/config_thanks_en.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Thank you very much for inquiring｜LECTIO DESIGN</title>
<meta name="description" content="Lectio Design is a professional of real estate project management, consulting, development, and agency.">
<meta name="keywords" content="Lectio Design,project management,property consulting,property development,real estate brokerage">

<meta property="og:title" content="Thank you very much for inquiring｜LECTIO DESIGN" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://lectio.co.jp/secure/en/contact/thanks.php" />
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

        <?php
          if($mailsousin2 == true) {
            echo "<p style='font-size:14px;'>Thank you very much for inquiring of <strong>'LECTIO DESIGN'</strong>.<br>I'll contact you later on than the person in charge.<br>Please soon wait a moment.</p>";
          } else {
            echo "<h2 style='margin-top:5px;color:#ff0000;'>Failed to send inquiry mail.</h2><h4 style='margin-top:5px;'>Excuse me, thank you for inputting again from the input screen.</h4><br><br>";
          }
        ?>

        <div class="pagetop"><img src="../../../common/img/pagetop.png" width="79" height="12" alt="pagetop" class="jquery-hover"/></div>
    </div>

</div>

  <?php $path="../../../"; include(__DIR__ . '/../../include/common-footer_en.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../../../libs/common-script.js"></script>
<script src="../../libs/jquery.validate.min.js"></script>
<script src="../../libs/contact.js"></script>
</body>
</html>