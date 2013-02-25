<?php
// データチェック
// 最初はtrue、チェックに引っ掛るとfalseになる
$is_valid = true;

if ( ! $_POST ) {

  // POSTで無ければ入力画面
  $is_valid = false; 

}

if( $is_valid ) {
  // 確認画面
  require('./confirm.php');
}else{
  // 入力画面
  require('./input.php');
}
?>
