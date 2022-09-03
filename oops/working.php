<?php

// function __autoload($class){
    // require ($class.'.php');
    require ('first.php');
    require ('second.php');
// }

$obj = new db();
echo '<pre>';
print_r($obj->getConn());



?>