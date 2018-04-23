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
                    <h6 class="panel-title txt-dark">Form Input Mapel</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div class="panel-body">
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-wrap">
                          <form data-toggle="validator" role="form" id="forminputmapel" action="<?= site_url('Mapel/simpan') ?>" method="POST">
                            
                            <div class="form-group">
                              <label class="control-label mb-10">Kode Mata Pelajaran</label>
                              <input type="text" class="form-control"  name="kode_mapel" id="kode_mapel" placeholder="112xxxxxxxx" required>
                            </div>
                            <div class="form-group">
                              <label class="control-label mb-10">Mata Pelajaran</label>
                              <input type="text" class="form-control"  name="mapel" id="mapel" placeholder="Matematika" required>
                            </div>
                            
                            <div class="form-group mb-0">
                              <button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Submit</span></button>
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