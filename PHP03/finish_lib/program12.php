<?php require_once('mylib.php'); ?>
<?php
  if( ! $_POST ) {
  	redirect('./program12.html');
  }
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program12:様々なUI部品</title>
  </head>
  <body>
      <h2>ラジオボタン</h2>
      <?php echo_post('radio'); ?>
      <h2>チェックボックス</h2>
      <?php echo_post('check1'); if(isset($_POST['check1'])) { echo ' '; } ?>
      <?php echo_post('check2'); if(isset($_POST['check2'])) { echo ' '; } ?>
      <?php echo_post('check3'); ?>
      <h2>テキストエリア</h2>
      <?php echo_post('textarea'); ?>
      <h2>セレクトボックス</h2>
      <?php echo_post('select'); ?>
  </body>
</html>
