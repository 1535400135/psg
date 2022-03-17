    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  <?= $title ?>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div class="col-md-12">
            <!-- Bar chart -->
             <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Sumatera Selatan
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="bar-chart-sumsel" style="height: 420px"></canvas>
              </div>
            </div>
              <!-- /.card-body-->
            </div>
            <?php foreach ($data as $value) { ?>
            <div class="col-md-6">
            <!-- Bar chart -->
             <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  <?= $value->nama ?>
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="bar-chart-<?= $value->id_kab ?>" style="height: 300px"></canvas>
              </div>
            </div>
              <!-- /.card-body-->
            </div>
            <?php } ?>
            <div class="col-md-6">

            <!-- /.card -->
              </div><!-- /.row -->
            </div><!-- /.card-body -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-sumsel').get(0).getContext('2d')
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1601').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Sumatera Selatan'],
          data: [700,500,368,600],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1602').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Sumatera Selatan'],
          data: [700,458,368,600],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1603').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Sumatera Selatan'],
          data: [650,500,388,600],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1604').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kabupaten Lahat'],
          data: [725,520,368,610],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1605').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kabupaten Musi Rawas'],
          data: [780,540,710,650],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1606').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kabupaten Musi Banyuasin'],
          data: [680,500,368,600],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1607').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kabupaten Banyuasin'],
          data: [700,500,368,780],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1608').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kabupaten Ogan Komering Ulu Timur'],
          data: [711,201,368,650],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1609').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kabupaten Ogan Komering Ulu Selatan'],
          data: [730,510,368,640],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1610').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kabupaten Ogan Ilir'],
          data: [452,500,368,600],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1611').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kabupaten Empat Lawang'],
          data: [710,520,368,674],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1612').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kabupaten Penukal Abab Lematang Ilir'],
          data: [186,451,368,670],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1613').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kabupaten Musi Rawas Utara'],
          data: [456,578,368,690],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1671').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kota Palembang'],
          data: [987,756,368,154],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1672').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kota Pagar Alam'],
          data: [784,954,368,107],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1673').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kota Lubuk Linggau'],
          data: [612,451,368,600],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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
<script>
$(function () {
  var barChartCanvas = $('#bar-chart-1674').get(0).getContext('2d')
    var Data        = {
      labels: [
          'SMA',
          'SMK',
          'MA',
          'SLB'
      ],
      datasets: [
        {
          label: ['Kota Prabumulih'],
          data: [684,500,368,600],
          pointRadius : false,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
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