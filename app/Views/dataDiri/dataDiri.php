<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Diri</h4>
            </div>
            <!-- isi konten disini -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-2 fw-mediumbold">Form Data Diri</h5>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Id Identitas</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK/no.KTP/no.Pasport/NIM">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleInputEmail1">Nama Depan</label>
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Nama Belakang</label>
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Program Studi</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Program Studi">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="exampleInputEmail1">Usia</label>
                                    <input type="Number" class="form-control" placeholder="Usia">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
            <!-- akhir konten disini -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>