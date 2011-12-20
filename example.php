<?php
/**
 * Example of usage.
 * @author: pomaxa
 */

require 'SimpleCipher.php';

//Cipher::setPassword('test');


$msg = 'Hello !';
echo "Original value" . $msg."\n";
$encrypted = SimpleCipher::encrypt($msg);
echo "Encrypted value: " . $encrypted."\n";
$decrypted = SimpleCipher::decrypt($encrypted);
echo "Decrypted value: " . $decrypted."\n";
