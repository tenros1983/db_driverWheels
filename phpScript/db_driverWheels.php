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

	$stmp = $us_Connecting->prepare("INSERT INTO tbl_carCatalog(carName, carModel, carGeneration) VALUES(?, ?, ?)");
	$stmp->bind_param('sss', $carName, $carModel, $carGeneration);

  $carName = $_GET['carName'];
	$carModel = $_GET['carModel'];
	$carGeneration = $_GET['carGeneration'];

	$stmp->execute();
	$stmp->close();

	$us_Connecting->close();

	//$us_QueryResult = $us_Connecting->query("SELECT * FROM carCatalog");


?>
