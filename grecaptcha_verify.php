<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $secretKey = '6LdBHd0rAAAAALZf2XkbH8fSgftJYfIybA2WnqSA';
  $token = $_POST['recaptcha_token']; // フロントから送られたトークン

  // Googleへのリクエスト設定
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = [
    'secret' => $secretKey,
    'response' => $token
  ];

  $options = [
    'http' => [
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data)
    ]
  ];

  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  $res = json_decode($result);

  // 判定
  if ($res->success && $res->score >= 0.5) {
    // 人間と判定：メール送信などの処理へ
    echo "認証成功！ スコア: " . $res->score;
  } else {
    // ボットと判定
    echo "認証失敗、またはボットの可能性があります。";
  }
}
