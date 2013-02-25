<?php
  if( ! isset($_POST['data']) ) {
  	header('Location: ./program11.html');
		exit();
  }
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program11:条件分岐</title>
  </head>
  <body>
    <?php echo htmlentities($_POST['data'],ENT_QUOTES,'UTF-8') . 'が入力されました'; ?>
  </body>
</html>
