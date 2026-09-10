<!-- Hier staan de inloggegevens van de Database -->

<?php
    // dit is de GLOBAL Scope van ons geheugenbeheer //
    // Dit moet nog opgelost worden, dit is een security issue //
    $host = "localhost";
    $username = "root"; // default is root
    $password = "root"; //default is leeg of root
    $database = "db_awfulportfolio"; //de naam van de database die je aanmaakt

    // Controleer of de MySQLi-extensie beschikbaar is
    if (!function_exists('mysqli_connect')) {
        die("MySQLi PHP-extensie is niet ingeschakeld. Schakel deze in php.ini.");
    }

    // Maak verbinding met de database
    $conn = mysqli_connect($host, $username, $password, $database);

    // Controleer de verbinding
    if (!$conn) {
        die("Verbinding mislukt: " . mysqli_connect_error());
    }

?>


<!DOCTYPE html>
<html lang="nl">
<head>
                 
