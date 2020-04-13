<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Data</title>
</head>

<style>
div{
    font-family: 'Quicksand';

}
th{
    font-family: 'Quicksand';
}
tr{
    font-family: 'Quicksand';
}
a{
    font-family: 'Quicksand';
}


</style>

<?php
include('koneksi.php');
$query=mysqli_query($connect,"SELECT * FROM `inventory` ");

?>
<body>
<hr>
<a href="inventory.php" style="text-decoration : none;margin-left : 45%;"> + Tambah Data</a>
<table border ="1" cellpadding = "20" cellspacing = "0" align= "center"   style='margin-top :10px'>
<tr  align="center">
    <hr>
<!-- <th>No</th> -->
<th>Kode Produk</th>
<th>Nama Produk</th>
<th>Harga</th>
<th>Satuan</th>
<th>Kategori</th>
<th>Gambar</th>
<th>Stok</th>
<th>Action</th>
</tr> 

<?php while($data=mysqli_fetch_array($query)){ ?>
    
    <tr alig align="center">
        <!-- <td></td> -->
        <td> <?php echo $data['kode']?> </td>
        <td> <?php echo $data['nama']?> </td>
        <td> <?php echo $data['harga']?> </td>
        <td> <?php echo $data['satuan']?> </td>
        <td> <?php echo $data['kategori']?> </td>
        <td> <img  src='<?php echo $data['gambar'] ?>' style="width: 100px;"></td>

        <?php if($data['stok'] < 5){?> 
            <td bgcolor="red" style="color:white;"><?php echo $data['stok']?></td>
        <?php }else{ ?>
            <td><?php echo $data['stok']?></td>
            <?php } ?>
        <td>
        <button class="btn btn-danger" style=" width: 100px">
            <a href="delete.php?id=<?php echo $data['kode']?>" style="text-decoration:none; color:white;">Delete</a></button>
        <button class="btn btn-success" style=" width: 100px">
            <a href="form-edit.php?id=<?php echo $data['kode']?>" style="text-decoration:none; color:white;">Edit</a></button>

        </td>
        
    </tr>
<?php } ?>

</table>
        <div class="col-sm-12">
            <center><a href="inventory.php"><button type="submit" id="tombol" name="login" class="btn btn-success"
                style="font-family: 'Quicksand', cursive;width: 25%;margin-top: 30px" data-toggle="modal"
                data-target="#exampleModal">Back</button></a></center>
        </div>
    
</body>
</html>
