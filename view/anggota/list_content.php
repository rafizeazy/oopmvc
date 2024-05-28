<?php
// view/anggota/list_content.php
?>

<h2>Daftar Anggota</h2>
<a href="index.php?controller=anggota&action=create" class="btn btn-success">Tambah Anggota</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Kota Lahir</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $anggota->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['Tanggal_lahir']; ?></td>
                <td><?php echo $row['Kota_lahir']; ?></td>
                <td>
                    <a href="index.php?controller=anggota&action=detail&id=<?php echo $row['Id']; ?>" class="btn btn-info">View</a>
                    <a href="index.php?controller=anggota&action=update&id=<?php echo $row['Id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="index.php?controller=anggota&action=delete&id=<?php echo $row['Id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>