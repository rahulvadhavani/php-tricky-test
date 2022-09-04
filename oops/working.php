<?php

// function __autoload($class){
//     require ($class.'.php');
//     require ('first.php');
//     require ('second.php');
// }

// $obj = new db();
// echo '<pre>';
// print_r($obj->getConn());{}


abstract class process{
    public function sum($a,$b){
        return $a+$b;
    }
    protected function sub($a,$b){
        return $a-$b;
    }
    abstract protected function calc($a,$b);
}

class screen extends process{
   
    public function calc($a,$b){
        return $a*$b;
    }

    public function calcplus($a,$b){
        return $this->sub($a,$b);
    }
}

$task = new screen;
$result = $task->calc(5,5); 
$result2 = $task->sum(5,5);
$result3 = $task->calcplus(25,5);

print_r([$result,$result2,$result3]);


?>