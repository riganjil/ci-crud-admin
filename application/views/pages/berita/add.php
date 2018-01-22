<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Berita</li>
</ol>
<div class="card mb-3">
    <div class="card-header">
        Tambah Berita
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="<?php echo base_url('kategori/simpan') ?>" method="post">
                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" value="" required>
                </div>
                <div class="form-group">
                    <label for="">Kategori SEO</label>
                    <input type="text" class="form-control" name="nama_kategori_seo" value="" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url('kategori') ?>" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>