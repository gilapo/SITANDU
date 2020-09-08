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
                            <form action="/Register/createUserAct" method="post" enctype="multipart/form-data">
                                <div class="form-label-group ">
                                    <label class="text-white" for="nama">Nama</label>
                                    <input type="text" id="nama_user" name="nama_user" class="form-control" placeholder="nama" required>
                                </div>
                                <div class="form-label-group ">
                                    <label class="text-white" for="username">Username</label>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="username" required>
                                </div>
                                <div class="form-label-group ">
                                    <label class="text-white" for="instansi">Instansi</label>
                                    <input type="text" id="instansi" name="instansi" class="form-control" placeholder="instansi" required>
                                </div>
                                <div class="form-label-group ">
                                    <label class="text-white" for="no_identitas">Nomor Identitas</label>
                                    <input type="text" id="no_identitas" name="no_identitas" class="form-control" placeholder="NIM/NIK/NIY" required>
                                </div>
                                <div class="row">
                                    <div class="form-label-group col">
                                        <label class="text-white" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required autofocus>
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