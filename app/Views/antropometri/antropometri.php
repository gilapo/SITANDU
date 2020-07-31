<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>

<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Antropometri</div>
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
                                <label for="exampleInputEmail1">Berat Badan</label>
                                <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Berat Badan">
                            </div>
                            <div class="col">
                                <label for="exampleInputtext1">Tinggi Badan</label>
                                <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Tinggi Badan">
                            </div>
                            <div class="col">
                                <label for="exampleInputtext1">IMT</label>
                                <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" readonly>
                            </div>
                            <hr>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="exampleInputEmail1">Lingkar Perut</label>
                                <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Berat Badan">
                            </div>
                            <div class="col">
                                <label for="exampleInputtext1">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" readonly>
                            </div>
                            <hr>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="fw-bold">Faktor Resiko Prilaku</label>
                            <hr>
                        </div>
                        <div class="form-group row">
                            <div class="col-5">
                                <label for="exampleInputEmail1">Merokok</label>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Ya</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Tidak</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-5">
                                <label for="s">Sayur dan Buah <br> kurang dari 5 per hari</label> </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="q" name="q" class="custom-control-input">
                                    <label class="custom-control-label" for="q">Ya</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="w" name="q" class="custom-control-input">
                                    <label class="custom-control-label" for="w">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-5">
                                <label for="exampleInputEmail1">Kurang aktivitas Fisik</label>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Ya</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-5">
                                <label for="exampleInputEmail1">Konsumsi Alkohol</label>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Ya</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Tidak</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-5">
                                <label for="exampleInputEmail1">Susah Tidur & <br> Nafsu Makan Menurun</label>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Ya</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Tidak</label>
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