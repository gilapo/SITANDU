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
                    <form>
                        <div class="form-group row">
                            <div class="col">
                                <label for="exampleInputEmail1">Nomor Antrian</label>
                                <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Nomor Antrian" readonly>
                            </div>
                            <div class="col">
                                <label for="exampleInputtext1">NIK</label>
                                <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="NIK/no.KTP/no.Pasport/NIM" readonly>
                            </div>
                            <div class="col">
                                <label for="exampleInputtext1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="NIK/no.KTP/no.Pasport/NIM" readonly>
                            </div>
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
                                            <input class="form-radio-input" type="radio" name="dm" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="dm" value="">
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
                                            <input class="form-radio-input" type="radio" name="HT" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="HT" value="">
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
                                            <input class="form-radio-input" type="radio" name="Jantung" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Jantung" value="">
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
                                            <input class="form-radio-input" type="radio" name="Stroke" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Stroke" value="">
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
                                            <input class="form-radio-input" type="radio" name="Asma" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Asma" value="">
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
                                            <input class="form-radio-input" type="radio" name="Kanker" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Kanker" value="">
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
                                            <input class="form-radio-input" type="radio" name="Kolesterol" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Kolesterol" value="">
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
                                            <input class="form-radio-input" type="radio" name="Merokok" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Merokok" value="">
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
                                            <input class="form-radio-input" type="radio" name="Sayur" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Sayur" value="">
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
                                            <input class="form-radio-input" type="radio" name="Fisik" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Fisik" value="">
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
                                            <input class="form-radio-input" type="radio" name="Alkohol" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Alkohol" value="">
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
                                            <input class="form-radio-input" type="radio" name="stnm" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="stnm" value="">
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
                                            <input class="form-radio-input" type="radio" name="dm2" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="dm2" value="">
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
                                            <input class="form-radio-input" type="radio" name="HT2" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="HT2" value="">
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
                                            <input class="form-radio-input" type="radio" name="Jantung2" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Jantung2" value="">
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
                                            <input class="form-radio-input" type="radio" name="Stroke2" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Stroke2" value="">
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
                                            <input class="form-radio-input" type="radio" name="Asma2" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Asma2" value="">
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
                                            <input class="form-radio-input" type="radio" name="Kanker2" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Kanker2" value="">
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
                                            <input class="form-radio-input" type="radio" name="Kolesterol2" value="">
                                            <span class="form-radio-sign">Ya</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="Kolesterol2" value="">
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

<?= $this->endSection(); ?>