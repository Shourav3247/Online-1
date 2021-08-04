<?php

	$traveler_id = $_GET["traveler_id"];

	$DATE_OF_TRAVEL = $_GET["DATE_OF_TRAVEL"];

	$STATUSS = $_GET["STATUSS"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE apply SET  STATUSS ='$STATUSS', WHERE traveler_id = $traveler_id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> f0 = $f0 <br> f1 = $f1";



	echo "<p><a href=read.php>READ all records</a>";

?>