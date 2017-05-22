<?php 

$real_plain = 'kerenbanget';
$plain = str_split($real_plain,1);
$count_plain = count($plain);

$real_key = 'katak';
$key    = str_split($real_key, 1);
$count_key = count($key);


if ($count_plain > $count_key) {
    $aa = str_split($real_plain, $count_key);
    $key = null;
    for ($x = 0; $x < count($aa); $x++) {
        $key .= $real_key;
    }
    $key = str_split($key, 1);
}

// atur char
// foreach (range('A','z') as $char) {
//     $arr[] = $char;
// }

// $arr = range(chr(25),chr(126));
$arr = range('A','z');
// var_dump($arr);

// for($i = 0; $i < 10; $i++) {
//     $arr[] = strval($i);
// }

// foreach (range('z','l') as $char) {
//     $arr[] = $char;
// }

// $arr[] = '@';
// $arr[] = '.';

// $arr = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

// encrypt
$set = [];
$temp = [];
for($i = 0; $i < count($arr); $i++){

    $temp = $arr;

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

for ($i = 0; $i < count($key); $i++) {
    $search_key[] = array_search($key[$i], $arr);
}

for ($i = 0; $i < count($plain); $i++) {
    $search_plain[] = array_search($plain[$i], $arr);

    for ($a = $i; $a < count($search_key); $a++) {
        $search[] = $set[$search_key[$a]][$search_plain[$i]];
        break;
    }
}

$encrypt = implode('',$search);
echo '<br> key : ' . implode('', $key) . ' <br>';
echo 'encrypt : ' . $encrypt . ' <br>';

// decrypt
$encrypt = $search;
$search_key = [];

for ($i = 0; $i < count($key); $i++) {
    $search_key[] = array_search($key[$i], $arr);
}

for ($i = 0; $i < count($encrypt); $i++) {

    for ($a = $i; $a < count($search_key); $a++) {
        $search_encrypt = array_search($encrypt[$i], $set[$search_key[$a]]);
        $decrypt[] = $arr[$search_encrypt];
        break;
    }
}

$decrypt = implode('', $decrypt);
echo 'decrypt : ' . $decrypt . ' <br>';