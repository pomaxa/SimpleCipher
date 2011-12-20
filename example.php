<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 12/20/11
 * Time: 11:40 PM
 * To change this template use File | Settings | File Templates.
 */

require 'SimpleCipher.php';

//Cipher::setPassword('test');


$msg = 'Hello !';
echo "Original value" . $msg."\n";
$encrypted = SimpleCipher::encrypt($msg);
echo "Encrypted value: " . $encrypted."\n";
$decrypted = SimpleCipher::decrypt($encrypted);
echo "Decrypted value: " . $decrypted."\n";
