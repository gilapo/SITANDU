<?= $this->extend('templates/superAdminLayout'); ?>
<?= $this->section('content'); ?>
<?php include('perhitungan.php'); ?>
<style>
    @media print {
        body * {
            visibility: hidden;
        }

        #section-to-print,
        #section-to-print * {
            visibility: visible;
        }

        #section-to-print {
            position: fixed;
            left: 0;
            top: 0;
        }
    }
</style>

<div class="page-inner">
    <button class="btn btn-secondary btn-round my-4" onclick="window.print()">Cetak Grafik</button>
    <div class="print" id="section-to-print">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Jumlah Peserta POSBINDU Tahun <?= date(" Y"); ?></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container" style="min-height: 375px">
                            <canvas id="statisticsChart"></canvas>
                        </div>
                        <div id="myChartLegend"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card">
                    <div class="card-header">
                        <div class="card-title">Persebaran Jenis Kelamin <?= date(" Y"); ?></div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="pull-in">
                            <div id="chart-container" style="min-height: 395px">
                                <canvas id="jk"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt--2">
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">Persebaran Interpetasi Antropometri Tahun <?= date(" Y"); ?></div>
                        <div class="card-category">
                            <div class="input-group">
                                <select class="custom-select" id="antroY" onchange="cobaY(this)">
                                    <option selected>Kategori...</option>
                                    <option value="imt">IMT</option>
                                    <option value="lp">Lingkar Perut</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-1"></div>
                                <h6 class="fw-bold mt-3 mb-0">Peringatan</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-2"></div>
                                <h6 class="fw-bold mt-3 mb-0">Normal</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-3"></div>
                                <h6 class="fw-bold mt-3 mb-0">Berpotensi Bahaya</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">Persebaran Interpetasi Cek Kesehatan Tahun <?= date(" Y"); ?></div>
                        <div class="card-category">
                            <div class="input-group">
                                <select class="custom-select" id="cekKesY" onchange="cekKesY(this)">
                                    <option selected>Kategori...</option>
                                    <option value="td">Tekanan Darah</option>
                                    <option value="gd">Gula Darah</option>
                                    <option value="kt">Kolesterol Total</option>
                                    <option value="au">Asam Urat</option>
                                    <option value="ape">Arus Puncak Ekspirasi</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-11"></div>
                                <h6 class="fw-bold mt-3 mb-0">Peringatan</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-12"></div>
                                <h6 class="fw-bold mt-3 mb-0">Normal</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-13"></div>
                                <h6 class="fw-bold mt-3 mb-0">Berpotensi Bahaya</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt--2">
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">Persebaran Interpetasi Antropometri Bulan <?= date(" M"); ?></div>
                        <div class="card-category">
                            <div class="input-group">
                                <select class="custom-select" id="antroM" onchange="cobaM(this)">
                                    <option selected>Kategori...</option>
                                    <option value="imt">IMT</option>
                                    <option value="lp">Lingkar Perut</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-4"></div>
                                <h6 class="fw-bold mt-3 mb-0">Peringatan</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-5"></div>
                                <h6 class="fw-bold mt-3 mb-0">Normal</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-6"></div>
                                <h6 class="fw-bold mt-3 mb-0">Berpotensi Bahaya</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="card-title">Persebaran Interpetasi Cek Kesehatan Bulan <?= date(" M"); ?></div>
                        <div class="card-category">
                            <div class="input-group">
                                <select class="custom-select" id="cekKesM" onchange="cekKesM(this)">
                                    <option selected>Kategori...</option>
                                    <option value="td">Tekanan Darah</option>
                                    <option value="gd">Gula Darah</option>
                                    <option value="kt">Kolesterol Total</option>
                                    <option value="au">Asam Urat</option>
                                    <option value="ape">Arus Puncak Ekspirasi</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-14"></div>
                                <h6 class="fw-bold mt-3 mb-0">Peringatan</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-15"></div>
                                <h6 class="fw-bold mt-3 mb-0">Normal</h6>
                            </div>
                            <div class="px-2 pb-2 pb-md-0 text-center">
                                <div id="circles-16"></div>
                                <h6 class="fw-bold mt-3 mb-0">Berpotensi Bahaya</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    var lineChart = document.getElementById('statisticsChart').getContext('2d'),
        pieChart = document.getElementById('jk').getContext('2d');

    var myLineChart = new Chart(lineChart, {
        type: 'line',
        data: {
            labels: [<?php
                        foreach ($jumlah_pasien as $x) {
                            echo "'" . $x['Tanggal'] . "',";
                        } ?>],
            datasets: [{
                label: "Peserta Posbindu",
                borderColor: "#00b894",
                pointBorderColor: "#FFF",
                pointBackgroundColor: "#00b894",
                pointBorderWidth: 2,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 1,
                pointRadius: 4,
                backgroundColor: 'transparent',
                fill: true,
                borderWidth: 2,
                data: [<?php
                        foreach ($jumlah_pasien as $x) {
                            echo "'" . $x['Jumlah'] . "',";
                        } ?>]
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    padding: 10,
                    fontColor: '#00b894',
                }
            },
            tooltips: {
                bodySpacing: 4,
                mode: "nearest",
                intersect: 0,
                position: "nearest",
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            layout: {
                padding: {
                    left: 15,
                    right: 15,
                    top: 15,
                    bottom: 15
                }
            }
        }
    });


    var myPieChart = new Chart(pieChart, {
        type: 'pie',
        data: {
            datasets: [{
                data: [<?php
                        foreach ($jk as $x) {
                            echo "'" . floatval($x['jumlah']) . "',";
                        } ?>],
                backgroundColor: ["#f3545d", "#1d7af3"],
                borderWidth: 0
            }],
            labels: ['Perempuan', 'Laki-laki']
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
                fontColor: '#ffffff',
                fontSize: 20,
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


    function cobaY(selectObject) {

        var data = selectObject.value;
        if (data == "imt") {
            Circles.create({
                id: 'circles-1',
                radius: 45,
                value: <?= $imtPY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $imtPY; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-2',
                radius: 45,
                value: <?= $imtNY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $imtNY; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-3',
                radius: 45,
                value: <?= $imtBY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $imtBY; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        } else if (data == "lp") {
            Circles.create({
                id: 'circles-1',
                radius: 45,
                value: <?= $lpPY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $lpPY; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-2',
                radius: 45,
                value: <?= $lpNY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $lpNY; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-3',
                radius: 45,
                value: <?= $lpBY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $lpBY; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        }
    }

    function cekKesY(selectObject) {

        // <option value = "td" > Tekanan Darah < /option> <
        //     option value = "gd" > Gula Darah < /option> <
        //     option value = "kt" > Kolesterol Total < /option> <
        //     option value = "au" > Asam Urat < /option> <
        //     option value = "ape" > Arus Puncak Ekspirasi < /option>
        var data2 = selectObject.value;

        console.log(data2);
        if (data2 == "td") {
            Circles.create({
                id: 'circles-11',
                radius: 45,
                value: <?= $tdPY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $tdPY; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-12',
                radius: 45,
                value: <?= $tdNY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $tdNY; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-13',
                radius: 45,
                value: <?= $tdBY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $tdBY; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        } else if (data2 == "gd") {
            Circles.create({
                id: 'circles-11',
                radius: 45,
                value: <?= $gdPY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $gdPY; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-12',
                radius: 45,
                value: <?= $gdNY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $gdNY; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-13',
                radius: 45,
                value: <?= $gdBY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $gdBY; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        } else if (data2 == "kt") {
            Circles.create({
                id: 'circles-11',
                radius: 45,
                value: <?= $ktPY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $ktPY; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-12',
                radius: 45,
                value: <?= $ktNY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $ktNY; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-13',
                radius: 45,
                value: <?= $ktBY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $ktBY; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        } else if (data2 == "au") {
            Circles.create({
                id: 'circles-11',
                radius: 45,
                value: <?= $auPY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $auPY; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-12',
                radius: 45,
                value: <?= $auNY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $auNY; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-13',
                radius: 45,
                value: <?= $auBY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $auBY; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        } else if (data2 == "ape") {
            Circles.create({
                id: 'circles-11',
                radius: 45,
                value: <?= $apePY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $apePY; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-12',
                radius: 45,
                value: <?= $apeNY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $apeNY; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-13',
                radius: 45,
                value: <?= $apeBY; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $apeBY; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        }
    }


    function cobaM(selectObject) {

        var data = selectObject.value;
        if (data == "imt") {
            Circles.create({
                id: 'circles-4',
                radius: 45,
                value: <?= $imtPM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $imtPM; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-5',
                radius: 45,
                value: <?= $imtNM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $imtNM; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-6',
                radius: 45,
                value: <?= $imtBM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $imtBM; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        } else if (data == "lp") {
            Circles.create({
                id: 'circles-4',
                radius: 45,
                value: <?= $lpPM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $lpPM; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-5',
                radius: 45,
                value: <?= $lpNM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $lpNM; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-6',
                radius: 45,
                value: <?= $lpBM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $lpBM; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        }
    }

    function cekKesM(selectObject) {

        // <option value = "td" > Tekanan Darah < /option> <
        //     option value = "gd" > Gula Darah < /option> <
        //     option value = "kt" > Kolesterol Total < /option> <
        //     option value = "au" > Asam Urat < /option> <
        //     option value = "ape" > Arus Puncak Ekspirasi < /option>
        var data2 = selectObject.value;

        console.log(data2);
        if (data2 == "td") {
            Circles.create({
                id: 'circles-14',
                radius: 45,
                value: <?= $tdPM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $tdPM; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-15',
                radius: 45,
                value: <?= $tdNM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $tdNM; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-16',
                radius: 45,
                value: <?= $tdBM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $tdBM; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        } else if (data2 == "gd") {
            Circles.create({
                id: 'circles-14',
                radius: 45,
                value: <?= $gdPM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $gdPM; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-15',
                radius: 45,
                value: <?= $gdNM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $gdNM; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-16',
                radius: 45,
                value: <?= $gdBM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $gdBM; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        } else if (data2 == "kt") {
            Circles.create({
                id: 'circles-14',
                radius: 45,
                value: <?= $ktPM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $ktPM; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-15',
                radius: 45,
                value: <?= $ktNM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $ktNM; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-16',
                radius: 45,
                value: <?= $ktBM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $ktBM; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        } else if (data2 == "au") {
            Circles.create({
                id: 'circles-14',
                radius: 45,
                value: <?= $auPM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $auPM; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-15',
                radius: 45,
                value: <?= $auNM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $auNM; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-16',
                radius: 45,
                value: <?= $auBM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $auBM; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        } else if (data2 == "ape") {
            Circles.create({
                id: 'circles-14',
                radius: 45,
                value: <?= $apePM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $apePM; ?>,
                colors: ['#f1f1f1', '#FF9E27'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-15',
                radius: 45,
                value: <?= $apeNM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $apeNM; ?>,
                colors: ['#f1f1f1', '#2BB930'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })

            Circles.create({
                id: 'circles-16',
                radius: 45,
                value: <?= $apeBM; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $apeBM; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        }
    }
</script>

<?= $this->endSection(); ?>