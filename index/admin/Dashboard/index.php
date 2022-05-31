<?php
require_once "../view/header.php"
 ?>
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light-lighten p-2">
            <li class="breadcrumb-item"><a href="#"><i class="uil-home-alt"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
  </nav>
  <div class="row">
      <div class="col-xl-12 col-lg-12">
          <div class="row">
              <div class="col-lg-4">
                  <div class="card widget-flat">
                      <div class="card-body">
                                                                          <?php
                                                include '../../../config/database/koneksi.php';
                                                $arr =array();
                                                $data = mysqli_query($koneksi,"select * from  member where level='pelanggan'");
                                                while($d = mysqli_fetch_array($data)){
                                                  $arr[]=$d;
                                                }
                                                $count = count($arr)
                                                ?>
                          <div class="float-right">
                              <i class="mdi mdi-account-multiple widget-icon bg-success-lighten text-success"></i>
                          </div>
                          <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">Pelanggan Active</h5>
                          <h3 class="mt-3 mb-3"><?php echo $count ?></h3>
                      </div> <!-- end card-body-->
                  </div> <!-- end card-->
              </div> <!-- end col-->
              <div class="col-lg-4">
                  <div class="card widget-flat">
                      <div class="card-body">
                                       <?php
                                                include '../../../config/database/koneksi.php';
                                                $arr =array();
                                                $datas = mysqli_query($koneksi,"select * from  s_order where order_status = 'paid'");
                                                while($ds = mysqli_fetch_array($datas)){
                                                  $arrs[]=$ds;
                                                }
                                                $count2 = count($arrs)
                                                ?>
                          <div class="float-right">
                              <i class="mdi mdi-cart-plus widget-icon bg-danger-lighten text-danger"></i>
                          </div>
                          <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Total Orders Paid</h5>
                          <h3 class="mt-3 mb-3"><?php echo $count2 ?></h3>
                      </div> <!-- end card-body-->
                  </div> <!-- end card-->
              </div> <!-- end col-->
              <div class="col-lg-4">
                  <div class="card widget-flat">
                      <div class="card-body">
                             <?php
                                                include '../../../config/database/koneksi.php';
                                                $arr =array();
                                                $data2 = mysqli_query($koneksi,"select * from trx where status ='paid'");
                                                while($s = mysqli_fetch_array($data2)){
                                                  $jumlah[] = $s['amount'];
                                                }
                                                
                                                $total = array_sum($jumlah);
                                        
                                     ?>      
                                    
                          <div class="float-right">
                                <i class="mdi mdi-currency-usd widget-icon bg-info-lighten text-info"></i>
                          </div>
                          <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Pendapatan</h5>
                          <h3 class="mt-3 mb-3"><?php echo rupiah($total); ?></h3>
                      </div> <!-- end card-body-->
                  </div> <!-- end card-->
              </div> <!-- end col-->
          </div> <!-- end row -->
</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>

                </div>
                <h4 class="header-title mb-3">Pendapatan Mingguan</h4>

                <div class="chart-content-bg">
                    <div class="row text-center">
                                   <?php
                                                include '../../../config/database/koneksi.php';
                                               $data3 = mysqli_query($koneksi,"SELECT SUM(amount) AS total_amount FROM trx WHERE YEARWEEK(tanggal) = YEARWEEK(NOW()) and status ='paid'");
                                                while($m = mysqli_fetch_array($data3)){
                                                    
                                                 $minggusekarang = $m['total_amount'];
                                                 
                                                }
                                                
                                            
                                        
                                     ?>   
                        <div class="col-md-6">
                            <p class="text-muted mb-0 mt-3">Minggu Sekarang</p>
                            <h2 class="font-weight-normal mb-3">
                                <small class="mdi mdi-checkbox-blank-circle text-primary align-middle mr-1"></small>
                                <span><?php echo rupiah($minggusekarang); ?></span>
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-0 mt-3">Minggu Lalu</p>
                            <h2 class="font-weight-normal mb-3">
                                                                   <?php
                                                include '../../../config/database/koneksi.php';
                                               $data4 = mysqli_query($koneksi,"SELECT SUM(amount) AS total_amount FROM trx WHERE YEARWEEK(tanggal) = YEARWEEK(NOW() - INTERVAL 1 WEEK) and status ='paid'");
                                                while($n = mysqli_fetch_array($data4)){
                                                    
                                                 $minggulalu = $n['total_amount'];
                                                 
                                                }
                                                
                                            
                                        
                                     ?>   
                                <small class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></small>
                                <span><?php echo rupiah($minggulalu); ?></span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div id="revenue-chart" class="apex-charts mt-3"></div>
                
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
     <!-- end col-->

  </div>
 
<?php
      require_once "../view/footer.php"
?>

                                   <?php
                                                include '../../../config/database/koneksi.php';
                                               $data3 = mysqli_query($koneksi,"SELECT * total_amount FROM s_order WHERE YEARWEEK(order_date) = YEARWEEK(NOW()) and status ='paid'");
                                                while($m = mysqli_fetch_array($data3)){
                                                    
                                                 $minggusekarang = $m['total_amount'];
                                                 
                                    }
                                                
                                            
                                        
?> 

					
                                     
<script type="text/javascript">
  
  var options = {
  chart: {
    height: 400,
    type: "line",
    stacked: false
  },
  dataLabels: {
    enabled: false
  },
  colors: ["#0000CD","#00FF7F"],
  series: [
    {
      name: 'Minggu Sekarang',
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
    },
    
    {
         name: 'Minggu Lalu',
      data: [<?php
  include '../../../config/database/koneksi.php';
                                                
                                                $datas = mysqli_query($koneksi,"SELECT * FROM s_order WHERE YEARWEEK(order_date) = YEARWEEK(NOW() - INTERVAL 1 WEEK) and order_status = 'paid' GROUP BY order_date");

                                                while($ds =mysqli_fetch_array($datas)){
                                                    
                                                $date = $ds[order_date];
                                                
                                                $waktu = date('D', strtotime($date));
                                                
                                  

?>

<?php $i = mysqli_query($koneksi,"select * from s_order where order_date ='$date'");
					echo mysqli_num_rows($i);
?>,
<?php
}
?>]
      
 },
  ],
  stroke: {
    width: [4, 4]
  },
  plotOptions: {
    bar: {
      columnWidth: "20%"
    }
  },
  xaxis: {
    categories: ["Senin","Selasa","Rabu","Kamis","jum'at","Sabtu","Minggu"]
  },
  yaxis: [
    {
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
        color: "#0000CD"
      },
      labels: {
        style: {
          colors: "#0000CD"
        }
      },
      title: {
        text: "Minggu Sekarang",
        style: {
          color: "#0000CD"
        }
      }
    },
    {
      opposite: true,
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
        color: "#00FF7F"
      },
      labels: {
        style: {
          colors: "#00FF7F"
        }
      },
      title: {
        text: "Minggu Lalu",
        style: {
          color: "#00FF7F"
        }
      }
    }
  ],
  tooltip: {
    shared: false,
    intersect: true,
    x: {
      show: false
    }
  },
  legend: {
    horizontalAlign: "left",
    offsetX: 40
  }
};

var chart = new ApexCharts(document.querySelector("#revenue-chart"), options);

chart.render();

</script>