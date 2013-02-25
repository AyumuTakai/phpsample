<?php

require_once('./mylib.php');
require_once('./datacheck.php');

// データチェック
$err = datacheck();

if($err){
  // 入力画面
  require('./input.php');
}else{
  // 確認画面
  require('./confirm.php');
}
