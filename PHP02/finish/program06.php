<html>
<head>
<meta http-equiv="content-type" content="text/html; charaset=UTF-8">
<title>program06:データ型 var_dump</title>
</head>
<body>
<table>
<tr>
<th>論理値</th>
<td> <?php var_dump(true); echo ' / '; var_dump(false); ?> </td>
</tr>
<tr>
<th>整数</th>
<td><?php var_dump(123); ?></td>
</tr>
<tr>
<th>実数</th>
<td> <?php var_dump(45.6); ?></td>
</tr>
<tr>
<th>文字列</th>
<td> <?php var_dump('文字列'); ?></td>
</tr>
<tr>
<th>配列</th>
<td> <?php var_dump(array('a',123,true)); ?></td>
</tr>
<tr>
<th>オブジェクト</th>
<td> <?php var_dump(new DateTime()); ?></td>
</tr>
<tr>
<th>NULL</th>
<td> <?php var_dump(null); ?></td>
</tr>
</body>
</html>
