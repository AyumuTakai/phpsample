<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program04:GETリクエスト</title>
  </head>
  <body>
    <?php echo 'ようこそ '.htmlspecialchars($_GET['id']) . 'さん'; ?><br />
    <?php echo htmlspecialchars($_GET['id']).'さんのマイページです。'; ?><br />
  </body>
</html>
