<?php

session_start();
$person_info = $_SESSION["PERSON_INFO"];
session_regenerate_id(true);
// htmlspecialchars処理
function h($s)
{
  if (is_array($s)) { //データが配列の場合
    return array_map("h", $s);
  } else { //データが配列ではない場合
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }
}

// 不正アクセス防止
if (!$_SESSION["PERSON_INFO"]) {
  // header("Location: form.html");
  echo '<p style="text-align:center;font-size:24px;margin-top:50px;color:red;">不正なアクセスです！<br>操作方法をご確認ください。</p>';
  exit;
}

/*******************************
	データの受け取り
 *******************************/
// $ctype     	 = $person_info["c_type"];     //問合せ種別
// $ruby         = $person_info["ruby"];       //ひらがな
// $ppconsent    = $person_info["pp_consent"]; //個人情報保護方針に同意する
$namae        = $person_info["名前"]; //お名前
$cname        = $person_info["会社名"]; //会社名
$mailaddress  = $person_info["メール"]; //メールアドレス
$tel          = $person_info["電話番号"]; //電話番号
$prefectures  = $person_info["都道府県"]; //都道府県
$address      = $person_info["住所"]; //住所
$naiyou       = $person_info["お問合せ内容"]; //お問合せ内容

//危険な文字列を入力された場合にそのまま利用しない対策
// $ctype        = h($ctype, ENT_QUOTES);
// $ruby         = h($ruby, ENT_QUOTES);
$namae        = h($namae, ENT_QUOTES);
$cname        = h($cname, ENT_QUOTES);
$mailaddress  = h($mailaddress, ENT_QUOTES);
$tel          = h($tel, ENT_QUOTES);
$prefectures  = h($prefectures, ENT_QUOTES);
$address      = h($address, ENT_QUOTES);
$naiyou       = h($naiyou, ENT_QUOTES);

session_destroy();

//////////　お問い合わせ確認メール（管理者用）//////////////////////////////////////////////////
//メール本文の作成（担当者用）
$honbun .= "\n";
$honbun .= "「LECTIO DESIGN」ご担当者さまへ\n\n";
$honbun .= "─────────────────────────\n";
$honbun .= "■　LECTIO DESIGN　■\n";
$honbun .= "─────────────────────────\n\n";
$honbun .= "ホームページのお問い合わせフォームにて\n";
$honbun .= "お客様より問い合わせがありました。\n";
$honbun .= "下記ご対応お願いします。\n\n";
$honbun .= "─────────────────────────\n";
$honbun .= "お問い合わせ内容\n";
$honbun .= "─────────────────────────\n\n";
$honbun .= "お名前：" . $namae . "\n\n";
$honbun .= "会社名：" . $cname . "\n\n";
$honbun .= "メールアドレス：" . $mailaddress . "\n\n";
$honbun .= "お電話番号：" . $tel . "\n\n";
$honbun .= "都道府県：" . $prefectures . "\n\n";
$honbun .= "住所：" . $address . "\n\n";
$honbun .= "お問合せ内容：" . $naiyou . "\n\n";
// $honbun .= "お名前（フリガナ）：".$ruby."\n\n";
// $honbun .= "個人情報保護方針確認済み：".$ppconsent."\n\n";
$honbun .= "─────────────────────────\n";

//エンコード処理
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//メールの作成（担当者用）==================================================

// 送信先メールアドレス ※
$mail_to = "info@lectio.co.jp";
// $mail_to = "hosoda@agl-group.jp";

// 複数の時用
// $mail_to .= "aa@aa.ne.jp\r\n"; //送信先メールアドレス

$mail_subject = "【LECTIO DESIGN】お問い合わせがありました"; //メールの件名
$mail_body    = $honbun; //メールの本文

// 送信元表示メールアドレス（お客様側も共通）※
$mail_moto    = "info@lectio.co.jp\r\n";
// $mail_moto    = "hosoda@agl-group.jp\r\n";

$mail_header  = "from:" . $mail_moto; //送信元として表示されるメールアドレス
$mail_header .= "Return-Path: " . $mail_moto; //迷惑メール回避用
$param        = "-f " . $mail_moto; //迷惑メール回避用

// Cc ※
// $mail_header .= "Cc: aaa.co.jp\r\n"; //Cc送信先メールアドレス


//======================================================================

//メール送信処理
$mailsousin  = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header, $param);

// session_destroy();

/////////////////////////////////////////////////////////////////////////////////////////


//////////　お問い合わせ確認メール（お客様用）/////////////////////////////////////////////
//メール本文の作成
$honbun2 = "\n";
$honbun2 .= $cname . "\n";
$honbun2 .= $namae . "様\n\n";
$honbun2 .= "─────────────────────────\n";
$honbun2 .= "■　LECTIO DESIGN　■\n";
$honbun2 .= "─────────────────────────\n\n";
$honbun2 .= "※当メールは、自動的に返信させて頂いております。\n\n";
$honbun2 .= "この度は、「LECTIO DESIGN」へお問い合せいただき\n";
$honbun2 .= "誠にありがとうございます。\n";
$honbun2 .= "担当者より追ってご連絡させて頂きます。\n";
$honbun2 .= "もうしばらくお待ちくださいませ。\n\n";
$honbun2 .= "─────────────────────────\n";
$honbun2 .= "お問い合わせ内容\n";
$honbun2 .= "─────────────────────────\n\n";
$honbun2 .= "お名前：" . $namae . "\n\n";
$honbun2 .= "会社名：" . $cname . "\n\n";
$honbun2 .= "メールアドレス：" . $mailaddress . "\n\n";
$honbun2 .= "お電話番号：" . $tel . "\n\n";
$honbun2 .= "都道府県：" . $prefectures . "\n\n";
$honbun2 .= "住所：" . $address . "\n\n";
$honbun2 .= "お問合せ内容：" . $naiyou . "\n\n";
$honbun2 .= "─────────────────────────\n\n";
$honbun2 .= "今後とも【LECTIO DESIGN】をよろしくお願いいたします。\n\n";
$honbun2 .= "─────────────────────────\n\n";
$honbun2 .= "株式会社 レクティオデザイン\n";
$honbun2 .= "東京都千代田区麹町5丁目3番地\n";
$honbun2 .= "TEL：03-6272-5475\n";
$honbun2 .= "info@lectio.co.jp\n\n";
$honbun2 .= "─────────────────────────\n";

//メール設定（お客様用）===================================================

$mail_to2      = $mailaddress;  //送信先メールアドレス（お客様入力アドレス）
$mail_subject2  = "【LECTIO DESIGN】お問い合わせありがとうございます"; //メールの件名 ※
$mail_body2     = $honbun2;  //メールの本文
$mail_header2  = "from:" . $mail_moto; //送信元として表示されるメールアドレス
$mail_header2  .= "Return-Path: " . $mail_moto; //迷惑メール回避用
// $mail_header2 .= "Disposition-notification-to:" . $mail_moto;
$param          = "-f " . $mail_moto; //迷惑メール回避用

// ======================================================================

//メール送信処理
$mailsousin2  = mb_send_mail($mail_to2, $mail_subject2, $mail_body2, $mail_header2, $param);

////////////////////////////////////////////////////////////////////////////////////////

?>