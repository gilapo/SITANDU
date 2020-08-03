<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>

<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Data Keseluruhan</div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor Identitas</th>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Jabatan</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pasien as $data) : ?>
                                <tr>
                                    <td><?= $data->identitas; ?></td>
                                    <td><?= $data->nama; ?></td>
                                    <td><?= $data->usia; ?></td>
                                    <td><?= $data->jabatan; ?></td>
                                    <td><?= $data->jeniskelamin; ?></td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm btn-info" data-id="">Isi</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>