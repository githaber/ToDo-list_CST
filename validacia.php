<?php
	if (!empty($_GET['name']) && !empty($_GET['password'])) {
		$name = $_GET['name'];
		$password = $_GET['password'];
	}
	$conn = mysqli_connect("localhost","root","","todolist");
	
	$sql = "SELECT * FROM user";
	$out = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_assoc($out)) {
	 
		if ($row['email'] == $name ) {
			if ($row['password'] == $password) {
				include 'viewlogin.php';
				die();
			}
		}
	}

?>