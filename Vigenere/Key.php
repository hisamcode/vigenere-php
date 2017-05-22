<?php 

namespace Sam\Vigenere;

class Key
{
    public static function set($count_plain, $count_key, $real_plain, $real_key)
    {

        if ($count_plain > $count_key) {
            $aa = str_split($real_plain, $count_key);
            for ($x = 0; $x < count($aa); $x++) {
                $key .= $real_key;
            }
            return $key = str_split($key, 1);
        }

        return str_split($real_key, 1);

    }

    public static function set_decrypt($count_encrypt, $count_key, $real_encrypt, $real_key)
    {

        if ($count_encrypt > $count_key) {
            $aa = str_split($real_encrypt, $count_key);
            for ($x = 0; $x < count($aa); $x++) {
                $key .= $real_key;
            }
            return $key = str_split($key, 1);
        }

        return str_split($real_key, 1);

    }
}
