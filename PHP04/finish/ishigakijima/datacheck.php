<?php

require_once('./mylib.php');

// データチェック
// $_POSTに対して、入力データが正しいかチェックする
// 返り値 エラーがあれば、エラーメッセージの配列、エラーが無ければ空配列
function datacheck() {
  // エラーメッセージ保存用配列
  $err = array();

  if ( ! $_POST ) {

    // POSTで無ければエラー
    $err['_post'] = 'POSTではない';

  }else{

    //
    // 必須項目のチェック
    //

    // 氏名 
    if ( ! (isset($_POST['name']) && $_POST['name'] !== '')  ) {
      $err['name'] = '「氏名」を入力してください';
      $is_valid = false;
    }

    // メールアドレス
    if ( ! (isset($_POST['email']) && $_POST['email'] !== '')   ) {
      $err['email'] = '「メールアドレス」を入力してください';
      $is_valid = false;
    } else {
      // 全角英数字を半角に変換
      $_POST['email'] = mb_convert_kana($_POST['email'],'a','UTF-8');

      if ( ! is_valid_mail_address( $_POST['email']) ) {
          $err['email'] = '正しい「メールアドレス」を入力してください';
          $is_valid = false;
      }
    }
  }
  
  if($is_valid){
    // 確認画面
    require('./confirm.php');
  }else{
    // 入力画面
    require('./input.php');
  }
  return $err;
}
