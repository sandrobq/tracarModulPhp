<?php
    $url="localhost";
    $user="root";
    $password="";
    $arrayFileName=$_GET['fileadd']; 
    $colFile=count($arrayFileName);
    $allCount=0;
    $trueCount=0;
    $falseCount=0;
   if($mysql=mysqli_connect($url,$user,$password,'track'))
    {
        for($i=0;$i<$colFile;$i++)
        {
            $file=fopen("file/".$arrayFileName,"rt") or die("error file open!");
            for($s=0;$data=fgetcsv($file,0,";");$s++)
            {
                $allCount++;
                $dateTrack=$data[0];
                $carname=$data[1];
                $worktime=$data[8];
                $km=$data[9];
                $srSpeed=$data[11];
                $maxSpeed=$data[12];
                if($dd=$mysql->query("select * from trackdata where dateTrack='".$dateTrack."' and carname='".$carname."'"))
                {
                    $falseCount++;
                }
                else
                {
                $str=$mysql->prepare("insert into trackdata (dateTrack,carname,worktime,km,srSpeed,maxSpeed)values(?,?,?,?,?,?)");
                $str->bind_param("ssssss",$dateTrack,$carname,$worktime,$km,$srSpeed,$maxSpeed);
                $str->execute();
                $str->close();
                $trueCount++;
                }
            }
        }
       $mysql->close();
    }
   $sup='all='.$allCount.'&true='.$trueCount.'&false='.$falseCount;
   header('location: track.php?'.$sup);
?>