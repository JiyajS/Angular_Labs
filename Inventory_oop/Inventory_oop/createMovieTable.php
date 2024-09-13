<!DOCTYPE html>
<html>
<head>
    <title>CREATE MOVIE TABLE</title>
</head>
<body>
<?php
    require_once('Includes/bootstraps.php');

    $dbc = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);

    $query = "CREATE TABLE `Movies` (`id` INT
    NULL AUTO_INCREMENT PRIMARY KEY, `title`
    varchar(255), `production_company`
    varchar(255), `year_released` YEAR,`director` varchar(225))";
    $result = $dbc->query($query); 

    if($result){
        echo"The query was successfully executed!";
    }else{
        echo "The query could not be executed! " . $dbc->errorInfo()[2];
    }
?>

</body>
</html>
