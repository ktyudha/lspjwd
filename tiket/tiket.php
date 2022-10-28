<?php
session_start();

if ($_SESSION['kelas'] === null && $_SESSION['nama'] === null && $_SESSION['nik'] === null) {
    echo "<script>location.href='../';</script>";
}

function rupiah($angka) {
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

$ceknama = $_SESSION['nama'];
$sql = "SELECT * FROM bustiket WHERE nama = '$ceknama'";
$query = mysqli_query($conn, $sql);
?>

<div class="container">
    <div class="row justify-content-center">
        <?php

        while ($data = mysqli_fetch_array($query)) {
            $datakelas = $data['kelas'];

        ?>
            <div class="col-md-4">
                <?php

                $buskelas = "SELECT * FROM buskelas WHERE id = $datakelas";
                $cekBusKelas = mysqli_query($conn, $buskelas);
                $row = mysqli_fetch_array($cekBusKelas);

                ?>
                <div class="card mt-3 mb-3" style="">
                    <img src="../<?php echo $row['image_url'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo ucfirst($row['kelas']); ?></h5>
                        <p class="card-text">
                        <table class="table table-borderless">
                            <tr>
                                <td>Nama</td>
                                <td>: <?php echo ucfirst($data['nama']); ?> </td>
                            </tr>
                            <tr>
                                <td>Nomor Identitas</td>
                                <td>: <?php echo $data['nik']; ?></td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td>: <?php echo $data['nohp']; ?></td>
                            </tr>
                            <tr>
                                <td>Kelas Penumpang</td>
                                <td>: <?php echo ucfirst($row['kelas']); ?></td>
                            </tr>
                            <tr>
                                <td>Jadwal Keberangkatan</td>
                                <td>: <?php echo $data['jadwal'] = date("F j, Y"); ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Penumpang</td>
                                <td>: <?php echo $data['penumpang']; ?> orang</td>
                            </tr>
                            <tr>
                                <td>Jumlah Penumpang Lansia</td>
                                <td>: <?php echo $data['penumpanglansia']; ?> orang</td>
                            </tr>
                            <tr>
                                <td>Harga Tiket</td>
                                <td>: <?php echo rupiah($data['harga']); ?></td>
                            </tr>
                            <tr>
                                <td>Harga Tiket Lansia</td>
                                <td>: <?php echo rupiah($data['hargalansia']); ?></td>
                            </tr>
                            <tr>
                                <td>Total Bayar</td>
                                <td>: <?php echo rupiah($data['totalbayar']); ?></td>
                            </tr>
                        </table>
                        <form action="../assets/db/action.php" method="post">
                            <button type="submit" name="cancel" id="cancel" class="btn btn-warning"><i class="fa-solid fa-right-from-bracket"></i></button>
                        </form>
                        </p>
                    </div>
                    <div class="card-footer text-muted text-center">
                        BUS AKAP
                    </div>
                </div>
            </div>
        <?php
        } ?>
    </div>
</div>