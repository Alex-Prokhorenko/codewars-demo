<?php
/*
Write a function partlist that gives all the ways to divide a list (an array) of at least two elements
into two non-empty parts.

    Each two non empty parts will be in a pair (or an array for languages without tuples or a structin C - C:
    see Examples test Cases - )
    Each part will be in a string
    Elements of a pair must be in the same order as in the original array.

Examples of returns in different languages:

a = ["az", "toto", "picaro", "zone", "kiwi"] -->
[["az", "toto picaro zone kiwi"], ["az toto", "picaro zone kiwi"], ["az toto picaro", "zone kiwi"],
["az toto picaro zone", "kiwi"]]
or
 a = {"az", "toto", "picaro", "zone", "kiwi"} -->
{{"az", "toto picaro zone kiwi"}, {"az toto", "picaro zone kiwi"}, {"az toto picaro", "zone kiwi"},
{"az toto picaro zone", "kiwi"}}
or
a = ["az", "toto", "picaro", "zone", "kiwi"] -->
[("az", "toto picaro zone kiwi"), ("az toto", "picaro zone kiwi"), ("az toto picaro", "zone kiwi"),
("az toto picaro zone", "kiwi")]
or
a = [|"az", "toto", "picaro", "zone", "kiwi"|] -->
[("az", "toto picaro zone kiwi"), ("az toto", "picaro zone kiwi"), ("az toto picaro", "zone kiwi"),
("az toto picaro zone", "kiwi")]
or
a = ["az", "toto", "picaro", "zone", "kiwi"] -->
"(az, toto picaro zone kiwi)(az toto, picaro zone kiwi)(az toto picaro, zone kiwi)(az toto picaro zone, kiwi)"
*/

// My solution

function partlist($arr)
{
    $result = [];
    for ($i = 1; $i < count($arr); $i++) {
        $result[] = [
            implode(' ', array_slice($arr, 0, $i)),
            implode(' ', array_slice($arr, $i))
        ];
    }
    return $result;
}
