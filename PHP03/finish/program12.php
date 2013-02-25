<?php
  if( ! $_POST ) {
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
      <?php if( isset($_POST['radio']) ) { echo htmlentities($_POST['radio'],ENT_QUOTES,'UTF-8'); } ?>
      <h2>チェックボックス</h2>
      <?php if( isset($_POST['check1']) ) { echo htmlentities($_POST['check1'],ENT_QUOTES,'UTF-8').' '; } ?>
      <?php if( isset($_POST['check2']) ) { echo htmlentities($_POST['check2'],ENT_QUOTES,'UTF-8').' '; } ?>
      <?php if( isset($_POST['check3']) ) { echo htmlentities($_POST['check3'],ENT_QUOTES,'UTF-8'); } ?>
      <h2>テキストエリア</h2>
      <?php if( isset($_POST['textarea']) ) { echo htmlentities($_POST['textarea'],ENT_QUOTES,'UTF-8'); } ?>
      <h2>セレクトボックス</h2>
      <?php if( isset($_POST['select']) ) { echo htmlentities($_POST['select'],ENT_QUOTES,'UTF-8'); } ?>
  </body>
</html>
