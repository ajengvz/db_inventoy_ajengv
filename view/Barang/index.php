<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Barang/index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/indext.php">Jenis</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<h1>Data Barang </h1>
<a class="btn btn-primary" href="view_tambah.php" role="button"><i class="fa-solid fa-plus"></i>Tambah barang</a>
<br></br>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">id_barang</th>
      <th scope="col">Nama_barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">id_jenis</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php
        include '../../config/koneksi.php';
        $query = mysqli_query($conn,"SELECT * FROM barang");
        if(mysqli_num_rows($query)){
            while($result=mysqli_fetch_assoc($query)){
                ?>
                    <tr>
                             <td><?php echo $result['id_barang'];?></td> 
                             <td><?php echo $result['Nama_barang'];?></td>
                             <td><?php echo $result['Harga'];?></td>
                             <td><?php echo $result['Stok'];?></td>
                             <td><?php echo $result['id_jenis'];?></td>
                            
                             <td>
                             <a href="view_edit.php?id_barang=<?php echo $result['id_barang']?>"
                               class= "btn btn-primary"><i class="fa-solid fa-pencil"></i>Edit</a>
          
                               <a href="view_edit.php?id_barang=<?php echo $result['id_barang']?>"
                               class= "btn btn-warning"><i class="fa-solid fa-trash-can"></i>hapus</a>
          
                             </td>
                             
                    </tr>
                <?php
            }
        }else{
            echo "Data kosong";
        }    
?>   
</table>
        
    
</body>
</html>