<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambahan jenis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
    <h1>Halaman Tambah jenis</h1>
    <form action="proses_tambah.php" method="post">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama_jenis</label>
    <br>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_jenis">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">id_jenis</label>
    <br>
    <input type="text" class="form-control" id="exampleInputPassword1" name="id_jenis">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>