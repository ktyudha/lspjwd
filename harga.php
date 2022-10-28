<?php

function rupiah($angka) {
    $hasil_rupiah = "Rp" . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

    $sql = "SELECT * FROM buskelas";
    $query = mysqli_query($conn, $sql);

?>
<div class="container" id="harga">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php while ($data = mysqli_fetch_array($query)) { ?>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $data['image_url']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?php echo ucfirst($data['kelas']); ?></h5>
                                <!-- <p class="card-text"><?php echo rupiah($data['harga']); ?></p> -->
                                <p class="card-text"><?php echo $data['deskripsi']; ?></p>
                                <div class="col-md-3 col-sm-2 mb-3">
                                    <img src="<?php echo $data['inter_url']; ?>" class="img-fluid rounded" alt="...">
                                </div>
                                <button class="btn btn-dark" type="button"> <p class="card-text"><?php echo rupiah($data['harga']); ?></p></button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>