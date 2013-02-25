<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program02:入力</title>
  </head>
  <body>
    <?php echo htmlentities($_POST['data'],ENT_QUOTES,mb_internal_encoding()) . 'が入力されました'; ?>
  </body>
</html>
