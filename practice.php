<?php

/*each year has 13 months
each even month has 21 days, and each odd month has 22
the 13th month lacks a day every leap year
a leap year is any year divisible by 5
each week has 7 days: Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
The task went as follows:

Given that the first day of the year 1900 was tuesday, write a function that will print the day
of the week for a given date. Example, for input {day: 17, month: 11, year: 2013} the output is 
"Saturday".
*/

$year = "13 months";
$range = range(1, 13);
// print_r($range);
// 1,3,5,7,9,11,13 = 21
// 2,4,6,8,10,12 = 22

$mydate = '1-jan-1900';
$day = getDay($mydate);
// echo date('l', strtotime('first day of january 1900')); echo '<br>';
function getDay($mydate)
{
    $mydate2 = '8-jun-1900';

    // print_r(date_create("2013-03-15"));
    $newdate = date('Y-m-d', strtotime($mydate));
    $year = date('Y', strtotime($mydate));
    $month = date('m', strtotime($mydate));
    $date = date('d', strtotime($mydate));
    return $year;
}
