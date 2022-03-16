<?= $this->extend('layout/templates'); ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
<div class="grey-bg container-fluid">

    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase"><?= $title?></h4>
        <p>Kerja Praktek dan Magang</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12"> 
      <a class="btn" href="#">
            <div class="card">            
                <div class="card-content">                    
                    <div class="card-header btn-primary">
                    <h4>Permohonan KP</h4>
                    </div>                    
                    <div class="card-body">
                    <div class="media d-flex">
                        <div class="align-self-center">
                        <i class="icon-notebook primary font-large-2 float-left"></i>
                        </div>
                        <div class="media-body text-right">
                        <h3>278</h3>
                        <span>Pemohon</span>
                        </div>
                    </div>
                </div>
               
            </div>
        </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
            <div class="card-header btn-warning">
            <h4>Survey KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-chart warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>156</h3>
                  <span>Telah Survey KP</span>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
    
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
            <div class="card-header btn-success">
                <h4>Lokasi KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-location-pin success font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>64.89 %</h3>
                  <span>Telah Ditempatkan</span>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
       
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
          <div class="card-header btn-danger">
                <h4>Jadwal KP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-calendar danger font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>423</h3>
                  <span>Telah Terjadwal</span>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        
      </div>
    </div>
  
    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
          <div class="card-header btn-danger">
                <h4>Jadwal UPKP</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
              <div class="align-self-center">
                  <i class="icon-event danger font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>423</h3>
                  <span>Telah Terjadwal</span>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
          <div class="card-header btn-danger">
                <h4>Ucapan Terima Kasih</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
              <div class="align-self-center">
                  <i class="icon-envelope-letter danger font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>456</h3>
                  <span>Terkirim</span>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        
      </div>
  
      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
          <div class="card-header btn-warning">
                <h4>Conversion Rate</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="warning">64.89 %</h3>
                  <span>Conversion Rate</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-pie-chart warning font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
       
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
      <a class="btn" href="#">
        <div class="card">
          <div class="card-content">
          <div class="card-header btn-primary">
                <h4>Support Tickets</h4>
            </div>
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                  <h3 class="primary">423</h3>
                  <span>Support Tickets</span>
                </div>
                <div class="align-self-center">
                  <i class="icon-support primary font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        
      </div>
    </div>
  
    
  </section>
  
  
  </div>
</main>

    <?= $this->endSection(); ?>