
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $getsekolah ?></h3>
                <p>Total Sekolah</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Total Sekolah</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $getf1 ?></h3>
                <p>Formulir 1</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Formulir 1</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $getf2 ?></h3>
                <p>Formulir 2</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Formulir 2</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= "Rp. ".number_format($getdana->dana_diterima,0,'','.') ?></h3>
                <p>Total Dana</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Total Dana</a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Laporan Dana PSG
                </h3>
              <div class="card-body">
                
                  <!-- Morris chart - Sales -->
                  
                      <canvas id="canvas" style="min-height: 300px; height: 300px; max-height: 350px; max-width: 100%;"></canvas>    
              </div><!-- /.card-body -->
            </div>
          </div>
            
            
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
$(function () {
  var barChartCanvas = $('#canvas').get(0).getContext('2d')
    var Data        = {
      labels: [
          'OKU', 
          'OKI',
          'Muara Enim', 
          'Lahat', 
          'Musi Rawas', 
          'Musi Banyuasin', 
          'OKU Timur', 
          'OKU Selatan',
          'Banyuasin', 
          'Ogan Ilir', 
          'Empat Lawang', 
          'PALI',
          'Musi Rawas Utara', 
          'Palembang',
          'Pagar Alam', 
          'Lubuk Linggau', 
          'Prabumulih',           
      ],
      datasets: [
        {
          label: ['Sumatera Selatan'],
          data: [<?= $oku->dana_diterima ?>,<?= $oki->dana_diterima ?>,<?= $me->dana_diterima ?>,<?= $lht->dana_diterima ?>,<?= $mr->dana_diterima ?>, <?= $mb->dana_diterima ?>, <?= $okut->dana_diterima ?>, <?= $okus->dana_diterima ?>, <?= $oi->dana_diterima ?>, <?= $el->dana_diterima ?>, <?= $pali->dana_diterima ?>, <?= $mru->dana_diterima ?>, <?= $plg->dana_diterima ?>, <?= $pga->dana_diterima ?>, <?= $ll->dana_diterima ?>, <?= $pra->dana_diterima ?>],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#FF0000', '#800000', '#FFFF00', '#808000', '#00FF00', '#008000', '#00FFFF', '#008080', '#0000FF', '#000080', '#FF00FF','#800080'],
        }, 
     ],
    }
    var Options     = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: Data,
      options: Options      
    })
})    
</script>