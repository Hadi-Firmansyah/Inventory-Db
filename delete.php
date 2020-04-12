<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
crossorigin="anonymous">
<?php 
include('koneksi.php');
$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM `inventory` WHERE `inventory`.`kode` = $id");
if($query==TRUE) {
    echo '<div class="alert alert-danger" role="alert">
    Data di Hapus
    <a href="dataTersimpan.php" class="alert-link">Klik disini</a></div>';
}
?>