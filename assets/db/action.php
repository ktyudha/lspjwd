<?php
include('db-conn.php');
session_start();

if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $nohp = $_POST['nohp'];
    $jadwal = $_POST['jadwal'];
    $kelas = $_POST['kelas'];
    $dewasa = $_POST['dewasa'];
    $lansia = $_POST['lansia'];

    $sql = "SELECT * FROM buskelas";
    $query = mysqli_query($conn, $sql);
    $harga = 0;

    while ($data = mysqli_fetch_array($query)) {
        if ($kelas == $data['id']) {
            $harga = $data["harga"];
        }
    }

    $totalDewasa = $harga * $dewasa;
    $hargaLansia = $harga - (0.1 * $harga);
    $totalLansia = $hargaLansia * $lansia;
    $totalBayar = $totalDewasa + $totalLansia;

    $_SESSION['kelas'] = $kelas;
    $_SESSION['nama'] = $nama;
    $_SESSION['nik'] = $nik;
    $_SESSION['nohp'] = $nohp;
    $_SESSION['jadwal'] = $jadwal;
    $_SESSION['kelas'] = $kelas;
    $_SESSION['dewasa'] = $dewasa;
    $_SESSION['lansia'] = $lansia;
    $_SESSION['harga'] = $harga;
    $_SESSION['hargaLansia'] = $hargaLansia;
    $_SESSION['totalBayar'] = $totalBayar;
    header('location: ../../form');
}

if (isset($_POST['cancel'])) {
    session_start();
    session_unset();
    session_destroy();

    header("location: ../../");
}

if (isset($_POST['pesan'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $nohp = $_POST['nohp'];
    $jadwal = $_POST['jadwal'];
    $kelas = $_POST['kelas'];
    $dewasa = $_POST['dewasa'];
    $lansia = $_POST['lansia'];
    $harga = $_POST['harga'];
    $hargalansia = $_POST['hargalansia'];
    $totalbayar = $_POST['totalbayar'];

    // $tiket = "SELECT * FROM bustiket WHERE nik = '$nik'";
    // $cek = mysqli_query($conn, $tiket);
    // $cekTiket = mysqli_num_rows($cek);

    $sql = "INSERT INTO bustiket (nama, nohp, nik, kelas, jadwal, penumpang, penumpanglansia, harga, hargalansia, totalbayar) VALUES ('$nama','$nohp','$nik','$kelas','$jadwal','$dewasa','$lansia','$harga','$hargalansia','$totalbayar')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Tiket anda sudah disimpan');document.location='../../tiket/';</script>";
    }
}

if (isset($_POST['regist'])) {
    header('location: ../../form/');
}

if (isset($_POST['showtiket'])) {
    header('location: ../../cektiket/');
}

if (isset($_POST['cektiket'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $kelas = $_POST['kelas'];

    $sql = "SELECT * FROM bustiket WHERE nama = '$nama' and nik = '$nik'";
    $query = mysqli_query($conn, $sql);
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        header('location: ../../tiket/');

        $tiket = mysqli_fetch_array($query);
        $_SESSION["nama"] = $tiket['nama'];
        $_SESSION["nik"] = $tiket['nik'];
        $_SESSION["kelas"] = $tiket['kelas'];
    } else {
        header('location: ../../');
    }
}
?>
