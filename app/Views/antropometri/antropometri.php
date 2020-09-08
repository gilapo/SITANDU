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
                    <form action="/Admin/createAntropometriAct" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col">
                                <label for="nik">Nomor Identitas</label>
                                <input type="text" class="form-control" id="identitas" aria-describedby="textHelp" placeholder="NIK/no.KTP/no.Pasport/NIM" readonly required>
                            </div>
                            <div class="col">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" aria-describedby="textHelp" placeholder="Nama Pasien" readonly required>
                            </div>
                            <input type="text" id="id" name="id" aria-describedby="textHelp" hidden>
                            <input type="text" id="id_detail_kesehatan" name="id_detail_kesehatan" aria-describedby="textHelp" hidden>
                            <input type="text" id="status_meja_3" name="status_meja_3" aria-describedby="textHelp" value="1" hidden>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col">
                                <label>Berat Badan (Kg)</label>
                                <input type="number" class="form-control" id="bb" name="bb" placeholder="Berat Badan" value="" oninput="total()" required>
                            </div>
                            <div class="col">
                                <label>Tinggi Badan (cm)</label>
                                <input type="text" class="form-control" id="bt" name="tb" placeholder="Tinggi Badan" value="" oninput="total()" required>
                            </div>
                            <div class="col">
                                <label>IMT</label>
                                <input type="text" class="form-control" id="imt" name="imt" value="" readonly required>
                                <h6 class="mt-1 ml-1 " id="keterangan"></h6>
                            </div>
                            <hr>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="lp">Lingkar Perut</label>
                                <input type="number" class="form-control" id="lp" name="lp" aria-describedby="textHelp" placeholder="Lingkar Perut" oninput="lingkar()" required>
                                <h6 class="mt-1 ml-1 " id="ketlp"></h6>
                            </div>
                            <div class="col">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jk" name="ape" aria-describedby="textHelp" placeholder="Jenis Kelamin" readonly required>
                            </div>
                            <hr>
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
                                    <th>Tanggal Input</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $data) : if ($data->status_meja_3 == 0) {
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
        });
    });

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
</script>
<?= $this->endSection(); ?>