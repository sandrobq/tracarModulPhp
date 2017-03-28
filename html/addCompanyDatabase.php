<?php
  $url="localhost";
  $user="root";
  $password="";
  if($mysql=mysqli_connect($url,$user,$password,"track"))
  {
      $id=(int) $_GET['id'];
      $name=$_GET['name'];
      $address=$_GET['address'];
      $phone=$_GET['phone'];
      $str=$mysql->prepare("insert into company values (?,?,?,?)");
      $str->bind_param("isss",$id,$name,$address,$phone);
      $str->execute();
      $str->close();
      $mysql->close();
      header('Location: addCompany.php'); 
  }
?>