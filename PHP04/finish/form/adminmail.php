<?php
$to =   'admin@cr-pec.info';
$from = 'admin@cr-pec.info';
$subject = 'お問合わせ';

$body = <<< EOF
名前 ： {$_POST['name1']} {$_POST['name2']}

ふりがな : {$_POST['kana1']} {$_POST['kana2']}

年齢 : {$_POST['age']}

性別 : {$_POST['sex']}

メールアドレス : {$_POST['mail']}

メッセージ : {$_POST['inq']}
EOF;
