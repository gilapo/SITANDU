            <!-- Sidebar -->
            <div class="sidebar sidebar-style-2" data-background-color="dark2">
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <ul class="nav nav-primary" id="sidebar">
                            <li class="nav-item active" id="dashboard">
                                <a href="<?= base_url(); ?>" class="collapsed" aria-expanded="false">
                                    <i class="fas fa-home"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Menu</h4>
                            </li>
                            <li class="nav-item active" id="dataDiri">
                                <a href="<?= base_url(); ?>/isiDataDiri">
                                    <i class="fas fa-user-alt"></i>
                                    <p>Data Diri</p>
                                </a>
                            </li>
                            <li class="nav-item active" id="riwayatPenyakit">
                                <a href="<?= base_url(); ?>/isiRiwayatPenyakit">
                                    <i class="fas fa-head-side-mask"></i>
                                    <p>Riwayat penyait</p>
                                </a>
                            </li>
                            <li class="nav-item active" id="antropometri">
                                <a href="<?= base_url(); ?>/isiAntropometri">
                                    <i class="fas fa-clipboard-list"></i>
                                    <p>Antropometri</p>
                                </a>
                            </li>
                            <li class="nav-item active" id="cekKesehatan">
                                <a href="<?= base_url(); ?>/isiCekKesehatan">
                                    <i class="fas fa-tasks"></i>
                                    <p>Cek Kesehatan</p>
                                </a>
                            </li>
                            <li class="nav-item active" id="rekapData">
                                <a href="<?= base_url(); ?>/isiRekapData">
                                    <i class="fas fa-table"></i>
                                    <p>Hasil Data Akhir</p>
                                </a>
                            </li>
                            <li class="nav-item active" id="dataKeseluruhan">
                                <a href="<?= base_url(); ?>/dataKeseluruhan">
                                    <i class="fas fa-book"></i>
                                    <p>Data Keseluruhan</p>
                                </a>
                            </li>
                            <?php if ($_SESSION['id_level'] == 1) {
                                print('<li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Administrator</h4>
                            </li>
                            <li class="nav-item active" id="user">
                                <a href="'); ?><?= base_url(); ?><?php echo ('/user">
                                    <i class="fas fa-user"></i>
                                    <p>user</p>
                                </a>
                            </li>');
                                                                }
                                                                    ?>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <hr>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>
                // var btnContainer = document.getElementById("sidebar");
                // // Get all buttons with class="btn" inside the container
                // var btns = btnContainer.getElementsByClassName("nav-item");
                // // Loop through the buttons and add the active class to the current/clicked button
                // for (var i = 0; i < btns.length; i++) {
                //     btns[i].addEventListener("click", function() {
                //         var current = document.getElementsByClassName("active");
                //         current[0].className = current[0].className.replace(" active", "");
                //         this.className += " active";
                //     });

                // }

                //var nav = document.getElementsByClassName('nav-item');
                var id_level = <?php echo $_SESSION['id_level']; ?>;
                var ds = document.getElementById('dashboard')
                var dd = document.getElementById('dataDiri');
                var rp = document.getElementById('riwayatPenyakit')
                var an = document.getElementById('antropometri')
                var ck = document.getElementById('cekKesehatan');
                var dk = document.getElementById('rekapData')
                var rd = document.getElementById('dataKeseluruhan')
                var us = document.getElementById('user');
                var url = window.location.href;
                dd.classList.remove("active");
                rp.classList.remove("active");
                an.classList.remove("active");
                ck.classList.remove("active");
                dk.classList.remove("active");
                rd.classList.remove("active");
                if (id_level == 1) {
                    us.classList.remove("active");
                }


                if (url == "<?= base_url(); ?>/isiDataDiri") {
                    ds.classList.remove("active");
                    dd.classList.add("active");
                } else if (url == "<?= base_url(); ?>/isiRiwayatPenyakit") {
                    ds.classList.remove("active");
                    rp.classList.add("active");
                } else if (url == "<?= base_url(); ?>/isiAntropometri") {
                    ds.classList.remove("active");
                    an.classList.add("active");
                } else if (url == "<?= base_url(); ?>/isiCekKesehatan") {
                    ds.classList.remove("active");
                    ck.classList.add("active");
                } else if (url == "<?= base_url(); ?>/isiRekapData") {
                    ds.classList.remove("active");
                    dk.classList.add("active");
                } else if (url == "<?= base_url(); ?>/dataKeseluruhan" || url == "<?= base_url(); ?>/Admin/editPasien" || url == "<?= base_url(); ?>/Admin/dataKeseluruhan/dataKeseluruhan") {
                    ds.classList.remove("active");
                    rd.classList.add("active");
                } else if (url == "<?= base_url(); ?>/user") {
                    ds.classList.remove("active");
                    us.classList.add("active");
                }
            </script>