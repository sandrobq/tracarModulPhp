<?php
   $ar=$_GET["namef"];
   $c=count($ar);
   for($i=0;$i<$c;$i++)
   {
       if(unlink("file/".$ar[$i]))
       {
           
       }else
       {
           
       }
   }
   header("Location: track.php");
?>