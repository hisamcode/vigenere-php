<?php 

namespace Sam\Vigenere;

class Decrypt
{
    public function __construct($encrypted, $key)
    {
        $this->char         = Char::baby();
        $this->key          = $key;
        $this->key_arr      = str_split($key, 1);
        $this->encrypt      = $encrypted;
        $this->count_encrypt= strlen($encrypted);
        $this->key_set      = Key::set($this->count_encrypt, strlen($this->key), $this->encrypt, $this->key);
    }

    public function create()
    {
        $search_key = $this->search_key();
        $this->decrypt = $this->build($search_key, $this->set());
        return $this;
    }

    public function set()
    {
        $set = [];
        $temp = [];
        for($i = 0; $i < count($this->char); $i++){

            $temp = $this->char;

            if ($i == 0) {
                array_push($set, $temp);    
            }
            else {

                for($a = 0; $a < $i; $a++) {
                    $temp[] = $temp[$a];
                }

                $temp = array_slice($temp, $i);
                $set[] = $temp;
            }

        }

        return $set;
    }

    public function search_key()
    {
        for ($i = 0; $i < count($this->key_set); $i++) {
            $search_key[] = array_search($this->key_set[$i], $this->char);
        }

        return $search_key;
    }

    public function build($search_key, $set)
    {
        for ($i = 0; $i < count(str_split($this->encrypt, 1)); $i++) {
            for ($a = $i; $a < count($search_key); $a++) {
                $search_encrypt = array_search($this->encrypt[$i], $set[$search_key[$a]]);
                $decrypt[] = $this->char[$search_encrypt];
                break;
            }
        }
        return $decrypt;
    }

    public function toString()
    {
        return implode('', $this->decrypt);
    }
}
