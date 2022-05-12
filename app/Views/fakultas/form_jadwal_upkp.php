<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('JadwalKP/listUjianKp'); ?>">Jadwal UPKP</a></li>
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
                                            <a class="nav-link active ps-0" id="group-tab" data-bs-toggle="tab" href="#tabgroup" role="tab" aria-controls="tabgroup" aria-selected="true">
                                                Form Pengumuman Jadwal Kerja Praktek Mahasiswa
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="tabgroup" role="tabpanel" aria-labelledby="tabgroup">
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-between align-items-start">
                                                            <div class="mb-4">
                                                                <h2 class="card-title fs-6 card-title-dash">Form Jadwal Kerja Praktek Mahasiswa</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row">


                                                            <?php
                                                            $i = 0;
                                                            if ($dataMhs != null) {
                                                                foreach ($dataMhs as $d) {
                                                                    if ($i < 3) {
                                                            ?>
                                                                        <div class="col-xl-3 col-md-8 grid-margin stretch-card">
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    <h4 class="mb-4"><?= $i == 0 ? 'Ketua' : 'Anggota ' . $i ?></h4>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="nimketua" id="nimketua" placeholder="NIM Mahasiswa" class="typeahead form-control" readonly value="<?= $d->STUDENTID ?>">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="namaketua" id="namaketua" placeholder="Nama Lengkap Mahasiswa" class="form-control" readonly value="<?= $d->FULLNAME ?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                            <?php
                                                                        $i++;
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-xl-6 col-md-6 grid-margin stretch-card">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label for="programstudi">Program Studi</label>
                                                                            <input type="text" name="programstudi" id="programstudi" class="form-control" placeholder="Program Studi Mahasiswa" readonly disabled value="<?= $dataMhs[0]->STUDYPROGRAMNAME ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="fakultas">Fakultas</label>
                                                                            <input type="text" name="fakultas" id="fakultas" class="form-control" placeholder="Fakultas Mahasiswa" readonly disabled value="<?= $dataMhs[0]->FACULTYNAME ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="fakultas">Lokasi KP</label>
                                                                            <input type="text" name="fakultas" id="fakultas" class="form-control" placeholder="Fakultas Mahasiswa" readonly disabled value="<?= $dataMhs[0]->COMPANYNAME ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-xl-6  col-md-6 grid-margin stretch-card">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <form id="setTanggalKp" action="<?= base_url('JadwalKP/setTanggalKp') ?>" method="post" enctype="multipart/form-data">
                                                                                <?= csrf_field(); ?>
                                                                                <input type="hidden" name="groupid" value="<?= $dataMhs[0]->GROUPID ?>">
                                                                                <input type="hidden" name="prodi" value="<?= $dataMhs[0]->STUDYPROGRAMID ?>">
                                                                                <div class="form-group">
                                                                                    <label for="tanggal-upkp">Tanggal ujian kerja praktek</label>
                                                                                    <input type="date" name="tanggal-upkp" class="form-control" autocomplete="off" id="tanggal-upkp">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="start-time">Periode mulai kerja praktek</label>
                                                                                    <input type="time" name="start-time" class="form-control" id="start-time">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="end-time">Periode mulai kerja praktek</label>
                                                                                    <input type="time" name="end-time" class="form-control" id="end-time">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <button type="reset" id="btn-cancel-company" class="btn btn-secondary btn-sm text-dark">Cancel</button>
                                                                                    <button type="submit" id="btn-submit" class="btn btn-primary btn-sm text-light">Submit Form</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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


    <?= $this->endSection(); ?>

    <?= $this->Section('injectCSS'); ?>
    <style>
        .undefined {
            text-align: center;
            margin-top: 1.4rem;
        }

        .tt-menu {
            top: 0px;
            background: #ffffff;
            opacity: 1;
        }
    </style>
    <?= $this->endSection(); ?>

    <?= $this->Section('injectJS'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#btn-submit').on("click", function(e) {
                e.preventDefault();
                swal({
                        title: "Apakah anda yakin?",
                        text: "Klik OK untuk menyimpan!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((result) => {
                        if (result) { // if confirm clicked....
                            $('#setTanggalKp').closest('form').submit(); // submit form
                            // window.location.replace("<?= base_url('DosbingController/simpandata'); ?>");
                        }
                    });
            });


            const lecturer = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {
                    url: '<?= base_url('documents/get.json'); ?>', //data statis file perlu ada agar typeahead bloodhound bisa jalan!
                    transform: function(response) {
                        return $.map(response, function(lecturer) {
                            return {
                                value: lecturer.LECTURERCODE,
                                nip: lecturer.EMPLOYEEID,
                                nama: lecturer.LECTURERNAME,
                            };
                        });
                        // console.log(dt);

                    }
                },
                remote: {
                    wildcard: '%QUERY',
                    url: '<?= base_url('DosbingController/getlecturer'); ?>?code=%QUERY', //data online
                    transform: function(response) {
                        return $.map(response, function(lecturer) {
                            return {
                                value: lecturer.LECTURERCODE,
                                nip: lecturer.EMPLOYEEID,
                                nama: lecturer.LECTURERNAME,
                            };
                        });
                        // console.log(dt);

                    }
                }
            });

            // Instantiate the Typeahead UI
            $('.typeahead').typeahead(null, {
                displayKey: 'value',
                display: 'value',
                source: lecturer,
                templates: {
                    empty: 'No lecturer code found',
                    suggestion: function(item) {
                        console.log(item);
                        return "<div>" + item.value + "-" + item.nama + "</div>";
                    },
                    pending: function(query) {
                        return '<div>Loading...</div>';
                    }
                }
            });

            $('#kodedosen').bind('typeahead:select', function(ev, suggestion) {
                console.log('Selection: ' + suggestion.nama);
                $('#kodedosen').val(suggestion.value);
                $('#NIP').val(suggestion.nip);
                $('#namadosen').val(suggestion.nama);
            });
        });
    </script>
    <?= $this->endSection(); ?>