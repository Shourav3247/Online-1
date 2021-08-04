<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM apply" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>DATE_OF_TRAVEL</th> <th>REASON_OF_TRAVEL</th> <th>APPROVE</th> <th>REJECT</th><th>STATUS</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		//print rows
		extract( $rows );
		echo "<tr>";
		echo "<td> $DATE_OF_TRAVEL</td>";
		echo "<td> $REASON_OF_TRAVEL </td>";
		echo "<td> <a href = 'update_input.php?id=$traveler_id'> APPROVE </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$traveler_id&DATE_OF_TRAVEL=$DATE_OF_TRAVEL&REASON_OF_TRAVEL=$REASON_OF_TRAVEL'> REJECTED </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=apply_input.php>CREATE a new record</a>";
?>