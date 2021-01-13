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
                    <form action="<?= base_url(); ?>/Admin/createCekKesehatanAct" method="post" enctype="multipart/form-data" required id="myForm">
                        <div class="form-group row">
                            <div class="col">
                                <label for="nik">Nomor Identitas</label>
                                <input type="text" class="form-control" id="identitas" aria-describedby="textHelp" placeholder="NIK/no.KTP/no.Pasport/NIM" readonly />
                            </div>
                            <div class="col">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="fname" id="nama" aria-describedby="textHelp" placeholder="Nama Pasien" readonly />
                            </div>
                            <input type="text" id="id" name="id" aria-describedby="textHelp" hidden>
                            <input type="text" id="id_detail_kesehatan" name="id_detail_kesehatan" aria-describedby="textHelp" hidden>
                            <input type="text" id="status_meja_4" name="status_meja_4" aria-describedby="textHelp" value="1" hidden>
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
                                    <input type="text" class="form-control" id="sistole" name="sistole" placeholder="Sistole" oninput="tekananDarah()" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="diastole" name="diastole" placeholder="Diastole" oninput="tekananDarah()" required>
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
                                    <select class="form-control" id="gulaDarah" name="jenis_gd" required>
                                        <option value="" disabled selected hidden>Pilih Jenis Gula Darah...</option>
                                        <option value="gds">Gula Darah Sewaktu</option>
                                        <option value="gdp">Gula Darah Puasa</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="isiGd" name="gds" placeholder="Gula Darah" oninput="guladarah()" required>
                                    <h6 class="mt-1 ml-1 " id="ketGd"></h6>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kolesterol Total</label>
                            <input type="text" class="form-control" id="kt" name="kolesterol" placeholder="Kolesterol Total" oninput="koles()" required>
                            <h6 class="mt-1 ml-1 " id="ketkt"></h6>
                        </div>
                        <div class="form-group">
                            <label for="au">Asam Urat</label>
                            <input type="text" class="form-control" id="au" name="asam_urat" placeholder="asam urat" oninput="asamurat()" required>
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
                                    <input type="text" class="form-control" id="eks" name="ekspirasi" placeholder="Ekspirasi" oninput="respirasi()" required>
                                    <h6 class="mt-1 ml-1 " id="ketres"></h6>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" id="jk" placeholder="Jenis Kelamin" readonly required>
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
                                    <input class="form-radio-input" type="radio" name="benjolan_pada_payudara" value="1">
                                    <span class="form-radio-sign">Ditemukan</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="benjolan_pada_payudara" value="0">
                                    <span class="form-radio-sign">Tidak Ditemukan</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="benjolan_pada_payudara" value="2">
                                    <span class="form-radio-sign">Tidak Terkaji</span>
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
                                    <input class="form-radio-input" type="radio" name="iva" value="1" required>
                                    <span class="form-radio-sign">Positif</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="iva" value="0">
                                    <span class="form-radio-sign">Negatif</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="iva" value="2">
                                    <span class="form-radio-sign">Tidak Terkaji</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label>Kadar Alkohol Pernafasan</label>
                            </div>
                            <div class="col">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" name="kadar_alkohol" value="1" required>
                                    <span class="form-radio-sign">Positif</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="kadar_alkohol" value="0">
                                    <span class="form-radio-sign">Negatif</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="kadar_alkohol" value="2">
                                    <span class="form-radio-sign">Tidak Terkaji</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <label>Tes Amfetamin Urin</label>
                            </div>
                            <div class="col">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" name="tes_amfetamin" value="1" required>
                                    <span class="form-radio-sign">Positif</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="tes_amfetamin" value="0">
                                    <span class="form-radio-sign">Negatif</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="tes_amfetamin" value="2">
                                    <span class="form-radio-sign">Tidak Terkaji</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" value="Submit" class="btn btn-primary">Kirim</button>
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
                                    <th>Tanggal Input</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $data) : if ($data->status_meja_4 == 0) {
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
                                            <td><?= $data->tanggal_input; ?></td>
                                            <td>
                                                <button class="btn btn-primary btn-round" id="pilih" data-id="<?= $data->id; ?>" data-jk="<?php if ($data->jeniskelamin == 1) {
                                                                                                                                                echo "laki-laki";
                                                                                                                                            } else {
                                                                                                                                                echo "perempuan";
                                                                                                                                            } ?>" data-identitas="<?= $data->identitas; ?>" data-nama="<?= $data->nama; ?>">Pilih</button>
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
        $('#dataTable').DataTable({
            "order": [
                [4, "desc"]
            ],
        });
        $(document).on('click', '#pilih', function(e) {
            document.getElementById("identitas").value = $(this).attr('data-identitas');
            document.getElementById("nama").value = $(this).attr('data-nama');
            document.getElementById("id").value = $(this).attr('data-id');
            document.getElementById("jk").value = $(this).attr('data-jk');
            document.getElementById("id_detail_kesehatan").value = $(this).attr('data-id');
            $('#dataPasien').modal('hide');
            var jk = document.getElementById('jk').value
            if (jk == "perempuan") {
                $("#benjolan").show().attr("required", "true");
            } else {
                $("#benjolan").hide();
            }
        });

    });

    $("#myForm").submit(function() {
        // Get the Login Name value and trim it
        var ident1 = $('#identitas').val();
        var ident2 = document.getElementById("identitas");

        var nama1 = $('#nama').val();
        var nama2 = document.getElementById("nama");

        // Check if empty of not
        if (ident1.length < 1 && nama1.length < 1) {
            ident2.classList.add("text-danger");
            nama2.classList.add("text-danger");
            return false;
        }
    });

    function tekananDarah() {
        var h61 = document.getElementById("kettd");
        var sistole = parseFloat(document.getElementById('sistole').value);
        var diastole = parseFloat(document.getElementById('diastole').value);
        document.getElementById('td').value = sistole + "/" + diastole;

        if (sistole < 130 && diastole < 80) {
            document.getElementsByTagName("h6")[0].innerHTML = "normal";
            h61.classList.remove("text-danger", "text-warning");
            h61.classList.add("text-success");
        } else if (sistole >= 130 && sistole <= 139 || diastole >= 80 && diastole <= 89) {
            document.getElementsByTagName("h6")[0].innerHTML = "Prehipertensi";
            h61.classList.remove("text-danger", "text-success");
            h61.classList.add("text-warning");
        } else if (sistole >= 140 && diastole >= 90) {
            document.getElementsByTagName("h6")[0].innerHTML = "Hipertensi";
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
            if (isiGd >= 80 && isiGd <= 144) {
                document.getElementsByTagName("h6")[1].innerHTML = "Rendah";
                h63.classList.remove("text-danger");
                h63.classList.remove("text-warning");
                h63.classList.add("text-success");
            } else if (isiGd >= 145 && isiGd <= 199) {
                document.getElementsByTagName("h6")[1].innerHTML = "Waspada";
                h63.classList.remove("text-success");
                h63.classList.remove("text-danger");
                h63.classList.add("text-warning");
            } else if (isiGd >= 200) {
                document.getElementsByTagName("h6")[1].innerHTML = "Tinggi";
                h63.classList.remove("text-success");
                h63.classList.remove("text-warning");
                h63.classList.add("text-danger");
            }
        } else if (selectedGd == "gdp") {
            if (isiGd >= 80 && isiGd <= 120) {
                document.getElementsByTagName("h6")[1].innerHTML = "Rendah";
                h63.classList.remove("text-danger");
                h63.classList.remove("text-warning");
                h63.classList.add("text-success");
            } else if (isiGd >= 121 && isiGd <= 175) {
                document.getElementsByTagName("h6")[1].innerHTML = "Waspada";
                h63.classList.remove("text-success");
                h63.classList.remove("text-danger");
                h63.classList.add("text-warning");
            } else if (isiGd >= 176) {
                document.getElementsByTagName("h6")[1].innerHTML = "Tinggi";
                h63.classList.remove("text-success");
                h63.classList.remove("text-warning");
                h63.classList.add("text-danger");
            }
        }
    }

    function koles() {
        var h64 = document.getElementById("ketkt");
        var kt = parseFloat(document.getElementById('kt').value);

        if (kt < 150) {
            document.getElementsByTagName("h6")[2].innerHTML = "Normal";
            h64.classList.remove("text-danger", "text-warning");
            h64.classList.add("text-success");
        } else if (kt >= 150 && kt <= 189) {
            document.getElementsByTagName("h6")[2].innerHTML = "Waspada";
            h64.classList.remove("text-danger", "text-success");
            h64.classList.add("text-warning");
        } else if (kt >= 190) {
            document.getElementsByTagName("h6")[2].innerHTML = "Bahaya";
            h64.classList.remove("text-warning", "text-success");
            h64.classList.add("text-danger");
        }
    }

    function asamurat() {
        var h65 = document.getElementById("ketau");
        var au = parseFloat(document.getElementById('au').value);
        var jk = document.getElementById('jk').value

        if (jk == "laki-laki") {
            if (au > 0 && au <= 3) {
                document.getElementsByTagName("h6")[3].innerHTML = "Rendah";
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
                document.getElementsByTagName("h6")[3].innerHTML = "Rendah";
                h65.classList.remove("text-success");
                h65.classList.add("text-danger");

            } else if (au >= 3 && au <= 6) {
                document.getElementsByTagName("h6")[3].innerHTML = "Normal";
                h65.classList.remove("text-danger");
                h65.classList.add("text-success");
            } else if (au > 6) {
                document.getElementsByTagName("h6")[3].innerHTML = "Tinggi";
                h65.classList.remove("text-success");
                h65.classList.add("text-danger");
            }
        }
    }

    function respirasi() {
        var h66 = document.getElementById("ketres");
        var eks = parseFloat(document.getElementById('eks').value);
        var jk = document.getElementById('jk').value

        if (jk == "laki-laki") {
            if (eks >= 500 && eks <= 700) {
                document.getElementsByTagName("h6")[4].innerHTML = "Normal";
                h66.classList.remove("text-danger");
                h66.classList.add("text-success");
            } else if (eks == 0) {
                document.getElementsByTagName("h6")[4].innerHTML = "Tidak Ada";
                h66.classList.remove("text-danger");
                h66.classList.remove("text-success");
            } else {
                document.getElementsByTagName("h6")[4].innerHTML = "Tidak Normal";
                h66.classList.remove("text-success");
                h66.classList.add("text-danger");
            }
        } else if (jk == "perempuan") {
            if (eks >= 280 && eks <= 500) {
                document.getElementsByTagName("h6")[4].innerHTML = "Normal";
                h66.classList.remove("text-danger");
                h66.classList.add("text-success");
            } else if (eks == 0) {
                document.getElementsByTagName("h6")[4].innerHTML = "Tidak Ada";
                h66.classList.remove("text-danger");
                h66.classList.remove("text-success");
            } else {
                document.getElementsByTagName("h6")[4].innerHTML = "Tidak Normal";
                h66.classList.remove("text-success");
                h66.classList.add("text-danger");
            }
        }
    }
</script>
<?= $this->endSection(); ?>