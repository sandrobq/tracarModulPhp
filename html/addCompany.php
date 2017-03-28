<html>
<head></head>
<body>
    <div class="container">
       <div>
    <form action="addCompanyDatabase.php">
       id <input type="text" name="id"><br>
       name <input type="text" name="name"><br>
       address <input type="text" name="address"><br>
        phone<input type="text" name="phone"><br>
        <input type="submit">
    </form>
        </div>
    <table border=3>
        <?php
           $url="localhost";
           $user="root";
           $password="111111";
           if($m=mysqli_connect($url,$user,$password,"track"))
           {
               if($s=$m->query("select * from company"))
               {
               while($l=$s->fetch_assoc())
               {
                   echo "<tr>";
                   echo "<td>".$l['id']."</td>";
                   echo "<td>".$l['name']."</td>";
                   echo "<td>".$l['address']."</td>";
                   echo "<td>".$l['phone']."</td>";
                   echo "</tr>";
               }
               $s->close();
               }
               else{
                   echo "error for select";
               }
               $m->close();
           }
           else
           {
               echo "<h2>error conection</h2>";
           }
        ?>
    </table>
    </div>
</body>
</html>