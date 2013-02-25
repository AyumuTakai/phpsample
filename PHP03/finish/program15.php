<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program15:繰り返し</title>
</head>
<body>
<?php
  $array = array('月','火','水','木','金','土','日'); 
  // $i をカウンタ変数として、$iが0から$arrayの要素数より小さい間繰り返す
  // $i++ は $i = $i + 1 と同じ
  for ($i = 0;$i < count($array);$i++) {
    echo $array[$i].'<br />';
  }
?>
</body>
</html>
