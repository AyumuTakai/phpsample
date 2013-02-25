<?php require_once('mylib.php'); ?>
<?php
  if( ! $_POST  ) {
    redirect('./program14.html');
  }
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program14:配列</title>
  </head>
  <body>
    <h2>ラジオボタン</h2>
    <?php echo_post('radio'); ?>
    <h2>チェックボックス</h2>
    <?php
      if( isset($_POST['check']) ) {  
        $array = $_POST['check'];
        if( isset($array[0]) ) { echo h($array[0]).' '; } 
        if( isset($array[1]) ) { echo h($array[1]).' '; }
        if( isset($array[2]) ) { echo h($array[2]); }
      }
    ?>
    <h2>テキストエリア</h2>
    <?php echo_post('textarea'); ?>
    <h2>セレクトボックス</h2>
    <?php echo_post('select'); ?>
  </body>
</html>
