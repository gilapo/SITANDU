<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Data Diri</div>
                </div>
                <div class="card-body">
                    <form action="/Admin/createDataDiriAct" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="identitas">Nomor Identitas</label>
                            <input type="number" class="form-control" id="identitas" name="identitas" placeholder="NIK/no.KTP/no.Pasport/NIM">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" aria-describedby="emailHelp" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="usia">Usia</label>
                                    <input type="Number" class="form-control" id="usia" name="usia" placeholder="Usia">
                                </div>
                                <div class="col">
                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jeniskelamin" name="jeniskelamin" class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="jeniskelamin">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jeniskelamin" name="jeniskelamin" class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="jeniskelamin">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dataPasien" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Data Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor Identitas</th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Jabatan</th>
                                    <th>Jenis Kelamin</th>
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
</div>
<script>
    $(document).ready(function() {
        $('#dataPasien').DataTable();
    });
</script>
<?= $this->endSection(); ?>