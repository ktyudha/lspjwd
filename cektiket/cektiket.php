<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 my-auto">
            <div class="card mx-auto">
                <div class="card-header border-0 text-center">
                    <p class="h3"><b>Cek Tiket</b></p>
                </div>
                <div class="card-body">
                    <p class="login-box-msg text-center">Belum Punya tiket ? <a class="text-primary" href="../form" style="text-decoration:none;">Beli disini</a></p>
                    <form action="../assets/db/action.php" method="post">
                        <input type="text" class="form-control form-control mb-2" id="nama" name="nama" placeholder="Nama Pemesan" required>
                        <input type="text" class="form-control form-control mb-2" id="nik" name="nik" minlength="16" maxlength="16" onkeypress="return hanyaAngka(event)" placeholder="Nomor Identitas" required>
                        <select class="form-select mb-4" id="floatingSelect" aria-label="Floating label select example" name="kelas" required>
                            <option disabled selected> -- Pilih Kelas Penumpang -- </option>
                                <option value="1">Ekonomi</option>
                                <option value="2">Bisnis</option>
                                <option value="3">Eksekutif</option>
                        </select>
                        <div class="d-grid gap-2 col-auto mx-auto">
                            <button type="submit" class="btn btn-primary btn-block" id="cektiket" name="cektiket">Cek Tiket</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>