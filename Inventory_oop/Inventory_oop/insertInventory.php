<!DOCTYPE html>
<html>
<head>
<title>Insert Inventory</title>
</head>
<body style="background-color: rgb(229,243,247);">
<?php
require_once('Includes/bootstraps.php');
$title = trim($_POST['Title']);
$productionCompany = trim($_POST['ProductionCompany']);
$yearReleased = trim($_POST['YearReleased']);
$director = trim($_POST['Director']);

$newMovie = new Movie(0,$title,$productionCompany,$yearReleased,$director);

$result = $newMovie->create($dbc);

if($result){
    echo "The query was successfully executed!!";
}
else{
    echo "The query was not be executed";
}
?>
</body>
</html>