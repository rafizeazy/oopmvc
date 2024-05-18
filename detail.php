<?php

require_once "model/anggota_model.php";

$anggota = getAnggotaById($_GET['id']);
require  "view/anggota/detail.php"

?>


