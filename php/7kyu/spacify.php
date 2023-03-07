<?php
/*
Modify the spacify function so that it returns the given string with spaces inserted between each character.

spacify("hello world") // "h e l l o   w o r l d"
*/

// My solution

function spacify(string $s): string
{
    return implode(' ', str_split($s));
}
