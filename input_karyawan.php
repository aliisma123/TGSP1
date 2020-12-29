<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PENGAJUAN CUTI</title>
  </head>
  <body>
    <h1><center>MASUKAN DATA</center></h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
<?php
include "koneksi.php";
if (isset ($_POST['save'])) {
	$NIK=$_POST['NIK'];
  $nama=$_POST['nama'];
  $jabatan=$_POST['jabatan'];
	$bagian=$_POST['bagian'];
  $date=$_POST['date'];
	$pengajuan_cuti=$_POST['pengajuan_cuti'];
	$sisa_cuti=$_POST['sisa_cuti'];
  $query=mysqli_query($koneksi, "insert into cuti_karyawan (NIK,nama,jabatan,bagian,pengajuan_cuti,sisa_cuti,date)
value('$NIK','$nama','$jabatan','$bagian','$pengajuan_cuti','$sisa_cuti','$date')");
if ($query){
    header("location:tampil_karyawan.php");
}else{
    echo mysqli_eror();
}
}
?>
<form method="POST" action="">
<table class="table table-dark">

	<tr>
  <td>NIK</td>
	<td><input class="form-control"
    placeholder="masukan NIK"
    aria-label="default input example"
    type="varchar"
    name="NIK"></td>
  </tr>

  <tr>
  <td>Nama</td>
	<td><input class="form-control"
    placeholder="masukan nama"
    aria-label="default input example"
    type="varchar"
    name="nama"></td>
  </tr>

	<tr>
  <td>Jabatan</td>
  <td><select name="jabatan"</td>
      <option value="">--Pilih--</option>
      <option value="Manager">Manager</option>
      <option value="Spv">Spv</option>
      <option value="Leader">Leader</option>
      <option value="Staff">Staff</option>
      <option value="Admin">Admin</option>
  </tr>

	<tr>
  <td>Bagian</td>
	<td><select name="bagian"</td>
    <option value="">--Pilih--</option>
    <option value="Hrd">Hrd</option>
    <option value="Produksi">Produksi</option>
    <option value="Marketing">Marketing</option>
  </Select></td>
  </tr>

	<tr>
  <tr>
      <td>Tanggal Cuti</td>
  <td><input type="date" name="date"></td>
  </tr>

  <tr>
  <td>Pengajuan Cuti</td>
	<td><input class="form-control"
    placeholder="masukan pengajuan cuti"
    aria-label="default input example"
    type="int"
    name="pengajuan_cuti"></td>
  </tr>

	<tr>
  <td>Sisa Cuti</td>
	<td><input class="form-control"
    placeholder="masukan sisa cuti"
    aria-label="default input example"
    type="int"
    name="sisa_cuti"></td>
  </tr>

	<tr>
  <td><input class="btn btn-primary"
    type="submit"
    name="save"
    value="save"></td>

	<td><a class="btn btn-success"
    href="tampil_karyawan.php"
    role="button">menampilkan data</a></td>
	</tr>

</table>
</form>
</html>
