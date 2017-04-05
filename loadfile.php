<?php
   $param =$_POST["param"];
   if($param==1)
   {
         copy($_FILES['lodfile']['tmp_name'],"file/".basename($_FILES['lodfile']['name']));
         header('Location: track.php');  
   }
   elseif($param==2)
   {
copy($_FILES['lodfile']['tmp_name'],"file/detaliFaile/".basename($_FILES['lodfile']['name']));
   header('Location: trakDetal.php'); 
   }
?>