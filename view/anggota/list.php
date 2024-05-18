<?php
// file: oopmvc/view/anggota/list.php

$judul = "Daftar Anggota"; // Menggunakan tanda '=' untuk memberikan nilai pada variabel $judul
ob_start();
?>
<h1>Daftar Anggota</h1>
<ul>
<?php foreach ($anggota as $row): ?>
    <li>
        <a href="detail.php?id=<?= $row['id'] ?>"> <?= $row['nama']; ?></a> <!-- Menghapus spasi di antara '=' dan $row['nama'] -->
    </li>
<?php endforeach; ?>
</ul>
<?php $isi = ob_get_clean(); ?> <!-- Menggunakan tanda '=' untuk memberikan nilai pada variabel $isi -->
<?php include 'view/template.php'; ?> <!-- Mengubah 'template.php' menjadi 'view/template.php' -->

