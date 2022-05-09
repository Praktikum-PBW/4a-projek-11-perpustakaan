<?php include "sidebar.php" ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h3>Data Peminjaman </h3>
            <a href="create.php" class="btn btn-primary">tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>ID Peminjaman</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Buku</th>
                        <th>User</th>
                        <th>Admin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, 'SELECT * FROM peminjaman JOIN buku ON peminjaman.id_buku=buku.id_buku JOIN user ON peminjaman.id_user=user.id_user JOIN admin ON peminjaman.id_admin=admin.id_admin');
                    $no = 1;
                    foreach ($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['tgl_pinjam']?></td>
                        <td><?= $data['tgl_kembali']?></td>
                        <td><?= $data['nama_buku']?></td>
                        <td><?= $data['nama_user']?></td>
                        <td><?= $data['nama_admin']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="edit.php?page=peminjaman_edit&id_peminjaman=<?= $data['id_peminjaman']?>"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?page=peminjaman_delete&id_peminjaman=<?= $data['id_peminjaman']?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</div>