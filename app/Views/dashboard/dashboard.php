<?= $this->extend('templates/superAdminLayout'); ?>
<?= $this->section('content'); ?>
<?php include('perhitungan.php'); ?>
<div class="page-inner mt--5">
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
                    <div class="card-title">Persebaran Interpetasi Antropometri <?= date(" Y"); ?></div>
                    <div class="card-category">
                        <div class="input-group">
                            <select class="custom-select" id="antro" onchange="coba(this)">
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
                    <div class="card-title">Persebaran Interpetasi Cek Kesehatan <?= date(" Y"); ?></div>
                    <div class="card-category">
                        <div class="input-group">
                            <select class="custom-select" id="cekKes" onchange="cekKes(this)">
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


    function coba(selectObject) {

        var data = selectObject.value;
        if (data == "imt") {
            Circles.create({
                id: 'circles-1',
                radius: 45,
                value: <?= $imtP; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $imtP; ?>,
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
                value: <?= $imtN; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $imtN; ?>,
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
                value: <?= $imtB; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $imtB; ?>,
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
                value: <?= $lpP; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $lpP; ?>,
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
                value: <?= $lpN; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $lpN; ?>,
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
                value: <?= $lpB; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $lpB; ?>,
                colors: ['#f1f1f1', '#F25961'],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            })
        }
    }

    function cekKes(selectObject) {

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
                value: <?= $tdP; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $tdP; ?>,
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
                value: <?= $tdN; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $tdN; ?>,
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
                value: <?= $tdB; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $tdB; ?>,
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
                value: <?= $gdP; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $gdP; ?>,
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
                value: <?= $gdN; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $gdN; ?>,
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
                value: <?= $gdB; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $gdB; ?>,
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
                value: <?= $ktP; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $ktP; ?>,
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
                value: <?= $ktN; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $ktN; ?>,
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
                value: <?= $ktB; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $ktB; ?>,
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
                value: <?= $auP; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $auP; ?>,
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
                value: <?= $auN; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $auN; ?>,
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
                value: <?= $auB; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $auB; ?>,
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
                value: <?= $apeP; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $apeP; ?>,
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
                value: <?= $apeN; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $apeN; ?>,
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
                value: <?= $apeB; ?>,
                maxValue: 100,
                width: 7,
                text: <?= $apeB; ?>,
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