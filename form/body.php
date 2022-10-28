<?php
session_start();

$kelas = "";
$nama = "";
$nik = "";
$nohp = "";
$jadwal = "";
$dewasa = 0;
$lansia = 0;
$harga = 0;
$hargaLansia = 0;
$totalBayar = 0;

$isCalculated = false;

if (isset($_SESSION['kelas'])) {
    $kelas = $_SESSION['kelas'];
}

if (isset($_SESSION['nama'])) {
    $nama = $_SESSION['nama'];
}

if (isset($_SESSION['nik'])) {
    $nik = $_SESSION['nik'];
}
if (isset($_SESSION['nohp'])) {
    $nohp = $_SESSION['nohp'];
}
if (isset($_SESSION['jadwal'])) {
    $jadwal = $_SESSION['jadwal'];
}

if (isset($_SESSION['dewasa'])) {
    $dewasa = $_SESSION['dewasa'];
}

if (isset($_SESSION['lansia'])) {
    $lansia = $_SESSION['lansia'];
}

if (isset($_SESSION['harga'])) {
    $harga = $_SESSION['harga'];
}

if (isset($_SESSION['hargaLansia'])) {
    $hargaLansia = $_SESSION['hargaLansia'];
}

if (isset($_SESSION['totalBayar'])) {
    $totalBayar = $_SESSION['totalBayar'];
    $isCalculated = true;
}

$sql = "SELECT * FROM buskelas";
$query = mysqli_query($conn, $sql);

?>
<div class="container">
    <div class="row my-5">
        <div class="col-md-6 bg-white mx-auto border rounded">
            <p class="fs-1 fw-bold text-center">Form Pemesanan</p>
            <form action="../assets/db/action.php" method="post" class="mt-3 mb-3">
                <div class="row mb-3">
                    <label for="nama" class="col-md-4 col-form-label col-form-label">Nama Lengkap</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nik" class="col-md-4 col-form-label col-form-label">Nomor Identitas</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control" id="nik" name="nik" minlength="16" maxlength="16" onkeypress="return hanyaAngka(event)" value="<?php echo $nik; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nohp" class="col-md-4 col-form-label col-form-label">Nomor HP</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control" id="nohp" name="nohp" minlength="11" maxlength="13" onkeypress="return hanyaAngka(event)" value="<?php echo $nohp; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas" class="col-md-4 col-form-label col-form-label">Kelas Penumpang</label>
                    <div class="col-md-8">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kelas" required>
                            <option disabled selected> -- Pilih Kelas Penumpang -- </option>
                            <?php
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?php echo $data['id']; ?>" <?php echo $data['id'] == $kelas ? "selected" : ""; ?>><?php echo $data['kelas']; ?></option>
                            <?php }

                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jadwal" class="col-md-4 col-form-label col-form-label">Jadwal Keberangkatan</label>
                    <div class="col-md-8">
                        <input type="date" class="form-control form-control" id="jadwal" name="jadwal" value="<?php echo $jadwal; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penumpang" class="col-md-4 col-form-label col-form-label">Jumlah Penumpang</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fa-solid fa-person"></i></div>
                            <input type="text" class="form-control" id="dewasa" name="dewasa" onkeypress="return hanyaAngka(event)" placeholder="usia < 60 th" value="<?php echo $dewasa; ?>" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fa-solid fa-person-cane"></i></div>
                            <input type="text" class="form-control" id="lansia" name="lansia" onkeypress="return hanyaAngka(event)" placeholder="usia > 60 th" value="<?php echo $lansia; ?>" onkeypress="return hanyaAngka(event)" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-md-4 col-form-label col-form-label">Harga Tiket</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fa-solid fa-rupiah-sign"></i></div>
                            <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $harga; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fa-solid fa-rupiah-sign"></i></div>
                            <input type="number" class="form-control" id="hargalansia" name="hargalansia" value="<?php echo $hargaLansia; ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="total" class="col-md-4 col-form-label col-form-label">Total Bayar</label>
                    <div class="col-md-8">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fa-solid fa-rupiah-sign"></i></div>
                            <input type="text" class="form-control form-control" id="totalbayar" name="totalbayar" value="<?php echo $totalBayar; ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-check mb-3 was-validated">
                    <input class="form-check-input" type="checkbox" id="check" name="check" required>
                    <label class="col-form-check-label" for="check">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
                </div>
                <div class="row">
                    <div class="d-grid gap-2 col-md-4 mx-auto">
                        <button type="submit" name="hitung" id="hitung" class="btn btn-success">Hitung Total Bayar</button>
                    </div>
                    <div class="d-grid gap-2 col-md-4 mx-auto">
                        <button type="submit" name="pesan" id="pesan" class="btn btn-primary" <?php echo $isCalculated ? "" : "disabled" ?>>Pesan Tiket</button>
                    </div>
                    <div class="d-grid gap-2 col-md-4 mx-auto">
                        <button type="submit" name="cancel" id="cancel" class="btn btn-warning">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>