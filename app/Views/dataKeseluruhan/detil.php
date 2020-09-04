<?= $this->extend('templates/superAdminLayout'); ?>
<?= $this->section('content'); ?>
<style>
    #biodata {
        margin: 0 auto;
        /* Added */
        float: none;
        /* Added */
        margin-bottom: 10px;
        /* Added */
    }
</style>
<div class="page-inner mt--5">
    <?php foreach ($pasien as $data) : ?>
        <div class="row mt--2">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="card text-center" style="width: 20rem;" id="biodata">
                    <div class="card-body">
                        <div class="avatar avatar-xxl">
                            <img src="<?= base_url(); ?><?php
                                                        if ($data->jeniskelamin == 1) {
                                                            echo "/assets/img/man.jpg";
                                                        } else {
                                                            echo "/assets/img/woman.jpg";
                                                        }
                                                        ?>" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <h1><b><?= $data->nama; ?></b></h1>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $data->identitas; ?></h6>
                        <p><?= $data->usia; ?> Tahun <br>
                            <?php if ($data->jeniskelamin == 1) {
                                echo "Laki-Laki";
                            } else {
                                echo "Perempuan";
                            } ?></p>
                    </div>
                </div>
                <h4 class="page-title text-center mt-5">Hasil Pemeriksaaan</h4>
                <div class="row">
                    <div class="col-md-12">

                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge"><i class="fas fa-user-alt"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title text-muted">Data Diri</h4>
                                        <p><small class="text-muted"><i class="fas fa-user-alt"></i>dibuat <?php if (isset($data->tanggal_input)) {
                                                                                                                $originalDate = $data->tanggal_input;
                                                                                                                echo $newDate = date("d/m/Y", strtotime($originalDate));
                                                                                                            }
                                                                                                            ?></small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <div class="row">
                                            <div class="col-3"><b>Nama</b></div>
                                            <div class="col"><?= $data->nama; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Nomor Identitas</b></div>
                                            <div class="col"><?= $data->identitas; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Jenis Kelamin</b></div>
                                            <div class="col"><?php if ($data->jeniskelamin == 1) {
                                                                    echo "Laki-Laki";
                                                                } else {
                                                                    echo "Perempuan";
                                                                } ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Usia</b></div>
                                            <div class="col"><?= $data->usia; ?> tahun</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Pekerjaan</b></div>
                                            <div class="col"><?= $data->jabatan; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-badge warning"><i class="fas fa-head-side-mask"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <!-- //riwayat -->
                                        <h4 class="timeline-title text-warning">Riwayat Penyakit</h4>
                                    </div>
                                    <div class="timeline-body text-center">

                                        <div class="card">
                                            <div class="card-body">
                                                <h6>Riwayat Penyakit Menular Pada Keluarga</h6>
                                                <div id="chart-container">
                                                    <canvas id="pieChart" style="width: 50%; height: 50%;"></canvas>
                                                </div>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rpmk">
                                                    selengkapnya
                                                </button>
                                            </div>
                                            <?php
                                            $ya = 0;
                                            $tidak = 0;
                                            if ($data->DM_1 == 1) {
                                                $ya += 1;
                                            } else {
                                                $tidak += 1;
                                            }
                                            if ($data->HT_1 == 1) {
                                                $ya += 1;
                                            } else {
                                                $tidak += 1;
                                            }
                                            if ($data->jantung_1 == 1) {
                                                $ya += 1;
                                            } else {
                                                $tidak += 1;
                                            }
                                            if ($data->stroke_1 == 1) {
                                                $ya += 1;
                                            } else {
                                                $tidak += 1;
                                            }
                                            if ($data->asma_1 == 1) {
                                                $ya += 1;
                                            } else {
                                                $tidak += 1;
                                            }
                                            if ($data->kanker_1 == 1) {
                                                $ya += 1;
                                            } else {
                                                $tidak += 1;
                                            }
                                            if ($data->kolesterol_1 == 1) {
                                                $ya += 1;
                                            } else {
                                                $tidak += 1;
                                            }
                                            ?>
                                            <script>
                                                var pieChart = document.getElementById('pieChart').getContext('2d');
                                                var myPieChart = new Chart(pieChart, {
                                                    type: 'pie',
                                                    data: {
                                                        datasets: [{
                                                            data: [<?= $tidak; ?>, <?= $ya; ?>],
                                                            backgroundColor: ["#1d7af3", "#f3545d"],
                                                            borderWidth: 0
                                                        }],
                                                        labels: ['Tidak', 'Ya']
                                                    },
                                                    options: {
                                                        responsive: true,
                                                        maintainAspectRatio: false,
                                                        legend: {
                                                            position: 'bottom',
                                                            labels: {
                                                                fontColor: 'rgb(154, 154, 154)',
                                                                fontSize: 11,
                                                                usePointStyle: true,
                                                                padding: 20
                                                            }
                                                        },
                                                        pieceLabel: {
                                                            render: 'percentage',
                                                            fontColor: 'white',
                                                            fontSize: 14,
                                                        },
                                                        tooltips: false,
                                                        layout: {
                                                            padding: {
                                                                left: 20,
                                                                right: 20,
                                                                top: 20,
                                                                bottom: 20
                                                            }
                                                        }
                                                    }
                                                })
                                            </script>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6>Riwayat Penyakit Tidak menular Pada Diri Sendiri</h6>
                                                <div id="chart-container">
                                                    <canvas id="pieChart2" style="width: 50%; height: 50%;"></canvas>
                                                </div>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rptmpds">
                                                    selengkapnya
                                                </button>
                                            </div>
                                            <?php
                                            $ya2 = 0;
                                            $tidak2 = 0;
                                            if ($data->DM_2 == 1) {
                                                $ya2 += 1;
                                            } else {
                                                $tidak2 += 1;
                                            }
                                            if ($data->HT_2 == 1) {
                                                $ya2 += 1;
                                            } else {
                                                $tidak2 += 1;
                                            }
                                            if ($data->jantung_2 == 1) {
                                                $ya2 += 1;
                                            } else {
                                                $tidak2 += 1;
                                            }
                                            if ($data->stroke_2 == 1) {
                                                $ya2 += 1;
                                            } else {
                                                $tidak2 += 1;
                                            }
                                            if ($data->asma_2 == 1) {
                                                $ya2 += 1;
                                            } else {
                                                $tidak2 += 1;
                                            }
                                            if ($data->kanker_2 == 1) {
                                                $ya2 += 1;
                                            } else {
                                                $tidak2 += 1;
                                            }
                                            if ($data->kolesterol_2 == 1) {
                                                $ya2 += 1;
                                            } else {
                                                $tidak2 += 1;
                                            }
                                            ?>
                                            <script>
                                                var pieChart = document.getElementById('pieChart2').getContext('2d');

                                                var myPieChart = new Chart(pieChart, {
                                                    type: 'pie',
                                                    data: {
                                                        datasets: [{
                                                            data: [<?= $tidak2; ?>, <?= $ya2; ?>],
                                                            backgroundColor: ["#1d7af3", "#f3545d"],
                                                            borderWidth: 0
                                                        }],
                                                        labels: ['Tidak', 'Ya']
                                                    },
                                                    options: {
                                                        responsive: true,
                                                        maintainAspectRatio: false,
                                                        legend: {
                                                            position: 'bottom',
                                                            labels: {
                                                                fontColor: 'rgb(154, 154, 154)',
                                                                fontSize: 11,
                                                                usePointStyle: true,
                                                                padding: 20
                                                            }
                                                        },
                                                        pieceLabel: {
                                                            render: 'percentage',
                                                            fontColor: 'white',
                                                            fontSize: 14,
                                                        },
                                                        tooltips: false,
                                                        layout: {
                                                            padding: {
                                                                left: 20,
                                                                right: 20,
                                                                top: 20,
                                                                bottom: 20
                                                            }
                                                        }
                                                    }
                                                })
                                            </script>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h6>Faktor Resiko Prilaku</h6>
                                                <div id="chart-container">
                                                    <canvas id="pieChart3" style="width: 50%; height: 50%;"></canvas>
                                                </div>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#frsk">
                                                    selengkapnya
                                                </button>
                                            </div>
                                        </div>
                                        <?php
                                        $ya3 = 0;
                                        $tidak3 = 0;
                                        if ($data->merokok == 1) {
                                            $ya3 += 1;
                                        } else {
                                            $tidak3 += 1;
                                        }
                                        if ($data->sayur_buah == 1) {
                                            $ya3 += 1;
                                        } else {
                                            $tidak3 += 1;
                                        }
                                        if ($data->kurang_aktivitas_fisik == 1) {
                                            $ya3 += 1;
                                        } else {
                                            $tidak3 += 1;
                                        }
                                        if ($data->alkohol == 1) {
                                            $ya3 += 1;
                                        } else {
                                            $tidak3 += 1;
                                        }
                                        if ($data->sulit_tidur_napsu_makan == 1) {
                                            $ya3 += 1;
                                        } else {
                                            $tidak3 += 1;
                                        }

                                        ?>
                                        <script>
                                            var pieChart = document.getElementById('pieChart3').getContext('2d');

                                            var myPieChart = new Chart(pieChart, {
                                                type: 'pie',
                                                data: {
                                                    datasets: [{
                                                        data: [<?= $tidak3; ?>, <?= $ya3; ?>],
                                                        backgroundColor: ["#f3545d", "#1d7af3"],
                                                        borderWidth: 0
                                                    }],
                                                    labels: ['Ya', 'Tidak']
                                                },
                                                options: {
                                                    responsive: true,
                                                    maintainAspectRatio: false,
                                                    legend: {
                                                        position: 'bottom',
                                                        labels: {
                                                            fontColor: 'rgb(154, 154, 154)',
                                                            fontSize: 11,
                                                            usePointStyle: true,
                                                            padding: 20
                                                        }
                                                    },
                                                    pieceLabel: {
                                                        render: 'percentage',
                                                        fontColor: 'white',
                                                        fontSize: 14,
                                                    },
                                                    tooltips: false,
                                                    layout: {
                                                        padding: {
                                                            left: 20,
                                                            right: 20,
                                                            top: 20,
                                                            bottom: 20
                                                        }
                                                    }
                                                }
                                            })
                                        </script>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge danger"><i class="fas fa-clipboard-list"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <!-- //antro -->
                                        <h4 class="timeline-title text-danger">Antropometri</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <div class="row">
                                            <div class="col-3"><b>Berat Badan</b></div>
                                            <div class="col"><?= $data->bb; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Tinggi Badan</b></div>
                                            <div class="col"><?= $data->tb; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>IMT</b></div>
                                            <div class="col " id="imt"><?= $data->imt; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Lingkar Perut</b></div>
                                            <div class="col" id="lp"><?= $data->lp; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    var h6 = document.getElementById("imt");
                                    if (<?= $data->jeniskelamin; ?> == 1) {
                                        if (<?= $data->imt; ?> < 18) {
                                            h6.classList.add("text-danger");
                                        } else if (<?= $data->imt; ?> >= 18 && <?= $data->imt; ?> <= 25) {
                                            h6.classList.add("text-success");
                                        } else if (<?= $data->imt; ?> >= 26 && <?= $data->imt; ?> <= 27) {
                                            h6.classList.add("text-warning");
                                        } else if (<?= $data->imt; ?> >= 28) {
                                            h6.classList.add("text-danger");
                                        }
                                    } else if (<?= $data->jeniskelamin; ?> == 0) {
                                        if (<?= $data->imt; ?> < 17) {
                                            h6.classList.add("text-danger");
                                        } else if (<?= $data->imt; ?> >= 17 && <?= $data->imt; ?> <= 23) {
                                            h6.classList.add("text-success");
                                        } else if (<?= $data->imt; ?> >= 24 && <?= $data->imt; ?> <= 27) {
                                            h6.classList.add("text-warning");
                                        } else if (<?= $data->imt; ?> >= 27) {
                                            h6.classList.add("text-danger");
                                        }
                                    }
                                </script>
                                <script>
                                    var h61 = document.getElementById("lp");
                                    console.log("masuk");
                                    if (<?= $data->jeniskelamin; ?> == 1) {
                                        if (<?= $data->lp; ?> <= 90) {
                                            h61.classList.add("text-success");
                                        } else {
                                            h61.classList.add("text-danger");
                                        }
                                    } else if (<?= $data->jeniskelamin; ?> == 0) {
                                        if (<?= $data->lp; ?> <= 80) {
                                            h61.classList.add("text-success");
                                        } else {
                                            h61.classList.add("text-danger");
                                        }
                                    }
                                </script>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-badge info"><i class="fas fa-tasks"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <!-- //cekes -->
                                        <h4 class="timeline-title text-info">Cek Kesehatan</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <div class="row">
                                            <div class="col-3"><b>Sistole</b></div>
                                            <div class="col"><?= $data->sistole; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Diastole</b></div>
                                            <div class="col"><?= $data->diastole; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Gula Darah</b></div>
                                            <div class="col " id="imt"><?= $data->gds; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Kolesterol</b></div>
                                            <div class="col" id="lp"><?= $data->kolesterol; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Asam Urat</b></div>
                                            <div class="col" id="lp"><?= $data->asam_urat; ?></div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-3"><b>Arus Puncak Respirasi</b></div>
                                            <div class="col" id="lp"><?= $data->ekspirasi; ?></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <div class="table-responsive">
                                                    <table class="table " id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>Benjolan pada Payudara</th>
                                                                <th>Inspeksi Visual Asam Asetat</th>
                                                                <th>Kadar Alkohol</th>
                                                                <th>Tes Amfetamin</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($pasien as $data) : ?>
                                                                <tr>
                                                                    <td><?php if ($data->benjolan_pada_payudara == 1) {
                                                                            echo "Ya";
                                                                        } else {
                                                                            echo "Tidak";
                                                                        } ?></td>
                                                                    <td><?php if ($data->iva == 1) {
                                                                            echo "Ya";
                                                                        } else {
                                                                            echo "Tidak";
                                                                        } ?></td>
                                                                    <td><?php if ($data->kadar_alkohol == 1) {
                                                                            echo "Ya";
                                                                        } else {
                                                                            echo "Tidak";
                                                                        } ?></td>
                                                                    <td><?php if ($data->tes_amfetamin == 1) {
                                                                            echo "Ya";
                                                                        } else {
                                                                            echo "Tidak";
                                                                        } ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>

                                </script>
                            </li>
                            <!-- datakhir -->
                            <li>
                                <div class="timeline-badge success"><i class="fas fa-table"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Hasil Data Akhir</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <div class="row">
                                            <div class="col-3"><b>Masalah Yang Ditemukan</b></div>
                                            <div class="col"><?= $data->masalah_yang_ditemukan; ?></div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-3"><b>Saran</b></div>
                                            <div class="col"><?= $data->saran; ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"><b>Rujukan</b></div>
                                            <div class="col "><?= $data->rujukan; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- modals -->
