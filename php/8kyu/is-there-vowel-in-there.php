<?php
/*
Given an array of numbers, check if any of the numbers are the character codes for lower case vowels (a, e, i, o, u).

If they are, change the array value to a string of that vowel.

Return the resulting array.
*/

// My solution

function isVow(array $a): array
{
    return array_map(function ($elem) {
        return in_array(chr($elem), str_split('aeiou')) ? chr($elem) : $elem;
    }, $a);
}
