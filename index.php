<?php
$sent=$_GET['q'];

//$sent = preg_replace("/[^a-zA-Z]/", "", $sent);

#first file
//مخنّص
/*
$data=file_get_contents('database/databaselower2.sql');

$data2=str_replace("ال","",$data);
file_put_contents('database/databaselower3.sql',$data2);
*/


if ($file = fopen("database/databaselower3.sql", "r")) {
    while(!feof($file)) {
        $line = fgets($file);
        if (strpos($line, "'".$sent."'") !== false)
        {
            echo $line;
            echo "</br>";

        }
        # do same stuff with the $line
    }
    fclose($file);
}


?>
