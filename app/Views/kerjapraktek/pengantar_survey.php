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
                                            <input type="radio" class="form-check-input jenissurvey" name="jenissurvey"
                                                id="jenissurvey1" value="offline">
                                            Offline
                                        </label>
                                        <label class="form-check-label col-xl-3 col-md-3">
                                            <input type="radio" class="form-check-input jenissurvey" name="jenissurvey"
                                                id="jenissurvey2" value="online">
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
                    </div>
                    <div class="modal-footer">
                        
                        <a href="<?= base_url('dashboard'); ?>" class="btn btn-secondary btn-sm" role="button">Close</a>
                        <button type="submit" id="btn-submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</main>
<script type="text/javascript">
$(document).ready(function() {
    $('#fakultas').change(function() {
        var fakultasid = $(this).val();
        $.ajax({
            url: "<?php echo base_url('KerjaPraktek/prodiFakultas'); ?>",
            method: "GET",
            data: {
                fakultasid: fakultasid
            },
            async: true,
            dataType: 'json',
            success: function(data) {
                var html = '<option value="">Pilih Prodi</option>';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].STUDYPROGRAMID + '>' + data[i]
                        .STUDYPROGRAMNAME + '</option>';
                }
                $('#prodi').html(html);

            }
        });
        return false;
    });

    $('#btn-submit').on('click', function(e) {
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
            }
        });
    });

    $('input:radio[name="jenissurvey"]').change(
    function(){
        if (this.checked) {
        //   alert(this.value);
            if(this.value=='online'){
                $('#btn-sps').prop('disabled', true);
                $('#btn-bas').prop('disabled', false);
            }else if(this.value='offline'){
                $('#btn-sps').prop('disabled', false);
                $('#btn-bas').prop('disabled', false);
            }
        }
    });
});

</script>

<?= $this->endSection(); ?>