<?php
/**
 * Simple Encode/Decode class.
 * @author: pomaxa
 */

class SimpleCipher
{
    protected static $password = 'myCoolSecretPassWord';
    protected static $type = 'aes128';

    public static function setPassword($password = 'myCoolSecret')
    {
        self::$password = $password;
    }

    public static function strongRandom($num_bytes, $raw = false)
    {
        $rand = openssl_random_pseudo_bytes($num_bytes);
        if (!$raw) {
            $rand = base64_encode($rand);
        }
        return $rand;
    }

    public static function encrypt($data)
    {
        $iv = base64_decode(SimpleCipher::strongRandom(16) );
        $encrypted = openssl_encrypt($data, self::$type, self::$password, false, $iv);
        return $iv . $encrypted;
    }

    public static function decrypt($data)
    {
        $iv = substr($data, 0, 16);
        $data = substr($data, 16);
        $decrypted = openssl_decrypt($data, self::$type, self::$password, false, $iv);
        return $decrypted;
    }
}