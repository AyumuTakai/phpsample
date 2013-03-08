<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-jp" xml:lang="ja-jp" dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style>
		</style>
		<title>じゃんけん</title>
	</head>
	<body>
	<h1>じゃんけん</h1>
	<?php
		if( $_GET && isset($_GET['hand']) ) {
			// 番号に対応する表示用の文字列の配列
			$hand_name = array('グー','チョキ','パー');
			// プレイヤーの手 
			$player_hand = $_GET['hand'];
		       	// 乱数ジェネレータを初期化する
			srand();
		       	// コンピュータの手を乱数で决める 0：グー 1：チョキ 2：パー
			$com_hand = rand(0,2);

			echo '<p>コンピュータ:'.$hand_name[$com_hand].'</p>';
			echo '<p>あなた:'.$hand_name[$player_hand].'</p>';

			// $_GET,$_POSTの値は文字列型、rand()の結果は数値型なので、==で比較する
			if ( $player_hand == $com_hand ) {
				// コンピュータの手とプレイヤーの手が同じならあいこ
				echo '<p>あいこ</p>';	
			}else if( 
				// コンピュータがグー、プレイヤーがパー
				($com_hand === 0 && $player_hand === '2' ) ||
				// コンピュータがチョキ、プレイヤーがグー
				($com_hand === 1 && $player_hand === '0' ) ||
				// コンピュータがパー、プレイヤーがチョキ
				($com_hand === 2 && $player_hand === '1' )
				) {
				echo '<p>あなたのかち</p>';	
			
			}else{
				echo '<p>あなたのまけ</p>';
			}
	?>
			<a href="./rpsg.php">再挑戦</a>
	<?php
		}else{
	?>
			<p>じゃんけん</p>
			<a href="./rpsg.php?hand=0">グー</a>
			<a href="./rpsg.php?hand=1">チョキ</a>
			<a href="./rpsg.php?hand=2">パー</a>
	<?php	
		}
	?>
	</table>
	</body>
</html>
