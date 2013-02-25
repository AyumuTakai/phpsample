<?php
  if( !( isset( $_POST['radio']) || isset( $_POST['check1'] ) || isset( $_POST['check2'] ) || isset( $_POST['check3'] ) || isset($_POST['textarea']) || isset($_POST['select']) )  ) {
  	header('Location: ./program12.html');
	exit();
  }
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program12:様々なUI部品</title>
  </head>
  <body>
      <h2>ラジオボタン</h2>
      <h2>チェックボックス</h2>
      <h2>テキストエリア</h2>
      <h2>セレクトボックス</h2>
  </body>
</html>
