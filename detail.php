<?php
// file : oopmvc/detail.php

// Include necessary files
// require_once "lib/Database.php";
// require_once "model/Anggota_model.php"; // Ensure correct filename and case

// // Create a Database instance and open connection
// $database = new Database();
// $db = $database->getConnection(); // Use getConnection() method instead of openDbConnection()

// // Create an instance of Anggota_model and pass the database connection
// $anggotaModel = new Anggota_model($db);

// // Check if 'Id' parameter is present in the URL
// if (isset($_GET['Id'])) {
//     // Get details of the anggota by Id
//     $anggota = $anggotaModel->getAnggotabyId($_GET['Id']);

//     // Include the detail view
//     require "view/anggota/detail.php";
// } else {
//     // Handle the case when 'Id' parameter is not present
//     echo "Error: Missing 'Id' parameter";
// }
