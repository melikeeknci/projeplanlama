<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=pp","root","");
}catch(PDOException $e){
    print $e-> getMessage();
}

?>