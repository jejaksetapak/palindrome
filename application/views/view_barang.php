<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">

                <h3>List Barang Terlaris</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            foreach($sql->result_array() as $rowData){
            ?>
            <div class="col-lg-4 mt-2">
                <div class="card">
                    <div class="card-body text-center">
                        <p><?= $rowData['namaBarang'];?></p>
                        <p><?= $rowData['kategori'];?></p>
                        <p><?= $rowData['harga'];?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>