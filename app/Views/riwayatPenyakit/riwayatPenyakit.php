<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Riwayat Penyakit</div>
                </div>
                <div class="card-body">
                    <form action="/Admin/createRiwayatPenyakitAct" method="post" enctype="multipart/form-data">
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
                            <input type="text" id="id_penyakit_keluarga" name="id_penyakit_keluarga" aria-describedby="textHelp" hidden>
                            <input type="text" id="id_penyakit_diri_sendiri" name="id_penyakit_diri_sendiri" aria-describedby="textHelp" hidden>
                            <input type="text" id="id_faktor_resiko" name="id_faktor_resiko" aria-describedby="textHelp" hidden>
                            <input type="text" id="status_meja_2" name="status_meja_2" aria-describedby="textHelp" value="1" hidden>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="fw-bold">Riwayat Penyakit Menular Pada Keluarga</label>
                                    <hr>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>DM</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="DM_1" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="DM_1" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>HT</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="HT_1" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="HT_1" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Jantung</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="jantung_1" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="jantung_1" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Stroke</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="stroke_1" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="stroke_1" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Asma</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="asma_1" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="asma_1" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Kanker</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="kanker_1" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="kanker_1" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Kolesterol</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="kolesterol_1" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="kolesterol_1" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- ///////////////// -->
                                <div class="form-group mt-4">
                                    <hr>
                                    <label class="fw-bold">Faktor Resiko Prilaku</label>
                                    <hr>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Merokok</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="merokok" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="merokok" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Sayur dan Buah <br> kurang dari 5 per hari</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="sayur_buah" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="sayur_buah" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Kurang Aktivitas Fisik</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="kurang_aktivitas_fisik" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="kurang_aktivitas_fisik" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Konsumsi Alkohol</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="alkohol" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="alkohol" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Sulit Tidur dan <br> nafsu makan menurun</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="sulit_tidur_napsu_makan" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="sulit_tidur_napsu_makan" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- //////////////// -->
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="fw-bold">Riwayat Penyakit Tidak menular Pada Diri Sendiri</label>
                                    <hr>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>DM</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="DM_2" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="DM_2" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>HT</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="HT_2" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="HT_2" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Jantung</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="jantung_2" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="jantung_2" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Stroke</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="stroke_2" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="stroke_2" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Asma</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="asma_2" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="asma_2" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Kanker</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="kanker_2" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="kanker_2" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Kolesterol</label>
                                    </div>
                                    <div class="col">
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="kolesterol_2" value="1">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="kolesterol_2" value="0">
                                            <span class="form-radio-sign">Tidak</span>
                                        </label>
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
                                <?php foreach ($pasien as $data) : if ($data->status_meja_2 == 0) {
                                ?>
                                        <tr>
                                            <td><?= $data->identitas; ?></td>
                                            <td><?= $data->nama; ?></td>
                                            <td><?= $data->usia; ?></td>
                                            <td><?php if ($data->jeniskelamin == 1) {
                                                    echo "Laki-laki";
                                                } else {
                                                    echo "Perempuan";
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
            document.getElementById("id_penyakit_keluarga").value = $(this).attr('data-id');
            document.getElementById("id_penyakit_diri_sendiri").value = $(this).attr('data-id');
            document.getElementById("id_faktor_resiko").value = $(this).attr('data-id');
            $('#dataPasien').modal('hide');
        });
    });
</script>
<?= $this->endSection(); ?>