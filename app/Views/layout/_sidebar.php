<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('dashboard'); ?>">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php if ($roleid == 1) { ?>
          <li class="nav-item nav-category">Administrator</li>
          <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-user" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">User Management</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic-user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('users'); ?>">List User</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('/users/addUser'); ?>">Add User</a></li>
              </ul>
            </div>
          </li>
          <?php } ?>
          <?php if ($roleid == 2 || $roleid == 1) { ?>
            <li class="nav-item nav-category">Fakultas</li>
            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-mg" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Magang</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic-mg">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                      <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                      Review Permohonan Magang
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                      <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                      Laporan Magang
                  </a>
                </li>
              </ul>
            </div>
          </li>
            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-kp" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Kerja Praktek</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic-kp">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                      <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                      Review Permohonan KP
                  </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('review-survey-kp'); ?>">
                  <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                  Review Survey KP
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('penentuan-lokasi-kp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-spinner"></i></div>
                        Penentuan Lokasi KP
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengumuman-jadwal-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Pengumuman Jadwal KP
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengumuman-jadwal-upkp'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                        Pengumuman Jadwal UPKP
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('ucapan-terima-kasih'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-spinner"></i></div>
                        Ucapan Terima Kasih
                    </a>
                </li>
              </ul>
            </div>
            </li>
            <?php } ?>

            <?php if ($roleid == 3 || $roleid == 1) { ?>                    
                    <li class="nav-item nav-category">BPA</li>
                    <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-bpamg" aria-expanded="false" aria-controls="ui-basic">
                      <i class="menu-icon mdi mdi-account"></i>
                      <span class="menu-title">Magang</span>
                      <i class="menu-arrow"></i> 
                    </a>
                    <div class="collapse" id="ui-basic-bpamg">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                              Review Permohonan Magang
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                              Laporan Magang
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-bpakp" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon mdi mdi-account"></i>
                    <span class="menu-title">Kerja Praktek</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-bpakp">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('penerbitan-surat-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Penerbitan Surat KP
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('penyerahan-surat-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Penyerahan Surat KP
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('penyerahan-ba-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Penyerahan BA KP
                        </a>
                      </li>
                      </ul>
                  </div>
                  </li>
                    <?php } ?>

                    <?php if ($roleid == 4 || $roleid == 1) { ?>
                    <li class="nav-item nav-category">Pembimbing Akademik</li>
                    <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-pamg" aria-expanded="false" aria-controls="ui-basic">
                      <i class="menu-icon mdi mdi-account"></i>
                      <span class="menu-title">Magang</span>
                      <i class="menu-arrow"></i> 
                    </a>
                    <div class="collapse" id="ui-basic-pamg">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                              Review Permohonan Magang
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                              Laporan Magang
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-pakp" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon mdi mdi-account"></i>
                    <span class="menu-title">Kerja Praktek</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-pakp">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pembekalan-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Pembekalan KP
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('konsultasi-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Konsultasi KP
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('tandatangan-BA'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Tanda Tangan BA KP
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('rekap-nilai-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Rekap Nilai KP
                        </a>
                      </li>
                    </ul>
                  </div>
                  </li>
                    <?php } ?>

                    <?php if ($roleid == 5 || $roleid == 1) { ?>
                    <li class="nav-item nav-category">Pembimbing Lapangan</li>
                    <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-plmg" aria-expanded="false" aria-controls="ui-basic">
                      <i class="menu-icon mdi mdi-account"></i>
                      <span class="menu-title">Magang</span>
                      <i class="menu-arrow"></i> 
                    </a>
                    <div class="collapse" id="ui-basic-plmg">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                              Review Permohonan Magang
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                              Laporan Magang
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-plkp" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon mdi mdi-account"></i>
                    <span class="menu-title">Kerja Praktek</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-plkp">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pemantauan-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Pemantauan KP
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('bimbingan-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Bimbingan KP
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('penilaian-kp'); ?>">
                          <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                          Penilaian KP
                      </a>
                    </li>
                    </ul>
                  </div>
                  </li>
                    <?php } ?>

                    <?php if ($roleid == 6 || $roleid == 1) { ?>
                    <li class="nav-item nav-category">Penguji</li>
                    <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-pjmg" aria-expanded="false" aria-controls="ui-basic">
                      <i class="menu-icon mdi mdi-account"></i>
                      <span class="menu-title">Magang</span>
                      <i class="menu-arrow"></i> 
                    </a>
                    <div class="collapse" id="ui-basic-pjmg">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                              Review Laporan Magang
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                              Penilaian Magang
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-pjkp" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon mdi mdi-account"></i>
                    <span class="menu-title">Kerja Praktek</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-pjkp">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('review-laporan-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Review Laporan KP
                        </a>
                      </li>
                    </ul>
                  </div>
                  </li>
                    <?php } ?>

                    <?php if ($roleid == 7 || $roleid == 1) { ?>
                    <li class="nav-item nav-category">Mahasiswa</li>
                    <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-mhsmg" aria-expanded="false" aria-controls="ui-basic">
                      <i class="menu-icon mdi mdi-account"></i>
                      <span class="menu-title">Magang</span>
                      <i class="menu-arrow"></i> 
                    </a>
                    <div class="collapse" id="ui-basic-mhsmg">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                              Review Laporan Magang
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                              <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                              Penilaian Magang
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-mhskp" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon mdi mdi-account"></i>
                    <span class="menu-title">Kerja Praktek</span>
                    <i class="menu-arrow"></i> 
                  </a>
                  <div class="collapse" id="ui-basic-mhskp">
                    <ul class="nav flex-column sub-menu">
                      <?php $i = 0;
                      if (isset($menu)):
                      foreach ($menu as $key => $value):
                        $i++; ?>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url($value); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            <?=$key; ?>
                        </a>
                      </li>
                      <?php endforeach; endif; ?>
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('survey-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Survey KP
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('proposal-kp'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                            Proposal KP
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('surat-permohonan-kp'); ?>">
                          <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                          Surat Permohonan KP
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('surat-balasan-kp'); ?>">
                          <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                          Surat Balasan KP
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('pakta-integritas-KP'); ?>">
                          <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                          Pakta Integritas KP
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('pelaksanaan-kp'); ?>">
                          <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                          Pelaksanaan-KP
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('laporan-KP'); ?>">
                          <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                          Laporan KP
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('revisi-laporan-kp'); ?>">
                          <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                          Revisi Laporan KP
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('presentasi'); ?>">
                          <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                          Presentasi
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?= base_url('pengumpulan-dokumen'); ?>">
                          <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                          Pengumpulan Dokumen
                      </a>
                    </li> -->
                  </ul>
                  </div>
                  </li>
                    <?php } ?>

          <!-- <li class="nav-item nav-category">UI Elements</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Forms and Datas</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>