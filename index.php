<?php
// Susunan file: oopmvc/index.php

// Memanggil model
require_once "model/anggota_model.php";
require_once "controller/anggota.php";

$anggota = getAnggota();

// Memanggil list.php untuk menampilkan data anggota
require "view/anggota/list.php";
