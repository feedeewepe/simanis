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
                        <form id="formdaftarkp" action="<?= base_url('Kendali/submitkendali'); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="home-tab">
                                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active ps-0" id="group-tab" data-bs-toggle="tab" href="#tabgroup" role="tab" aria-controls="tabgroup" aria-selected="true">Laporan Kendali Kerja Praktek</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content tab-content-basic">
                                        <div class="tab-pane fade show active" id="tabgroup" role="tabpanel" aria-labelledby="tabgroup">
                                            <div class="row">
                                                <div class=" grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4>NIM Mahasiswa</h4>
                                                            <div class="form-group">

                                                                <input type="text" name="nimmhs" id="nimmhs" placeholder="NIM Mahasiswa" class="typeahead form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <h4>Unit Kerja</h4>
                                                                <input type="text" name="unitkerja" id="unitkerja" placeholder="Unit Kerja" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <h4>Uraian Kegiatan</h4>
                                                                <input type="text" name="kegiatan" id="kegiatan" placeholder="Uraian Kegiatan" class="form-control">
                                                            </div>
                                                            </div>
                                                        </div>
    
                                                    </div>
                                                    <div class="form-group">
																		<button type="reset" id="btn-cancel" class="btn btn-secondary btn-sm text-dark">Cancel</button>
																		<button type="submit" id="btn-submit" class="btn btn-primary btn-sm text-light">Submit Form</button>
																	</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
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
                            $('#formkegiatan').closest('form').submit(); // submit form
                            window.location.replace("<?= base_url('Kendali/test'); ?>");
                        }
                    });
            });

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
                            // $('#formkegiatan').closest('form').submit(); // submit form

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

            
    </script>
    <?= $this->endSection(); ?>