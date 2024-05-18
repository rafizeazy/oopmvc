<?php

function index() {
    $anggota = getANggota();
    require "view/anggota/list.php";
}

function detail($id) {
    $anggota = getAnggotaById($id);
    require "view/anggota/detail.php";
}
