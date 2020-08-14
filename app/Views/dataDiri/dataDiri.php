<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Data Diri</div>
                </div>
                <div class="card-body">
                    <form action="/Admin/createDataDiriAct" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="identitas">Nomor Identitas</label>
                            <input type="number" class="form-control" id="identitas" name="identitas" placeholder="NIK/no.KTP/no.Pasport/NIM">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" aria-describedby="emailHelp" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="usia">Usia</label>
                                    <input type="Number" class="form-control" id="usia" name="usia" placeholder="Usia">
                                </div>
                                <div class="col">
                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jeniskelamin1" name="jeniskelamin" class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="jeniskelamin1">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="jeniskelamin2" name="jeniskelamin" class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="jeniskelamin2">Perempuan</label>
                                        </div>
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