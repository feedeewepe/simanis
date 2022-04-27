<?= $this->extend('layout/templates'); ?>

<?= $this->Section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <?= view('Myth\Auth\Views\_message_block'); ?>
                    <?php
                    $errors = session()->getFlashdata('failed');
                    if (!empty($errors)) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-times"></i> Failed</strong> data not added to database.
                            <ul>
                                <?php foreach ($errors as $e) { ?>
                                    <li><?= esc($e); ?></li>
                                <?php } ?>
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashData('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-check"></i> Success</strong> <?= session()->getFlashData('success'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="modal-body">

                        <div class="row">
                            <div class="home-tab">
                                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active ps-0" id="group-tab" data-bs-toggle="tab" href="#tabgroup" role="tab" aria-controls="tabgroup" aria-selected="true">Status Presentasi</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="tabgroup" role="tabpanel" aria-labelledby="tabgroup">
                                        <div class="row">
                                            <div class="col-xl-12  col-md-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Status Presentasi Kerja Praktek</h4>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nama Anggota Kelompok</th>
                                                                        <th>Lokasi KP</th>
                                                                        <th>Tanggal Presentasi</th>
                                                                        <th>Status</th>
                                                                        <th>Nilai Presentasi KP</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <?php
                                                                            if ($dataMhs != null) {
                                                                                foreach ($dataMhs as $mhs) {
                                                                                    echo $mhs->FULLNAME . '</br>';
                                                                                }
                                                                            }
                                                                            ?>
                                                                        </td>
                                                                        <td><?= $lokasiKp != null ? $lokasiKp : '' ?></td>
                                                                        <td><?= $tanggalPpt != null ? $tanggalPpt : '' ?></td>
                                                                        <td>
                                                                            <?php
                                                                            if ($status == 'Accepted') {
                                                                            ?>
                                                                                <label class="badge badge-opacity-success">Accepted</label>
                                                                            <?php
                                                                            } else if ($status == 'Revisi') {
                                                                            ?>
                                                                                <label class="badge badge-opacity-warning">Revisi</label>
                                                                            <?php
                                                                            } else if ($status == 'Pending') {
                                                                            ?>
                                                                                <label class="badge badge-danger">Belum Submit</label>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </td>


                                                                        <td><?= $nilaiKp != null ? $nilaiKp : '' ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
    </main>


    <?= $this->endSection(); ?>

    <?= $this->Section('injectCSS'); ?>
    <style>
        .tt-menu {
            top: 0px;
            background: #ffffff;
            opacity: 1;
        }

        .badge {
            font-size: 0.9rem;
        }
    </style>
    <?= $this->endSection(); ?>

    <?= $this->Section('injectJS'); ?>
    <script type="text/javascript">
        $(document).ready(function() {

        });
    </script>
    <?= $this->endSection(); ?>