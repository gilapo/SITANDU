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
                                                            <div class="card">
                                                                <div id="chart-container">
                                                                    <canvas id="pieChart" style="width: 50%; height: 50%;"></canvas>
                                                                </div>
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
                                                                            <tr>
                                                                                <td><?php if ($data->DM_1 == 1) {
                                                                                        echo "Ya";
                                                                                    } else {
                                                                                        echo "Tidak";
                                                                                    } ?></td>
                                                                                <td><?php if ($data->HT_1 == 1) {
                                                                                        echo "Ya";
                                                                                    } else {
                                                                                        echo "Tidak";
                                                                                    } ?></td>
                                                                                <td><?php if ($data->jantung_1 == 1) {
                                                                                        echo "Ya";
                                                                                    } else {
                                                                                        echo "Tidak";
                                                                                    } ?></td>
                                                                                <td><?php if ($data->stroke_1 == 1) {
                                                                                        echo "Ya";
                                                                                    } else {
                                                                                        echo "Tidak";
                                                                                    } ?></td>
                                                                                <td><?php if ($data->asma_1 == 1) {
                                                                                        echo "Ya";
                                                                                    } else {
                                                                                        echo "Tidak";
                                                                                    } ?></td>
                                                                                <td><?php if ($data->kanker_1 == 1) {
                                                                                        echo "Ya";
                                                                                    } else {
                                                                                        echo "Tidak";
                                                                                    } ?></td>
                                                                                <td><?php if ($data->kolesterol_1 == 1) {
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
                                                <button type="button" class="btn btn-info" id="alert_demo_3_4"> selengkapnya</button>
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
                                                <button type="button" class="btn btn-info" id="alert_demo_3_4"> selengkapnya</button>
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
                                                        backgroundColor: ["#1d7af3", "#f3545d"],
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
                                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <!-- //cek kesehatan -->
                                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge info"><i class="fas fa-tasks"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <!-- //dataakhir -->
                                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <hr>
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <span class="btn-label">
                                                    <i class="fa fa-cog"></i>
                                                </span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge success"><i class="fas fa-table"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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

<?= $this->endSection(); ?>