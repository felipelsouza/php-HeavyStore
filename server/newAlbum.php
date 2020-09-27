<?php 
    require 'config.php';
    require '../lib/funcs.php';

    $albumName = trim($_POST['albumName']);
    $band = trim($_POST['band']);
    $releaseDate = trim($_POST['releaseDate']);
    $price = trim($_POST['price']);

    $error = 0;

    validateData($albumName, $band, $releaseDate, $price, $error);

    $con = dbConnection();

    $insert = "INSERT into albumslist"
                ."(albumName, band, releaseDate, price)"
                ."VALUES('$albumName', '$band', '$releaseDate', '$price')"; 

    $res = mysqli_query($con, $insert);

    validateResponse($res);
?>