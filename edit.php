<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
crossorigin="anonymous">
<?php
include('koneksi.php');
    $kode = $_POST['kodeb'];
    $nama=$_POST['namab'];
    $harga=$_POST['hargab'];
    $satuan=$_POST['satuanb'];
    $kategori=$_POST['kategorib'];
    $gambar=$_POST['gambarb'];
    $stok=$_POST['stokb'];

    $query = mysqli_query($connect,"UPDATE `inventory` SET `nama` = '$nama', `harga` = '$harga', `satuan` = '$satuan', `kategori` = '$kategori', `gambar` = '$gambar', `stok` = '$stok' WHERE `inventory`.`kode` = $kode;"); 

    // $hasil = mysqli_query($connect,$query);

    if($query==TRUE){
        echo '<div class="alert alert-danger" role="alert">
        Data Terupdate
        <a href="dataTersimpan.php" class="alert-link">Klik disini</a></div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">
        Data Gagal Update
        <a href="dataTersimpan.php" class="alert-link">Klik disini</a></div>';
    }

?>