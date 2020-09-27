<?php
  
    function routes($page) {
        switch ($page) {
            case 'albums': 
                require 'pages/albums.php';
                break;
            case 'addNewAlbum':
                require 'pages/addNewAlbum.php';
                break;
            case 'about':
                require 'pages/about.php';
                break;
            default: 
                require 'pages/home.php';
        }
    }

    function active($page, $link='') {
        if($page == $link) {
            return 'class="active"';
        }
        return '';
    }

    function dbConnection() {
        $con = mysqli_connect(HOST, USER, PASSWORD, DB);
        return $con;
    }

    function dolarMask($value) {
        return '$' . number_format($value, 2, '.', ',');
    }

    function validateData($albumName, $band, $releaseDate, $price, $error) {
        if(strlen($albumName) <= 0) $error++;

        if(strlen($band) <= 0) $error++;

        //if(date($releaseDate) > new date('')) $error++;

        if(strlen($price) == 0 || !is_numeric($price)) $error++;

        if($error) {
            header('Location: ../index.php?page=addNewAlbum&error=1');
            exit;
        }
    }

    function validateResponse($res) {
        if($res) {
            header('Location: ../index.php?page=addNewAlbum&success=1');
            exit;
        }
    }

?>