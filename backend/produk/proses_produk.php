<?php 
// Include file koneksi database
require_once '../../database/dbkoneksi.php';

// Ambil data dari form
$_id = $_POST['id'];
$_nama_motor = $_POST['nama_motor'];
$_cc = $_POST['cc'];
$_tipe_motor_id = $_POST['tipe_motor_id'];
$_harga = $_POST['harga'];
$_merk_id = $_POST['merk_id'];
$_stok = $_POST['stok'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_id;
$ar_data[]=$_nama_motor;
$ar_data[]=$_cc;
$ar_data[]= $_tipe_motor_id;
$ar_data[]=$_harga;
$ar_data[]=$_merk_id;
$ar_data[]=$_stok;

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO motor (id,nama_motor,cc,tipe_motor_id,harga,merk_id,stok) VALUES (?,?,?,?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE motor SET id=?,nama_motor=?,cc=?,tipe_motor_id=?,
    harga=?,merk_id=?,stok=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:produk.php');
?>