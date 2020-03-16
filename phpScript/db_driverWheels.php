<?php
	const USER = 'id12939332_tenros1983';
	const SERVER =' localhost';
	const PASSWORD = 'driverWheels16032020 ';
	const DB_NAME = 'id12939332_db_driverwheels';

	$us_Connecting = new mysqli(SERVER, USER, PASSWORD, DB_NAME);

	$us_QueryResult = $us_Connecting->query("SELECT * FROM carCatalog");


	echo USER;

?>
