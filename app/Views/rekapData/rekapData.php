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
                            <label for="exampleInputEmail1">Masalah yang Ditemukan</label>
                            <textarea type="text" class="form-control" id="exampleInputtext1" placeholder="Masalah yang ditemukan.."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Saran dan Tindak Lanjut...</label>
                            <textarea type="text" class="form-control" id="exampleInputtext1" placeholder="Saran dan Tindak Lanjut..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rujuk ke</label>
                            <input type="text" class="form-control" id="exampleInputtext1" placeholder="jika tidak ada isi - ">
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