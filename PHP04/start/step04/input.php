<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>お問い合わせフォーム</title>
</head>
<body>
<h1>お問い合わせフォーム</h1>
<ul>
<?php if(isset($err['name1'])){ echo '<li>' . htmlspecialchars($err['name1']) . '</li>'; } ?>
<?php if(isset($err['name2'])){ echo '<li>' . htmlspecialchars($err['name2']) . '</li>'; } ?>
<?php if(isset($err['kana1'])){ echo '<li>' . htmlspecialchars($err['kana1']) . '</li>'; } ?>
<?php if(isset($err['kana2'])){ echo '<li>' . htmlspecialchars($err['kana2']) . '</li>'; } ?>
<?php if(isset($err['mail'])) { echo '<li>' . htmlspecialchars($err['mail'])  . '</li>'; } ?>
<?php if(isset($err['age']))  { echo '<li>' . htmlspecialchars($err['age'])  . '</li>'; } ?>
</ul>
<form method="POST" action="index.php" >
<table>
<p>※必須項目</p>
<tr>
<td>お名前<span>※</span></td>
<td>
姓 <input name="name1" type="text" maxlength="10" value="<?php if(isset($_POST['name1'])){ echo htmlspecialchars($_POST['name1']); } ?>" >
名 <input name="name2" type="text" maxlength="10" value="<?php if(isset($_POST['name2'])){ echo htmlspecialchars($_POST['name2']); } ?>" >
</td>
</tr>
<tr>
<td>ふりがな<span>※</span></td>
<td>
せい <input name="kana1" type="text" maxlength="10" value="<?php if(isset($_POST['kana1'])){ echo htmlspecialchars($_POST['kana1']); } ?>" >
めい <input name="kana2" type="text" maxlength="10" value="<?php if(isset($_POST['kana2'])){ echo htmlspecialchars($_POST['kana2']); } ?>" >
</td>
</tr>
<tr>
<td>年齢</td>
<td><input name="age" type="text" size="4" maxlength="3" value="<?php if(isset($_POST['age'])){ echo htmlspecialchars($_POST['age']); } ?>" >歳</td>
</tr>
<tr>
<td>性別</td>
<td>
<label for="man"   ><input name="sex" type="radio" value="男性" <?php if( isset($_POST['sex']) && $_POST['sex'] == '男性' ) { echo 'checked'; }; ?> >男性</label>
<label for="woman" ><input name="sex" type="radio" value="女性" <?php if( isset($_POST['sex']) && $_POST['sex'] == '女性' ) { echo 'checked'; }; ?> >女性</label>
</td>
</tr>
<tr>
<td>メールアドレス<span>※</span></td>
<td>
<input name="mail" type="text" maxlength="100" value="<?php if( isset($_POST['mail']) ) { echo htmlspecialchars( $_POST['mail'] ); } ?>" >
</td>
</tr>
<tr>
<td>ご相談内容を<br />ご記入ください</td>
<td>
<textarea name="inq" cols="45" rows="5" ><?php if( isset( $_POST['inq'] ) ) { echo htmlspecialchars($_POST['inq']); } ?></textarea></td>
</tr>
<tr>
<td colspan="2" >
<input type="submit" value="内容確認"/></td>
</tr>
</table>
</form>	
</body>
</html>
