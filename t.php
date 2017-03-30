<?php
   
   $ar=$_GET["namef"];
   $c=count($ar);
   for($i=0;$i<$c;$i++)
   {
       echo $ar[$i]."<br>";
   }
?>