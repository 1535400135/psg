
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $getsekolah ?></h3>

                <p>Jumlah Sekolah</p>
              </div>
              <div class="icon">
                <i class="fa fa-building"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $getf1 ?></h3>

                <p>Berkas Upload F1</p>
              </div>
              <div class="icon">
                <i class="far fa-envelope"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $getf2 ?></h3>

                <p>Berkas Upload F2</p>
              </div>
              <div class="icon">
                <i class="far fa-copy"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $getsk ?></h3>

                <p>Cetak SK</p>
              </div>
              <div class="icon">
                <i class="fa fa-inbox"></i>
              </div>
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
          data: [700,500,400,600,300,156,749,410,85,67,98,197,650,780,354,710,950],
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