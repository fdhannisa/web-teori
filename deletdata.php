<?php
    include ("koneksi.php");

    $idBarang = $_GET['hapus'];
if (isset($_GET['hapus'])) {
    $query1= mysqli_query($conn, "DELETE from stock where idBarang = '$idBarang';");
if ($query1) {
    header('Location: databarang.php');
}
}

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Hapus Data</title>
</head>

<body>
</body>

</html>