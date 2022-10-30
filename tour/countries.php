<?php

$countrie = "US";
$stars = $_POST['stars'];
$price = $_POST['price'];

if (isset($_POST['formSubmit'])) {
    $countrie = $_POST['formCountry'];

    $redir = "US.php";
    switch ($countrie) {
        case "US":
            $redir = "US.php";
            break;
        case "UK":
            $redir = "UK.php";
            break;
        case "France":
            $redir = "France.php";
            break;
        case "Mexico":
            $redir = "Mexico.php";
            break;
        case "Russia":
            $redir = "Russia.php";
            break;
        case "Japan":
            $redir = "Japan.php";
            break;
        default:echo ("Error!");exit();
            break;
    }
    header("Location: $redir?star=$stars&price=$price");
    exit();
}