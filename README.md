# vigenere-php
belajar oop php implementasi chipher vigenere

require 'Vigenere/Vigenere.php';

use Sam\Vigenere\Vigenere as V;

params : 
1. plain
2. key

$encrypt = V::encrypt('kereeens','testing');

echo 'encrypt : ' . $encrypt . '<br>';

params:
1. encrypted
2. key 

$decrypt = V::decrypt($en,'testing')

echo 'decrypt : ' . $decrypt ;
