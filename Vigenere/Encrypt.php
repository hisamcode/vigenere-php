<?php 

namespace Sam\Vigenere;

class Encrypt
{
    public function __construct($plain, $key)
    {
        $this->char         = Char::baby();
        $this->key          = $key;
        $this->plain        = $plain;
        $this->key_arr      = str_split($key);
        $this->plain_arr    = str_split($plain);
        $this->count_key    = count($this->key_arr);
        $this->count_plain  = count($this->plain_arr);
        $this->key_set      = Key::set($this->count_plain, $this->count_key, $this->plain, $this->key);
    }

    public function create()
    {
        $set            = $this->set();
        $search_key     = $this->search_key();
        $search_plain   = $this->search_plain();
        $this->encrypt  = $this->build($set, $search_plain, $search_key);
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

    public function search_plain()
    {
        for ($i = 0; $i < count($this->plain_arr); $i++) {
            $search_plain[] = array_search($this->plain_arr[$i], $this->char);
        }
        return $search_plain;
    }

    public function build($set, $search_plain, $search_key)
    {

        for ($i = 0; $i < count($search_plain); $i++) {

            for ($a = $i; $a < count($search_key); $a++) {
                $search[] = $set[$search_key[$a]][$search_plain[$i]];
                break;
            }

        }
        // return $search_key;
        return $search;
        
    }

    public function toString()
    {
        return implode('', $this->encrypt);
    }
    
}
