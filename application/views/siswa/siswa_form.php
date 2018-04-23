<div class="container-fluid">
          <!-- Title -->
          <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h5 class="txt-dark">Input Siswa</h5>
            </div>
          
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
              <ol class="breadcrumb">
                
              </ol>
            </div>
            <!-- /Breadcrumb -->
          
          </div>
          <!-- /Title -->
          
          <!-- Row -->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default card-view">
                <div class="panel-heading">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark">Form Input Siswa</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div class="panel-body">
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-wrap">
                          <form data-toggle="validator" role="form" id="forminputsiswa" action="<?= site_url('Siswa/simpan') ?>" method="POST">
                            
                            <div class="form-group">
                              <label class="control-label mb-10">NISN</label>
                              <input type="text" class="form-control"  name="nisn" id="nisn" placeholder="112xxxxxxxx" required>
                            </div>
                            <div class="form-group">
                              <label class="control-label mb-10">Nama</label>
                              <input type="text" class="form-control"  name="nama" id="nama" placeholder="Slamet" required>
                            </div>
                            <div class="form-group">
                              <label class="control-label mb-10">Tempat Lahir</label>
                              <input type="text" class="form-control"  name="tempat_lahir" id="tempat_lahir" placeholder="Pekalongan" required>
                            </div>
                            <div class="form-group">
                              <label class="control-label mb-10">Tanggal Lahir</label>
                              <input type="date" class="form-control"  name="tanggal_lahir" id="tanggal_lahir" required>
                            </div>
                             <div class="form-group">
                              <label class="control-label mb-10">Jenis Kelamin</label>
                              <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                                <option value="L">L</option>
                                <option value="P">P</option>
                              </select>
                            </div>
                            <div class="form-group mb-0">
                              <button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Row -->
        </div>