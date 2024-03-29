/*
Take 2 strings s1 and s2 including only letters from a to z.
Return a new sorted string, the longest possible,
containing distinct letters - each taken only once - coming from s1 or s2.

Examples:

a = "xyaabbbccccdefww"
b = "xxxxyyyyabklmopq"
longest(a, b) -> "abcdefklmopqwxy"

a = "abcdefghijklmnopqrstuvwxyz"
longest(a, a) -> "abcdefghijklmnopqrstuvwxyz"
*/

// My solution
function longest(s1, s2) {
    let arr = s1.split('').concat(arr2 = s2.split(''));
    return arr.reduce((acc, e) => (acc.includes(e) || acc.push(e), acc), []).sort().join('');
}
