<?php 


function get_projects() {
	try {
		$db = new PDO("mysql:host=localhost;dbname=charliemcr;port=8889","root","root");
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'utf8'");
	} catch (Exception $e) {
		echo "Could not connect to the database.";
		exit;
	}

	try {
	 	$results = $db->query("SELECT name, description, img, id FROM projects ORDER BY id ASC");
	 } catch (Exception $e) {
	 	echo "Could not connect to the database.";
		exit;
	 } 

	$projects = $results->fetchAll(PDO::FETCH_ASSOC);
	return $projects;

}


?>