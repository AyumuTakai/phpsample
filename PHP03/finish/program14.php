<?php
  if( ! $_POST ) {
    header('Location: ./program14.html');
    exit();
  }
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program14:配列</title>
  </head>
  <body>
    <h2>ラジオボタン</h2>
    <?php if( isset($_POST['radio']) ) { echo htmlentities($_POST['radio'],ENT_QUOTES,'UTF-8'); } ?>
    <h2>チェックボックス</h2>
    <?php
      if( isset($_POST['check']) ) {  
        $array = $_POST['check'];
        if( isset($array[0]) ) { echo htmlentities($array[0],ENT_QUOTES,'UTF-8').' '; } 
        if( isset($array[1]) ) { echo htmlentities($array[1],ENT_QUOTES,'UTF-8').' '; }
        if( isset($array[2]) ) { echo htmlentities($array[2],ENT_QUOTES,'UTF-8'); }
      }
    ?>
    <h2>テキストエリア</h2>
    <?php if( isset($_POST['textarea']) ) { echo htmlentities($_POST['textarea'],ENT_QUOTES,'UTF-8'); } ?>
    <h2>セレクトボックス</h2>
    <?php if( isset($_POST['select']) ) { echo htmlentities($_POST['select'],ENT_QUOTES,'UTF-8'); } ?>
  </body>
</html>