<div class="modal fade" id="rpmk">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Riwayat Penyakit Menular Pada Keluarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="chart-container">
                    <canvas id="pieChart4" style="width: 50%; height: 50%;"></canvas>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>DM Keluarga</th>
                                <th>HT Keluarga</th>
                                <th>Jantung Keluarga</th>
                                <th>Stroke Keluarga</th>
                                <th>Asma Keluarga</th>
                                <th>Kanker Keluarga</th>
                                <th>Kolesterol Keluarga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pasien as $data) : ?>
                                <tr class="text-white">
                                    <td bgcolor="<?php if ($data->DM_1 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>">
                                        <?php if ($data->DM_1 == 1) {
                                            echo "Ya";
                                        } else {
                                            echo "Tidak";
                                        } ?></td>
                                    <td bgcolor="<?php if ($data->HT_1 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->HT_1 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->jantung_1 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->jantung_1 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->stroke_1 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->stroke_1 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->asma_1 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->asma_1 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->kanker_1 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->kanker_1 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->kolesterol_1 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->kolesterol_1 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    var pieChart = document.getElementById('pieChart4').getContext('2d');
    var myPieChart = new Chart(pieChart, {
        type: 'pie',
        data: {
            datasets: [{
                data: [<?= $tidak; ?>, <?= $ya; ?>],
                backgroundColor: ["#1d7af3", "#f3545d"],
                borderWidth: 0
            }],
            labels: ['Tidak', 'Ya']
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    fontColor: 'rgb(154, 154, 154)',
                    fontSize: 11,
                    usePointStyle: true,
                    padding: 20
                }
            },
            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                fontSize: 14,
            },
            tooltips: false,
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20
                }
            }
        }
    })
