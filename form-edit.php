<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>INVENTORY</title>
</head>
<style>
div{
    font-family: 'Quicksand';

}
h1{
    margin-top : 50px;
    font-family: 'Quicksand'; 
    font-weight: bold;
}

</style>

<?php
include('koneksi.php');
    $kode = $_GET['id'];

    $query = "SELECT * FROM `inventory` WHERE kode=" .$kode;

    $hasil = mysqli_query($connect,$query);

    // select
    $satuan = array('Pcs','Box');
    $kategori = array('Minuman','Makanan','Barang');

?>

<body>
<form name="save" action="edit.php" method="post" >
<?php while($data = mysqli_fetch_array($hasil) ){?>

    <h1 align="center">EDIT DATA</h1>
    <div class="col-sm-12" style="margin-top: 30px;font-family: 'Quicksand', cursive;">
        <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span style="width: 130px;" class="input-group-text" id="basic-addon1">Kode Produk </span>
            </div> -->
                <input type="hidden" name="kodeb" class="form-control" aria-label="Id_card" aria-describedby="basic-addon1" value="<?php echo $data['kode'] ?>" >
            <!-- </div> -->
       
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span style="width: 130px;" class="input-group-text" id="basic-addon1">Nama Produk</span>
            </div>
                <input type="text" name="namab" class="form-control" aria-label="Id_card" aria-describedby="basic-addon1" value="<?php echo $data['nama'] ?>">        
            </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span style="width: 130px;" class="input-group-text" id="basic-addon1">Harga</span>
            </div>
                <input type="number" name="hargab" class="form-control" aria-label="Id_card" aria-describedby="basic-addon1" value="<?php echo $data['harga'] ?>">        
            </div>  
            
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span style="width: 130px;" class="input-group-text" id="basic-addon1">Satuan</span>
            </div>
                <select name="satuanb" class="form-control">
                    <!-- <option value="NULL" selected>Pilih</option>
                    <option value="Pcs">Pcs</option>
                    <option value="Box">Box</option> -->
                    <?php
                        foreach($satuan as $j){
                            echo "<option value='$j' ";
                            echo $data['satuan']==$j?'selected="selected"':'';
                            echo ">$j</option>";
                        }
                    ?>
                </select>
            </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span style="width: 130px;" class="input-group-text" id="basic-addon1">Kategori</span>
            </div>
                <select name="kategorib" class="form-control" value="<?php echo $data['kategori'] ?>">
                    <<?php
                        foreach($kategori as $j){
                            echo "<option value='$j' ";
                            echo $data['kategori']==$j?'selected="selected"':'';
                            echo ">$j</option>";
                        }
                    ?>
                </select>
            </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span style="width: 130px;" class="input-group-text" id="basic-addon1">URL Gambar</span>
            </div>
                <input type="text" name="gambarb" class="form-control" aria-label="Id_card" aria-describedby="basic-addon1" value="<?php echo $data['gambar'] ?>" >        
            </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span style="width: 130px;" class="input-group-text" id="basic-addon1">Stok</span>
            </div>
                <input type="number" name="stokb" class="form-control" aria-label="Id_card" aria-describedby="basic-addon1" value="<?php echo $data['stok'] ?>">        
            </div>

        <div class="col-sm-12">
            <center><button type="submit" id="tombol" name="login" class="btn btn-success"
                style="font-family: 'Quicksand', cursive;width: 25%;margin-top: 30px" data-toggle="modal"
                data-target="#exampleModal">Edit</button></center>
        </div>
    </div>
<?php }?>
</form>
</body>
</html>