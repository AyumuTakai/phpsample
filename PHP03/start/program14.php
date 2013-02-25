<?php
	if( ! isset( $_POST['check'] ) ) {
		header('Location: ./program14.html');
		exit();
	}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>program14:配列</title>
	</head>
	<body>
		<h2>ラジオボタン</h2>
		<?php if( isset($_POST['radio']) ) { echo htmlspecialchars($_POST['radio']); } ?>
		<h2>チェックボックス</h2>
		<?php
		?>
		<h2>テキストエリア</h2>
		<?php if( isset($_POST['textarea']) ) { echo htmlspecialchars($_POST['textarea']); } ?>
		<h2>セレクトボックス</h2>
		<?php if( isset($_POST['select']) ) { echo htmlspecialchars($_POST['select']); } ?>
	</body>
</html>