</script>
<!-- rptmpds -->
<div class="modal fade" id="rptmpds">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Riwayat Penyakit Menular Pada Keluarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="chart-container">
                    <canvas id="pieChart5" style="width: 50%; height: 50%;"></canvas>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>DM Diri Sendiri</th>
                                <th>HT Diri Sendiri</th>
                                <th>Jantung Diri Sendiri</th>
                                <th>Stroke Diri Sendiri</th>
                                <th>Asma Diri Sendiri</th>
                                <th>Kanker Diri Sendiri</th>
                                <th>Kolesterol Diri Sendiri</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pasien as $data) : ?>
                                <tr class="text-white">
                                    <td bgcolor="<?php if ($data->DM_2 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>">
                                        <?php if ($data->DM_2 == 1) {
                                            echo "Ya";
                                        } else {
                                            echo "Tidak";
                                        } ?></td>
                                    <td bgcolor="<?php if ($data->HT_2 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->HT_2 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->jantung_2 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->jantung_2 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->stroke_2 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->stroke_2 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->asma_2 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->asma_2 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->kanker_2 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->kanker_2 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->kolesterol_2 == 1) {
                                                        echo "#f3545d";
                                                    } else {
                                                        echo "#1d7af3";
                                                    } ?>"><?php if ($data->kolesterol_2 == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    var pieChart = document.getElementById('pieChart5').getContext('2d');
    var myPieChart = new Chart(pieChart, {
        type: 'pie',
        data: {
            datasets: [{
                data: [<?= $tidak2; ?>, <?= $ya2; ?>],
                backgroundColor: ["#1d7af3", "#f3545d"],
                borderWidth: 0
            }],
            labels: ['Tidak', 'Ya']
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    fontColor: 'rgb(154, 154, 154)',
                    fontSize: 11,
                    usePointStyle: true,
                    padding: 20
                }
            },
            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                fontSize: 14,
            },
            tooltips: false,
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20
                }
            }
        }
    })
