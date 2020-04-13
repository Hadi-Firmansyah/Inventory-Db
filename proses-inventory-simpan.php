<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
crossorigin="anonymous">
<?php

//print_r($_POST);

include('koneksi.php');
$nama=$_POST['namas'];
$harga=$_POST['hargas'];
$satuan=$_POST['satuans'];
$kategori=$_POST['kategoris'];
$gambar=$_POST['gambars'];
$stok=$_POST['stoks'];

$query = mysqli_query($connect,"INSERT INTO `inventory` (`kode`, `nama`, `harga`, `satuan`, `kategori`, `gambar`, `stok`) 
                                VALUES (NULL, '$nama', '$harga', '$satuan', '$kategori', '$gambar', '$stok')");
if($query==TRUE){
    echo '<div class="alert alert-danger" role="alert">
    Data Tersimpan Ke Database
    <a href="dataTersimpan.php" class="alert-link">Klik disini</a></div>';
}else{
    echo '<div class="alert alert-danger" role="alert">
    Data Gagal Tersimpan
    <a href="inventory.php" class="alert-link">Klik disini</a></div>';
}
?>
