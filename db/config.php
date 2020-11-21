<?php

 //$dsn = "mysql:dbname=db_teste1;host=localhost";
 //$dbuser="root";
// $dbpass = "";

  $dsn = "mysql:dbname=tcmarang_cadClientes;host=162.241.2.16";
 $dbuser="tcmarang_root";
 $dbpass = "alves1974";

 try {

 	$pdo = new PDO( $dsn,$dbuser,$dbpass);

 	
 } catch (PDOException $e) {

 	echo "Falhou :".$e->getMessage();
 	
 }










?>