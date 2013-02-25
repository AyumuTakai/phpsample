<?php

require_once('./mylib.php');
require_once('./datacheck.php');

// 正しいデータでなければリダイレクト
$err = datacheck();
if( $err ){ redirect('./contact.php'); }

// テンプレートファイルを読み込んでメールを送信する
// $tmppath メールテンプレートファイルのパス
function mail_form($tmppath) {
  global $name,$email,$sex,$rito,$naiyo,$iken;

  // メールテンプレート読み込み
  require_once($tmppath);

  // 言語、文字コード設定
  mb_language("Japanese");       // 言語を日本語に設定
  mb_internal_encoding("UTF-8"); // 文字コードをUTF-8に設定 

  // メール送信
  // ここでメール送信に成功しても、メールが相手に届くことは保証されない
  return mb_send_mail($to , $subject , $body , 'From: ' . $from );
}

//
// 問い合わせ内容を整形
//

// 氏名
if(isset($_POST['name'])) {
  $name = $_POST['name'];
}else{
  $name = '';
}

// メールアドレス
if(isset($_POST['email'])) {
  $email = $_POST['email'];
}else{
  $email = '';
}

// 性別 
if(isset($_POST['sex'])) {

  if($_POST['sex'] === 'men') { 
    $sex = '男';
  }else if($_POST['sex'] === 'female'){
    $sex = '女';
  }else{
    $sex = '';
  }
}else{
  $sex = '';
}

// 行きたい離島
if(isset($_POST['rito'])) {
  $rito_name = array('iriomote'=>'西表島','hatoma'=>'鳩間島','yubu'=>'由布島','kohama'=>'小浜島');
  $rito = '';
  foreach( $_POST['rito'] as $r ) {
    $rito = $rito . $rito_name[$r] . ' ';
  }
}else{
  $rito = '';
}

// お問い合わせ項目
if(isset($_POST['naiyo'])) {
  $naiyo_name = array('rent_car'=>'レンタカー','camp'=>'キャンプ','diving'=>'ダイビング','canoe'=>'カヌー','fishing'=>'釣り');
  $naiyo = $_POST['naiyo'];  
  $naiyo = $naiyo_name[$naiyo];
}else{
  $naiyo = '';
}

// ご意見・ご要望
if(isset($_POST['iken'])) {
  $iken = $_POST['iken'];
}else{
  $iken = '';
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
