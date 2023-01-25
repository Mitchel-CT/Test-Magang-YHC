<?php
include 'koneksi.php';
if (isset($_GET['nim'])) {
    $delete = mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = '" . $_GET['nim'] . "'");
    if ($delete) {
?>
        <script type="text/javascript">
            alert("Datal berhasil Di hapus");
            window.location.href = "index.php";
        </script>

    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Datal Gagal Di hapus");
            window.location.href = "index.php";
        </script>
<?php
    }
}
