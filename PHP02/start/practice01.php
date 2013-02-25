<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>practice 1</title>
<style>
	.red   { color:#F00; }
	.green { color:#0F0; }
	.blue  { color:#FF0; }
</style>
</head>
<body>
<h2>1.出力</h2>

<ul>
<li><h3>実習1-1 echo</h3>
初めてのプログラム<br />
と出力して下さい。

<h4>回答1-1</h4>
<?php ?>
</li>

<li><h3>実習1-2 htmlをふくむ出力</h3>
二つ目の<br />
プログラム<br />
と出力して下さい。(文章の途中で改行して下さい)

<h4>回答1-2</h4>
<?php   ?>
</li>
<li>
<h3>実習1-3 phpプログラムの書ける場所</h3>

以下の文章に、<br />
"あか"にはclassとしてred<br />
"あお"にはclassとしてblue<br />
"きいろ"にはclassとしてyellow<br />
を出力して下さい。

<h4>回答1-3</h4>
<span class="<?php ?>">あか</span>、<span class="<?php ?>">あお</span>、<span class="<?php ?>">きいろ</span>
</li>
</ul>
<h2>2.入力</h2>
<ul>
<li><h3>実習2-1 GET</h3> 
GETリクエストをpractice01_get.phpに送信するために<br />
以下のformタグの属性を埋め、テキストフィールドのinputタグと送信ボタンをformタグの中に作成してください。
<h4>回答2-1</h4>
<form action="" method="">

</form>
</li>
<li><h3>実習2-2 POST</h3> 
POSTリクエストをpractice01_post.phpに送信するために<br />
以下のformタグの属性を埋め、テキストフィールドのinputタグと送信ボタンをformタグの中に作成してください。
<h4>回答2-2</h4>
<form action="" method="">

</form>
</li>
<li><h3>実習2-3 htmlentities</h3> 
$str変数に代入されている文字列を、スクリプトが実行されないように表示して下さい。
<h4>回答2-3</h4>
<?php 
	$str = '<script>alert(\'DANGER!!\');</script>';

?>
</li>

</ul>
</body>
</html>
