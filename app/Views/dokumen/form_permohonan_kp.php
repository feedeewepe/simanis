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
            <form id="permohonankp" action="<?= base_url('dokumen/kirimpermohonanKP'); ?>" method="post" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <div class="row">
                <div class="home-tab">
                  <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active ps-0" id="group-tab" data-bs-toggle="tab" href="#tabgroup" role="tab" aria-controls="tabgroup" aria-selected="true">Surat Permohonan Kerja Praktek</a>
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
                                <input type="text" name="nimketua" id="nimketua" placeholder="NIM Mahasiswa" class="typeahead form-control" readonly value="William">
                              </div>
                              <div class="form-group">
                                <input type="text" name="namaketua" id="namaketua" placeholder="Nama Lengkap Mahasiswa" class="form-control" readonly value="1201190010">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-8 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4>Anggota 1 (Optional)</h4>
                              <div class="form-group">
                                <input type="text" name="nimanggota1" id="nimanggota1" placeholder="NIM Mahasiswa" class="typeahead form-control" readonly value="William">
                              </div>
                              <div class="form-group">
                                <input type="text" name="namaanggota1" id="namaanggota1" placeholder="Nama Lengkap Mahasiswa" class="form-control" readonly value="1201190010">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-8 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4>Anggota 2 (Optional)</h4>
                              <div class="form-group">
                                <input type="text" name="nimanggota2" id="nimanggota2" placeholder="NIM Mahasiswa" class="typeahead form-control" readonly value="William">
                              </div>
                              <div class="form-group">
                                <input type="text" name="namaanggota2" id="namaanggota2" placeholder="Nama Lengkap Mahasiswa" class="form-control" readonly value="1201190010">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xl-6  col-md-6 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <div class="row">
                                <div id="instansi">
                                  <div class="form-group">
                                    <label for="programstudi">Program Studi</label>
                                    <input type="text" name="programstudi" id="programstudi" class="form-control" placeholder="Program Studi Mahasiswa" readonly disabled value="Rekayasa Perangkat Lunak">
                                  </div>
                                  <div class="form-group">
                                    <label for="fakultas">Fakultas</label>
                                    <input type="text" name="fakultas" id="fakultas" class="form-control" placeholder="Fakultas Mahasiswa" readonly disabled value="Fakultas Teknologi Informasi dan Bisnis">
                                  </div>
                                  <div class="form-group">
                                    <label for="mulaikp">Periode mulai kerja praktek</label>
                                    <input type="date" name="mulaikp" class="form-control" autocomplete="off" id="mulaikp">
                                  </div>
                                  <div class="form-group">
                                    <label for="akhirkp">Periode akhir kerja praktek</label>
                                    <input type="date" name="akhirkp" class="form-control" autocomplete="off" id="akhirkp">
                                  </div>
                                  <div class="form-group">
                                    <label for="ksm">Kartu Studi Mahasiswa</label>
                                    <input type="file" name="ksm" class="form-control upload" autocomplete="off" id="ksm" multiple>
                                  </div>
                                  <div class="form-group">
                                    <label for="ktm">Kartu Tanda Mahasiswa</label>
                                    <input type="file" name="ktm" class="form-control upload" autocomplete="off" id="ktm" multiple>
                                  </div>
                                  <div class="form-group">
                                    <label for="transkrip">Transkrip Nilai</label>
                                    <input type="file" name="transkrip" class="form-control upload" autocomplete="off" id="transkrip" multiple>
                                  </div>
                                  <div class="form-group">
                                    <label for="cv">CV Mahasiswa</label>
                                    <input type="file" name="cv" class="form-control upload" autocomplete="off" id="cv" multiple>
                                  </div>
                                  <div class="form-group">
                                    <label for="survey">BA Survey Lokasi</label>
                                    <input type="file" name="survey" class="form-control upload" autocomplete="off" id="survey">
                                  </div>
                                  <div class="form-group">
                                    <label for="proposal">Proposal Kerja Praktek</label>
                                    <input type="file" name="proposal" class="form-control upload" autocomplete="off" id="proposal">

                                  </div>
                                  <div class="form-group">
                                    <button type="reset" id="btn-cancel-company" class="btn btn-secondary btn-sm text-dark">Cancel</button>
                                    <button type="submit" id="btn-submit" class="btn btn-primary btn-sm text-light">Submit Form</button>
                                  </div>
                                </div>
                              </div>
                              <p>* Surat permohonan KP dapat diambil di BPA dalam 3 hari kerja</p>
                            </div>
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