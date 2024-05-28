<?php
// view/anggota/form_content.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = isset($anggota['Id']) ? 'update&id=' . $anggota['Id'] : 'create';
} else {
    $action = 'create';
}

?>

<h2><?php echo isset($anggota['Id']) ? 'Edit' : 'Add'; ?> Anggota</h2>
<form action="index.php?controller=anggota&action=<?php echo $action; ?>" method="POST">
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo isset($anggota['nama']) ? $anggota['nama'] : ''; ?>" required>
    </div>
    <div class="form-group">
        <label for="Tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" class="form-control" id="Tanggal_lahir" name="Tanggal_lahir" value="<?php echo isset($anggota['Tanggal_lahir']) ? $anggota['Tanggal_lahir'] : ''; ?>" required>
    </div>
    <div class="form-group">
        <label for="Kota_lahir">Kota Lahir:</label>
        <input type="text" class="form-control" id="Kota_lahir" name="Kota_lahir" value="<?php echo isset($anggota['Kota_lahir']) ? $anggota['Kota_lahir'] : ''; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="index.php?controller=anggota&action=index" class="btn btn-secondary">Cancel</a>
</form>