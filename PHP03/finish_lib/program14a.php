<?php require_once('mylib.php'); ?>
<?php
  if( ! $_POST ) {
    redirect('./program14a.html');
  }
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program14a:配列(不具合あり)</title>
  </head>
  <body>
      <h2>ラジオボタン</h2>
      <?php echo_post('radio'); ?>
      <h2>チェックボックス</h2>
      <?php echo_post('check'); if( isset($_POST['check']) ) { echo ' '; } ?>
      <?php echo_post('check'); if( isset($_POST['check']) ) { echo ' '; } ?>
      <?php echo_post('check'); ?>
      <h2>テキストエリア</h2>
      <?php echo_post('textarea'); ?>
      <h2>セレクトボックス</h2>
      <?php echo_post('select'); ?>
  </body>
</html>
