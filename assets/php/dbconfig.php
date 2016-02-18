<?php

	$db_host = "localhost";	//Databas-värd
	$db_name = "translatordb";	//Databas-tabell
	$db_user = "root";		//Databas-användare
	$db_pass = "";	//Databas-lösenord   ExdghttF31?!
	
	try{ //Ansluter till databas
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
	catch(PDOException $e){
	//	echo $e->getMessage(); //Skriver ut användarnamn och lösenord-status
	}


?> 