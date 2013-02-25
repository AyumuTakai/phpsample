<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program11ex:条件分岐(応用課題)</title>
  </head>
  <body>
  <?php
    if( isset($_POST['data']) ) { 
      echo htmlentities($_POST['data'],ENT_QUOTES,'UTF-8') . 'が入力されました';
    }else{
  ?>
      <form method="POST" action="./program11ex.php">
        <p>文章<input type="text" name="data">
        <input type="submit" value="送信"></p>
      </form>
  <?php } ?>
  </body>
</html>
