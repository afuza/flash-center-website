<?php
require_once "../view/header.php"
 ?>
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light-lighten p-2">
            <li class="breadcrumb-item"><a href="#"><i class="uil-home-alt"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
  </nav>

<!-- star index -->

<div class="row">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Laporan Penjualan Harian</h4>
                <div id="distributed-column" class="apex-charts" data-colors="#3688fc,#6c757d,#42d29d,#fa6767,#ffbc00,#39afd1,#e3eaef,#313a46"></div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <div class="col-xl-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manajement Laporan</h4>
                <form>
                 <div class="form-group">
    <label>Pilih Jangka Waktu</label>
    <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
    <br/>
    <button type="button" class="btn btn-block btn-xs btn-success">Download Data</button>
    <button type="button" class="btn btn-block btn-xs btn-info">Tampilkan Data</button>
    </form>
</div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
<!-- content -->
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Laporan Penjualan Bulanan</h4>
                <div id="datalabels-column" class="apex-charts" data-colors="#3688fc"></div>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>

<script src="https://flashingcenter.b-cdn.net/assets/js/pages/demo.apex-column.js"></script>
<?php
      require_once "../view/footer.php"
?>
<script type="text/javascript">
<?php
      require_once "../view/footer.php"
?>
var options = {
    fill: {
  colors: ['#B0C4DE']
},
  chart: {
    type: 'bar'
  },
  series: [{
    name: 'Penjualan',
    data: [<?php
  include '../../../config/database/koneksi.php';
                                                
                                                $datas1 = mysqli_query($koneksi,"SELECT * FROM s_order WHERE YEARWEEK(order_date) = YEARWEEK(NOW()) and order_status = 'paid' GROUP BY order_date");

                                                while($dss =mysqli_fetch_array($datas1)){
                                                    
                                                $datse = $dss[order_date];
                                                
                                                $waktu1 = date('D', strtotime($datse));
?>
<?php $i = mysqli_query($koneksi,"select * from s_order where order_date ='$datse'");
				
					echo mysqli_num_rows($i);
?>,
<?php
}
?>]
  }],
  xaxis: {
    categories: ["Senin","Selasa","Rabu","Kamis","jum'at","Sabtu","Minggu"]
  }
}

var chart = new ApexCharts(document.querySelector("#distributed-column"), options);

chart.render();
</script>

<script type="text/javascript">
var options = {
    fill: {
  colors: ['#B0C4DE']
},
  chart: {
    type: 'bar'
  },
  series: [{
    name: 'Penjualan',
    data: [156,165,143,152,151,139,150,156,172,230,157,143]
  }],
  xaxis: {
    categories: ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"]
  }
}

var chart = new ApexCharts(document.querySelector("#datalabels-column"), options);

chart.render();
</script>