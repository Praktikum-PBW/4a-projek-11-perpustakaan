<?php
require "../koneksi.php";
if(isset($_POST['create'])){
    $id_user = $_POST['id_user'];
    $nama_user = $_POST['nama_user'];
    $jk = $_POST['jk_user'];
    $no = $_POST['no_telp'];
    $alamat = $_POST['alamat_user'];  
    $sql = mysqli_query($koneksi,"INSERT INTO user VALUES('$id_user','$nama_user','$jk','$no','$alamat')");
        if ($sql) {
            echo "<script>alert('Data Berhasil dimasukan!');
            window.location.replace('index.php')</script>";
        } else {
            echo "<script>alert('Data Gagal dimasukan!');
            window.location.replace('create.php')</script>";
        }
}

?>
<?php include "sidebar.php" ?>
<h2>Buat Data User</h2>
    <form class="class-input" method="post">
    <div class="col">
        <div class="row mt-5">
        <div class="mb-3">
            <label for="id_user" class="form-label">ID User</label>
            <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Masukan ID User" required>
        </div>
        <div class="mb-3">
            <label for="nama_user" class="form-label">Nama User</label>
            <input type="text" class="form-control" name="nama_user" id="nama_user" required>
        </div>
        <div class="mb-3">
            <label for="jk_user" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jk_user" id="jk_user" required>
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telp</label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" required>
        </div>
        <div class="mb-3">
            <label for="alamat_user" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat_user" id="alamat_user" required>
        </div>
    </div>
        <a href="index.php" button type="button" class="btn btn-primary"><i class="bi bi-chevron-left"></i> Back</a>  
        <button type="submit" class="btn btn-success" name="create" onclick="return confirm('Are You Sure?')"><i class="bi bi-file-earmark-plus"></i> Create</button>
    </div>
    </form>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

