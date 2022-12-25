<?php
/*
Complete the function/method so that it returns the url with anything after the anchor (#) removed.
*/

// My solution

function replaceAll($string)
{
    $arr = explode('#',$string);
    return $arr[0];
}