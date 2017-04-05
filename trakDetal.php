<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <!-- title -->
       <div class="">
           
       </div>
       
       <!-- menu -->
       <div class="">
           <table>
               <tr>
                   <td>
                       <form action="loadfile.php" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="param" value="2">
                           <input type="file" name="lodfile">
                           <input type="submit" name="отправить фаил">
                       </form>
                       <div class="listTableFile">
                           <table>
                                  <?php
                                       $dir=opendir("file/detaliFaile");
                                       while(($e=readdir($dir))!==false)
                                       {
                                           if(($e==".")or($e==".."))
                                           {
                                               
                                           }
                                           else{
                                            echo "<tr><td>";
                                            echo $e;
                                               echo "</td></tr>";
                                           }
                                       }
                                    ?>
                           </table>
                       </div>
                   </td>
                   
               </tr>
           </table>
       </div>
       
       <!-- table -->
       <div class="">
           
       </div>
        
    </div>
</body>
</html>