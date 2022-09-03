<?php 
class db{
    private $con;
	function __construct (){
	  $this->con = new mysqli('localhost','root','','sqlpract');
	}
	public $query = '';
	
	public function getrec(){
		$con = $this->con;
		$this->query = 'select * from users';
		$sql = $con->query($this->query);
		if ($sql->num_rows>0) {
			$res = $sql->fetch_all();
			return ($res);
		}
	}
}
// $arr = new db;
// $getdata = $arr->getrec();
// echo "<pre>";
// print_r($getdata);


// function comp($a,$b){
// 	if (abs($a-$b) == 5) {
// 		return 1;
// 	}else{
// 		return 0;
// 	}
// }
// $a = '1,10,20,30,40';
// $b = '3,7,15,11,35';
// $arr_a = explode(',', $a);
// $arr_b = explode(',', $b);
// $c = array_udiff_assoc($arr_a,$arr_b,'comp');
// print_r($c);

 ?>