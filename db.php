<?php

   function conn(){

   
   $host = "localhost";
   $user = "root";
   $pass = "";
   $dbname = "citas_mari";

   $conectar = mysqli_connect($host, $user, $pass, $dbname);
   return $conectar;
}
?>