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
                                            <a class="nav-link active ps-0" id="group-tab" data-bs-toggle="tab" href="#tabgroup" role="tab" aria-controls="tabgroup" aria-selected="true">
                                                Data Group Kerja Praktek Mahasiswa
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="upkp-tab" data-bs-toggle="tab" href="#tabupkp" role="tab" aria-controls="tabupkp" aria-selected="true">
                                                Data Jadwal Ujian Kerja Praktek Mahasiswa
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content tab-content-basic">
                                <div class="tab-pane fade show active" id="tabgroup" role="tabpanel" aria-labelledby="tabgroup">
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h2 class="card-title fs-6 card-title-dash">Daftar Data Group Kerja Praktek Mahasiswa</h2>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Mahasiswa</th>
                                                                    <th>Fakultas & Prodi</th>
                                                                    <th>Lokasi KP</th>
                                                                    <th>Nama Pembimbing</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $prodi = "";
                                                                $fakultas = "";

                                                                foreach ($dataGroup as $data) {
                                                                ?>
                                                                    <tr onClick="window.open('<?= base_url() ?>/JadwalKP/formUjianKp/<?= $data->GROUPID ?>','_self');">
                                                                        <td>
                                                                            <?php foreach ($dataUpkp as $dataTeam) {
                                                                                if ($dataTeam->GROUPID == $data->GROUPID) { ?>
                                                                                    <p><?= $dataTeam->FULLNAME ?></p>
                                                                            <?php
                                                                                    $prodi = $dataTeam->STUDYPROGRAMNAME;
                                                                                    $fakultas = $dataTeam->FACULTYNAME;
                                                                                }
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $fakultas ?></h6>
                                                                            <p><?= $prodi ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $data->COMPANYNAME ?></h6>
                                                                            <p><?= $data->ADDRESS ?></p>
                                                                            <p><?= $data->CITY ?>, <?= $data->PROVINCE ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $data->LECTURERNAME ?></h6>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                        <?=
                                                        $pager->links('group-1', 'bootstrap_pagination')
                                                        ?>
                                                        <?php
                                                        if ($dataUpkpGroup == null) { ?>
                                                            <h5 class="undefined">Data Jadwal Kerja Praktek Tidak Ditemukan</h5>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabupkp" role="tabpanel" aria-labelledby="tabupkp">
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h2 class="card-title fs-6 card-title-dash">Daftar Data Jadwal Ujian Kerja Praktek Mahasiswa</h2>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Mahasiswa</th>
                                                                    <th>Fakultas & Prodi</th>
                                                                    <th>Tanggal Ujian KP</th>
                                                                    <th>Waktu Mulai Ujian</th>
                                                                    <th>Waktu Akhir Ujian</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $prodi = "";
                                                                $fakultas = "";
                                                                foreach ($dataUpkpGroup as $data) {
                                                                ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php foreach ($dataUpkp as $dataTeam) {
                                                                                if ($dataTeam->GROUPID == $data->GROUPID) { ?>
                                                                                    <p><?= $dataTeam->FULLNAME ?></p>
                                                                            <?php
                                                                                    $prodi = $dataTeam->STUDYPROGRAMNAME;
                                                                                    $fakultas = $dataTeam->FACULTYNAME;
                                                                                }
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $fakultas ?></h6>
                                                                            <p><?= $prodi ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $data->DAY . ", " . $data->DATE ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <?php
                                                                            if ($data->STARTTIME) {
                                                                            ?>
                                                                                <h6><?= $data->STARTTIME ?></h6>
                                                                            <?php
                                                                            } else {
                                                                            ?>
                                                                                <p>Belum Ditentukan</p>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php
                                                                            if ($data->ENDTIME) {
                                                                            ?>
                                                                                <h6><?= $data->ENDTIME ?></h6>
                                                                            <?php
                                                                            } else {
                                                                            ?>
                                                                                <p>Belum Ditentukan</p>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                        <?=
                                                        $pager->links('group-2', 'bootstrap_pagination')
                                                        ?>
                                                        <?php
                                                        if ($dataUpkpGroup == null) { ?>
                                                            <h5 class="undefined">Data Jadwal Kerja Praktek Tidak Ditemukan</h5>
                                                        <?php } ?>
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

        tr {
            cursor: pointer;
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
                            $('#pilihdosbing').closest('form').submit(); // submit form
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