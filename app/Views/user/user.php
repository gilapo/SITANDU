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
                                    <th>id</th>
                                    <th>Nama</th>
                                    <th>role</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3424</td>
                                    <td>yayayayayayaya</td>
                                    <td>admin</td>
                                    <td>
                                        <button type="button" id="editbtn" name="editbtn" class="btn btn-primary btn-border btn-round" data-toggle="modal" data-target="#editmodal"> <i class="fas fa-edit"> </i> </button>
                                        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="jenis_surat">Role User</label>
                                                                <select class="form-control" id="role_id" name="role_id" value="">
                                                                    <option value="1">Admin</option>
                                                                    <option value="2">super admin</option>
                                                                </select>
                                                                <div class="form-group">
                                                                    <input type="hidden" class="form-control invisible" id="id" name="id" placeholder="Masukkan ID" value="">
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
                                        <button type="button" type="button" class="btn btn-danger btn-border btn-round" data-toggle="modal" data-target="#delete"> <i class="fas fa-trash-alt"> </i></button>
                                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="">
                                                            <label for="delete">Apakah yakin user?</label>
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control invisible" id="id" name="id" placeholder="Masukkan ID" value="">
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