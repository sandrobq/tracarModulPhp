<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div calss="container">
		
		<div class="row">
		
		<!-- main form-->
		<form action="addCarDatabase.php">
			id<input type="text" name="id"><br>
			name<input type="text" name="name"><br>
			number<input type="text" name="number"><br>
			<input type="submit" value="add data">
		</form>
			
		</div>
		
		
		<div class="row">
		<!-- table view -->
		<table border="3">
			<?php
			   $url="localhost";
			   $user="root";
			   $password="";
			   if($mysql=mysqli_connect($url,$user,$password,'track'))
			   {
				   if($s=$mysql->query("select * from tractor"))
				   {
					   while($l=$s->fetch_assoc())
					   {
						   echo "<tr>";
						   echo "<td>".$l['id']."</td>";
						   echo "<td>".$l['name']."</td>";
						   echo "<td>".$l['number']."</td>";
						   echo "</tr>";
					   }
					   $s->close();
				   }
				   $mysql->close();
			   }
			?>
			
		</table>
			
		</div>
	</div>
</body>
</html>