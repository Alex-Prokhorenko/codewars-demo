/*
Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces.
*/

// My solution
function isVowel(letter) {
  let arr = ["a", "e", "i", "o", "u"];
  return arr.includes(letter);
}

function getCount(str) {
  return str.split("").filter(letter => isVowel(letter)).length;
}