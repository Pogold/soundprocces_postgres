<?php
 
  /*  $hName='localhost';
    $uName='root';   
    $password='';   
    $dbName = "sound"; 
    $dbCon = mysqli_connect($hName,$uName,$password,"$dbName");
 
      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
      }*/


      $dbCon = pg_connect("host=ec2-99-81-137-11.eu-west-1.compute.amazonaws.com port=5432 dbname=d43sool8j1phdt user=fclkybdgjbtnlt password=73e72cf839449040fb58a4b910b3580b4931cc56b250e114c3d3e00c5abfbebb");

      if (!$dbCon) 
      {
        echo "Database connection failed.";
      }
     /* else 
      {
        echo "Database connection success.";
      }*/

?>