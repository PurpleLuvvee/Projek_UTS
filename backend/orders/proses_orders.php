<?php 
// Include file koneksi database
require_once '../../database/dbkoneksi.php';

// Ambil data dari form
$_id = $_POST['id'];
$_nama_pelanggan = $_POST['nama_pelanggan'];
$_alamat_pelanggan = $_POST['alamat_pelanggan'];
$_motor_id = $_POST['motor_id'];
$_quantity = $_POST['quantity'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_id;
$ar_data[]=$_nama_pelanggan;
$ar_data[]=$_alamat_pelanggan;
$ar_data[]= $_motor_id;
$ar_data[]=$_quantity;

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO pesanan (id,nama_pelanggan,alamat_pelanggan,motor_id,quantity) VALUES (?,?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE pesanan SET id=?,nama_pelanggan=?,alamat_pelanggan=?,motor_id=?,
    quantity=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar orders
header('location:orders.php');
?>