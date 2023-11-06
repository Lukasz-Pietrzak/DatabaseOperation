<?php 

use Prote\DatabaseOperation\DbConnect;
use Prote\DatabaseOperation\DatabaseQuerry;
use Prote\DatabaseOperation\FetchRecord;
require_once __DIR__ . '/vendor/autoload.php';

$dbConnect = new DbConnect;
$dbConnect->DatabaseConnection('localhost', 'root', '', 'standard');

$query = new DatabaseQuerry($dbConnect);
$query->DatabaseQuerryM("SELECT email FROM nazwa_tabeli");

// Fetch all email records
$records = [];

while ($row = mysqli_fetch_assoc($query->getResult())) {
    $records[] = $row;
}

$fetch = new FetchRecord();
$array = ['email'];

foreach ($records as $record) {
    $fetch->session($array, $record);

    // Output each email
    echo "Email: " . $record['email'] . "<br>";
}

?>