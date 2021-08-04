<?php

	$traveler_id = $_GET["traveler_id"];

	$DATE_OF_TRAVEL = $_GET["DATE_OF_TRAVEL"];

	$STATUSS= $_GET["STATUSS"];

?>

STATUS 

<h1>Update Record</h1>



<form method=get action=status.php>



	<input type=hidden name=traveler_id value='<?php echo $itraveler_id; ?>'> <br>



	Traveler id: <input type=text name= traveler_id value='<?php echo $traveler_id; ?>'>

	<p>

	date of travel: <input type=text name=DATE_OF_TRAVEL value='<?php echo $DATE_OF_TRAVEL; ?>'>

	<p>
    
    status: <input type=text name=STATUSS value='<?php echo $STATUSS; ?>'>

    <p>

	<input type=submit value=Update>

</form>