<?php 

namespace Sam\Vigenere;

abstract class Engine
{
    public $key;
    public $plain;
    
    public $key_arr;
    public $plain_arr;

    public $key_set;

    public $count_key;
    public $count_plain;

    public $char;

    public $set;

    public $encrypt;
    public $count_encrypt;

    public $decrypt;

}
