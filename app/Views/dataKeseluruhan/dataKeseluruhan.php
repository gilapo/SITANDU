<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12 ml-auto mr-auto">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-title fw-bold">Data Keseluruhan</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor Identitas</th>
                                    <th>Nama</th>
                                    <th>Tanggal Input</th>
                                    <th>Usia</th>
                                    <th>Jabatan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>DM Keluarga</th>
                                    <th>HT Keluarga</th>
                                    <th>Jantung Keluarga</th>
                                    <th>Stroke Keluarga</th>
                                    <th>Asma Keluarga</th>
                                    <th>Kanker Keluarga</th>
                                    <th>Kolesterol Keluarga</th>
                                    <th>DM Diri Sendiri</th>
                                    <th>HT Diri Sendiri</th>
                                    <th>Jantung Diri Sendiri</th>
                                    <th>Stroke Diri Sendiri</th>
                                    <th>Asma Diri Sendiri</th>
                                    <th>Kanker Diri Sendiri</th>
                                    <th>Kolesterol Diri Sendiri</th>
                                    <th>Merokok</th>
                                    <th>Makan Sayur dan Buah Kurang dari 5 Porsi</th>
                                    <th>Kurang Aktivitas Fisik</th>
                                    <th>Alkohol</th>
                                    <th>Sulit Tidur Mapsu Makan</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th>
                                    <th>Lingkar Perut</th>
                                    <th>IMT</th>
                                    <th>Sistole</th>
                                    <th>Diastole</th>
                                    <th>GDS</th>
                                    <th>Kolesterol</th>
                                    <th>Asam Urat</th>
                                    <th>Ekspirasi</th>
                                    <th>Benjolan pada Payudara</th>
                                    <th>IVA</th>
                                    <th>Kadar Alkohol</th>
                                    <th>Tes Amfetamin</th>
                                    <th>Masalah yang Ditemukan</th>
                                    <th>Saran</th>
                                    <th>Rujukan</th>
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
                                        <td><?php if ($data->DM_2 == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->HT_2 == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->jantung_2 == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->stroke_2 == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->asma_2 == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->kanker_2 == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->kolesterol_2 == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->merokok == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->sayur_buah == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->kurang_aktivitas_fisik == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->alkohol == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?php if ($data->sulit_tidur_napsu_makan == 1) {
                                                echo "Ya";
                                            } else {
                                                echo "Tidak";
                                            } ?></td>
                                        <td><?= $data->bb; ?></td>
                                        <td><?= $data->tb; ?></td>
                                        <td><?= $data->lp; ?></td>
                                        <td><?= $data->imt; ?></td>
                                        <td><?= $data->sistole; ?></td>
                                        <td><?= $data->diastole; ?></td>
                                        <td><?= $data->gds; ?></td>
                                        <td><?= $data->kolesterol; ?></td>
                                        <td><?= $data->asam_urat; ?></td>
                                        <td><?= $data->ekspirasi; ?></td>
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
                                        <td><?= $data->masalah_yang_ditemukan; ?></td>
                                        <td><?= $data->saran; ?></td>
                                        <td><?= $data->rujukan; ?></td>
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
        var $dTable = $('#dataTable').DataTable({
            scrollY: "1000px",
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            columnDefs: [{
                    width: 150,
                    targets: [39, 40, 41],
                },
                {
                    width: 100,
                    targets: [2],
                },
                {
                    searchable: true,
                    targets: 1
                }
            ],
            "rowCallback": function(row, data) {
                if (data[5] == "Laki-Laki") {
                    if (data[28] < 18) {
                        $('td:eq(28)', row).addClass('bg-danger');
                    } else if (data[28] >= 18 && data[28] <= 25) {
                        $('td:eq(28)', row).addClass('bg-success');
                    } else if (data[28] >= 26 && data[28] <= 27) {
                        $('td:eq(28)', row).addClass('bg-warning');
                    } else if (data[28] >= 28) {
                        $('td:eq(28)', row).addClass('bg-danger');
                    }
                } else if (data[5] == "Perempuan") {
                    if (data[28] < 17) {
                        $('td:eq(28)', row).addClass('bg-danger');
                    } else if (data[28] >= 17 && data[28] <= 23) {
                        $('td:eq(28)', row).addClass('bg-success');
                    } else if (data[28] >= 24 && data[28] <= 27) {
                        $('td:eq(28)', row).addClass('bg-warning');
                    } else if (data[28] >= 27) {
                        $('td:eq(28)', row).addClass('bg-danger');
                    }

                }
            },
            "dom": "<'row'<'col-sm-4'l><'col-sm-5' <'datesearchbox'>><'col-sm-3'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>"
        });

        //menambahkan daterangepicker di dalam datatables
        $("div.datesearchbox").html('<div class="input-group"> <div class="input-group-addon"> <i class="glyphicon glyphicon-calendar"></i> </div><input type="text" class="form-control pull-right" id="datesearch" placeholder="Cari Berdasar Tanggal.."> </div>');

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
            $dTable.draw();
        });

        $('#datesearch').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
            start_date = '';
            end_date = '';
            $.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(DateFilterFunction, 1));
            $dTable.draw();
        });
    });
</script>
<?= $this->endSection(); ?>