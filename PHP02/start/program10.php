<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>program10:比較演算子</title>
<body>
  <?php echo '1 < 2  → '; var_dump(); ?> (左辺が小さいのでTRUE)<br /><br />
  <?php echo '1 > 2  → '; var_dump(); ?> (左辺が小さいのでFALSE)<br /><br />
  <?php echo '2 < 1  → '; var_dump(); ?> (左辺が大きいのでFALSE)<br /><br />
  <?php echo '2 > 1  → '; var_dump(); ?> (左辺が大きいのでTRUE)<br /><br />
  <?php echo '2 <= 2  → '; var_dump(); ?> (左辺が右辺以下なのでTRUE)<br /><br />
  <?php echo '2 >= 2  → '; var_dump(); ?> (左辺が右辺以上のでFALSE)<br /><br />


  <?php echo '1 == \'1\'  → '; var_dump(); ?> (値が等しいのでTRUE)<br /><br />
  <?php echo '1 == \'2\'  → '; var_dump(); ?> (値が違うのでFALSE)<br /><br />
  <?php echo '1 === \'1\' → '; var_dump(); ?> (型が違うのでFALSE)<br /><br />
  <?php echo '1 === 1     → '; var_dump(); ?> (型も値も等しいのでTRUE)<br /><br />
  <?php echo '1 != \'1\'  → '; var_dump(); ?> (値が等しいのでFALSE)<br /><br />
  <?php echo '1 != \'2\'  → '; var_dump(); ?> (値が違うのでTRUE)<br /><br />
  <?php echo '1 !== \'1\' → '; var_dump(); ?> (型が違うのでTRUE)<br /><br />
  <?php echo '1 !== 2     → '; var_dump(); ?> (値が違うのでTRUE)<br /><br />
  <?php echo '1 !== \'2\' → '; var_dump(); ?> (値も型も違うのでTRUE)<br /><br />
  <?php echo '1 !== 1     → '; var_dump(); ?> (値も型も等しいのでFALSE)<br /><br />
</body>
</html>
