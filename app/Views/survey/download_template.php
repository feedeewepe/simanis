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
                        <form id="formdaftarkp" action="<?= base_url('KerjaPraktek/daftar'); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="home-tab">
                                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active ps-0" id="download-tab" data-bs-toggle="tab" href="#tabdownload" role="tab" aria-controls="tabgroup" aria-selected="true">Download Template BA</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="upload-tab" data-bs-toggle="tab" href="#tabupload" role="tab" aria-selected="false">Upload BA</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content tab-content-basic">
                                        <div class="tab-pane fade show active" id="tabdownload" role="tabpanel" aria-labelledby="tabdownload">
                                            <div class="row">
                                                <iframe src="https://drive.google.com/file/d/1DYq3hETGGePzB_Tn9csMs-ObRPijTAYw/preview" width="640" height="480"></iframe>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="tabupload" role="tabpanel" aria-labelledby="tabdownload">
                                            <div class="row">
                                                <p>
                                                    Survey dilakukan sebelum mengajukan proposal Kerja Praktek ke lokasi KP.
                                                    Jika survey dilakukan secara offline, maka memerlukan Surat Pengantar Survey sedangkan
                                                    jika survey dilakukan secara online tidak perlu Surat Pengantar Survey.
                                                    Surat Pengantar Survey adalah surat yang digunakan untuk mengajukan kepada pihak
                                                    Instansi untuk dilakukan kegiatan penjajakan lokasi Kerja Praktik oleh Mahasiswa.
                                                    Surat pengantar survey tersebut harus diketahui dan atas izin Dekan Fakultas yang
                                                    bersangkutan.

                                                    Setelah melakukan survey, mahasiswa akan diminta mengisi Berita Acara Survey,
                                                    baik survey offline maupun online harus mengisi Berita Acara Survey.
                                                </p>
                                                <form id="formdaftarkp" action="<?= base_url('KerjaPraktek/daftar'); ?>" method="post">
                                                    <?= csrf_field(); ?>

                                                    <div class="row">
                                                        <div class="form-group row">

                                                            <label for="jenissurvey">Jenis Survey</label>
                                                            <div class="col-xl-3 col-md-6">
                                                                <label class="form-check-label col-xl-3 col-md-3">
                                                                    <input type="radio" class="form-check-input jenissurvey" name="jenissurvey" id="jenissurvey1" value="offline">
                                                                    Offline
                                                                </label>
                                                                <label class="form-check-label col-xl-3 col-md-3">
                                                                    <input type="radio" class="form-check-input jenissurvey" name="jenissurvey" id="jenissurvey2" value="online">
                                                                    Online
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center">
                                                        <div class="col-md-6">

                                                            <button type="button" id="btn-sps" class="btn btn-primary btn-lg btn-block" disabled>
                                                                <a href="<?= base_url('CetakSurat/suratPengantarSurvey'); ?>">
                                                                    <i class="mdi mdi-calendar-text"></i>
                                                                    Surat Pengantar Survey
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="button" id="btn-bas" class="btn btn-primary btn-lg btn-block" disabled>
                                                                <i class="mdi mdi-calendar-check"></i>
                                                                Template Berita Acara Survey
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row"> -->
                                <!-- <div class="col-xl-3 col-md-8 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4>Dosen Pembimbing</h4>
                                            <div class="form-group">
                                                <input type="text" name="namadosbing" id="namadosbing"
                                                    placeholder="Nama Dosen Pembimbing" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="nipdosbing" id="nipdosbing"
                                                    placeholder="NIP Dosen Pembimbing" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="kodedosbing" id="kodedosbing"
                                                    placeholder="Kode Dosen Pembimbing" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-xl-3 col-md-8 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                                <h4>Pembimbing Lapangan</h4>
                                            <div class="form-group">
                                                <label for="namacp">Nama Contact Person</label>
                                                <input type="text" name="namacp" class="form-control"
                                                    autocomplete="off" placeholder="Nama Contact Person">
                                            </div>
                                            <div class="form-group">
                                                <label for="jbtcp">Posisi(Jabatan) Contact
                                                    Person</label>
                                                <input type="text" name="jbtcp" class="form-control"
                                                    autocomplete="off" placeholder="Posisi (jabatan)">
                                            </div>
                                            <div class="form-group">
                                                <label for="unitcp">Unit(Bagian) Contact Person</label>
                                                <input type="text" name="unitcp" class="form-control"
                                                    autocomplete="off" placeholder="Unit (Bagian)">
                                            </div>
                                            <div class="form-group">
                                                <label for="tlpcp">No Telepon Contact Person</label>
                                                <input type="text" name="tlpcp" class="form-control"
                                                    autocomplete="off" placeholder="No Telp">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailcp">Email Contact Person</label>
                                                <input type="text" name="emailcp" class="form-control"
                                                    autocomplete="off" placeholder="Email">
                                            </div>

                                        </div>
                                    </div>
                                </div> -->


                                <!-- <div class="row">
                                <div class="col-xl-3 col-md-8">
                                    <div class="form-group">
                                        <label for="fakultas">Fakultas</label>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="form-group">
                                        <label for="prodi">Program Studi</label>
                                        <select name="prodi" id="prodi" class="form-control btn btn-outline-primary btn-fw">
                                            <option value="">Pilih Fakultas Dahulu</option>
                                        </select>
                                    </div>
                                </div>-->
                                <!-- </div>  -->


                                <div class="modal-footer">

                                </div>
                        </form>
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
                            $('#formdaftarkp').closest('form').submit(); // submit form
                            // window.location.replace("<?= base_url('kerjaPraktek/pengantarSurvey'); ?>");
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

            $('#btn-cancel-company').bind('click', function() {

                $(document).find(":input[name*='instansi']").prop("readOnly", true);
                $(document).find(":button[id*='company']").addClass("invisible");
                $('#namainstansi').prop("readOnly", false);
                $('#btn-company').prop("readOnly", false);
                $(document).find(":input[name*='instansi']").val("");
                $("#instansi").removeClass(" border border-success rounded");
            });



        });
    </script>
    <?= $this->endSection(); ?>