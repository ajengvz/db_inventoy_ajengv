<?php 
$id_jenis = $_GET['id_jenis'];
$nama_jenis = $_POST['nama_jenis']; 


include '../../config/koneksi.php';
$query = mysqli_query($conn,"UPDATE jenis set nama_jenis='$nama_jenis'
WHERE id_jenis='$id_jenis'");

if($query){
    echo "<script>alert('data berhasil di edit ')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal di di edit ')</script>";
    echo "<script>window.location.href='index.php'</script>";

}
