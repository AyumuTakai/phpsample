<?php

require_once('./mylib.php');
require_once('./datacheck.php');

// データチェック
$err = datacheck();
// データが不正ならリダイレクト
if( $err ){ redirect('./contact.php'); }

// テンプレートファイルを読み込んでメールを送信する
// $tmppath メールテンプレートファイルのパス
function mail_form($tmppath) {
  // メールテンプレート読み込み
  require ($tmppath);

  // 言語、文字コード設定
  mb_language("Japanese");       // 言語を日本語に設定
  mb_internal_encoding("UTF-8"); // 文字コードをUTF-8に設定 

  // メール送信
  // ここでメール送信に成功しても、メールが相手に届くことは保証されない
  return mb_send_mail($to , $subject , $body , 'From: ' . $from );
}

// 管理者向メール送信
if( mail_form('adminmail.php') ) {
  // ユーザ向メール送信
  if(mail_form('usermail.php') ){
    redirect('./thanks.html');
  }else{
    echo 'user mail send error!';
  }
}else{
    echo 'admin mail send error!';
}
