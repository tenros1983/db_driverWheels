<?php
	const USER = "id12939332_tenros1983";
	const SERVER = "localhost";
	const PASSWORD = "Nbvjattdty28061983";
	const DB_NAME = "id12939332_db_driverwheels";

	$us_Connecting = new mysqli(SERVER, USER, PASSWORD, DB_NAME);
	if ($us_Connecting->connect_errno) {
		printf("Error ->%\n", $us_Connecting->connect_error);
		exit();
	}

 	//$us_QueryResult = $us_Connecting->query("SELECT * FROM carCatalog");

	$stmp = $us_Connecting->prepare("INSERT INTO tbl_carCatalog VALUES(?, ?)");
	$stmp->bind_param(Null, "Audi", "A6", Null, Null);
	$stmp->execute();
	$stmp->close();

	$us_Connecting->close();

	//$us_QueryResult = $us_Connecting->query("SELECT * FROM carCatalog");


?>
