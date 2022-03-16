<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                   
                    <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <?php if(user()->usergroupid==1){ ?>
                    <div class="sb-sidenav-menu-heading">Administrator</div>
                    <a class="nav-link" href="<?= base_url('users'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        User Management
                    </a>
                    <?php } ?>

                    <?php if(user()->usergroupid==2 || user()->usergroupid==1){ ?>
                    <div class="sb-sidenav-menu-heading">Fakultas</div>
                    <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Review Permohonan KP
                    </a>
                    <a class="nav-link" href="<?= base_url('review-survey-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                        Review Survey KP
                    </a>
                    <a class="nav-link" href="<?= base_url('penentuan-lokasi-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-spinner"></i></div>
                        Penentuan Lokasi KP
                    </a>
                    <a class="nav-link" href="<?= base_url('pengumuman-jadwal-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Pengumuman Jadwal KP
                    </a>
                    <a class="nav-link" href="<?= base_url('pengumuman-jadwal-upkp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                        Pengumuman Jadwal UPKP
                    </a>
                    <a class="nav-link" href="<?= base_url('ucapan-terima-kasih'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-spinner"></i></div>
                        Ucapan Terima Kasih
                    </a>
                    <?php } ?>

                    <?php if(user()->usergroupid==3 || user()->usergroupid==1){ ?>
                    <div class="sb-sidenav-menu-heading">BPA</div>
                    <a class="nav-link" href="<?= base_url('penerbitan-surat-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Penerbitan Surat KP
                    </a>
                    <a class="nav-link" href="<?= base_url('penyerahan-surat-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Penyerahan Surat KP
                    </a>
                    <a class="nav-link" href="<?= base_url('penyerahan-ba-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Penyerahan BA KP
                    </a>
                    <?php } ?>

                    <?php if(user()->usergroupid==4 || user()->usergroupid==1){ ?>
                    <div class="sb-sidenav-menu-heading">Pembimbing Akademik</div>
                    <a class="nav-link" href="<?= base_url('pembekalan-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Pembekalan KP
                    </a>
                    <a class="nav-link" href="<?= base_url('konsultasi-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Konsultasi KP
                    </a>
                    <a class="nav-link" href="<?= base_url('tandatangan-BA'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Tanda Tangan BA KP
                    </a>
                    <a class="nav-link" href="<?= base_url('rekap-nilai-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Rekap Nilai KP
                    </a>
                    <?php } ?>

                    <?php if(user()->usergroupid==5 && user()->usergroupid==1){ ?>
                    <div class="sb-sidenav-menu-heading">Pembimbing Lapangan</div>
                    <a class="nav-link" href="<?= base_url('pemantauan-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Pemantauan KP
                    </a>
                    <a class="nav-link" href="<?= base_url('bimbingan-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Bimbingan KP
                    </a>
                    <a class="nav-link" href="<?= base_url('penilaian-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Penilaian KP
                    </a>
                    <?php } ?>

                    <?php if(user()->usergroupid==6 || user()->usergroupid==1){ ?>
                    <div class="sb-sidenav-menu-heading">Penguji</div>
                    <a class="nav-link" href="<?= base_url('review-laporan-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Review Laporan KP
                    </a>
                    <?php } ?>

                    <?php if(user()->usergroupid==7 || user()->usergroupid==1){ ?>
                    <div class="sb-sidenav-menu-heading">Mahasiswa</div>
                    <a class="nav-link" href="<?= base_url('pendaftaran-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Pendaftaran KP
                    </a>
                    <a class="nav-link" href="<?= base_url('survey-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Survey KP
                    </a>
                    <a class="nav-link" href="<?= base_url('proposal-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Proposal KP
                    </a>
                    <a class="nav-link" href="<?= base_url('surat-permohonan-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Surat Permohonan KP
                    </a>
                    <a class="nav-link" href="<?= base_url('surat-balasan-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Surat Balasan KP
                    </a>
                    <a class="nav-link" href="<?= base_url('pakta-integritas-KP'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Pakta Integritas KP
                    </a>
                    <a class="nav-link" href="<?= base_url('pelaksanaan-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Pelaksanaan-KP
                    </a>
                    <a class="nav-link" href="<?= base_url('laporan-KP'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Laporan KP
                    </a>
                    <a class="nav-link" href="<?= base_url('revisi-laporan-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Revisi Laporan KP
                    </a>
                    <a class="nav-link" href="<?= base_url('presentasi'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Presentasi
                    </a>
                    <a class="nav-link" href="<?= base_url('pengumpulan-dokumen'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Pengumpulan Dokumen
                    </a>
                    <?php } ?>

                    <div class="sb-sidenav-menu-heading">CRUD</div>
                    <a class="nav-link" href="<?= base_url('builder'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Query Builder
                    </a>
                    <a class="nav-link" href="<?= base_url('objects'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                        Object Model
                    </a>
                    <a class="nav-link" href="<?= base_url('ajax-jquery'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-spinner"></i></div>
                        Ajax jQuery
                    </a>
                    <div class="sb-sidenav-menu-heading">Report</div>
                    <a class="nav-link" href="<?= base_url('export-pdf'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-pdf"></i></div>
                        PDF
                    </a>
                    <a class="nav-link" href="<?= base_url('export-excel'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-excel"></i></div>
                        EXCEL
                    </a>
                    <div class="sb-sidenav-menu-heading">Logout</div>
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                        <div class="sb-nav-link-icon"><i class="fas fa-power-off"></i></div>
                        Logout
                    </a>  
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= user()->username; ?>
                <br>
                (<?= $usergroup; ?>)
            </div>
        </nav>
    </div>