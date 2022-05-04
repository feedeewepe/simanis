<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('/DosbingController/bimbingan'); ?>">Bimbingan KP</a></li>
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
                        Review Data Kelomopok Kerja Praktek
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
                                <h2 class="card-title fs-6 mb-5 card-title-dash">Review Data Kelompok Kerja Praktek</h2>
                              </div>

                            </div>
                            <div class="row">
                              <?php
                              if ($dataMhs != null) {
                                foreach ($dataMhs as $key => $d) {
                                  if ($key < 3 && $d->STUDENTID) {
                              ?>
                                    <div class="col-xl-3 col-md-8 grid-margin stretch-card">
                                      <div class="card">
                                        <div class="card-body">
                                          <h4 class="mb-4"><?= $key == 0 ? "Ketua" : "Anggota " . $key ?></h4>
                                          <div class="form-group">
                                            <input type="text" placeholder="NIM Mahasiswa" class="form-control" readonly value="<?= $d->FULLNAME ?>">
                                          </div>
                                          <div class="form-group">
                                            <input type="text" placeholder="Nama Lengkap Mahasiswa" class="form-control" readonly value="<?= $d->STUDENTID ?>">
                                          </div>
                                          <div class="form-group">
                                            <input type="text" placeholder="No. Telp Mahasiswa" class="form-control" readonly value="<?= $d->STUDENT_PHONE ?>">
                                          </div>
                                          <div class="form-group">
                                            <input type="text" placeholder="Email Mahasiswa" class="form-control" readonly value="<?= $d->STUDENT_EMAIL ?>">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                              <?php
                                  }
                                }
                              }
                              ?>
                            </div>
                            <div class="row">
                              <div class="col-xl-6  col-md-6 grid-margin stretch-card">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="row">
                                      <div id="instansi">
                                        <div class="form-group">
                                          <label for="programstudi">Program Studi</label>
                                          <input type="text" name="programstudi" id="programstudi" class="form-control" placeholder="Program Studi Mahasiswa" readonly disabled value="<?= $namaProdi  ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="fakultas">Fakultas</label>
                                          <input type="text" name="fakultas" id="fakultas" class="form-control" placeholder="Fakultas Mahasiswa" readonly disabled value="<?= $namaFakultas  ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="lokasi">Lokasi Instantsi Kerja Praktek</label>
                                          <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Lokasi Kerja Praktek" readonly disabled value="<?= $lokasiKP ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="alamat">Alamat Instantsi Kerja Praktek</label>
                                          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Kerja Praktek" readonly disabled value="<?= $alamatKP ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="telp">No. Telp Instantsi Kerja Praktek</label>
                                          <input type="text" name="telp" id="telp" class="form-control" placeholder="No. Telp Kerja Praktek" readonly disabled value="<?= $noTelpKP ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="email">Email Instantsi Kerja Praktek</label>
                                          <input type="text" name="email" id="email" class="form-control" placeholder="Email Kerja Praktek" readonly disabled value="<?= $emailKP ?>">
                                        </div>
                                        <?php
                                        if ($dataMhs[0]->STATUSID == 2) {
                                        ?>
                                          <form id="pilihdosbing" action="<?= base_url('DosbingController/approval'); ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="groupid" value="<?= $dataMhs[0]->GROUPID ?>">
                                            <button type="submit" name="acc" class="btn btn-success btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-check"></i>Acc</button>
                                            <button type="submit" name="reject" class="btn btn-danger btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-edit"></i>Reject</button>
                                          </form>
                                        <?php
                                        } else if ($dataMhs[0]->STATUSID >= 3) {
                                        ?>
                                          <span class="badge rounded-pill bg-success">Accepted</span> 
                                        <?php
                                        }
                                        ?>
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
    </div>
  </main>


  <?= $this->endSection(); ?>

  <?= $this->Section('injectCSS'); ?>
  <style>
    h5 {
      font-weight: bold;
    }

    .form-control {
      height: auto;
    }

    .badge-opacity-danger {
      font-size: 0.85rem;
      padding: 0.5rem 1rem;
      background-color: #ffd6d7;
    }

    .data-mhs {
      text-align: left;
    }

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