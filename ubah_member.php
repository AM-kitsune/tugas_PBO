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
    <?php include "header.php"; ?>
    <?php 
    include "koneksi.php";
    $qry_get_member=mysqli_query($conn,"select * from member where 
id_member = '".$_GET['id']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <h3>Ubah member</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id_member" value= 
  "<?=$dt_member['id_member']?>">
        Nama Member :
  <input type="text" name="nama_member" value=   "<?=$dt_member['nama_member']?>" class="form-control">
        Alamat :
  <input type="text" name="alamat" value=   "<?=$dt_member['alamat']?>" class="form-control">
       
        Jenis Kelamin : 
        <?php 
        $arr_jenis_kelamin=array('Laki-laki'=>'Laki-Laki','Perempuan'=>'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
                if($key_jenis_kelamin==$dt_member['jenis_kelamin']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
<option value="<?=$key_jenis_kelamin?>" <?=$selek?>><?=$val_jenis_kelamin?></option>
            <?php endforeach ?>
        </select>
        No.Telepon :
  <input type="text" name="telp" value= "<?=$dt_member['telp']?>" class="form-control">
        
        
       
<input type="submit" name="simpan" value="Ubah User" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
