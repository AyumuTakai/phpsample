<?php

require_once('./mylib.php');

require_once('./datacheck.php');

// データチェック
$err = datacheck();

if($err){
	// 入力画面
	require_once('./input.php');
}else{
	// 確認画面
	require_once('./confirm.php');
}
