<!DOCTYPE HTML>
<html>

<head>
	<style>
		#hello 
			{
				color: purple;
			}
		body 
			{
				background-color:#d0e4fe;
			}
		#add_task
			{
				color:white;
			}
		#leave_blank_line
			{
				color:grey;
			}
		#tasks
			{
				
				margin-left:750px;
				margin-bottom:80px;
			}
		#save_your_tasks
			{
				float-left:80px;
			}
	</style>
</head>

<h3 id = 'hello'> Hello todoer </h3>

<body>
	<h4 id = 'add_task'> Tasks to add to the list </h4>
	
	<form action = 'viewlogin.php' method = 'POST'>
	
		<table>
			<tr>
				<td>
					<textarea name = 'text_area' style = 'resize:none;' rows = '5' cols = '60'>		
	
					</textarea>
				</td>
			</tr>
		</table>
	
	<?php
		
		if (!empty($_POST['text_area'])) 
		{
			$task = $_POST['text_area'];
			$conn = mysqli_connect("localhost","root","","todolist");
			

			$sql = "INSERT INTO tasks(task)
			values('$task')";
			
			$input = mysqli_query($conn,$sql);
		
			mysqli_close($conn);
		}
	?>
	<input style = ' font-size:30px; float:70px; ' type = 'submit' name = 'submit' value = 'Next Task' />
	
	<!--<p id = 'leave_blank_line'>leave blank to leave blank line</p>-->
	
	<!--<button><img id = 'save_your_tasks' src = 'save.png' style="position: absolute; top: 80px; left: 770px " /></button>-->
	
	<!--<form action = '' method = 'POSt'>-->
		<table>
			<tr>
				<td>
					<textarea id ='tasks' style = 'resize:none;' rows ='30' cols = '60'>
		
	<?php
		if (!empty($_POST['text_area'])) 
		{
			
			$conn = mysqli_connect("localhost","root","","todolist");
			$sql = "SELECT * FROM tasks"; 
			$output = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($output)) 
			{
				echo $row['task'];
			
			}
		
		}
		
		?>
	
					</textarea>
				</td>
			</tr>
		</table>
	
	</form>



</body>


</html>