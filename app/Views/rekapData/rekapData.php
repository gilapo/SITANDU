<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>

<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Cek Kesehatan</div>
                </div>
                <div class="card-body">
                    <form action="/Admin/createRekapDataAct" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col">
                                <label for="nik">Nomor Identitas</label>
                                <input type="text" class="form-control" id="identitas" aria-describedby="textHelp" placeholder="NIK/no.KTP/no.Pasport/NIM" readonly>
                            </div>
                            <div class="col">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="textHelp" placeholder="Nama Pasien" readonly>
                            </div>
                            <input type="text" id="id" name="id" aria-describedby="textHelp" hidden>
                            <input type="text" id="id_kesimpulan" name="id_kesimpulan" aria-describedby="textHelp" hidden>
                            <input type="text" id="status_meja_5" name="status_meja_5" aria-describedby="textHelp" value="1" hidden>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Masalah yang Ditemukan</label>
                            <textarea type="text" class="form-control" id="masalah_yang_ditemukan" name="masalah_yang_ditemukan" placeholder="Masalah yang ditemukan.."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Saran dan Tindak Lanjut...</label>
                            <textarea type="text" class="form-control" id="saran" name="saran" placeholder="Saran dan Tindak Lanjut..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rujuk ke</label>
                            <input type="text" class="form-control" id="rujukan" name="rujukan" placeholder="jika tidak ada isi - ">
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
    <div class="modal-dialog modal-lg" role="document">
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
                                    <th>Nomor Identitas</th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Jenis Kelamin</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $data) : if ($data->status_meja_5 == 0) {
                                ?>
                                        <tr>
                                            <td><?= $data->identitas; ?></td>
                                            <td><?= $data->nama; ?></td>
                                            <td><?= $data->usia; ?></td>
                                            <td><?php if ($data->jeniskelamin == 1) {
                                                    echo "laki-laki";
                                                } else {
                                                    echo "perempuan";
                                                } ?></td>
                                            <td>
                                                <button class="btn btn-primary btn-round" id="pilih" data-id="<?= $data->id; ?>" data-identitas="<?= $data->identitas; ?>" data-nama="<?= $data->nama; ?>">Pilih</button>
                                            </td>
                                        </tr>
                                <?php }
                                endforeach; ?>
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
            document.getElementById("id").value = $(this).attr('data-id');
            document.getElementById("id_kesimpulan").value = $(this).attr('data-id');
            $('#dataPasien').modal('hide');
        });
    });
</script>
<?= $this->endSection(); ?>