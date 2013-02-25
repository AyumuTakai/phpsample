<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>問い合わせ内容確認</title>
</head>
<body>
  <h2>お問合わせ内容の確認</h2>
  <table class="T1">
    <tr>
      <td>お名前<span class="req">※</span></td>
      <td><span id="name1"></span> 
          <span id="name2"></span></td>
    </tr>
    <tr>
      <td>ふりがな<span class="req">※</span></td>
      <td><span id="kana1"></span>
          <span id="kana2"></span></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><span id="age"></span>歳</td>
    </tr>
    <tr>
      <td>性別</td>
      <td><span id="sex"></span></td>
    </tr>
    <tr>
      <td>メールアドレス<span  class="req">※</span></td>
      <td><span id="mail"></span></td>
    </tr>
    <tr>
      <td>ご相談内容</td>
      <td><span id="inq"></span></td>
    </tr>
    <tr>
      <td colspan="2" class="btn-send">
      <form method="POST" action="thanks.php" name="frm" >
        <input type="submit" name="send" id="send" value="送信" /></td>
      </form>
    </tr>
  </table>
</body>
</html>
