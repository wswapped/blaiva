<?php
	$con = $conn = new mysqli('localhost', 'teranoba_blaiva', 'blaiva#~', 'teranoba_blaiva');
	if(!$conn){
		die($conn->connect_error);
	}
?>