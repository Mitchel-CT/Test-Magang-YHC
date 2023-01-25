<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pengelolaan Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-3">
            <h1>Halaman Data Mahasiswa</h1>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                Data Mahasiswa
            </div>

            <div class="mx-3 mt-3">
                <a href="input_data.php" class="btn btn-success">Tambah Data</a>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <tr style="text-align:center;">
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Semester</th>
                        <th>Kelas</th>
                        <th>Angakatan</th>
                        <th>Opsi</th>
                    </tr>

                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $select = mysqli_query($conn, "SELECT * FROM mahasiswa JOIN prodi JOIN semester WHERE prodi.id_prodi = mahasiswa.id_prodi AND semester.id_semester = mahasiswa.id_semester ");
                    while ($hasil = mysqli_fetch_array($select)) {
                    ?>
                        <tr style="text-align:center;">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $hasil['nim'] ?></td>
                            <td><?php echo $hasil['nama'] ?></td>
                            <td><?php echo $hasil['nama_prodi'] ?></td>
                            <td><?php echo $hasil['semester'] ?></td>
                            <td><?php echo $hasil['kelas'] ?></td>
                            <td><?php echo $hasil['angkatan'] ?></td>
                            <td>
                                <a href="ubah_data.php ?nim=<?php echo $hasil['nim'] ?>" class="btn btn-warning">Ubah</a>
                                <a href="hapus.php ?nim=<?php echo $hasil['nim'] ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>