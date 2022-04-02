<?= $this->extend('layout/templates'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="grey-bg container-fluid">

            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase"><?= $title; ?></h4>
                    <p>Kerja Praktek dan Magang</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active ps-0" id="kp-tab" data-bs-toggle="tab" href="#tabkp"
                                        role="tab" aria-controls="tabmg" aria-selected="true">Kerja Praktek</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="mg-tab" data-bs-toggle="tab" href="#tabmg" role="tab"
                                        aria-selected="false">Magang</a>
                                </li>
                            </ul>
                            <!-- <div>
                              <div class="btn-wrapper">
                                <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                                <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                                <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                              </div>
                            </div> -->
                        </div>
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="tabkp" role="tabpanel" aria-labelledby="tabkp">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <?php $i = 0;
                                    foreach ($menu as $key => $value):
                                      $i++; ?>
                                    <div class="col-xl-3 col-sm-6 col-12">

                                        <div class="card rounded-0">
                                            <div class="card-content">
                                                <div class="card-header ">
                                                    <h4 class="float-left text-dark"><?= $i; ?>. <?= $key; ?></h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="media-body">
                                                        <p class="text-dark">Status</p>
                                                        <p class="text-danger">Belum Daftar</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <a class="btn" href="<?= base_url($value); ?>">Detail</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="tab-pane fade active" id="tabmg" role="tabpanel" aria-labelledby="tabmg">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="card rounded-0">
                                            <div class="card-content">
                                                <div class="card-header ">
                                                    <h4 class="float-left text-dark">1. Permohonan Magang</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="media-body">
                                                        <p class="text-dark">Status</p>
                                                        <p class="text-danger">Belum Mengajukan</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <a class="btn" href="<?= base_url('#'); ?>">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="card rounded-0">
                                            <div class="card-content">
                                                <div class="card-header ">
                                                    <h4 class="float-left text-dark">1. Laporan Magang</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="media-body">
                                                        <p class="text-dark">Status</p>
                                                        <p class="text-danger">Belum Melaporkan</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <a class="btn" href="<?= base_url('#'); ?>">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>
</div>

<?= $this->endSection(); ?>