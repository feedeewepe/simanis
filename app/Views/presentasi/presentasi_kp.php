<?= $this->extend('layout/templates'); ?>

<?= $this->Section('content'); ?>
<style>
    .upload {
        background-color: white !important;
        height: 2.75rem;
        cursor: pointer;
    }
</style>
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
                                        <li class="nav-item">
                                            <a class="nav-link" id="instansi-tab" data-bs-toggle="tab" href="#tabinstansi" role="tab" aria-selected="false">Upload Pakta Integritas</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="tabgroup" role="tabpanel" aria-labelledby="tabgroup">
                                        <div class="row">
                                            <div class="col-xl-8  col-md-10 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Status Presentasi Kerja Praktek</h4>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Submission id</th>
                                                                        <th>VatNo.</th>
                                                                        <th>Tanggal Presentasi</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Dave</td>
                                                                        <td>53275535</td>
                                                                        <td>20 May 2017</td>
                                                                        <td><label class="badge badge-opacity-success">Accepted</label></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Messy</td>
                                                                        <td>53275532</td>
                                                                        <td>15 May 2017</td>
                                                                        <td><label class="badge badge-opacity-warning">Revision</label></td>
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
                            $('#permohonankp').closest('form').submit(); // submit form
                            // window.location.replace("<?= base_url('dokumen/kirimpermohonanKP'); ?>");
                        }
                    });
            });

            $('#btn-submit-company').on("click", function(e) {
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
                            // $('#formdaftarkp').closest('form').submit(); // submit form

                        }
                    });
            });

            const student = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {
                    url: '<?= base_url('documents/getmhs.json'); ?>', //data statis file perlu ada agar typeahead bloodhound bisa jalan!
                    transform: function(response) {
                        return $.map(response, function(student) {
                            return {
                                value: student.STUDENTID,
                                nama: student.FULLNAME,
                            };
                        });
                        // console.log(dt);

                    }
                },
                remote: {
                    wildcard: '%QUERY',
                    url: '<?= base_url('kerjaPraktek/getmhs'); ?>?nim=%QUERY', //data online
                    transform: function(response) {
                        return $.map(response, function(student) {
                            return {
                                value: student.STUDENTID,
                                nama: student.FULLNAME,
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
                source: student,
                templates: {
                    empty: 'No NIM found',
                    suggestion: function(item) {
                        console.log(item);
                        return "<div>" + item.value + "-" + item.nama + "</div>";
                    },
                    pending: function(query) {
                        return '<div>Loading...</div>';
                    }
                }
            });

            $('#nimketua').bind('typeahead:select', function(ev, suggestion) {
                console.log('Selection: ' + suggestion.nama);
                $('#nimketua').val(suggestion.value);
                $('#namaketua').val(suggestion.nama);
            });

            $('#nimanggota1').bind('typeahead:select', function(ev, suggestion) {
                console.log('Selection: ' + suggestion.nama);
                $('#nimanggota1').val(suggestion.value);
                $('#namaanggota1').val(suggestion.nama);
            });

            $('#nimanggota2').bind('typeahead:select', function(ev, suggestion) {
                console.log('Selection: ' + suggestion.nama);
                $('#nimanggota2').val(suggestion.value);
                $('#namaanggota2').val(suggestion.nama);
            });



            const company = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {
                    url: '<?= base_url('documents/getcompany.json'); ?>', //data statis file perlu ada agar typeahead bloodhound bisa jalan!
                    transform: function(response) {
                        return $.map(response, function(company) {
                            return {
                                value: company.COMPANYID,
                                nama: company.COMPANYNAME,
                                alamat: company.ADDRESS,
                                kota: company.CITY,
                                prov: company.PROVINCE,
                                telp: company.PHONE,
                                email: company.EMAIL
                            };
                        });
                        // console.log(dt);

                    }
                },
                remote: {
                    wildcard: '%QUERY',
                    url: '<?= base_url('kerjaPraktek/getcompany'); ?>?namacompany=%QUERY', //data online
                    transform: function(response) {
                        return $.map(response, function(company) {
                            return {
                                value: company.COMPANYID,
                                nama: company.COMPANYNAME,
                                alamat: company.ADDRESS,
                                kota: company.CITY,
                                prop: company.PROVINCE,
                                telp: company.PHONE,
                                email: company.EMAIL
                            };
                        });
                        // console.log(dt);

                    }
                }
            });

            // Instantiate the Typeahead UI
            $('#namainstansi').typeahead(null, {
                displayKey: 'nama',
                display: 'nama',
                source: company,
                templates: {
                    empty: 'Company not found, please add new company',
                    suggestion: function(item) {
                        console.log(item);
                        return "<div>" + item.value + "-" + item.nama + "</div>";
                    },
                    pending: function(query) {
                        return '<div>Loading...</div>';
                    }
                }
            });

            $('#namainstansi').bind('typeahead:select', function(ev, suggestion) {
                console.log('Selection: ' + suggestion.nama);
                $('#idinstansi').val(suggestion.value);
                $('#alamatinstansi').val(suggestion.alamat);
                $('#kotainstansi').val(suggestion.kota);
                $('#propinstansi').val(suggestion.prop);
                $('#tlpinstansi').val(suggestion.telp);
                $('#emailinstansi').val(suggestion.email);
            });

            $('#btn-instansi').bind('click', function() {

                // $('#namainstansi').typeahead('close');

                $(document).find(":input[name*='instansi']").prop("readOnly", false);
                $(document).find(":input[name*='instansi']").val("");
                $(document).find(":button[id*='company']").removeClass("invisible");
                $("#instansi").addClass(" border border-success rounded");
            });

            // $('#btn-cancel-company').bind('click', function() {

            //   $(document).find(":input[name*='instansi']").prop("readOnly", true);
            //   $(document).find(":button[id*='company']").addClass("invisible");
            //   $('#namainstansi').prop("readOnly", false);
            //   $('#btn-company').prop("readOnly", false);
            //   $(document).find(":input[name*='instansi']").val("");
            //   $("#instansi").removeClass(" border border-success rounded");
            // });



        });
    </script>
    <?= $this->endSection(); ?>