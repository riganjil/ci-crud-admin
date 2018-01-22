<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Kategori</li>
</ol>
<div class="mb-3">
    <a href="<?php echo base_url('berita/add') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
</div>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Data Kategori
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Judul Berita</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Judul Berita</th>
                    <th></th>
                    <th></th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach($data->result_array() as $row){ ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nama_kategori'] ?></td>
                        <td><?php echo $row['judul'] ?></td>
                        <td><a href="<?php echo base_url('berita/'.$row['id']) ?>">edit</a></td>
                        <td><a href="<?php echo base_url('berita/'.$row['id'].'/hapus') ?>">hapus</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>