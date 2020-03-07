<?php
function CitiesFetchFunction($conn,$state){
    $stmtSelect = $conn->prepare("SELECT city_name FROM fetchcitywithstate WHERE state_name=:state");
	$stmtSelect->bindParam(':state',$state);
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
	 return $stmtSelect->fetchAll();
}

	 
?>