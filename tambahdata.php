<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="tambahdata.php">
            <div style="margin-bottom: 25px" class="input-group">
                <div class="col">
                    <label for="add-idbarang">ID Barang</label>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="add-idbarang" type="text" class="form-control w-25" name="idBarang">
                </div>
            </div>
            <div style="margin-bottom: 25px" class="input-group">
                <div class="col">
                    <label for="add-namabarang">Nama Barang</label>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="add-namabarang" type="text" class="form-control w-25" name="namabarang">
                </div>
            </div>
            <div style="margin-bottom: 25px" class="input-group">
                <div class="col">
                    <label for="add-jumlahbarang">Jumlah</label>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="add-jumlahbarang" type="text" class="form-control w-25" name="jumlahbarang">
                </div>
            </div>
            <div style="margin-bottom: 25px" class="input-group">
                <div class="col">
                    <label for="add-kondisibarang">Kondisi</label>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="add-kondisibarang" type="text" class="form-control w-25" name="kondisibarang">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
            <a class="btn btn-danger" href="databarang.php">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
include('koneksi.php');

		if (isset($_POST['tambah'])) {
        $idBarang = $_POST['idBarang'];
        $namaBarang = $_POST['namabarang'];
        $jumlahBarang = $_POST['jumlahbarang'];
        $kondisi = $_POST['kondisibarang'];
        $query = "INSERT INTO stock VALUES ($idBarang, '$namaBarang', '$jumlahBarang', '$kondisi')";

        if (mysqli_query($conn,$query)) {
			header('Location: databarang.php');
		} else {
            echo "Error: " . mysqli_error($conn);
    }
}
?>