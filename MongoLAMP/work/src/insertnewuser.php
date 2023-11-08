<?php

	require '/var/www/vendor/autoload.php';

	$name = $_POST['name'];
	$age = $_POST['age'];
	
	$connection = new MongoDB\Client("mongodb://root:mongopwd@mongo:27017");
	
	$db = $connection->gettingstarted;
	$col = $db->users;
	
	$doc = ["name" => $name,"age" => $age];
	
	$col->insertOne($doc);
	echo "<p>Inserção com sucesso</p>";
?>
