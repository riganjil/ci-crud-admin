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
            <form action="<?php echo base_url('berita/update') ?>" method="post">
                <input type="hidden" class="form-control" name="id" value="<?php echo $data->id ?>">
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="kategori_id" id="" class="form-control">
                            <option value="<?php echo $data->kategori_id ?>"><?php echo $data->nama_kategori ?></option>
                        <?php foreach ($data_kategori->result_array() as $row){ ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['nama_kategori'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Judul Berita</label>
                    <input type="text" class="form-control" name="judul_berita" value="<?php echo $data->judul ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Isi Berita</label>
                    <textarea name="isi_berita" id="" cols="30" rows="10" class="form-control"><?php echo $data->isi ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Gambar Berita</label>
                    <input type="text" class="form-control" name="gambar_berita" value="<?php echo $data->gambar ?>" required>
                    <small>ex: http://static.republika.co.id/uploads/images/inpicture_slide/juergen-klopp-_180115072942-886.jpg</small>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url('berita') ?>" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>