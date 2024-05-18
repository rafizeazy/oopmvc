<?php
// Susunan file: oopmvc/index.php

// Memanggil model
require_once "model/anggota_model.php";
require_once "controller/anggota.php";

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ("/oopmvc/index.php" == $url) {
    index();
} else if ("/oopmvc/index.php/detail" == $url && isset($_GET['id'])) {
    detail($_GET['id']);
} else {
    header("HTTP/1.1 404 Not Found");
    echo "<html><body><h1>Page not found </h1></body></html>";
}
?>
