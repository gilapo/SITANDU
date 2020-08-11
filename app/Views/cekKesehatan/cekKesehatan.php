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
                        <input type="hidden" id="umur" name="umur" value="">
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
                                    <input type="text" class="form-control" id="sistole" placeholder="Sistole" onchange="tekananDarah()">
                                    <h6 class="mt-1 ml-1 " id="kets"></h6>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="diastole" placeholder="Diastole" onchange="tekananDarah()">
                                    <h6 class="mt-1 ml-1 " id="ketd"></h6>
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
                                    <select class="form-control" id="gulaDarah">
                                        <option value="1">Gula Darah Sewaktu</option>
                                        <option value="2">Gula Darah Puasa</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="isiGd" placeholder="Gula Darah" onchange="guladarah()">
                                    <h6 class="mt-1 ml-1 " id="ketGd"></h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kolesterol Total</label>
                            <input type="text" class="form-control" id="kt" placeholder="Kolesterol Total" onchange="kolesterol()">
                            <h6 class="mt-1 ml-1 " id="ketkt"></h6>
                        </div>
                        <div class="form-group">
                            <label for="au">Asam Urat</label>
                            <input type="text" class="form-control" id="au" placeholder="asam urat" onchange="asamurat()">
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
                                    <input type="text" class="form-control" id="eks" placeholder="Ekspirasi" onchange="respirasi()">
                                    <h6 class="mt-1 ml-1 " id="ketres"></h6>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="jk" placeholder="Jenis Kelamin" value="perempuan" readonly>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col">
                                <label>Benjolan Aneh Pada Payudara</label>
                            </div>
                            <div class="col">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" name="bp" value="">
                                    <span class="form-radio-sign">Normal</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="bp" value="">
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
                                    <input class="form-radio-input" type="radio" name="iv" value="">
                                    <span class="form-radio-sign">Positif</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="iv" value="">
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
                                    <input class="form-radio-input" type="radio" name="kl" value="">
                                    <span class="form-radio-sign">Positif</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="kl" value="">
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
                                    <input class="form-radio-input" type="radio" name="ta" value="">
                                    <span class="form-radio-sign">Positif</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="ta" value="">
                                    <span class="form-radio-sign">Negatif</span>
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

