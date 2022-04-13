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
                                                Data mahasiswa yang mengajukan bimbingan
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="group-tab" data-bs-toggle="tab" href="#tabinstansi" role="tab" aria-controls="tabgroup" aria-selected="true">
                                                Data mahasiswa bimbingan KP
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
                                                            <div>
                                                                <h2 class="card-title fs-6 card-title-dash">Daftar mahasiswa yang mengajukan bimbingan</h2>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive  mt-1">
                                                            <table class="table select-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Nama Mahasiswa</th>
                                                                        <th>Program Studi</th>
                                                                        <th>Lokasi Kerja Praktek</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <?php
                                                                for ($i = 0; $i < count($student_data); $i++) { ?>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex">
                                                                                    <h6><?= $i + 1 ?>.</h6>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                for ($j = 0; $j < count($student_data[$i]); $j++) {
                                                                                ?>
                                                                                    <p class="text-dark"><?= $student_data[$i][$j]->FULLNAME ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <h6>Rekayasa Perangkat Lunak</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6><?= $company_data[$i][0]["COMPANYNAME"] ?></h6>
                                                                                <p><?= $company_data[$i][0]["ADDRESS"] ?></p>
                                                                            </td>
                                                                            <td>
                                                                                <form id="pilihdosbing" action="<?= base_url('DosbingController/approval'); ?>" method="post">
                                                                                    <?= csrf_field(); ?>
                                                                                    <input type="hidden" name="groupid" value="<?= $student_data[$i][0]->GROUPID ?>">
                                                                                    <button type="submit" name="acc" class="btn btn-success btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-check"></i>Acc</button>
                                                                                    <button type="submit" name="reject" class="btn btn-danger btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-edit"></i>Reject</button>

                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                <?php
                                                                }
                                                                ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabinstansi" role="tabpanel" aria-labelledby="tabinstansi">
                                        <?= csrf_field(); ?>
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h2 class="card-title fs-6 card-title-dash">Daftar mahasiswa bimbingan KP</h2>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive  mt-1">
                                                            <table class="table select-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No.</th>
                                                                        <th>Nama Mahasiswa</th>
                                                                        <th>Program Studi</th>
                                                                        <th>Lokasi Kerja Praktek</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <?php
                                                                for ($i = 0; $i < count($student_fixed); $i++) { ?>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex">
                                                                                    <h6><?= $i + 1 ?>.</h6>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <?php
                                                                                for ($j = 0; $j < count($student_fixed[$i]); $j++) {
                                                                                ?>
                                                                                    <p class="text-dark"><?= $student_fixed[$i][$j]->FULLNAME ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </td>
                                                                            <td>
                                                                                <h6>Rekayasa Perangkat Lunak</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6><?= $company_fixed[$i][0]["COMPANYNAME"] ?></h6>
                                                                                <p><?= $company_fixed[$i][0]["ADDRESS"] ?></p>
                                                                            </td>
                                                                            <td>
                                                                                <span class="badge rounded-pill bg-success">Accepted</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                <?php
                                                                }
                                                                ?>
                                                            </table>
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
            // $('#fakultas').change(function() {
            //     var fakultasid = $(this).val();
            //     $.ajax({
            //         url: "<?php echo base_url('KerjaPraktek/prodiFakultas'); ?>",
            //         method: "GET",
            //         data: {
            //             fakultasid: fakultasid
            //         },
            //         async: true,
            //         dataType: 'json',
            //         success: function(data) {
            //             var html = '<option value="">Pilih Prodi</option>';
            //             var i;
            //             for (i = 0; i < data.length; i++) {
            //                 html += '<option value=' + data[i].STUDYPROGRAMID + '>' + data[i]
            //                     .STUDYPROGRAMNAME + '</option>';
            //             }
            //             $('#prodi').html(html);

            //         }
            //     });
            //     return false;
            // });

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