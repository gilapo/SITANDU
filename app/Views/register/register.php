<?= $this->extend('templates/authLayout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid ">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image-register"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <h1 class="text-white mb-4">Daftar Akun</h1>
                            <form>
                                <div class="row">
                                    <div class="form-label-group col">
                                        <label class="text-white" for="NamaDepan">Nama Depan</label>
                                        <input type="text" id="NamaDepan" class="form-control" placeholder="Nama Depan" required autofocus>
                                    </div>
                                    <div class="form-label-group col">
                                        <label class="text-white" for="namaBelakang">Nama Belakang</label>
                                        <input type="text" id="namaBelakang" class="form-control" placeholder="Nama Belakang" required>
                                    </div>
                                </div>
                                <div class="form-label-group ">
                                    <label class="text-white" for="instansi">Instansi</label>
                                    <input type="text" id="instansi" class="form-control" placeholder="instansi" required>
                                </div>
                                <div class="form-label-group ">
                                    <label class="text-white" for="nim">Nomor Identitas</label>
                                    <input type="text" id="nim" class="form-control" placeholder="NIM/NIK/NIY" required>
                                </div>
                                <div class="form-label-group ">
                                    <label class="text-white" for="email">Alamat Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="row">
                                    <div class="form-label-group col">
                                        <label class="text-white" for="pass">Password</label>
                                        <input type="password" id="pass" class="form-control" placeholder="Password" required autofocus>
                                    </div>
                                    <div class="form-label-group col">
                                        <label class="text-white" for="pass2">Konfirmasi</label>
                                        <input type="password" id="pass2" class="form-control" placeholder="Konfirmasi" required>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 mt-5" type="submit">Daftar</button>
                                <div class="text-center">
                                    <p class="mt-2">Sudah punya akun? <a href="/Login">Masuk disini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>