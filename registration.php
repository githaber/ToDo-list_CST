<!DOCTYPE HTML>
<html>

<?php	
	if (!empty($_POST['name']) && !empty($_POST['password'] $$ !empty ($_POST['email']) && !empty ($_POST['second_name']) && !empty ($_POST['birth_date']))
	{
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$second_name = $_POST['second_name'];
		$birth_date = $_POST['birth_date'];
	}
	
	if (!empty($_POST['name']) && !empty( $_POST['password']) && !empty ($_POST['email'])) {
		echo $name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		
	}
	
	$conn = mysqli_connect("localhost","root","","todolist");
	$sql = "INSERT INTO information(name,second_name,birth_date)
	values('$name','$second_name',$birth_date)";
	$input = mysqli_query($conn,$sql);
	
	$sql = "INSERT INTO user(user_name,password,email)
	values('$user_name','$password',$email)";
	$input = mysqli_query($conn,$sql);
	
	mysqli_close($conn);

	include 'homepage.html';
?>


</html>