<script>
    function tekananDarah() {
        var h61 = document.getElementById("kets");
        var h62 = document.getElementById("ketd");
        var sistole = parseFloat(document.getElementById('sistole').value);
        var diastole = parseFloat(document.getElementById('diastole').value);

        if (sistole < 120) {
            document.getElementsByTagName("h6")[0].innerHTML = "normal";
            h61.classList.remove("text-danger", "text-warning");
            h61.classList.add("text-success");
        } else if (sistole >= 121 && sistole <= 139) {
            document.getElementsByTagName("h6")[0].innerHTML = "Prehipertensi";
            h61.classList.remove("text-danger", "text-success");
            h61.classList.add("text-warning");
        } else if (sistole >= 140 && sistole <= 159) {
            document.getElementsByTagName("h6")[0].innerHTML = "Hipertensi I";
            h61.classList.remove("text-success", "text-warning");
            h61.classList.add("text-danger");
        } else if (sistole >= 160) {
            document.getElementsByTagName("h6")[0].innerHTML = "Hipertensi II";
            h61.classList.remove("text-success", "text-warning");
            h61.classList.add("text-danger");
        }

        if (diastole < 80) {
            document.getElementsByTagName("h6")[1].innerHTML = "normal";
            h62.classList.remove("text-danger", "text-warning");
            h62.classList.add("text-success");
        } else if (diastole >= 81 && diastole <= 89) {
            document.getElementsByTagName("h6")[1].innerHTML = "Prehipertensi";
            h62.classList.remove("text-danger", "text-success");
            h62.classList.add("text-warning");
        } else if (diastole >= 90 && diastole <= 99) {
            document.getElementsByTagName("h6")[1].innerHTML = "Hipertensi I";
            h62.classList.remove("text-success", "text-warning");
            h62.classList.add("text-danger");
        } else if (diastole >= 100) {
            document.getElementsByTagName("h6")[1].innerHTML = "Hipertensi II";
            h62.classList.remove("text-success", "text-warning");
            h62.classList.add("text-danger");
        }
    }

    function guladarah() {

        var gd = document.getElementById("gulaDarah");
        var selectedGd = gd.options[gd.selectedIndex].value;
        var h63 = document.getElementById("ketGd");
        var isiGd = parseFloat(document.getElementById('isiGd').value);

        if (selectedGd == "1") {
            if (isiGd <= 199) {
                document.getElementsByTagName("h6")[2].innerHTML = "Normal";
                h63.classList.remove("text-danger");
                h63.classList.add("text-success");
            } else if (isiGd >= 200) {
                document.getElementsByTagName("h6")[2].innerHTML = "Diabetes";
                h63.classList.remove("text-success");
                h63.classList.add("text-danger");
            }
        } else if (selectedGd == "2") {
            if (isiGd <= 107) {
                document.getElementsByTagName("h6")[2].innerHTML = "Normal";
                h63.classList.remove("text-warning", "text-danger");
                h63.classList.add("text-success");
            } else if (isiGd >= 108 && isiGd <= 125) {
                document.getElementsByTagName("h6")[2].innerHTML = "Prediabetes";
                h63.classList.remove("text-success", "text-danger");
                h63.classList.add("text-warning");
            } else if (isiGd >= 126) {
                document.getElementsByTagName("h6")[2].innerHTML = "Diabetes";
                h63.classList.remove("text-warning", "text-success");
                h63.classList.add("text-danger");
            }
        }
    }

    function kolesterol() {
        var kt = parseFloat(document.getElementById('kt').value)
        var h64 = document.getElementById("ketkt");

        if (kt <= 170) {
            document.getElementsByTagName("h6")[3].innerHTML = "Normal";
            h64.classList.remove("text-danger", "text-warning");
            h64.classList.add("text-success");
        } else if (kt >= 171 && kt <= 199) {
            document.getElementsByTagName("h6")[3].innerHTML = "Waspada";
            h64.classList.remove("text-danger", "text success");
            h64.classList.add("text-warning");
        } else if (kt >= 200) {
            document.getElementsByTagName("h6")[3].innerHTML = "Bahaya";
            h64.classList.remove("text-success", "text success");
            h64.classList.add("text-danger");
        }
    }

    function asamurat() {
        var h65 = document.getElementById("ketau");
        var au = parseFloat(document.getElementById('au').value);
        var jk = document.getElementById('jk').value

        if (jk == "laki-laki") {
            if (au > 7) {
                document.getElementsByTagName("h6")[4].innerHTML = "Tinggi";
                h65.classList.remove("text-success");
                h65.classList.add("text-danger");
            } else {
                document.getElementsByTagName("h6")[4].innerHTML = "Normal";
                h65.classList.remove("text-danger");
                h65.classList.add("text-success");
            }
        } else if (jk == "perempuan") {
            if (au > 6) {
                document.getElementsByTagName("h6")[4].innerHTML = "Tinggi";
                h65.classList.remove("text-success");
                h65.classList.add("text-danger");
            } else {
                document.getElementsByTagName("h6")[4].innerHTML = "Normal";
                h65.classList.remove("text-danger");
                h65.classList.add("text-success");
            }
        }
    }

    function respirasi() {
        var h66 = document.getElementById("ketres");
        var eks = parseFloat(document.getElementById('eks').value);
        var jk = document.getElementById('jk').value

        if (jk == "laki-laki") {
            if (eks >= 500 && eks <= 700) {
                document.getElementsByTagName("h6")[5].innerHTML = "Normal";
                h66.classList.remove("text-danger");
                h66.classList.add("text-success");
            } else {
                document.getElementsByTagName("h6")[5].innerHTML = "Tidak Normal";
                h66.classList.remove("text-success");
                h66.classList.add("text-danger");
            }
        } else if (jk == "perempuan") {
            if (eks >= 280 && eks <= 500) {
                document.getElementsByTagName("h6")[5].innerHTML = "Normal";
                h66.classList.remove("text-danger");
                h66.classList.add("text-success");
            } else {
                document.getElementsByTagName("h6")[5].innerHTML = "Tidak Normal";
                h66.classList.remove("text-success");
                h66.classList.add("text-danger");
            }
        }
    }
</script>
<?= $this->endSection(); ?>