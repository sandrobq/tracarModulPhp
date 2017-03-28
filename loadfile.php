<?php
   copy($_FILES['lodfile']['tmp_name'],"file/".basename($_FILES['lodfile']['name']));
   header('Location: track.php'); 
?>