</script>
<!-- frsk -->
<div class="modal fade" id="frsk">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Riwayat Penyakit Menular Pada Keluarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="chart-container">
                    <canvas id="pieChart6" style="width: 50%; height: 50%;"></canvas>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Merokok</th>
                                <th>Makan Sayur dan Buah Kurang dari 5 Porsi</th>
                                <th>Kurang Aktivitas Fisik</th>
                                <th>Alkohol</th>
                                <th>Sulit Tidur Mapsu Makan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pasien as $data) : ?>
                                <tr class="text-white">
                                    <td bgcolor="<?php if ($data->merokok == 1) {
                                                        echo "#1d7af3";
                                                    } else {
                                                        echo "#f3545d";
                                                    } ?>"><?php if ($data->merokok == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->sayur_buah == 1) {
                                                        echo "#1d7af3";
                                                    } else {
                                                        echo "#f3545d";
                                                    } ?>"><?php if ($data->sayur_buah == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->kurang_aktivitas_fisik == 1) {
                                                        echo "#1d7af3";
                                                    } else {
                                                        echo "#f3545d";
                                                    } ?>"><?php if ($data->kurang_aktivitas_fisik == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->alkohol == 1) {
                                                        echo "#1d7af3";
                                                    } else {
                                                        echo "#f3545d";
                                                    } ?>"><?php if ($data->alkohol == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                    <td bgcolor="<?php if ($data->sulit_tidur_napsu_makan == 1) {
                                                        echo "#1d7af3";
                                                    } else {
                                                        echo "#f3545d";
                                                    } ?>"><?php if ($data->sulit_tidur_napsu_makan == 1) {
                                                                echo "Ya";
                                                            } else {
                                                                echo "Tidak";
                                                            } ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    var pieChart = document.getElementById('pieChart6').getContext('2d');
    var myPieChart = new Chart(pieChart, {
        type: 'pie',
        data: {
            datasets: [{
                data: [<?= $tidak3; ?>, <?= $ya3; ?>],
                backgroundColor: ["#f3545d", "#1d7af3"],
                borderWidth: 0
            }],
            labels: ['Tidak', 'Ya']
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    fontColor: 'rgb(154, 154, 154)',
                    fontSize: 11,
                    usePointStyle: true,
                    padding: 20
                }
            },
            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                fontSize: 14,
            },
            tooltips: false,
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20
                }
            }
        }
    })
</script>
<?= $this->endSection(); ?>