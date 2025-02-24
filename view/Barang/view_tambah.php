<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambahan Barang </title>
</head>
<body>
    <h1>Halaman Tabahan Barang</h1>
    <form action="proses_tambah.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id_barang</label>
    <br>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_barang">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama_barang</label>
    <br>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nama_barang">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Harga</label>
    <br>
    <input type="text" class="form-control" id="exampleInputPassword1" name="harga">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stok</label>
    <br>
    <input type="text" class="form-control" id="exampleInputPassword1" name="stok">
  </div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">id_jenis</label>
    <br>
    <input type="text" class="form-control" id="exampleInputPassword1" name="id_jenis">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>