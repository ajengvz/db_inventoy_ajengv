
<?php 

$nama_jenis = $_POST['nama_jenis']; 
$id_jenis = $_POST['id_jenis'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,"INSERT INTO jenis VALUES('$nama_jenis','$id_jenis')");

if($query){
    echo "<script>alert('data berhasil di simpan ')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal di simpan ')</script>";
    echo "<script>window.location.href='tambah.php'</script>";

}
