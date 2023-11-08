<?php
require '/var/www/vendor/autoload.php';

$name = $_POST['name'];

$connection = new MongoDB\Client("mongodb://root:mongopwd@mongo:27017");

$db = $connection->gettingstarted;
$col = $db->users;

$record = $col->find(['name' => $name]);

$count = iterator_count($record);

if ($count > 0) {
    foreach ($record as $user) {
        echo "Nome: " . $user['name'] . '<br>';
        echo "Idade: " . $user['age'] . '<br>';
    }
} else {
    echo "não existe.";
}
