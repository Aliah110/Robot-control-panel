<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'controlpanel');



$Front = $_GET['Front'];
$Back = $_GET['Back'];
$Left = $_GET['Left'];
$Right = $_GET['Right'];
$Stop = $_GET['Stop'];


if (isset($Front)) {
    echo "<h1>F ↑ </h1>";
    $sql = "INSERT INTO direction(robotDirection)VALUES('F')";
    mysqli_query($conn, $sql);
} else if (isset($Back)) {
    echo "<h1>B ↓</h1>";
    $sql = "INSERT INTO direction(robotDirection)VALUES('B')";
    mysqli_query($conn, $sql);
} else if (isset($Left)) {
    echo "<h1>← L  </h1>";
    $sql = "INSERT INTO direction(robotDirection)VALUES('L')";
    mysqli_query($conn, $sql);
} else if (isset($Right)) {
    echo "<h1>R →</h1>";
    $sql = "INSERT INTO direction(robotDirection)VALUES('R')";
    mysqli_query($conn, $sql);
} else if (isset($Stop)) {
    echo "<h1>STOP</h1>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background: #040d15;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
        display: flex;
    }

    h1 {

        font-family: 'Share Tech', sans-serif;
        font-size: 50px;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        text-shadow: 8px 8px 10px #0000008c;
    }

    button {

        background: linear-gradient(90deg, #0162c8, #55e7fc);
        padding: 12px 36px;
        margin: 10px 0;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 18px;
        Letter-spacing: 2px;
        border-radius: 40px;
        justify-content: center;
        align-items: center;
        display: flex;
        
    }

    button:focus {
        border-color: dodgerBlue;
        box-shadow: 0 0 8px 0 dodgerBlue;

    }

</style>

<body>
    <form action="index.php" method="get">
        <button name="goBack" id="goBack">Back</button>

    </form>
</body>

</html>