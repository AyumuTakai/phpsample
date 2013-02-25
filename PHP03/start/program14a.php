<?php
  if( !( isset( $_POST['radio']) || isset( $_POST['check'] ) || isset($_POST['textarea']) || isset($_POST['select']) )  ) {
  	header('Location: ./program14a.html');
	exit();
  }
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program14a:配列(不具合あり)</title>
  </head>
  <body>
      <h2>ラジオボタン</h2>
      <?php if( isset($_POST['radio']) ) { echo htmlentities($_POST['radio'],ENT_QUOTES,'UTF-8'); } ?>
      <h2>チェックボックス</h2>
      <h2>テキストエリア</h2>
      <?php if( isset($_POST['textarea']) ) { echo htmlentities($_POST['textarea'],ENT_QUOTES,'UTF-8'); } ?>
      <h2>セレクトボックス</h2>
      <?php if( isset($_POST['select']) ) { echo htmlentities($_POST['select'],ENT_QUOTES,'UTF-8'); } ?>
  </body>
</html>
