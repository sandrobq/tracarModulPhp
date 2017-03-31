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
                                       <thead>
                                           
                                           <tr>
                                               <td width="250">name file</td>
                                               <td width="40">dat</td>
                                               <td width="70">size file</td>
                                               <td width="100">date file</td>
                                           </tr>
                                       </thead>
                                       <tbody>
                                        <?php 
                                        $d=opendir( "file"); 
                                        while($e=readdir($d)) 
                                        { 
                                            if(($e=="." )or($e==".." )) 
                                            { 
                                            } 
                                            else 
                                            { 
                                                $fileDataInfo=stat("file/".$e);
                                                echo "<tr><td>".$e. "</td>"; 
                                                echo "<td>".$fileDataInfo[0]."</td>";
                                                echo "<td>".($fileDataInfo[7]/1024)."Kb</td>";
                                                echo "<td>".date('l d F',$fileDataInfo[9])."</td>";
                                                echo "<td><input type='checkbox' name='files[]' value=".$e. " class='filesi' ></td></tr>"; 
                                            } 
                                        } 
                                        closedir($d); 
                                        ?>
                                        </tbody>
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
                        <td>
                        <?php
                          if(isset($_GET['all']))
                          {   
                              echo "<table><tr><td width='100'>Всего строк</td>";
                              echo "<td width='100'>Принятых</td>";
                              echo "<td width='100'>Отклоненых</td></tr>";
                              echo "<tr style='font-size:50px;'>";
                              $alls=$_GET['all'];
                              echo "<td>".$alls."</td>";
                          }
                        if(isset($_GET['true']))
                          {
                              $alls=$_GET['true'];
                              echo "<td style='color:green'>".$alls."</td>";
                          }
                        if(isset($_GET['false']))
                          {
                              $alls=$_GET['false'];
                              echo "<td style='color:red'>".$alls."</td>";
                            echo "</tr></table>";
                          }
                        ?>
                                 </td>
                    </tr>
                </table>
            </div>
        </div>


        <!-- table view -->


        <table border="3">
            <thead>
                <tr>
                    
                </tr>
            </thead>
            <?php if(isset($_GET[ 'fileViw'])) { $s=$_GET[ 'fileViw']; $file=fopen( "file/".$s, "rt"); for($i=0;$data=fgetcsv($file,0, ";");$i++) { $n=count($data); echo "<tr>"; for($j=0;$j<$n;$j++) { echo "<td>".$data[$j]. "</td>"; } echo "</tr>"; } fclose($file); } ?>
        </table>

    </div>
  <script type="text/javascript" src="js/track.js"></script>
</body>

</html>