<?php

require_once('./mylib.php');

// データチェック
// $_POSTに対して、入力データが正しいかチェックする
// 返り値 エラーがあれば、エラーメッセージの配列、エラーが無ければ空配列
function datacheck() {
  $post = $_POST; // 元の$_POSTのデータを複製しておく
  $err = array(); // エラーメッセージ保存用配列

  if ( ! $_POST ) {

    // POSTで無ければ入力画面
    $err['_post'] = 'POSTリクエストではない';
  
  }else{

    //
    // 必須項目のチェック
    //
  
    // 名前
    if ( ! $_POST['name1'] ) {
      $err['name1'] = '「姓」を入力してください';
    }
  
    if ( ! $_POST['name2'] ) {
      $err['name2'] = '「名」を入力してください';
    }
  
    // 振り仮名
    if ( ! $_POST['kana1'] ) {
      $err['kana1'] = '「せい」を入力してください';
    } else {
      // 振り仮名の変換 カタカナ=>ひらがな
      $_POST['kana1'] = mb_convert_kana($_POST['kana1'],'c','UTF-8');
      $_POST['kana1'] = str_replace('ヴ','う゛',$_POST['kana1']);
  
      // 振り仮名を変換した結果がひらがなだけか
      if ( ! preg_match("/^[ぁ-んー゛゜]+$/u", $_POST['kana1']) ) {
        $err['kana1'] = '正しい「せい」を入力してください';
      }  
    }
  
    if ( ! $_POST['kana2'] ) {
      $err['kana2'] = '「めい」を入力してください';
    } else {  
      // 振り仮名の変換 カタカナ=>ひらがな
      $_POST['kana2'] = mb_convert_kana($_POST['kana2'],'c','UTF-8');
      $_POST['kana2'] = str_replace('ヴ','う゛',$_POST['kana2']);
      
      // 振り仮名を変換した結果がひらがなだけか
      if ( ! preg_match("/^[ぁ-んー゛゜]+$/u", $_POST['kana2']) ) {
        $err['kana2'] = '正しい「めい」を入力してください';
      }
    }
  
    // メールアドレス
    if ( ! $_POST['mail']  ) {
      $err['mail'] = '「メールアドレス」を入力してください';
    } else {
  
      // 全角英数字を半角に変換
      $_POST['mail'] = mb_convert_kana($_POST['mail'],'a','UTF-8');
  
      // メールアドレスをチェック
      if ( ! is_valid_mail_address($_POST['mail']) ){
        $err['mail'] = '正しい「メールアドレス」を入力してください';
      }
    }
  
    //
    // 必須項目以外
    //
    
    // 年齢変換,チェック
    if( $_POST['age'] ) {
    
      // 全角数字を半角数字に変換
      $_POST['age'] = mb_convert_kana($_POST['age'],'n','UTF-8');
      
      // 半角数字のみでなければエラー
      if( ! preg_match('/^[0-9]+$/',$_POST['age']) ) {
        $err['age'] = '正しい「年齢」を入力してください';
      }else{
        // 念のため一度数値にしてから文字列に戻す(先頭に０がついている場合の対処)
        $_POST['age'] = "".intval($_POST['age']);
      }
    }
  }
  if($err) {
    // エラーの時には変換した結果を元にもどす。
    $_POST = $post;
  }
  return $err;
}
