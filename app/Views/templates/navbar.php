            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="<?= $background; ?>">
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="<?= base_url(); ?>/assets/img/user.svg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>

                                    <a class="dropdown-item"><?php echo $_SESSION['nama_user']; ?></a>
                                    <a class="dropdown-item"><?php echo $_SESSION['no_identitas']; ?></a>
                                    <a class="dropdown-item"><?php echo $_SESSION['instansi']; ?></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url(); ?>/Login/logoutAct">Logout</a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>

            </nav>
            <!-- End Navbar -->
            </div>