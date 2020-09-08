<?= $this->extend('templates/authLayout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid ">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image-login"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <img class="mb-4" src="<?= base_url(); ?>/assets/img/iconHome.png" alt="" width="300">
                            <form action="/Login/loginAct" method="post" enctype="multipart/form-data">
                                <div class="form-label-group">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="username" required autofocus>
                                </div>

                                <div class="form-label-group mt-3">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 mt-2" type="submit">Sign in</button>
                                <div class="text-center">
                                    <p class="mt-2">Belum punya akun? <a href="/Register">daftar disini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>