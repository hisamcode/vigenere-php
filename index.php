<?php 

require 'Vigenere/Vigenere.php';

use Sam\Vigenere\Vigenere as V;

$en = V::encrypt('kereeens','testing');
echo 'encrypt : ' . $en . '<br>';
echo 'decrypt : ' . V::decrypt($en,'testing');