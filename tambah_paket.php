<?php 
    include "header.php";
?>
<?php
    if($_SESSION['role']=='admin'){
?>
<!DOCTYPE html>
<html>  
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<style>
body {
  background-image: url('12.gif.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>
    
    <h2>Tambah Paket</h2>
    <form action="proses_tambah_paket.php" method="post">
        Jenis Paket: 
        <?php 
        $arr_jenis=array('kiloan'=>'Kiloan','selimut'=>'Selimut','bed_cover'=>'Bed Cover','kaos'=>'Kaos');
        ?>
        <select name="jenis" class="form-control">
            <option></option>
            <?php foreach ($arr_jenis as $key_jenis => $val_jenis):
                if($key_jenis==$dt_paket['jenis']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_jenis?>" <?=$selek?>><?=$val_jenis?></option>
            <?php endforeach ?>
        </select>
        Harga:
        <input type="number" name="harga" value= "" class="form-control">
        <input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary">
    </form>
    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>