<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-jp" xml:lang="ja-jp" dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style>
			table {border-left:solid 1px #000;border-top:solid 1px #000;margin:0;}
			th,td {border-right:solid 1px #000;border-bottom:solid 1px #000;margin:0;}
			.gray {background:lightgray;}
		</style>
		<title>比較/論理演算子</title>
	</head>
	<body>
	<h1>比較/論理演算子</h1>
	<table cellspacing="0">
	<tr><th>&nbsp;</th><th colspan="7"> D1</th> </tr>
	<tr><th rowspan="7"> D2 </th><th>&nbsp;</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th></tr>
	<?php for( $d2 = 1 ; $d2 <= 6 ; $d2++ ){ ?>
	<tr><th><?php echo $d2; ?></th>
					<?php for( $d1 = 1 ; $d1 <= 6 ; $d1++){
						// 下の括弧の中の条件を変えると、塗り潰されるセルが変化します。
						if( $d1 === 3 ) {
							$class = 'gray';
						}else{
							$class = '';
						}
					?>
					<td class="<?php echo $class; ?>">&nbsp;<?php echo $d1; ?>&nbsp;</td>
					<?php } ?>
				</tr>
	<?php } ?>
	</table>
	</body>
</html>
