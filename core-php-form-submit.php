<?php 
if (isset($_POST['submit'])) {
	$task  = $_POST['task'];
	$description  = $_POST['description'];
	if ($task == '') {
		echo 'task is  requried filed.<br>';
	}
	elseif ($description == '') {
		echo 'description is  requried filed.';
	}else{
		$con = mysqli_connect('localhost','root','','breezblog');
		if ($con->connect_errno !=0) {
			echo "conneaction error";
			die();
		}
        
		$sql = "INSERT INTO `todo`(`id`, `todo`, `description`) VALUES ('','{$task}','{$description}')";
		// echo $sql;
		// die();
		$result = mysqli_query($con,$sql);
		
		if ($result) {
			echo "Record inserted successfully.";
		}else{
			echo "Something went  wrong";
		}
		$sql1 = "SELECT * from todo";
		$data = mysqli_query($con,$sql1);
		
			$data =mysqli_fetch_all($data);
		
		print_r($data); 
	}

}





 ?>




 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post">
	 	<div><label for="">Task : </label><input type="text" name="task"></div>
	 	<div><label for="">Description : </label><input type="text" name="description"></div>
	 	<div><input type="submit" name="submit"></div>
	</form>
 
 </body>
 </html>