<?php
  if( ! $_POST ) {
    header('Location: ./program17.html');
    exit();
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
            echo htmlentities($key,ENT_QUOTES,'UTF-8') .' => {' ;
            foreach( $value as $element ) {
                echo htmlentities($element,ENT_QUOTES,'UTF-8') . ' , ';
            }
            echo '}<br />';
        }else{
           // $valが配列以外の場合
          echo htmlentities( $key . ' => ' . $value ,ENT_QUOTES,'UTF-8') . '<br />';
        }
      }
    ?>
  </body>
</html>
