<?php
  $url="localhost";
  $user="root";
  $password="";
  if($mysql=mysqli_connect($url,$user,$password,'track'))
  {
	    $id=$_GET['id'];
        $name=$_GET['name'];
        $number=$_GET['number'];
	    $str=$mysql->prepare("insert into tractor values(?,?,?)");
	    $str->bind_param("iss",$id,$name,$number);
	    $str->execute();
	    $str->close();
	    $mysql->close();
	    header('Location: addCar.php');
  }
  else
  {
	  echo "error page mysql";
  }
?>