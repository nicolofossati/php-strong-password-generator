<?php

$pssw_length = '';
$passworld = '';
if (isset($_GET['length'])) {
    $pssw_length = $_GET['length'];
}

if (isset($pssw_length) && $pssw_length != '') {
    $passworld = gen_pssw($pssw_length);
}
function gen_pssw($length)
{
    $extractor = [];
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $letters_upper_case = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $symbols = ['@', '+', '-', '/', '*'];
    $result = '';

    for ($i = 0; $i < $length; $i++) {
        $extractor[] = rand(0, 3);
    }

    for ($i = 0; $i < $length; $i++) {
        switch ($extractor[$i]) {
            case 0: //letter
                $result .= $letters[rand(0, count($letters) - 1)];
                break;
            case 1: //letter upper case
                $result .= $letters_upper_case[rand(0, count($letters_upper_case) - 1)];
                break;
            case 2: //symbol
                $result .= $symbols[rand(0, count($symbols) - 1)];
                break;
            case 3: //number
                $result .= rand(0, 9);
                break;
        }
    }
    return $result;
}
?>