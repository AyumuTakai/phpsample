<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program05:POSTリクエスト</title>
  </head>
  <body>
    <?php echo 'ようこそ '.htmlentities($_POST['id'],ENT_QUOTES,mb_internal_encoding()) . 'さん'; ?><br />
    <?php echo htmlentities($_POST['id'],ENT_QUOTES,mb_internal_encoding()).'さんのマイページです。'; ?><br />
  </body>
</html>
