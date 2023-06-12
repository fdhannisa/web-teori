<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css" />
    <title>Data Barang</title>
</head>

<body class="main-content">
    <nav class="navbar navbar-light bg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/sipelator.png" alt="" width="30" height="24" class="align-text-top">
                SIPELATOR
            </a>

            <i class="uil uil-search search-icon" id="searchIcon"></i>
            <div class="search-box">
                <i class="uil uil-search search-icon"></i>
                <input type="text" placeholder="Search here..." />
            </div>

        </div>
    </nav>

    <div class="sidebar">
        <sidebar>
            <ul class="nav-links">
                <i class="uil uil-times navCloseBtn"></i>
                <li><a href="databarang.php"> Data Barang</a></li>
                <li><a href="#">Transaksi</a></li>
                <li><a href="#">Laporan</a></li>
            </ul>
        </sidebar>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">ID Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Kode PHP untuk mengambil data dari database
            include('koneksi.php');
                $query = "SELECT * FROM stock";
                $result = mysqli_query($conn, $query);

                $nomor = 1; // Inisialisasi nomor baris

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<th scope='row'>" . $nomor . "</th>";
                    echo "<td>" . $row['idBarang'] . "</td>";
                    echo "<td>" . $row['namabarang'] . "</td>";
                    echo "<td>" . $row['jumlah'] . "</td>";
                    echo "<td>" . $row['kondisi'] . "</td>";
                    echo "<td><a href='editbarang.php?edit=" . $row['idBarang'] . " 'class='btn btn-warning'>Edit</a> |
                    <a href='deletdata.php?hapus=" . $row['idBarang'] . "'class='btn btn-danger'>Hapus</a></td>";
                    echo "</tr>";                    
                    $nomor++; // Increment nomor baris
                }
            ?>
        </tbody>
    </table>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="tambahdata.php">Tambah Data</a>
    </div>
</body>

</html>