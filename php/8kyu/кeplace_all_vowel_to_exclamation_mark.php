<?php
/*
Replace all vowel to exclamation mark in the sentence. aeiouAEIOU is vowel.
Examples

replace("Hi!") === "H!!"
replace("!Hi! Hi!") === "!H!! H!!"
replace("aeiou") === "!!!!!"
replace("ABCDE") === "!BCD!"
*/

// My solution

function replace(string $s): string {
    return str_ireplace(['a', 'e', 'i', 'o', 'u'], '!', $s);
}
