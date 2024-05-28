<?php
// model/anggota_model.php

require_once 'lib/Database.php';

class AnggotaModel
{
    private $conn;
    private $table_name = 'anggota';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getById($id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE Id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $query = "INSERT INTO " . $this->table_name . " (nama, Tanggal_lahir, Kota_lahir) VALUES (:nama, :Tanggal_lahir, :Kota_lahir)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nama", $data['nama']);
        $stmt->bindParam(":Tanggal_lahir", $data['Tanggal_lahir']);
        $stmt->bindParam(":Kota_lahir", $data['Kota_lahir']);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update($data)
    {
        $query = "UPDATE " . $this->table_name . " SET nama = :nama, Tanggal_lahir = :Tanggal_lahir, Kota_lahir = :Kota_lahir WHERE Id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $data['Id']);
        $stmt->bindParam(":nama", $data['nama']);
        $stmt->bindParam(":Tanggal_lahir", $data['Tanggal_lahir']);
        $stmt->bindParam(":Kota_lahir", $data['Kota_lahir']);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }



    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE Id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
