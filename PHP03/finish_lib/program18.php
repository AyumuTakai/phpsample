<?php 
  function fact($n) {
    $result = 1;
    for($i = 1;$i <= $n;$i++){
      $result = $result * $i;
    }
    return $result;
  }
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program17:関数</title>
  </head>
  <body>
<?php echo '1! = '. fact(1); ?><br />
<?php echo '2! = '. fact(2); ?><br />
<?php echo '3! = '. fact(3); ?><br />
<?php echo '4! = '. fact(4); ?><br />
<?php echo '5! = '. fact(5); ?><br />
<?php echo '6! = '. fact(6); ?><br />
  </body>
</html>
