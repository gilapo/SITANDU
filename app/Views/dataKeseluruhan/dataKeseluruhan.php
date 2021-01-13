<?= $this->extend('templates/superAdminLayout'); ?>
<?= $this->section('content'); ?>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Data Keseluruhan</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th rowspan="2">Nomor Identitas</th>
                                    <th rowspan="2">Nama</th>
                                    <th rowspan="2">Tanggal Input</th>
                                    <th rowspan="2">Usia</th>
                                    <th rowspan="2">Jabatan</th>
                                    <th rowspan="2">Jenis Kelamin</th>
                                    <th colspan="7" style="text-align:center">Faktor Risiko pada Keluarga</th>
                                    <th colspan="7" style="text-align:center">Faktor Risiko pada Diri Sendiri</th>
                                    <th rowspan="2">Merokok</th>
                                    <th rowspan="2">Makan Sayur dan Buah Kurang dari 5 Porsi</th>
                                    <th rowspan="2">Kurang Aktivitas Fisik</th>
                                    <th rowspan="2">Alkohol</th>
                                    <th rowspan="2">Sulit Tidur Mapsu Makan</th>
                                    <th rowspan="2">Berat Badan</th>
                                    <th rowspan="2">Tinggi Badan</th>
                                    <th rowspan="2">IMT</th>
                                    <th rowspan="2">Lingkar Perut</th>
                                    <th rowspan="2">Sistole</th>
                                    <th rowspan="2">Diastole</th>
                                    <th rowspan="2">Jenis Gula Darah</th>
                                    <th rowspan="2">GDS</th>
                                    <th rowspan="2">Kolesterol</th>
                                    <th rowspan="2">Asam Urat</th>
                                    <th rowspan="2">Ekspirasi</th>
                                    <th rowspan="2">Benjolan pada Payudara</th>
                                    <th rowspan="2">IVA</th>
                                    <th rowspan="2">Kadar Alkohol</th>
                                    <th rowspan="2">Tes Amfetamin</th>
                                    <th rowspan="2">Masalah yang Ditemukan</th>
                                    <th rowspan="2">Saran</th>
                                    <th rowspan="2">Rujukan</th>
                                    <th rowspan="2">Edit</th>
                                    <th rowspan="2">Delete</th>
                                </tr>
                                <tr>
                                    <th>DM</th>
                                    <th>HT</th>
                                    <th>Jantung</th>
                                    <th>Stroke</th>
                                    <th>Asma</th>
                                    <th>Kanker</th>
                                    <th>Kolesterol</th>
                                    <th>DM</th>
                                    <th>HT</th>
                                    <th>Jantung</th>
                                    <th>Stroke</th>
                                    <th>Asma</th>
                                    <th>Kanker</th>
                                    <th>Kolesterol</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $data) : ?>
                                    <tr>
                                        <td><?= $data->identitas; ?></td>
                                        <td><?= $data->nama; ?></td>
                                        <td><?php if (isset($data->tanggal_input)) {
                                                $originalDate = $data->tanggal_input;
                                                echo $newDate = date("d/m/Y", strtotime($originalDate));
                                            }
                                            ?></td>
                                        <td><?= $data->usia; ?></td>
                                        <td><?= $data->jabatan; ?></td>
                                        <td><?php if ($data->jeniskelamin == 1) {
                                                echo "Laki-Laki";
                                            } else {
                                                echo "Perempuan";
                                            } ?></td>
                                        <td><?php if ($data->DM_1 == 1 && isset($data->DM_1)) {
                                                echo "Ya";
                                            } else if ($data->DM_1 == 0 && isset($data->DM_1)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td><?php if ($data->HT_1 == 1 && isset($data->HT_1)) {
                                                echo "Ya";
                                            } else if ($data->HT_1 == 0 && isset($data->HT_1)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td><?php if ($data->jantung_1 == 1 && isset($data->jantung_1)) {
                                                echo "Ya";
                                            } else if ($data->jantung_1 == 0 && isset($data->jantung_1)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td><?php if ($data->stroke_1 == 1 && isset($data->stroke_1)) {
                                                echo "Ya";
                                            } else if ($data->stroke_1 == 0 && isset($data->stroke_1)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td><?php if ($data->asma_1 == 1 && isset($data->asma_1)) {
                                                echo "Ya";
                                            } else if ($data->asma_1 == 0 && isset($data->asma_1)) {
                                                echo "Tidak";
                                            }  ?></td>

                                        <td><?php if ($data->kanker_1 == 1 && isset($data->kanker_1)) {
                                                echo "Ya";
                                            } else if ($data->kanker_1 == 0 && isset($data->kanker_1)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->kolesterol_1 == 1 && isset($data->kolesterol_1)) {
                                                echo "Ya";
                                            } else if ($data->kolesterol_1 == 0 && isset($data->kolesterol_1)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->DM_2 == 1 && isset($data->DM_2)) {
                                                echo "Ya";
                                            } else if ($data->DM_2 == 0 && isset($data->DM_2)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->HT_2 == 1 && isset($data->HT_2)) {
                                                echo "Ya";
                                            } else if ($data->HT_2 == 0 && isset($data->HT_2)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->jantung_2 == 1 && isset($data->jantung_2)) {
                                                echo "Ya";
                                            } else if ($data->jantung_2 == 0 && isset($data->jantung_2)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->stroke_2 == 1 && isset($data->stroke_2)) {
                                                echo "Ya";
                                            } else if ($data->stroke_2 == 0 && isset($data->stroke_2)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->asma_2 == 1 && isset($data->asma_2)) {
                                                echo "Ya";
                                            } else if ($data->asma_2 == 0 && isset($data->asma_2)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->kanker_2 == 1 && isset($data->kanker_2)) {
                                                echo "Ya";
                                            } else if ($data->kanker_2 == 0 && isset($data->kanker_2)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->kolesterol_2 == 1 && isset($data->kolesterol_2)) {
                                                echo "Ya";
                                            } else if ($data->kolesterol_2 == 0 && isset($data->kolesterol_2)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->merokok == 1 && isset($data->merokok)) {
                                                echo "Ya";
                                            } else if ($data->merokok == 0 && isset($data->merokok)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->sayur_buah == 1 && isset($data->sayur_buah)) {
                                                echo "Ya";
                                            } else if ($data->sayur_buah == 0 && isset($data->sayur_buah)) {
                                                echo "Tidak";
                                            }  ?>
                                        </td>
                                        <td>
                                            <?php if ($data->kurang_aktivitas_fisik == 1 && isset($data->kurang_aktivitas_fisik)) {
                                                echo "Ya";
                                            } else if ($data->kurang_aktivitas_fisik == 0 && isset($data->kurang_aktivitas_fisik)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td><?php if ($data->alkohol == 1 && isset($data->alkohol)) {
                                                echo "Ya";
                                            } else if ($data->alkohol == 0 && isset($data->alkohol)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td>
                                            <?php if ($data->sulit_tidur_napsu_makan == 1 && isset($data->sulit_tidur_napsu_makan)) {
                                                echo "Ya";
                                            } else if ($data->sulit_tidur_napsu_makan == 0 && isset($data->sulit_tidur_napsu_makan)) {
                                                echo "Tidak";
                                            }  ?></td>
                                        <td><?= $data->bb; ?></td>
                                        <td><?= $data->tb; ?></td>
                                        <td><?= $data->imt; ?></td>
                                        <td><?= $data->lp; ?></td>
                                        <td><?= $data->sistole; ?></td>
                                        <td><?= $data->diastole; ?></td>
                                        <td><?= $data->jenis_gd; ?></td>
                                        <td><?= $data->gds; ?></td>
                                        <td><?= $data->kolesterol; ?></td>
                                        <td><?= $data->asam_urat; ?></td>
                                        <td><?php if ($data->ekspirasi == 0 && isset($data->ekspirasi)) {
                                                echo "Tidak Ada";
                                            } else {
                                                echo $data->ekspirasi;
                                            } ?></td>
                                        <td><?php if ($data->benjolan_pada_payudara == 1 && isset($data->benjolan_pada_payudara)) {
                                                echo "Ditemukan";
                                            } else if ($data->benjolan_pada_payudara == 0 && isset($data->benjolan_pada_payudara)) {
                                                echo "Tidak Ditemukan";
                                            } else if ($data->benjolan_pada_payudara == 2 && isset($data->benjolan_pada_payudara)) {
                                                echo "Tidak Terkaji";
                                            } ?></td>
                                        <td><?php if ($data->iva == 1 && isset($data->iva)) {
                                                echo "Ya";
                                            } else if ($data->iva == 0 && isset($data->iva)) {
                                                echo "Tidak";
                                            } else if ($data->iva == 2 && isset($data->iva)) {
                                                echo "Tidak Terkaji";
                                            } ?></td>
                                        <td><?php if ($data->kadar_alkohol == 1 && isset($data->kadar_alkohol)) {
                                                echo "Ya";
                                            } else if ($data->kadar_alkohol == 0 && isset($data->kadar_alkohol)) {
                                                echo "Tidak";
                                            } else if ($data->kadar_alkohol == 2 && isset($data->kadar_alkohol)) {
                                                echo "Tidak Terkaji";
                                            }  ?></td>
                                        <td><?php if ($data->tes_amfetamin == 1 && isset($data->tes_amfetamin)) {
                                                echo "Ya";
                                            } else if ($data->tes_amfetamin == 0 && isset($data->tes_amfetamin)) {
                                                echo "Tidak";
                                            } else if ($data->tes_amfetamin == 2 && isset($data->tes_amfetamin)) {
                                                echo "Tidak Terkaji";
                                            } ?></td>
                                        <td><?= $data->masalah_yang_ditemukan; ?></td>
                                        <td><?= $data->saran; ?></td>
                                        <td><?= $data->rujukan; ?></td>
                                        <td>
                                            <form method="post" action="<?= base_url(); ?>/Admin/editPasien">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control hidden" id="id_edit_pasien" name="id_edit_pasien" placeholder="Masukkan ID" value="<?= $data->id; ?>">
                                                </div>
                                                <button type="submit" class="btn btn-info btn-round" id="edit">Edit</button></>
                                            </form>
                                        </td>
                                        <td><button type="button" type="button" class="btn btn-danger btn-border btn-round" data-toggle="modal" data-target="#delete<?= $data->id; ?>"> <i class="fas fa-trash-alt"> </i></button>
                                            <div class="modal fade" id="delete<?= $data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Pasien</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="<?= base_url(); ?>/Admin/deletePasienAct">
                                                                <label for="delete">Apakah yakin menghapus data pasien <?= $data->nama; ?>?</label>
                                                                <div class="form-group">
                                                                    <input type="hidden" class="form-control hidden" id="id_delete_pasien" name="id_delete_pasien" placeholder="Masukkan ID" value="<?= $data->id; ?>">
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
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery.extend(jQuery.fn.dataTableExt.oSort, {
        "date-uk-pre": function(a) {
            if (a == null || a == "") {
                return 0;
            }
            var ukDatea = a.split('/');
            return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
        },

        "date-uk-asc": function(a, b) {
            return ((a < b) ? -1 : ((a > b) ? 1 : 0));
        },

        "date-uk-desc": function(a, b) {
            return ((a < b) ? 1 : ((a > b) ? -1 : 0));
        }
    });
    //fungsi untuk filtering data berdasarkan tanggal 
    var start_date;
    var end_date;
    var DateFilterFunction = (function(oSettings, aData, iDataIndex) {
        var dateStart = parseDateValue(start_date);
        var dateEnd = parseDateValue(end_date);
        //Kolom tanggal yang akan kita gunakan berada dalam urutan 2, karena dihitung mulai dari 0
        //nama depan = 0
        //nama belakang = 1
        //tanggal terdaftar =2
        var evalDate = parseDateValue(aData[2]);
        if ((isNaN(dateStart) && isNaN(dateEnd)) ||
            (isNaN(dateStart) && evalDate <= dateEnd) ||
            (dateStart <= evalDate && isNaN(dateEnd)) ||
            (dateStart <= evalDate && evalDate <= dateEnd)) {
            return true;
        }
        return false;
    });

    // fungsi untuk converting format tanggal dd/mm/yyyy menjadi format tanggal javascript menggunakan zona aktubrowser
    function parseDateValue(rawDate) {
        var dateArray = rawDate.split("/");
        var parsedDate = new Date(dateArray[2], parseInt(dateArray[1]) - 1, dateArray[0]); // -1 because months are from 0 to 11   
        return parsedDate;
    }

    $(document).ready(function() {
        //konfigurasi DataTable pada tabel dengan id example dan menambahkan  div class dateseacrhbox dengan dom untuk meletakkan inputan daterangepicker
        var table = $('#example').DataTable({
            scrollY: true,
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            buttons: [{
                text: 'Export Menjadi Excel',
                className: ['mx-4 btn-success'],
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42]
                },
            }],
            columnDefs: [{
                    width: 150,
                    targets: [39, 40, 41],
                },
                {
                    width: 200,
                    targets: [1, 2],
                },
                {
                    searchable: true,
                    targets: 1
                },
                {
                    'targets': 2,
                    type: 'date-uk'
                }
            ],
            "order": [
                [1, "asc"]
            ],
            "lengthMenu": [50, 75, 100, 250, 500, 750, 1000],
            "rowCallback": function(row, data) {
                for (let i = 6; i <= 24; i++) {
                    if (data[i] == "Ya") {
                        $('td:eq(' +
                            i + ')', row).addClass('bg-danger');
                    } else if (data[i] == "Tidak") {
                        $('td:eq(' +
                            i + ')', row).addClass('bg-success');
                    }
                }

                for (let i = 36; i <= 39; i++) {
                    if (data[i] == "Ya" || data[i] == "Ditemukan") {
                        $('td:eq(' +
                            i + ')', row).addClass('bg-danger');
                    } else if (data[i] == "Tidak" || data[i] == "Tidak Ditemukan") {
                        $('td:eq(' +
                            i + ')', row).addClass('bg-success');
                    }
                }

                if (data[5] == "Laki-Laki") {
                    if (data[27] > 0 && data[27] < 18) {
                        $('td:eq(27)', row).addClass('bg-danger');
                    } else if (data[27] >= 18 && data[27] <= 25) {
                        $('td:eq(27)', row).addClass('bg-success');
                    } else if (data[27] >= 26 && data[27] <= 27) {
                        $('td:eq(27)', row).addClass('bg-warning');
                    } else if (data[27] >= 28) {
                        $('td:eq(27)', row).addClass('bg-danger');
                    }
                    if (data[28] > 0 && data[28] <= 90) {
                        $('td:eq(28)', row).addClass('bg-success');
                    } else if (data[28] > 90) {
                        $('td:eq(28)', row).addClass('bg-danger');
                    }
                    if (data[29] > 0 && data[29] <= 120) {
                        $('td:eq(29)', row).addClass('bg-success');
                    } else if (data[29] >= 121 && data[29] <= 139) {
                        $('td:eq(29)', row).addClass('bg-warning');
                    } else if (data[29] >= 140 && data[29] <= 159) {
                        $('td:eq(29)', row).addClass('bg-danger');
                    } else if (data[29] >= 160) {
                        $('td:eq(29)', row).addClass('bg-danger');
                    }
                    if (data[30] > 0 && data[30] <= 80) {
                        $('td:eq(30)', row).addClass('bg-success');
                    } else if (data[30] >= 81 && data[30] <= 90) {
                        $('td:eq(30)', row).addClass('bg-warning');
                    } else if (data[30] >= 91 && data[30] <= 99) {
                        $('td:eq(30)', row).addClass('bg-danger');
                    } else if (data[30] >= 100) {
                        $('td:eq(30)', row).addClass('bg-danger');
                    }

                    if (data[33] > 0 && data[33] <= 170) {
                        $('td:eq(33)', row).addClass('bg-success');
                    } else if (data[33] >= 171 && data[33] <= 199) {
                        $('td:eq(33)', row).addClass('bg-warning');
                    } else if (data[33] >= 200) {
                        $('td:eq(33)', row).addClass('bg-danger');
                    }
                    if (data[34] > 0 && data[34] < 3) {
                        $('td:eq(34)', row).addClass('bg-danger');
                    } else if (data[34] >= 4 && data[34] <= 7) {
                        $('td:eq(34)', row).addClass('bg-success');
                    } else if (data[34] > 7) {
                        $('td:eq(34)', row).addClass('bg-danger');
                    }
                    if (data[35] > 0 && data[35] <= 499) {
                        $('td:eq(35)', row).addClass('bg-danger');
                    } else if (data[35] >= 500 && data[35] <= 700) {
                        $('td:eq(35)', row).addClass('bg-success');
                    } else if (data[35] > 700) {
                        $('td:eq(35)', row).addClass('bg-danger');
                    }
                } else if (data[5] == "Perempuan") {
                    if (data[27] > 0 && data[27] < 17) {
                        $('td:eq(27)', row).addClass('bg-danger');
                    } else if (data[27] >= 17 && data[27] <= 23) {
                        $('td:eq(27)', row).addClass('bg-success');
                    } else if (data[27] >= 24 && data[27] <= 27) {
                        $('td:eq(27)', row).addClass('bg-warning');
                    } else if (data[27] >= 27) {
                        $('td:eq(27)', row).addClass('bg-danger');
                    }
                    if (data[28] > 0 && data[28] <= 80) {
                        $('td:eq(28)', row).addClass('bg-success');
                    } else if (data[28] > 80) {
                        $('td:eq(28)', row).addClass('bg-danger');
                    }
                    if (data[29] > 0 && data[29] <= 120) {
                        $('td:eq(29)', row).addClass('bg-success');
                    } else if (data[29] >= 121 && data[29] <= 139) {
                        $('td:eq(29)', row).addClass('bg-warning');
                    } else if (data[29] >= 140 && data[29] <= 159) {
                        $('td:eq(29)', row).addClass('bg-danger');
                    } else if (data[29] >= 160) {
                        $('td:eq(29)', row).addClass('bg-danger');
                    }
                    if (data[30] > 0 && data[30] <= 80) {
                        $('td:eq(30)', row).addClass('bg-success');
                    } else if (data[30] >= 81 && data[30] <= 90) {
                        $('td:eq(30)', row).addClass('bg-warning');
                    } else if (data[30] >= 91 && data[30] <= 99) {
                        $('td:eq(30)', row).addClass('bg-danger');
                    } else if (data[30] >= 100) {
                        $('td:eq(30)', row).addClass('bg-danger');
                    }
                    if (data[32] > 0 && data[32] <= 199) {
                        $('td:eq(32)', row).addClass('bg-success');
                    } else if (data[32] >= 200) {
                        $('td:eq(32)', row).addClass('bg-danger');
                    }
                    if (data[33] > 0 && data[33] <= 170) {
                        $('td:eq(33)', row).addClass('bg-success');
                    } else if (data[33] >= 171 && data[33] <= 199) {
                        $('td:eq(33)', row).addClass('bg-warning');
                    } else if (data[33] >= 200) {
                        $('td:eq(33)', row).addClass('bg-danger');
                    }
                    if (data[34] > 0 && data[34] < 6) {
                        $('td:eq(34)', row).addClass('bg-danger');
                    } else if (data[34] >= 6) {
                        $('td:eq(34)', row).addClass('bg-success');
                    }
                    if (data[35] > 0 && data[35] <= 279) {
                        $('td:eq(35)', row).addClass('bg-danger');
                    } else if (data[35] >= 280 && data[35] <= 500) {
                        $('td:eq(35)', row).addClass('bg-success');
                    } else if (data[35] > 500) {
                        $('td:eq(35)', row).addClass('bg-danger');
                    }
                }
                if (data[31] == "gds") {
                    if (data[32] > 0 && data[32] <= 199) {
                        $('td:eq(32)', row).addClass('bg-success');
                    } else if (data[32] >= 200) {
                        $('td:eq(32)', row).addClass('bg-danger');
                    }
                } else if (data[31] == "gdp") {
                    if (data[32] > 0 && data[32] <= 107) {
                        $('td:eq(32)', row).addClass('bg-success');
                    } else if (data[32] >= 108 && data[32] <= 125) {
                        $('td:eq(32)', row).addClass('bg-danger');
                    } else if (data[32] >= 200) {
                        $('td:eq(32)', row).addClass('bg-danger');
                    }
                }
            },
            "dom": "<'row'<'col-sm-4'l><'col-sm-5' <'datesearchbox'>><'col-sm-3'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>"
        });
        table.buttons().container()
            .appendTo('#example_wrapper :eq(2)');
        //menambahkan daterangepicker di dalam datatables
        $("div.datesearchbox").html('<div class="input-group"> <div class="input-group-addon"> <i class="fas fa-calendar-alt fa-2x my-2 mx-3"></i> </div><input type="text" class="form-control pull-right" id="datesearch" placeholder="Cari Berdasar Tanggal.."> </div>');

        document.getElementsByClassName("datesearchbox")[0].style.textAlign = "right";

        //konfigurasi daterangepicker pada input dengan id datesearch
        $('#datesearch').daterangepicker({
            autoUpdateInput: false
        });

        //menangani proses saat apply date range
        $('#datesearch').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
            start_date = picker.startDate.format('DD/MM/YYYY');
            end_date = picker.endDate.format('DD/MM/YYYY');
            $.fn.dataTableExt.afnFiltering.push(DateFilterFunction);
            table.draw();
        });

        $('#datesearch').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
            start_date = '';
            end_date = '';
            $.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(DateFilterFunction, 1));
            table.draw();
        });
    });
</script>

<?= $this->endSection(); ?>