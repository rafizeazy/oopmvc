<?php
// view/anggota/detail_content.php
?>

<h2>Detail Anggota</h2>
<p>Nama: <?php echo $anggota['nama']; ?></p>
<p>Tanggal Lahir: <?php echo $anggota['Tanggal_lahir']; ?></p>
<p>Kota Lahir: <?php echo $anggota['Kota_lahir']; ?></p>
<a href="index.php?controller=anggota&action=index" class="btn btn-primary">Kembali</a>