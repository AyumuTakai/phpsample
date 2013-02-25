<?php
$to =  $_POST['mail'];
$from = 'admin@cr-pec.info';
$subject = 'お問合わせ確認';

$body = <<< EOF
 {$_POST['name1']} {$_POST['name2']} 様

 このたびはお問合わせいただき、誠にありがとうございました。

EOF;

