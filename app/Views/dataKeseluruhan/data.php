<?= $this->extend('templates/superAdminLayout'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="row row-cols-1 row-cols-md-3">
                <?php foreach ($pasien as $data) : ?>
                    <div class="col mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b><?= $data->nama; ?></b></h5>
                                <h6><?= $data->identitas; ?></h6>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="admin/detil/<?= $data->id; ?>">selengkapnya...</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>