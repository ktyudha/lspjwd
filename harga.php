<?php

function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

$sql = "SELECT * FROM buskelas";
$query = mysqli_query($conn, $sql);

?>
<div class="container" id="harga">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <?php
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
            <div class="card mb-3">
                <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $data['image_url'];?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ucfirst($data['kelas']);?></h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><?php echo rupiah($data['harga']);?></p>
                            </div>
                        </div>
                </div>
            </div>
                    <?php
                    }
                    ?>
        </div>
    </div>
</div>