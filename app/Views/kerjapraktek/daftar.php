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
                                                <a class="nav-link active ps-0" id="group-tab" data-bs-toggle="tab" href="#tabgroup" role="tab" aria-controls="tabgroup" aria-selected="true">Mahasiswa</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="instansi-tab" data-bs-toggle="tab" href="#tabinstansi" role="tab" aria-selected="false">Instansi Tujuan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="daftar-tab" data-bs-toggle="tab" href="#tabdaftar" role="tab" aria-selected="false">Pendaftaran</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content tab-content-basic">
                                        <div class="tab-pane fade show active" id="tabgroup" role="tabpanel" aria-labelledby="tabgroup">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-8 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4>Ketua</h4>
                                                            <div class="form-group">

                                                                <input type="text" name="nimketua" id="nimketua" placeholder="NIM Mahasiswa" class="typeahead form-control" value="<?= ($intGroup->LEADER_NIM == null) ? '' : $intGroup->LEADER_NIM; ?>" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="namaketua" id="namaketua" placeholder="Nama Lengkap Mahasiswa" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="tlpketua" id="tlpketua" placeholder="No Telp Mahasiswa" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="emailketua" id="emailketua" placeholder="Email Mahasiswa" class="form-control">

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-8 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4>Anggota 1 (Optional)</h4>
                                                            <div class="form-group">
                                                                <input type="text" name="nimanggota1" id="nimanggota1" placeholder="NIM Mahasiswa" class="typeahead form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="namaanggota1" id="namaanggota1" placeholder="Nama Lengkap Mahasiswa" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="tlpanggota1" id="tlpanggota1" placeholder="No Telp Mahasiswa" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="emailanggota1" id="emailanggota1" placeholder="Email Mahasiswa" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-8 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4>Anggota 2 (Optional)</h4>
                                                            <div class="form-group">
                                                                <input type="text" name="nimanggota2" id="nimanggota2" placeholder="NIM Mahasiswa" class="typeahead form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="namaanggota2" id="namaanggota2" placeholder="Nama Lengkap Mahasiswa" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="tlpanggota2" id="tlpanggota2" placeholder="No Telp Mahasiswa" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="emailanggota2" id="emailanggota2" placeholder="Email Mahasiswa" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="tabinstansi" role="tabpanel" aria-labelledby="tabinstansi">
                                            <div class="row">
                                                <div class="col-xl-6  col-md-6 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4>Instansi Tujuan</h4>
                                                            <div class="row">
                                                                <div id="instansi">
                                                                    <div class="form-group">
                                                                        <label for="namainstansi">Nama Instansi</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text"><i class="icon-search"></i></span>
                                                                            <input type="text" name="namainstansi" class="form-control" autocomplete="off" id="namainstansi" placeholder="Cari Nama instansi">
                                                                            <input type="hidden" name="idinstansi" class="form-control" autocomplete="off" id="idinstansi">
                                                                            <button class="btn btn-sm btn-success" type="button" id="btn-instansi" data-toggle="tooltip" data-placement="top" title="Tambah instansi baru">
                                                                                <i class="icon-plus"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="alamatinstansi">Alamat Instansi</label>
                                                                        <input type="text" name="alamatinstansi" class="form-control" autocomplete="off" id="alamatinstansi" readOnly="readOnly" placeholder="Alamat instansi atau perusahaan tujuan">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="kotainstansi">Kota Instansi</label>
                                                                        <input type="text" name="kotainstansi" class="form-control" autocomplete="off" id="kotainstansi" readOnly="readOnly" placeholder="Kota instansi atau perusahaan tujuan">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="propinstansi">Propinsi Instansi</label>
                                                                        <input type="text" name="propinstansi" class="form-control" autocomplete="off" id="propinstansi" readOnly="readOnly" placeholder="Propinsi instansi atau perusahaan tujuan">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="tlpinstansi">No Telepon Instansi</label>
                                                                        <input type="text" name="tlpinstansi" class="form-control" readOnly="readOnly" autocomplete="off" id="tlpinstansi" placeholder="No Telp instansi">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="emailinstansi">Email Instansi</label>
                                                                        <input type="text" name="emailinstansi" class="form-control" readOnly="readOnly" autocomplete="off" id="emailinstansi" placeholder="Email instansi">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="button" id="btn-cancel-company" class="btn btn-secondary btn-sm invisible">Cancel</button>
                                                                        <button type="submit" id="btn-submit-company" class="btn btn-primary btn-sm invisible">Simpan Instansi</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="tabdaftar" role="tabpanel" aria-labelledby="tabdaftar">
                                            <div class="row">
                                                <div class="col-xl-6  col-md-6 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4>Pendaftaran</h4>
                                                            <div class="row">
                                                                <div id="summarydaftar">
                                                                    <p>Dengan klik tombol daftar di bawah ini, maka nama mahasiswa yang telah diisi pada tab mahasiswa
                                                                        akan terdaftar dan selanjutnya harus memilih dosen pembimbing akademik pada menu pilih pembimbing</P>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <a href="<?= base_url('dashboard'); ?>" class="btn btn-secondary btn-sm" role="button">Close</a>
                                                            <button type="submit" id="btn-submit" class="btn btn-primary btn-sm">Daftar</button>
                                                        </div>
                                                    </div>
                                                </div>
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
                                        <select name="fakultas" id="fakultas" class="form-control btn btn-outline-primary btn-fw">
                                            <option value="">Pilih Fakultas</option>
                                            <?php foreach ($fakultas as $f) { ?>
                                            <li><?php echo '<option value="'.$f->FACULTYID.'">'.$f->FACULTYNAME.'</option>'; ?>
                                            </li>
                                            <?php } ?>
                                        </select>
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
                            // window.location.replace("<?= base_url('kerjaPraktek/daftar'); ?>");
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