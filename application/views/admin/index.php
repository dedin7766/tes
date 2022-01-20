<div class="page-header">
  <h3>Dashboard</h3>
</div>
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
      <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="glyphicon glyphiconfolder-open"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge">
            <font size="18"><b><?php echo $this->M_perpus->get_data('calon_ketua')->num_rows(); ?></b></font>
          </div>
              <div><b>Jumlah Calon Ketua Osis yang terdaftar</b></div>
            </div>
          </div>
        </div>
        <a href="<?php echo base_url().'admin/calon' ?>">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="glyphicon glyphiconuser"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <font size="18"><b><?php echo $this->M_perpus->get_data('anggota')->num_rows(); ?></b></font>
              </div>
                  <div><b>Jumlah Siswa yang terdaftar</b></div>
                </div>
              </div>
            </div>
            <a href="<?php echo base_url().'admin/anggota' ?>">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
            <div class="col-lg-3 col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="glyphicon glyphiconuser"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <font size="7"><b>Vote</b></font>
              </div>
                  <div><b>Data Siswa yang sudah Voting</b></div>
                </div>
              </div>
            </div>
            <a href="<?php echo base_url().'admin/vote' ?>">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-lg-3 col-md-6">
      <div class="panel panel-warning">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="glyphicon glyphiconuser"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <font size="18"><b>Grafik</b></font>
              </div>
                  <div><b>Grafik berdasarkan data suara yang diperoleh.</b></div>
                </div>
              </div>
            </div>
            <a href="<?php echo base_url().'admin/grafik' ?>">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>


 

       
              </div>

              <hr>

              <div class="row">
                

          
                                </div>
