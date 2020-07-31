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
                    <form>
                        <div class="form-group row">
                            <div class="col">
                                <label for="exampleInputEmail1">Nomor Antrian</label>
                                <input type="text" class="form-control" id="exampleInputtext1" placeholder="Nomor Antrian" readonly>
                            </div>
                            <div class="col">
                                <label for="exampleInputtext1">NIK</label>
                                <input type="text" class="form-control" id="exampleInputtext1" placeholder="NIK/no.KTP/no.Pasport/NIM" readonly>
                            </div>
                            <div class="col">
                                <label for="exampleInputtext1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputtext1" placeholder="NIK/no.KTP/no.Pasport/NIM" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Tekanan Darah</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="Sistole">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="Diastole">
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
                                    <select class="form-control">
                                        <option>Gula Darah Sewaktu</option>
                                        <option>Gula Darah Puasa</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="Gula Darah">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kolesterol Total</label>
                            <input type="text" class="form-control" id="exampleInputtext1" placeholder="Kolesterol Total">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Asam Urat</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="Gula darah">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="keterangan" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Aus Puncak Ekspirasi</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="Ekspirasi">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="Jenis Kelamin" readonly>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="exampleInputEmail1">Benjolan Pada Payudara</label>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Normal</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Tidak Normal</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3">
                                <label for="exampleInputEmail1">Inspeksi Visual Asam Asetat</label>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Negatif</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Positif</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="exampleInputEmail1">Kadar Alkohol Pernafasan</label>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Negatif</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Positif</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="exampleInputEmail1">Tes Amfetamin Urin</label>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Negatif</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Positif</label>
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