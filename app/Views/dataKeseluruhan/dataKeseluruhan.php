<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>

<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Data Keseluruhan</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor Identitas</th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Jabatan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>DM Keluarga</th>
                                    <th>HT Keluarga</th>
                                    <th>Jantung Keluarga</th>
                                    <th>Stroke Keluarga</th>
                                    <th>Asma Keluarga</th>
                                    <th>Kanker Keluarga</th>
                                    <th>Kolesterol Keluarga</th>
                                    <th>DM Diri Sendiri</th>
                                    <th>HT Diri Sendiri</th>
                                    <th>Jantung Diri Sendiri</th>
                                    <th>Stroke Diri Sendiri</th>
                                    <th>Asma Diri Sendiri</th>
                                    <th>Kanker Diri Sendiri</th>
                                    <th>Kolesterol Diri Sendiri</th>
                                    <th>Merokok</th>
                                    <th>Makan Sayur dan Buah Kurang dari 5 Porsi</th>
                                    <th>Kurang Aktivitas Fisik</th>
                                    <th>Alkohol</th>
                                    <th>Sulit Tidur Mapsu Makan</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th>
                                    <th>Lingkar Perut</th>
                                    <th>IMT</th>
                                    <th>Sistole</th>
                                    <th>Diastole</th>
                                    <th>GDS</th>
                                    <th>Kolesterol</th>
                                    <th>Asam Urat</th>
                                    <th>Ekspirasi</th>
                                    <th>Benjolan pada Payudara</th>
                                    <th>IVA</th>
                                    <th>Kadar Alkohol</th>
                                    <th>Tes Amfetamin</th>
                                    <th>Masalah yang Ditemukan</th>
                                    <th>Saran</th>
                                    <th>Rujukan</th>
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
                                        <td><?= $data->DM_1; ?></td>
                                        <td><?= $data->HT_1; ?></td>
                                        <td><?= $data->jantung_1; ?></td>
                                        <td><?= $data->stroke_1; ?></td>
                                        <td><?= $data->asma_1; ?></td>
                                        <td><?= $data->kanker_1; ?></td>
                                        <td><?= $data->kolesterol_1; ?></td>
                                        <td><?= $data->DM_2; ?></td>
                                        <td><?= $data->HT_2; ?></td>
                                        <td><?= $data->jantung_2; ?></td>
                                        <td><?= $data->stroke_2; ?></td>
                                        <td><?= $data->asma_2; ?></td>
                                        <td><?= $data->kanker_2; ?></td>
                                        <td><?= $data->kolesterol_2; ?></td>
                                        <td><?= $data->merokok; ?></td>
                                        <td><?= $data->sayur_buah; ?></td>
                                        <td><?= $data->kurang_aktivitas_fisik; ?></td>
                                        <td><?= $data->alkohol; ?></td>
                                        <td><?= $data->sulit_tidur_napsu_makan; ?></td>
                                        <td><?= $data->bb; ?></td>
                                        <td><?= $data->tb; ?></td>
                                        <td><?= $data->imt; ?></td>
                                        <td><?= $data->lp; ?></td>
                                        <td><?= $data->sistole; ?></td>
                                        <td><?= $data->diastole; ?></td>
                                        <td><?= $data->gds; ?></td>
                                        <td><?= $data->kolesterol; ?></td>
                                        <td><?= $data->asam_urat; ?></td>
                                        <td><?= $data->ekspirasi; ?></td>
                                        <td><?= $data->benjolan_pada_payudara; ?></td>
                                        <td><?= $data->iva; ?></td>
                                        <td><?= $data->kadar_alkohol; ?></td>
                                        <td><?= $data->tes_amfetamin; ?></td>
                                        <td><?= $data->masalah_yang_ditemukan; ?></td>
                                        <td><?= $data->saran; ?></td>
                                        <td><?= $data->rujukan; ?></td>
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
    });
</script>
<?= $this->endSection(); ?>