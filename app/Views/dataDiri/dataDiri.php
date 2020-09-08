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
                            <input type="text" class="form-control" id="identitas" name="identitas" placeholder="NIK/no.KTP/no.Pasport/NIM" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="usia">Usia</label>
                                    <input type="Number" class="form-control" id="usia" name="usia" placeholder="Usia" required>
                                </div>
                                <div class="col">
                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jeniskelamin1" name="jeniskelamin" class="custom-control-input" value="1" required>
                                            <label class="custom-control-label" for="jeniskelamin1">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jeniskelamin2" name="jeniskelamin" class="custom-control-input" value="0" required>
                                            <label class="custom-control-label" for="jeniskelamin2">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_input">Tanggal Input</label>
                            <input type="date" class="form-control" id="tanggal_input" name="tanggal_input" placeholder="Jabatan" required>
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
            <div class="card-body mx-auto">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Identitas</th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Jabatan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pasien as $data) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data->identitas; ?></td>
                                        <td><?= $data->nama; ?></td>
                                        <td><?= $data->usia; ?></td>
                                        <td><?= $data->jabatan; ?></td>
                                        <td><?php if ($data->jeniskelamin == 1) {
                                                echo "Laki-laki";
                                            } else {
                                                echo "Perempuan";
                                            } ?></td>
                                        <td>
                                            <button class="btn btn-primary btn-round" id="pilih" data-jk="<?= $data->jeniskelamin; ?>" data-usia="<?= $data->usia; ?>" data-identitas="<?= $data->identitas; ?>" data-nama="<?= $data->nama; ?>" data-jabatan="<?= $data->jabatan; ?>">Pilih</button>
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
        $('#dataTable').DataTable();
        $(document).on('click', '#pilih', function(e) {
            document.getElementById("identitas").value = $(this).attr('data-identitas');
            document.getElementById("nama").value = $(this).attr('data-nama');
            document.getElementById("usia").value = $(this).attr('data-usia');
            document.getElementById("jabatan").value = $(this).attr('data-jabatan');
            if ($(this).attr('data-jk') == 1) {
                document.getElementById("jeniskelamin1").checked = true;
            } else {
                document.getElementById("jeniskelamin2").checked = true;
            }

            $('#dataPasien').modal('hide');
        });
    });
</script>
<?= $this->endSection(); ?>