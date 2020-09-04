<?= $this->extend('templates/superAdminLayout'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Data Keseluruhan</div>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor Identitas</th>
                                    <th>Nama</th>
                                    <th>Tanggal Input</th>
                                    <th>Usia</th>
                                    <th>Jenis Kelamin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $data) : ?>
                                    <tr>
                                        <td><?= $data->identitas; ?></td>
                                        <td><?= $data->nama; ?></td>
                                        <td><?php if (isset($data->tanggal_input)) {
                                                $originalDate = $data->tanggal_input;
                                                echo $newDate = date("d/m/Y", strtotime($originalDate));
                                            }
                                            ?></td>
                                        <td><?= $data->usia; ?></td>
                                        <td><?php if ($data->jeniskelamin == 1) {
                                                echo "Laki-Laki";
                                            } else {
                                                echo "Perempuan";
                                            } ?></td>
                                        </td>
                                        <td><a href="admin/detil/<?= $data->id; ?>" class="btn btn-success">selengkapnya</a></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>