<?php
$data['pass'] = 12345;
$enc_pass = password_hash($data['pass'],PASSWORD_BCRYPT);
echo $enc_pass;
?>
