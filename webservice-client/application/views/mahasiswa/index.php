<div style="width: 100%;" class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>

    <?php endif; ?>
    <br>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" style="background-color: #1C82AD; border-radius: 12px;" class="btn btn-primary"><strong>Add Data Mahasiswa</strong></a>
        </div>
    </div>

    <div style="width: 205%;" class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                data mahasiswa tidak ditemukan.
                </div>
            <?php endif; ?>

            
            <ul  class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" style="height: 23px; width: 50px; margin-left:5px" 
                        class="badge badge-danger float-right tombol-hapus">Delete</a>

                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" style="height: 23px; width: 50px; margin-left:5px"
                        class="badge badge-success float-right">Update</a>

                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" style="height: 23px; width: 50px; margin-left:5px"
                        class="badge badge-primary float-right">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>