<?php
// controller/anggota.php

require_once 'model/anggota_model.php';

class AnggotaController
{
    private $model;

    public function __construct()
    {
        $this->model = new AnggotaModel();
    }

    public function index()
    {
        $anggota = $this->model->getAll();
        include 'view/anggota/list.php';
    }

    public function detail($id)
    {
        $anggota = $this->model->getById($id);
        include 'view/anggota/detail.php';
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                'nama' => $_POST['nama'],
                'Tanggal_lahir' => $_POST['Tanggal_lahir'],
                'Kota_lahir' => $_POST['Kota_lahir']
            ];
            if ($this->model->create($data)) {
                header('Location: index.php?controller=anggota&action=index');
            }
        } else {
            include 'view/anggota/form.php';
        }
    }

    public function update($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [
                'Id' => $_POST['id'],
                'nama' => $_POST['nama'],
                'Tanggal_lahir' => $_POST['Tanggal_lahir'],
                'Kota_lahir' => $_POST['Kota_lahir']
            ];
            if ($this->model->update($data)) {
                header('Location: index.php?controller=anggota&action=index');
            }
        } else {
            $anggota = $this->model->getById($id);
            include 'view/anggota/form.php';
        }
    }



    public function delete($id)
    {
        if ($this->model->delete($id)) {
            header('Location: index.php?controller=anggota&action=index');
        }
    }
}
