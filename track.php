<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- шапка -->
    <div class="container">
        <div class="row">
           <div class="mu">
               
           </div>     
        </div>
        <div class="row">
            <div class="col">
                <form action="loadfile.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="lodfile">
                    <input type="submit" value="отправить">
                </form>
                <div class="tablefile">
                <form>
                    <table border=3>
                        <?php $d=opendir( "file"); while($e=readdir($d)) { if(($e=="." )or($e==".." )) { } else { echo "<tr><td>".$e. "</td>"; echo "<td><input type='checkbox' name='files[]' value=".$e. "></td></tr>"; } } closedir($d); ?>
                    </table>
                </form>
                </div>
            </div>
        </div>


        <!-- table view -->

        <form action="">
            <select name="fileViw">
                <?php $d=opendir( "file"); while($e=readdir($d)) { if(($e=='.' )or($e=='..' )) { }else{ echo '<option value="'.$e. '">'.$e. '</option>'; } } closedir($d); ?>
            </select>
            <input type="submit" value="open">
        </form>

        <table border="3">
            <?php 
            if(isset($_GET[ 'fileViw'])) 
            { $s=$_GET[ 'fileViw']; $file=fopen( "file/".$s, "rt"); for($i=0;$data=fgetcsv($file,0, ";");$i++) { $n=count($data); echo "<tr>"; for($j=0;$j<$n;$j++) { echo "<td>".$data[$j]. "</td>"; } echo "</tr>"; } fclose($file); } ?>
        </table>

    </div>
</body>

</html>