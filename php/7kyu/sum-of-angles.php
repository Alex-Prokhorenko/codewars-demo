<?php
//Description:
//Find the total sum of internal angles (in degrees) in an n-sided simple polygon. N will be greater than 2.

// My solution

function angle(int $n): int
{
    return ($n - 2) * 180;
}
