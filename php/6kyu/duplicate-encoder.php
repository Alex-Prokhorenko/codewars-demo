<?php
/*
The goal of this exercise is to convert a string to a new stringwhere each character in the new string
is "(" if that character appears only once in the original string, or ")"if that character appears
more than once in the original string. Ignore capitalization when determining if a character is a duplicate.
Examples

"din"      =>  "((("
"recede"   =>  "()()()"
"Success"  =>  ")())())"
"(( @"     =>  "))(("

*/

// My solution

function duplicate_encode($word)
{
    $word = str_split(strtolower($word));
    $counter = array_count_values($word);
    $result = '';

    foreach ($word as $char) {
        $result .= ($counter[$char] > 1) ? ')' : '(';
    }
    return $result;
}
