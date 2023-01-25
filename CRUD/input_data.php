<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Input Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-3">
            <h1>Data Mahasiswa</h1>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><input type="text" name="nim" placeholder="Masukkan NIM"></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td>:</td>
                            <td><select name="id_prodi" id="">
                                    <option selected value="">Pilih Prodi</option>
                                    <option value="1">Teknik Informatika</option>
                                    <option value="2">Sistem Informasi</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td><select name="id_semester" id="">
                                    <option selected value="">Pilih Semester</option>
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                    <option value="4">Semester 4</option>
                                    <option value="5">Semester 5</option>
                                    <option value="6">Semester 6</option>
                                    <option value="7">Semester 7</option>
                                    <option value="8">Semester 8</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><input type="text" name="kelas" placeholder="Masukkan Kelas"></td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td>:</td>
                            <td><input type="text" name="angkatan" placeholder="Masukkan Angakatan"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" class="btn btn-success" name="simpan" value="Tambah Data">
                                <a href="index.php" class="btn btn-danger">Batal</a>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php
                include 'koneksi.php';
                if (isset($_POST['simpan'])) {
                    $insert = mysqli_query($conn, "INSERT INTO mahasiswa VALUES 
                ('" . $_POST['nim'] . "' , '" . $_POST['nama'] . "' , '" . $_POST['id_prodi'] . "' , 
                '" . $_POST['id_semester'] . "' , '" . $_POST['kelas'] . "' , '" . $_POST['angkatan'] . "')");
                    if ($insert) {
                ?>
                        <script type="text/javascript">
                            alert("Data Berhasil Di Simpan");
                            window.location.href = "index.php";
                        </script>
                    <?php
                    } else {
                    ?>
                        <script type="text/javascript">
                            alert("Data Gagal Di Simpan");
                            window.location.href = "index.php";
                        </script>
                        </script>
                <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>