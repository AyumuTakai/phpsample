<?php require_once('mylib.php'); ?>
<?php
  if( ! $_POST  ) {
    redirect('./program17.html');
  }
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program17:繰り返し</title>
  </head>
  <body>
    <?php
      foreach( $_POST as $key => $value ) {
        if( is_array($value) ) {
            // $valが配列の場合
            echo h($key) .' => {' ;
            foreach( $value as $element ) {
                echo h($element) . ' , ';
            }
            echo '}<br />';
        }else{
           // $valが配列以外の場合
          echo h( $key . ' => ' . $value ) . '<br />';
        }
      }
    ?>
  </body>
</html>
