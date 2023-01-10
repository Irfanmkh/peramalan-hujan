<?php 
// koneksi database
include 'connect.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$query = "DELETE FROM forecast_hujan WHERE id = '$id'";

if($db->query($query)) {
    header("location:index.php");
} else {
    echo "data gagal dihapus, silahkan coba lagi!";
}
 
?>