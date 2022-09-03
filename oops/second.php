<?php
class Second{
    protected $name = 'heyrv';
    public function getFirst(){
        return $this->name;
    }
}

class Third extends Second{
    public function getFirst(){
        return $this->name;
    }
}

class db{
    public function getConn(){
        $conn = new mysqli('localhost','root','','sqlpract');
        $res = $conn->query('select * from users')->fetch_all();
        return $res;
    }
}

?>