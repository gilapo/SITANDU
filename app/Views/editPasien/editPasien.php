<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Edit Data Pasien</div>
                </div>
                <div class="card-body">
                    <?php foreach ($pasien as $data) : ?>
                        <form action="/Admin/editPasienAct" method="post" enctype="multipart/form-data">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="heading1">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                Edit Data Diri
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <input type="hidden" class="form-control hidden" id="id" name="id" value="<?= $data->id; ?>">
                                            <div class="form-group">
                                                <label for="identitas">Nomor Identitas</label>
                                                <input type="text" class="form-control" id="identitas" name="identitas" placeholder="NIK/no.KTP/no.Pasport/NIM" value="<?= $data->identitas; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $data->nama; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="<?= $data->jabatan; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label for="usia">Usia</label>
                                                        <input type="Number" class="form-control" id="usia" name="usia" placeholder="Usia" value="<?= $data->usia; ?>" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="jeniskelamin">Jenis Kelamin</label>
                                                        <div class="row">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="jeniskelamin1" name="jeniskelamin" class="custom-control-input" value="1" <?php if ($data->jeniskelamin == 1) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?> required>
                                                                <label class="custom-control-label" for="jeniskelamin1">Laki-Laki</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="jeniskelamin2" name="jeniskelamin" class="custom-control-input" value="0" <?php if ($data->jeniskelamin == 0) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>
                                                                <label class="custom-control-label" for="jeniskelamin2">Perempuan</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_input">Tanggal Input</label>
                                                <input type="date" class="form-control" id="tanggal_input" name="tanggal_input" value="<?= $data->tanggal_input; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading2">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                Edit Riwayat Penyakit
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                                        <div class="card-body">
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
                                                            <input class="form-radio-input" type="radio" name="DM_1" value="1" <?php if ($data->DM_1 == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="DM_1" <?php if ($data->DM_1 == 0) {
                                                                                                                            echo "checked";
                                                                                                                        } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="HT_1" value="1" <?php if ($data->HT_1 == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="HT_1" <?php if ($data->HT_1 == 0) {
                                                                                                                            echo "checked";
                                                                                                                        } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="jantung_1" value="1" <?php if ($data->jantung_1 == 1) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="jantung_1" <?php if ($data->jantung_1 == 0) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="stroke_1" value="1" <?php if ($data->stroke_1 == 1) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="stroke_1" <?php if ($data->stroke_1 == 0) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="asma_1" value="1" <?php if ($data->asma_1 == 1) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="asma_1" <?php if ($data->asma_1 == 0) {
                                                                                                                            echo "checked";
                                                                                                                        } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="kanker_1" value="1" <?php if ($data->kanker_1 == 1) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="kanker_1" <?php if ($data->kanker_1 == 0) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="kolesterol_1" value="1" <?php if ($data->kolesterol_1 == 1) {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="kolesterol_1" <?php if ($data->kolesterol_1 == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="merokok" value="1" <?php if ($data->merokok == 1) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="merokok" <?php if ($data->merokok == 0) {
                                                                                                                            echo "checked";
                                                                                                                        } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="sayur_buah" value="1" <?php if ($data->sayur_buah == 1) {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="sayur_buah" <?php if ($data->sayur_buah == 0) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="kurang_aktivitas_fisik" <?php if ($data->kurang_aktivitas_fisik == 1) {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> value="1" required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="kurang_aktivitas_fisik" <?php if ($data->kurang_aktivitas_fisik == 0) {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="alkohol" value="1" <?php if ($data->alkohol == 1) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="alkohol" <?php if ($data->alkohol == 0) {
                                                                                                                            echo "checked";
                                                                                                                        } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="sulit_tidur_napsu_makan" value="1" <?php if ($data->sulit_tidur_napsu_makan == 1) {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="sulit_tidur_napsu_makan" <?php if ($data->sulit_tidur_napsu_makan == 0) {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="DM_2" value="1" <?php if ($data->DM_2 == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="DM_2" <?php if ($data->DM_2 == 0) {
                                                                                                                            echo "checked";
                                                                                                                        } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="HT_2" value="1" <?php if ($data->HT_2 == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="HT_2" <?php if ($data->HT_2 == 0) {
                                                                                                                            echo "checked";
                                                                                                                        } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="jantung_2" <?php if ($data->jantung_2 == 1) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="1" required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="jantung_2" <?php if ($data->jantung_2 == 0) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="stroke_2" value="1" <?php if ($data->stroke_2 == 1) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="stroke_2" <?php if ($data->stroke_2 == 0) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="asma_2" value="1" <?php if ($data->asma_2 == 1) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="asma_2" <?php if ($data->asma_2 == 0) {
                                                                                                                            echo "checked";
                                                                                                                        } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="kanker_2" value="1" <?php if ($data->kanker_2 == 1) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="kanker_2" <?php if ($data->kanker_2 == 0) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="0">
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
                                                            <input class="form-radio-input" type="radio" name="kolesterol_2" <?php if ($data->kolesterol_2 == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?> value="1" required>
                                                            <span class="form-radio-sign">Ya</span>
                                                        </label>
                                                        <label class="form-radio-label ml-3">
                                                            <input class="form-radio-input" type="radio" name="kolesterol_2" <?php if ($data->kolesterol_2 == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?> value="0">
                                                            <span class="form-radio-sign">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading3">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" onclick="antropometri()" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                Edit Antropometri
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>Berat Badan (Kg)</label>
                                                    <input type="number" class="form-control" id="bb" name="bb" placeholder="Berat Badan" value="<?= $data->bb ?>" oninput="total()" required>
                                                </div>
                                                <div class="col">
                                                    <label>Tinggi Badan (cm)</label>
                                                    <input type="text" class="form-control" id="bt" name="tb" placeholder="Tinggi Badan" value="<?= $data->tb ?>" oninput="total()" required>
                                                </div>
                                                <div class="col">
                                                    <label>IMT</label>
                                                    <input type="text" class="form-control" id="imt" name="imt" value="<?= $data->imt ?>" readonly required>
                                                    <h6 class="mt-1 ml-1 " id="keterangan"></h6>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label for="lp">Lingkar Perut</label>
                                                    <input type="number" class="form-control" id="lp" name="lp" aria-describedby="textHelp" value="<?= $data->lp ?>" placeholder="Lingkar Perut" oninput="lingkar()" required>
                                                    <h6 class="mt-1 ml-1 " id="ketlp"></h6>
                                                </div>
                                                <div class="col">
                                                    <label>Jenis Kelamin</label>
                                                    <input type="text" class="form-control" id="jk" name="ape" aria-describedby="textHelp" value="<?= $data->ape ?>" placeholder="Jenis Kelamin" readonly required>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" onclick="cekKesehatan()" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                Edit Cek Kesehatan
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Tekanan Darah</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" id="sistole" name="sistole" placeholder="Sistole" value="<?= $data->sistole ?>" oninput="tekananDarah()" required>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" id="diastole" name="diastole" placeholder="Diastole" value="<?= $data->diastole ?>" oninput="tekananDarah()" required>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" id="td" name="td" value="" readonly required>
                                                        <h6 class="mt-1 ml-1 " id="kettd"></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Gula Darah</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">

                                                        <select class="form-control" id="gulaDarah" name="jenis_gd">
                                                            <option value="" disabled selected hidden>Pilih Jenis Gula Darah...</option>
                                                            <option <?php if ($data->jenis_gd == "gds") {
                                                                        echo "selected";
                                                                    } ?> value="gds">Gula Darah Sewaktu</option>
                                                            <option <?php if ($data->jenis_gd == "gdp") {
                                                                        echo "selected";
                                                                    } ?> value="gdp">Gula Darah Puasa</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" id="isiGd" name="gds" placeholder="Gula Darah" value="<?= $data->gds ?>" oninput="guladarah()" required>
                                                        <h6 class="mt-1 ml-1 " id="ketGd"></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Kolesterol Total</label>
                                                <input type="text" class="form-control" id="kt" name="kolesterol" placeholder="Kolesterol Total" value="<?= $data->kolesterol ?>" oninput="koles()" required>
                                                <h6 class="mt-1 ml-1 " id="ketkt"></h6>
                                            </div>
                                            <div class="form-group">
                                                <label for="au">Asam Urat</label>
                                                <input type="text" class="form-control" id="au" name="asam_urat" placeholder="asam urat" value="<?= $data->asam_urat ?>" oninput="asamurat()" required>
                                                <h6 class="mt-1 ml-1 " id="ketau"></h6>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Arus Puncak Ekspirasi</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" id="eks" name="ekspirasi" placeholder="Ekspirasi" value="<?= $data->ekspirasi ?>" oninput="respirasi()" required>
                                                        <h6 class="mt-1 ml-1 " id="ketres"></h6>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" id="jk" placeholder="Jenis Kelamin" value="<?php if ($data->jeniskelamin == 1) {
                                                                                                                                                echo "laki-laki";
                                                                                                                                            } else {
                                                                                                                                                echo "perempuan";
                                                                                                                                            } ?>" readonly required>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group row" id="benjolan">
                                                <div class="col">
                                                    <label>Benjolan Aneh Pada Payudara</label>
                                                </div>
                                                <div class="col">
                                                    <label class="form-radio-label">
                                                        <input class="form-radio-input" type="radio" name="benjolan_pada_payudara" <?php if ($data->benjolan_pada_payudara == 1) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> value="1">
                                                        <span class="form-radio-sign">Normal</span>
                                                    </label>
                                                    <label class="form-radio-label ml-3">
                                                        <input class="form-radio-input" type="radio" name="benjolan_pada_payudara" <?php if ($data->benjolan_pada_payudara == 0) {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> value="0">
                                                        <span class="form-radio-sign">Tidak Normal</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>Inspeksi Visual Asam Asetat
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <label class="form-radio-label">
                                                        <input class="form-radio-input" type="radio" name="iva" value="1" <?php if ($data->iva == 1) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> required>
                                                        <span class="form-radio-sign">Positif</span>
                                                    </label>
                                                    <label class="form-radio-label ml-3">
                                                        <input class="form-radio-input" type="radio" name="iva" <?php if ($data->iva == 0) {
                                                                                                                    echo "checked";
                                                                                                                } ?> value="0">
                                                        <span class="form-radio-sign">Negatif</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>Kadar Alkohol Pernafasan</label>
                                                </div>
                                                <div class="col">
                                                    <label class="form-radio-label">
                                                        <input class="form-radio-input" type="radio" name="kadar_alkohol" <?php if ($data->kadar_alkohol == 1) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="1" required>
                                                        <span class="form-radio-sign">Positif</span>
                                                    </label>
                                                    <label class="form-radio-label ml-3">
                                                        <input class="form-radio-input" type="radio" name="kadar_alkohol" <?php if ($data->kadar_alkohol == 0) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="0">
                                                        <span class="form-radio-sign">Negatif</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>Tes Amfetamin Urin</label>
                                                </div>
                                                <div class="col">
                                                    <label class="form-radio-label">
                                                        <input class="form-radio-input" type="radio" name="tes_amfetamin" <?php if ($data->tes_amfetamin == 1) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="1" required>
                                                        <span class="form-radio-sign">Positif</span>
                                                    </label>
                                                    <label class="form-radio-label ml-3">
                                                        <input class="form-radio-input" type="radio" name="tes_amfetamin" <?php if ($data->tes_amfetamin == 0) {
                                                                                                                                echo "checked";
                                                                                                                            } ?> value="0">
                                                        <span class="form-radio-sign">Negatif</span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Edit Hasil Data Akhir
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Masalah yang Ditemukan</label>
                                                <textarea type="text" class="form-control" id="masalah_yang_ditemukan" name="masalah_yang_ditemukan" placeholder="Masalah yang ditemukan.." required><?= $data->masalah_yang_ditemukan ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Saran dan Tindak Lanjut...</label>
                                                <textarea type="text" class="form-control" id="saran" name="saran" placeholder="Saran dan Tindak Lanjut..." required><?= $data->saran ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Rujuk ke</label>
                                                <input type="text" class="form-control" id="rujukan" name="rujukan" placeholder="jika tidak ada isi - " value="<?= $data->rujukan ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function antropometri() {
        total();
        lingkar();
    }

    function cekKesehatan() {
        tekananDarah();
        guladarah();
        koles();
        asamurat();
        respirasi();
        benjolan();
    }

    function benjolan() {
        var jk = document.getElementById('jk').value
        if (jk == "perempuan") {
            $("#benjolan").show().attr("required", "true");
        } else {
            $("#benjolan").hide();
        }
    }

    function total() {
        var h6 = document.getElementById("keterangan");
        var jk = document.getElementById('jk').value
        var bb = parseFloat(document.getElementById('bb').value);
        var bt = parseFloat(document.getElementById('bt').value);

        var hasil = bb / ((bt / 100) * (bt / 100));

        document.getElementById('imt').value = hasil;
        if (jk == 'laki-laki') {
            if (hasil < 18) {
                document.getElementsByTagName("h6")[0].innerHTML = "Kurus";
                h6.classList.remove("text-success", "text-warning");
                h6.classList.add("text-danger");
            } else if (hasil >= 18 && hasil <= 25) {
                document.getElementsByTagName("h6")[0].innerHTML = "Normal";
                h6.classList.remove("text-danger", "text-warning");
                h6.classList.add("text-success");
            } else if (hasil >= 26 && hasil <= 27) {
                document.getElementsByTagName("h6")[0].innerHTML = "Kegemukan";
                h6.classList.remove("text-success", "text-danger");
                h6.classList.add("text-warning");
            } else if (hasil >= 28) {
                document.getElementsByTagName("h6")[0].innerHTML = "Obesitas";
                h6.classList.remove("text-success", "text-warning");
                h6.classList.add("text-danger");
            }
        } else if ("perempuan") {
            if (hasil < 17) {
                document.getElementsByTagName("h6")[0].innerHTML = "Kurus";
                h6.classList.remove("text-success", "text-warning");
                h6.classList.add("text-danger");
            } else if (hasil >= 17 && hasil <= 23) {
                document.getElementsByTagName("h6")[0].innerHTML = "Normal";
                h6.classList.remove("text-danger", "text-warning");
                h6.classList.add("text-success");
            } else if (hasil >= 24 && hasil <= 27) {
                document.getElementsByTagName("h6")[0].innerHTML = "Kegemukan";
                h6.classList.remove("text-success", "text-danger");
                h6.classList.add("text-warning");
            } else if (hasil >= 27) {
                document.getElementsByTagName("h6")[0].innerHTML = "Obesitas";
                h6.classList.remove("text-success", "text-warning");
                h6.classList.add("text-danger");
            }
        }
    }

    function lingkar() {

        var lb = parseFloat(document.getElementById('lp').value);
        var jk = document.getElementById('jk').value
        var h61 = document.getElementById("ketlp");

        if (jk == 'laki-laki') {
            if (lb <= 90) {
                document.getElementsByTagName("h6")[1].innerHTML = "Ideal";
                h61.classList.remove("text-danger");
                h61.classList.add("text-success");
            } else {
                document.getElementsByTagName("h6")[1].innerHTML = "kurang Ideal";
                h61.classList.remove("text-success");
                h61.classList.add("text-danger");
            }
        } else if ("perempuan") {
            if (lb <= 80) {
                document.getElementsByTagName("h6")[1].innerHTML = "Ideal";
                h61.classList.remove("text-danger");
                h61.classList.add("text-success");
            } else {
                document.getElementsByTagName("h6")[1].innerHTML = "kurang Ideal";
                h61.classList.remove("text-success");
                h61.classList.add("text-danger");
            }
        }

    }

    function tekananDarah() {
        var h61 = document.getElementById("kettd");
        var sistole = parseFloat(document.getElementById('sistole').value);
        var diastole = parseFloat(document.getElementById('diastole').value);
        document.getElementById('td').value = sistole + "/" + diastole;

        if (sistole <= 120 && diastole <= 80) {
            document.getElementsByTagName("h6")[2].innerHTML = "normal";
            h61.classList.remove("text-danger", "text-warning");
            h61.classList.add("text-success");
        } else if (sistole >= 121 && sistole <= 139 || diastole >= 81 && diastole <= 90) {
            document.getElementsByTagName("h6")[2].innerHTML = "Prehipertensi";
            h61.classList.remove("text-danger", "text-success");
            h61.classList.add("text-warning");
        } else if (sistole >= 140 && sistole <= 159 || diastole >= 91 && diastole <= 99) {
            document.getElementsByTagName("h6")[2].innerHTML = "Hipertensi I";
            h61.classList.remove("text-success", "text-warning");
            h61.classList.add("text-danger");
        } else if (sistole >= 160 || diastole >= 100) {
            document.getElementsByTagName("h6")[2].innerHTML = "Hipertensi II";
            h61.classList.remove("text-success", "text-warning");
            h61.classList.add("text-danger");
        }
    }

    function guladarah() {

        var gd = document.getElementById("gulaDarah");
        var selectedGd = gd.options[gd.selectedIndex].value;
        var h63 = document.getElementById("ketGd");
        var isiGd = parseFloat(document.getElementById('isiGd').value);

        if (selectedGd == "gds") {
            if (isiGd <= 199) {
                document.getElementsByTagName("h6")[3].innerHTML = "Normal";
                h63.classList.remove("text-danger");
                h63.classList.add("text-success");
            } else if (isiGd >= 200) {
                document.getElementsByTagName("h6")[3].innerHTML = "Diabetes";
                h63.classList.remove("text-success");
                h63.classList.add("text-danger");
            }
        } else if (selectedGd == "gdp") {
            if (isiGd <= 107) {
                document.getElementsByTagName("h6")[3].innerHTML = "Normal";
                h63.classList.remove("text-warning", "text-danger");
                h63.classList.add("text-success");
            } else if (isiGd >= 108 && isiGd <= 125) {
                document.getElementsByTagName("h6")[3].innerHTML = "Prediabetes";
                h63.classList.remove("text-success", "text-danger");
                h63.classList.add("text-warning");
            } else if (isiGd >= 126) {
                document.getElementsByTagName("h6")[3].innerHTML = "Diabetes";
                h63.classList.remove("text-warning", "text-success");
                h63.classList.add("text-danger");
            }
        }
    }

    function koles() {
        var h64 = document.getElementById("ketkt");
        var kt = parseFloat(document.getElementById('kt').value);

        if (kt <= 170) {
            document.getElementsByTagName("h6")[4].innerHTML = "Normal";
            h64.classList.remove("text-danger", "text-warning");
            h64.classList.add("text-success");
        } else if (kt >= 171 && kt <= 199) {
            document.getElementsByTagName("h6")[4].innerHTML = "Waspada";
            h64.classList.remove("text-danger", "text success");
            h64.classList.add("text-warning");
        } else if (kt >= 200) {
            document.getElementsByTagName("h6")[4].innerHTML = "Bahaya";
            h64.classList.remove("text-warning", "text success");
            h64.classList.add("text-danger");
        }
    }

    function asamurat() {
        var h65 = document.getElementById("ketau");
        var au = parseFloat(document.getElementById('au').value);
        var jk = document.getElementById('jk').value

        if (jk == "laki-laki") {
            if (au > 0 && au <= 3) {
                document.getElementsByTagName("h6")[3].innerHTML = "Tinggi";
                h65.classList.remove("text-success");
                h65.classList.add("text-danger");

            } else if (au >= 4 && au <= 7) {
                document.getElementsByTagName("h6")[3].innerHTML = "Normal";
                h65.classList.remove("text-danger");
                h65.classList.add("text-success");
            } else if (au > 7) {
                document.getElementsByTagName("h6")[3].innerHTML = "Tinggi";
                h65.classList.remove("text-success");
                h65.classList.add("text-danger");

            }
        } else if (jk == "perempuan") {
            if (au > 0 && au <= 2) {
                document.getElementsByTagName("h6")[3].innerHTML = "Tinggi";
                h65.classList.remove("text-success");
                h65.classList.add("text-danger");

            } else if (au >= 3 && au <= 6) {
                document.getElementsByTagName("h6")[3].innerHTML = "Normal";
                h65.classList.remove("text-danger");
                h65.classList.add("text-success");
            } else if (au > 6) {
                document.getElementsByTagName("h6")[3].innerHTML = "Tinggi";
                h65.classList.remove("text-success");
            }
        }
    }

    function respirasi() {
        var h66 = document.getElementById("ketres");
        var eks = parseFloat(document.getElementById('eks').value);
        var jk = document.getElementById('jk').value

        if (jk == "laki-laki") {
            if (eks >= 500 && eks <= 700) {
                document.getElementsByTagName("h6")[6].innerHTML = "Normal";
                h66.classList.remove("text-danger");
                h66.classList.add("text-success");
            } else {
                document.getElementsByTagName("h6")[6].innerHTML = "Tidak Normal";
                h66.classList.remove("text-success");
                h66.classList.add("text-danger");
            }
        } else if (jk == "perempuan") {
            if (eks >= 280 && eks <= 500) {
                document.getElementsByTagName("h6")[6].innerHTML = "Normal";
                h66.classList.remove("text-danger");
                h66.classList.add("text-success");
            } else {
                document.getElementsByTagName("h6")[6].innerHTML = "Tidak Normal";
                h66.classList.remove("text-success");
                h66.classList.add("text-danger");
            }
        }
    }
</script>
<?= $this->endSection(); ?>