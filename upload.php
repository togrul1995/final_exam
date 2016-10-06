<?php
include 'db.php';

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];



move_uploaded_file($tmpName,'images/'.$fileName);
$newwidth = "300"; 
$newheight = "525";

        exec('convert '.$fileName.' -resize '.$newwidth.'x'.$newheight.'^ '."images");


$query = "INSERT INTO upload (name, size, type ) ".
"VALUES ('$fileName', '$fileSize', '$fileType')";

mysqli_query($db_con,$query) or die('Error, query failed'); 


echo "<br>File $fileName uploaded<br>";
} 
?>