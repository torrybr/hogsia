<?php
header('Content-type: application/json');
function validate() {
		//$db = new SQlite3('users2.db');
		$db = new PDO("sqlite:./users2.db");
		$result= $db->query('SELECT "MAPLABELNA,C,160" AS Name,"Latitude,N,9,5" AS Lat,"Longitude,N,10,5" AS Lng FROM afo_confinements');
		$row=$result->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($row);			
		}
echo validate(); 
?>



