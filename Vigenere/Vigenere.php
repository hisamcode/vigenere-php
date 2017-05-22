<?php 

namespace Sam\Vigenere;

require "Engine.php";
require 'Encrypt.php';
require 'Decrypt.php';
require "Char.php";
require "Key.php";

use Sam\Vigenere\Engine;
use Sam\Vigenere\Encrypt;
use Sam\Vigenere\Decrypt;
use Sam\Vigenere\Char;
use Sam\Vigenere\Key;


class Vigenere extends Engine
{

    public static function encrypt($plain, $key)
    {
        $encrypt = new Encrypt($plain, $key);
        return $encrypt->create()->toString();
    }

    public static function decrypt($encrypted, $key)
    {
        $decrypt = new Decrypt($encrypted, $key);
        return $decrypt->create()->toString();
    }

}
