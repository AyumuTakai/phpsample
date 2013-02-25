<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="石垣島,観光" />
<meta name="description" content="石垣島の観光ガイドです。" />
<title>石垣島観光ガイド</title>
<link href="css/base.css" rel="stylesheet" type="text/css" />
</head>

<body><a id="top"></a>

<div id="wrapper">

<div id="header">
<h1><img src="image/ishigaki_logo.jpg" />石垣島観光ガイド</h1>
</div><!--end header-->

<img src="image/ishigaki_main.jpg" alt="メインイメージ" class="photo" /> 

<div id="gnav">
<ul>
<li id="nav-spot"><a href="spot.html">見る</a></li>
<li id="nav-play"><a href="play.html">遊ぶ</a></li>
<li id="nav-tomaru"><a href="#">泊まる</a></li>
<li id="nav-trance"><a href="#">交通</a></li>
<li id="nav-gourmet"><a href="#">グルメ</a></li>
<li id="nav-contact"><a href="#">お問い合わせ</a></li>
</ul>
</div><!--end gnav-->

<div id="side">
<ul>
<li><a href="#">レンタカー</a></li>
<li><a href="#">キャンプ</a></li>
<li><a href="#">ダイビング</a></li>
<li><a href="#">カヌー</a></li>
<li><a href="#">釣り</a></li>
</ul>
</div><!--end side-->

<div id="main">
<h2>お問い合わせ</h2>
<p>ご意見・ご要望がある方へ<br />
	下記の項目をご記入いただき、送信ボタンをクリックしてください。</p>
        
<form id="form1" name="form1" method="POST" action="./confirm.php">
<p>氏名　<input name="name" type="text" id="name" size="30" maxlength="30" /></p>

<p>メールアドレス　<input name="email" type="text" id="email" size="30" maxlength="30" /></p>

<p>性別　
<input name="sex" type="radio" value="men" />男
<input name="sex" type="radio" value="female" />女</p>

<p>行きたい離島は
<input name="rito[]" type="checkbox" value="iriomote" />西表島　
<input name="rito[]" type="checkbox" value="hatoma" />鳩間島　
<input name="rito[]" type="checkbox" value="yubu" />由布島　
<input name="rito[]" type="checkbox" value="kohama" />小浜島</p>

<p>お問い合わせ項目
<select name="naiyo">
<option value="">選択してください。</option>
<option value="rent_car">レンタカー</option>
<option value="camp">キャンプ</option>
<option value="diving">ダイビング</option>
<option value="canoe">カヌー</option>
<option value="fishing">釣り</option>
</select>
</p>

<p>ご意見・ご要望<br />
<textarea name="iken" cols="70" rows="10" id="iken"></textarea></p>

<p><input type="submit" name="button" id="button" value="送信" />
<input type="reset" name="button" id="button" value="リセット" /></p>

</form>
</div><!--mainここまで-->
  
<div id="top_page"><a href="#top">△ページの上へ△</a></div><!--top_pgaeここまで-->

<div id="footer">copyright 2012 石垣島観光ガイド</div><!--footerここまで-->

</div><!--wrapperここまで-->
</body>
</html>