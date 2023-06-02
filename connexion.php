<?php
    $bdserver ="localhost";
    $username ="root";
    $password="";
    $bd="chattari";   

    $cnx= mysqli_connect($bdserver ,$username ,$password ,$bd);

    if(!$cnx){
        die("Erreur cnx :".mysqli_connect_error());
    }
    //$conn = new PDO("mysql:host=localhost;dbname=achattari","root","");  
    
?>