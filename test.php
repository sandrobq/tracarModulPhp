<html>
<body>
    <?php
    $url="localhost";
    $user="root";
    $password="";
    if (!($m=mysqli_connect($url, $user, $password,"track")))
    {
                    echo "<h2>MySQL Error!</h2>";
    }
    else
    {
        $id=1;
        $name="favorit";
        $address="Razdolnoe";
        $phone="1230034";
        $stmt = $m->prepare("INSERT INTO company VALUES (?, ?, ?, ?)"); 
        $stmt->bind_param('isss', $id, $name, $address,$phone); 
          $stmt->execute();
        $stmt->close();
//        $m->query('INSERT INTO company VALUES (10, "ddd", "dfdf", "dfdf")');
        $ss=$m->query('select name from company where id="1"');
        $lines=$ss->fetch_assoc();
        echo "dd-----".$lines['name'];
        $m->close();
    }
        
    ?>
    </body>
</html>