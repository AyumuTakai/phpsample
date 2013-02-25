<?php require_once('./mylib.php'); ?>
<?php if(! $_POST) { redirect('./contact.php'); } ?>
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
<p>お問い合わせ内容の確認</p>
<table>
  <tr>
  <th>氏名</th>
  <td><span id="name"><?php echo_post('name'); ?></span></td>
  </tr>
  <tr>
  <th>メールアドレス</th>
  <td><span id="email"><?php echo_post('email'); ?></span></td>
  </tr>
  <tr>
  <th>性別</th>
  <td><span id="email"><?php
     if($_POST['sex']) { 
        if($_POST['sex'] === 'men' ) { 
          echo '男';
        } else if($_POST['sex'] === 'female') {
          echo '女'; 
        } 
     }; ?></span></td>
  </tr>
  <tr>
  <th>行きたい離島は</th>
  <td><?php 
        if(isset($_POST['rito'])) {
          $rito_name = array('iriomote'=>'西表島','hatoma'=>'鳩間島','yubu'=>'由布島','kohama'=>'小浜島');
          foreach( $_POST['rito'] as $rito) {
              echo $rito_name[$rito].' ';
          }
        }
      ?></td>
  </tr>
  <tr>
  <th>お問い合わせ項目</th>
  <td>
      <?php
        if(isset($_POST['naiyo'])) {
          $naiyo_name = array('rent_car'=>'レンタカー','camp'=>'キャンプ','diving'=>'ダイビング','canoe'=>'カヌー','fishing'=>'釣り');
          $naiyo = $_POST['naiyo'];
          echo $naiyo_name[$naiyo];
        }
      ?>  
  </td>
  </tr>
  <tr>
  <th>ご意見・ご要望</th>
  <td><?php echo_post('iken'); ?></td>
  </tr>
</table>  
<form method="post" action="./send.php">
<input type="hidden" name="name"  value="<?php echo_post('name'); ?>">
<input type="hidden" name="email" value="<?php echo_post('email'); ?>">
<input type="hidden" name="sex"   value="<?php echo_post('sex'); ?>">
<?php if(isset($_POST['rito']) ){ foreach( $_POST['rito'] as $rito) { ?>
<input type="hidden" name="rito[]" value="<?php echo h($rito); ?>">
<?php } } ?>
<input type="hidden" name="naiyo" value="<?php echo_post('naiyo'); ?>">
<input type="hidden" name="iken"  value="<?php echo_post('iken'); ?>">
<input type="submit" value="送信">
</form>
</div><!--mainここまで-->
<div id="top_page"><a href="#top">△ページの上へ△</a></div><!--top_pgaeここまで-->
<div id="footer">copyright 2012 石垣島観光ガイド</div><!--footerここまで-->
</div><!--wrapperここまで-->
</body>
</html>
