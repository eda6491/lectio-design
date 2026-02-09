<?php

// htmlspecialchars処理
function h($s) {
  if (is_array($s)) {
    // データが配列の場合
    return array_map("h", $s);
  } else {
    // データが配列ではない場合
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }
}
session_start();
$_SESSION["PERSON_INFO"] = $_POST;
session_regenerate_id(true);

?>