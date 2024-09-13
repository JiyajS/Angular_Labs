<!DOCTYPE html>
<html>
<head><title>Display Inventory</title></head>
<body>
<?php
require_once('Includes/bootstraps.php');

?>
<h2 style='text-align: center'>Display Movies Records</h2>
<table border='1' width='75%' cellspacing='2' cellpadding='2' align='center'>
    <tr align='center' valign='top'>
        <td align='center' valign='top'><b>TITLE</b></td>
        <td align='center' valign='top'><b>DIRECTOR</b></td>
        <td align='center' valign='top'><b>PRODUCTION COMPANY</b></td>
        <td align='center' valign='top'><b>YEAR RELEASED</b></td>
    </tr>
<?php
$movies = Movie::all($dbc);  
if($movies){
    foreach($movies as $movie){
        echo "<tr align='center'>";
        echo "<td align='center'>{$movie['title']}</td>";
        echo "<td align='center'>{$movie['director']}</td>";
        echo "<td align='center'>{$movie['production_company']}</td>";
        echo "<td align='center'>{$movie['year_released']}</td>";
        echo "</tr>";
    }
} else {
    // If there are no movies, display a message
    echo "<tr align='center'>";
    echo "<td colspan='4'>No Results</td>";
    echo "</tr>";
}
?>
</table>
   
</body>
</html>