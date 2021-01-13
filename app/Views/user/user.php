<?= $this->extend('templates/superAdminLayout'); ?>
<?= $this->section('content'); ?>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">User</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama User</th>
                                    <th>Username</th>
                                    <th>Instansi</th>
                                    <th>No Identitas</th>
                                    <th>Level User</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $data) : {
                                ?>
                                        <tr>
                                            <td><?= $data->nama_user; ?></td>
                                            <td><?= $data->username; ?></td>
                                            <td><?= $data->instansi; ?></td>
                                            <td><?= $data->no_identitas; ?></td>
                                            <td><?php if ($data->id_level == 1) {
                                                    echo "Super Admin";
                                                } else if ($data->id_level == 2) {
                                                    echo "Admin";
                                                } else if ($data->id_level == 3) {
                                                    echo "Belum Aktif";
                                                } ?></td>
                                            <td>
                                                <button type="button" id="editbtn<?= $data->id_user; ?>" name="editbtn" class="btn btn-primary btn-border btn-round" data-toggle="modal" data-target="#editmodal<?= $data->id_user; ?>"> <i class="fas fa-edit"> </i> </button>
                                                <div class="modal fade" id="editmodal<?= $data->id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url(); ?>/Register/updateUserAct" method="post" enctype="multipart/form-data">
                                                                    <div class="form-group">
                                                                        <label for="jenis_surat">Role User</label>
                                                                        <select class="form-control" id="id_level" name="id_level" value="<?php if ($data->id_level == 1) {
                                                                                                                                                echo "Super Admin";
                                                                                                                                            } else if ($data->id_level == 2) {
                                                                                                                                                echo "Admin";
                                                                                                                                            } else if ($data->id_level == 3) {
                                                                                                                                                echo "Belum Aktif";
                                                                                                                                            } ?>">
                                                                            <option value="1">Super Admin</option>
                                                                            <option value="2">Admin</option>
                                                                            <option value="3">Belum Aktif</option>
                                                                        </select>
                                                                        <div class="form-group">
                                                                            <input type="hidden" class="form-control invisible" id="id" name="id" value="<?= $data->id_user; ?>">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                            <button type="submit" class="btn btn-primary">Kirim</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" type="button" class="btn btn-danger btn-border btn-round" data-toggle="modal" data-target="#delete<?= $data->id_user; ?>"> <i class="fas fa-trash-alt"> </i></button>
                                                <div class="modal fade" id="delete<?= $data->id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="<?= base_url(); ?>/Register/deleteUserAct">
                                                                    <label for="delete">Apakah anda yakin menghapus user <?= $data->nama_user; ?>?</label>
                                                                    <div class="form-group">
                                                                        <input type="hidden" class="form-control invisible" id="id" name="id" placeholder="Masukkan ID" value="<?= $data->id_user; ?>">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-danger">Kirim</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php }
                                endforeach; ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

<?= $this->endSection(); ?>