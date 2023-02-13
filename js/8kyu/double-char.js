/*
Given a string, you have to return a string in which each character (case-sensitive) is repeated once.

Examples (Input -> Output):

* "String"      -> "SSttrriinngg"
* "Hello World" -> "HHeelllloo  WWoorrlldd"
* "1234!_ "     -> "11223344!!__  "
*/

// My solution
function doubleChar(str) {
    return str.split('').reduce((acc, letter) => acc + letter.repeat(2), '');
}
