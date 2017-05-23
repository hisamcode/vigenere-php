# vigenere-php
cipher vigenere

require 'Vigenere/Vigenere.php'; <br>

use Sam\Vigenere\Vigenere as V; <br>

params : <br> 
1. plain
2. key
<br>
$encrypt = V::encrypt('kereeens','testing'); <br>
echo 'encrypt : '.$encrypt; <br>

params: <br>
1. encrypted
2. key 
<br>
$decrypt = V::decrypt($encrypt,'testing'); <br>
echo 'decrypt : '.$decrypt; <br>
 
