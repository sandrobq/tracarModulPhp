<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
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
                <table border="0">
                    <tr>
                        <td>
                            <form action="loadfile.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="lodfile">
                                <input type="submit" value="отправить">
                            </form>
                            <div class="tablefile">
                                <form>
                                    <table border=3>
                                        <?php $d=opendir( "file"); while($e=readdir($d)) { if(($e=="." )or($e==".." )) { } else { echo "<tr><td>".$e. "</td>"; echo "<td><input type='checkbox' name='files[]' value=".$e. " class='filesi' ></td></tr>"; } } closedir($d); ?>
                                    </table>
                                </form>

                            </div>
                        </td>
                        <td>
                            <button id="deletebuttonfile" style="width:70px;height:70px;">delete</button>
                        </td>
                        <td>
                            <button id="addbuttonfile" style="width:70px;height:70px;">add</button>
                        </td>
                        <td>
                            <button id="openbuttonfile" style="width:70px;height:70px;">open</button>
                        </td>
                    </tr>
                </table>
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
            <?php if(isset($_GET[ 'fileViw'])) { $s=$_GET[ 'fileViw']; $file=fopen( "file/".$s, "rt"); for($i=0;$data=fgetcsv($file,0, ";");$i++) { $n=count($data); echo "<tr>"; for($j=0;$j<$n;$j++) { echo "<td>".$data[$j]. "</td>"; } echo "</tr>"; } fclose($file); } ?>
        </table>

    </div>
<script type="text/javascript" src="js/trackscript.js"></script>
</body>

</html>