<?php
$to =   'user00@example.com';
$from = 'user00@example.com';
$subject = 'お問合わせ';

$body = <<< EOF
氏名 ： {$name} 

メールアドレス : {$email}

性別 : {$sex}

行きたい離島 : {$rito}

お問い合わせ項目 : {$naiyo}

ご意見・ご要望 : {$iken}
EOF;
