<?php 

namespace Sam\Vigenere;

class Char
{
    public static function baby()
    {
        return range('A', 'z');
    }

    public static function moderate()
    {
        return range(chr(25), chr(126));
    }

    public static function super()
    {
        return range(chr(0), chr(255));
    }
}
