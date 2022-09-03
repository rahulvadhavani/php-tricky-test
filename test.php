<?php

/* Pyramid

*     
**    
***   
****  
***** 
******

*/

function pyramid($n = 6, $m = 6, $php = true)
{

    if ($php) {
        for ($i = 1; $i <= $n; $i++) {
            echo str_repeat('*', $i);
            echo '<br>';
        }
    } else {
        $n = 6;
        $m = 6;
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo '*';
            }
            echo '<br>';
        }
    }
}




/* Pyramid upside down

*        j <= 1
**       j <= 2
***      j <= 3
****     j <= 4
*****    j <= 5
******   j <= 6
*****    j <= 5
****     j <= 4
***      j <= 3
**       j <= 2
*        j <= 1

*/

function pyramidUpsideDown($m = 6)
{
    $n = (2 * $m) - 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $m; $j++) {
            if ($i <= $m) {
                echo ($j <= $i ? '*' : '&nbsp');
            } else {
                // echo "*";
                echo ((2 * $m) - $i >= $j ? '*' : '&nbsp');
            }
        }
        echo '<br>';
    }
}



/* Empty diamond

*************   *****1  1  12345 3 <=j || 3<=j 
****** ******   ** **2  2  12 45 2 <=j || 4<=j
*****   *****   *   *3  3  1   5 1 <=j || 5<=j 
****     ****   ** **4  4  12 45 2 <=j || 4<=j 8-4
***       ***   *****5  5  12345 3 <=j || 3<=j 8-5
**         **
*           *
**         **
***       ***
****     ****
*****   *****
****** ******
*************

*/


function emptyDiamonddiamond($n = 5)
{
    $a = ($n - 1) / 2;
    $b = ($n + 1) / 2;
    $c = (2 * $n) - $a;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($i <= ($n + 1) / 2) {
                echo (($j <= ($b + 1) - $i || $j >= ($b - 1) + $i) ? '*' : '&nbsp;&nbsp;');
            } else {
                echo ($j <= $i - $a || $j >= $c - $i ? '*' : '&nbsp;&nbsp;');
            }
        }
        echo '<br>';
    }
}



/* diamond

  *    i:1 , j:3         j <=3 & 3<=j
 ***   i:2 , j:2,3,4     j <=2 & 4<=j
*****  i:3 , j:1,2,3,4,5 j <=1 & 5<=j
 ***   i:4 , j:2,3,4     j <=2 & 4<=j  
  *    i:5 , j:3         j <=3 & 3<=j

*/

function diamond($n = 5)
{
    $a = ($n - 1) / 2; //2
    $b = ($n + 1) / 2; //3
    $c = (2 * $n) - $a;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($i <= $b) {
                echo (($j >= $b + 1 - $i && $j <= $a + $i) ? '*' : '&nbsp;&nbsp;');
            } else {
                echo ($j >= $i - $a && $j <= $c - $i ? '*' : '&nbsp;&nbsp;');
            }
        }
        echo '<br>';
    }
}




/*

    *        i 1  j  3 3    n+3/2 == J  || n-1/2+i
  *   *      i 2  j  2,4   n+3/2-$i == J || n-1/2+i 
*       *    i 3  j  1,5   n+3/2-$i == J || n-1/2+i
  *   *      i 4  j  2,4   n+3/2-$i == J || 8-i
    *        i 5  j  3 3    n+3/2-$i == J || 8-i

*/

function diamondnorder($n = 5)
{
    $x = ($n +  3) / 2; //4
    $a = ($n - 1) / 2; //2
    $c =  2 * $n - $a; //8

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($i < $x) {
                echo (($j == $x - $i || $j == $a + $i) ? '*' : '&nbsp;&nbsp;');
            } else {
                echo ($j == $i - $a || $j == $c - $i ? '*' : '&nbsp;&nbsp;');
            }
        }
        echo '<br>';
    }
}


/* Timer
 
*****     i 1  j  1 to 5    n+3/2 == J  || n-1/2+i
 ***      i 2  j  2 to 4    n+3/2 == J  || n-1/2+i
  *       i 3  j  3 to 3    n+3/2 == J  || n-1/2+i 
 ***      i 4  j  2 to 4    n+3/2 == J  || n-1/2+i
*****     i 5  j  1 to 5    n+3/2 == J  || n-1/2+i

*/

function timer($n = 5)
{
    $x = ($n +  1); //6
    $a = ($n - 1) / 2; //2
    $c =  2 * $n - $a; //8

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($i <= $x / 2) {
                echo (($j >= $i && $j <= $x - $i) ? '*' : '&nbsp;&nbsp;');
            } else {
                echo ($j >= $x - $i && $j <= $i ? '*' : '&nbsp;&nbsp;');
            }
        }
        echo '<br>';
    }
}

/* Number pyramid

       1 
     2   3 
    4  5  6 
  7  8  9  10 
11  12 13 14  15 

*/


function numberPyramid($m = 5)
{
    $n = 1;
    for ($i = 1; $i <= $m; $i++) {
        echo str_repeat("&nbsp;&nbsp", $m - $i);
        for ($j = 1; $j <= $i; $j++) {
            echo $n . "&nbsp;&nbsp;";
            $n++;
        }
        echo "<br>";
    }
}



/* Square

* * * * *  
*       * 
*       *
*       *
* * * * *

*/


function square($n = 5)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            echo $i == 1 || $i == $n || $j == 1 || $j == $n ? "*&nbsp;&nbsp;" : "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        echo '<br>';
    }
}
