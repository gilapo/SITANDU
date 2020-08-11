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
                                <label>Berat Badan (Kg)</label>
                                <input type="number" class="form-control" id="bb" placeholder="Berat Badan" value="" onchange="total()">
                            </div>
                            <div class="col">
                                <label>Tinggi Badan (m)</label>
                                <input type="number" class="form-control" id="bt" placeholder="Tinggi Badan" value="" onchange="total()">
                            </div>
                            <div class="col">
                                <label>IMT</label>
                                <input type="text" class="form-control" id="imt" value="" readonly>
                                <h6 class="mt-1 ml-1 " id="keterangan"></h6>
                            </div>
                            <hr>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="lp">Lingkar Perut</label>
                                <input type="number" class="form-control" id="lp" aria-describedby="textHelp" placeholder="Lingkar Perut" onchange="lingkar()">
                                <h6 class="mt-1 ml-1 " id="ketlp"></h6>
                            </div>
                            <div class="col">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jk" aria-describedby="textHelp" value="laki-laki" readonly>
                            </div>
                            <hr>
                        </div>
                        <hr>
                        <div class="form-group">
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
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function total() {
        var h6 = document.getElementById("keterangan");
        var jk = document.getElementById('jk').value
        var bb = parseFloat(document.getElementById('bb').value);
        var bt = parseFloat(document.getElementById('bt').value);

        var hasil = bb / (bt * bt);

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
</script>
<?= $this->endSection(); ?>