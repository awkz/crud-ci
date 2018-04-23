<div class="container-fluid">
        
        <!-- Title -->
        <div class="row heading-bg">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Guru</h5>
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
          <div class="col-sm-12">
            <div class="panel panel-default card-view">
              <div class="panel-heading">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark">Data Guru</h6>
                  </div>
                  <div class="pull-right">
                     <a href="<?= site_url('Guru/form'); ?>" class="btn btn-default btn-icon left-icon"><i class="fa fa-pencil"></i> Input Guru</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              <div class="panel-wrapper collapse in">
                <div class="panel-body">
                  <div class="table-wrap">
                    <div class="table-responsive">
                      <table id="example" class="table table-hover display  pb-30" >
                         <thead>
                          <tr>
                            <th>NIP</th>
                            <th>NAMA</th>
                            
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data as $r) { ?> 
                          <tr>
                            <td><?= $r['NIP'] ?></td>
                            <td><?= $r['Nama'] ?></td>
                            <td><?= anchor('Guru/edit/'.$r['NIP'], 'Edit',array('class' => 'btn btn-warning btn-outline')) ?> <?= anchor('Guru/delete/'.$r['NIP'], 'Hapus',array('class' => 'btn btn-danger btn-outline')) ?></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>
        <!-- /Row -->
      </div>