<html>
<body>
<?php
    $ini=parse_ini_file("param.ini",true);
    echo "param user - ".$ini['database']['user'];
    ?>
    </body>
</html>