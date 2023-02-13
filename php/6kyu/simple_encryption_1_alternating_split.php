<?php
/*
Implement a pseudo-encryption algorithm which given a string S and an integer N
concatenates all the odd-indexed characters of S with all the even-indexed characters of S,
this process should be repeated N times.

Examples:

encrypt("012345", 1)  =>  "135024"
encrypt("012345", 2)  =>  "135024"  ->  "304152"
encrypt("012345", 3)  =>  "135024"  ->  "304152"  ->  "012345"

encrypt("01234", 1)  =>  "13024"
encrypt("01234", 2)  =>  "13024"  ->  "32104"
encrypt("01234", 3)  =>  "13024"  ->  "32104"  ->  "20314"

Together with the encryption function, you should also implement a decryption function which reverses the process.

If the string S is an empty value or the integer N is not positive, return the first argument without changes.
*/

// My solution

function encrypt($text, $n)
{
    while ($n > 0) {
        $str1 = '';
        $str2 = '';
        for ($i = 0; $i < strlen($text); $i++) {
            $i % 2 === 0 ? $str2 .= $text[$i] : $str1 .= $text[$i];
        }
        $text = $str1 . $str2;
        $n--;
    }
    return $text;
}

function decrypt($text, $n)
{
    while ($n > 0) {
        $str1 = substr($text, 0, floor(strlen($text) / 2));
        $str2 = substr($text, floor(strlen($text) / 2));
        $text = '';
        for ($i = 0; $i < strlen($str2); $i++) {
            $text .= $str2[$i] . ($str1[$i] ?? '');
            echo $i;
        }
        $n--;
    }
    return $text;
}
