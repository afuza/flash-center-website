<?php
require_once "../view/header.php"
 ?>
 <?php
  include '../../../config/database/koneksi.php';
 ?>
<?php
                           if(isset($_GET['transaction_status'])){
                             if($_GET['transaction_status'] == "refund"){
                               echo "<script> Swal.fire({
                               position: 'center',
                                icon: 'error',
                                title: 'Pembayaran Di Kembalikan',
                                showConfirmButton: false,
                                timer: 2000
                                }) </script>";
                              }
                           }
                           ?>
<br/>
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                   <form class="form-inline">
                            <div class="form-group col-md-8 ">
                                <label for="status-select" class="mr-2">Status</label>
                                <select onchange="location = this.value;" class="custom-select" id="status-select">
                                    <option selected>Pilih ...</option>
                                    <option value="index.php?stv=accept">Accept</option>
                                    <option value="index.php?stv=selesai">selesai</option>
                                    <option value="index.php?stv=waiting">waiting</option>
                                    <option value="index.php?stv=proses">proses</option>
                                    <option value="index.php?stv=nope">nope</option>
                                </select>
                            </div>
                            <form action="/action_page.php" method="get">
                            <div class="form-group col-md-4">
                                <label for="status-select" class="mr-2">Status</label>
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <button type="submit" class="btn btn-outline-light btn-rounded"><i class="uil-search-alt"></i></button>
                            </div>
                           </form>
                        </form>
                        <br/>
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>INVOICE</th>
                            <th>EMAIL</th>
                            <th>TOTAL</th>
                            <th>TANGAL</th>
                            <th>PDF FILE</th>
                            <th>STATUS</th>
                            <th>UPDATE</th>
                        </tr>
                    </thead>
                    <tbody>
                        
<?php
$data = mysqli_query($koneksi,"select * from trx");
while($d = mysqli_fetch_array($data)){
$invo = $d['INVOICE'];
$sts = $d['status'];
$harga = $d['amount'];
switch ($sts) {
  case 'paid':
    $trx2 = 'success ';
    break;
case 'waiting':
      $trx2 = 'info';
    break;
 case 'pay':
      $trx2 = 'primary';
    break;
  default:
    $trx2 ='danger';
    break;
}

switch ($sts) {
  case 'paid':
    $trx3 = 'disabled ';
    break;
    case 'waiting':
        $trx3 = 'enabled';
      break;
 case 'pay':
        $trx3 = 'enabled';
      break;
  case 'cancel':
    $trx3 ='disabled';
    break;
}
switch ($sts) {
  case 'pay':
    $trx5 = 'proses';
    break;
  default:
    $trx5 = 'chek-payment';
    break;
}


 ?>
<!-- star index -->
        <tr>
            <td><b>#<?php echo $d['INVOICE']; ?></b></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo rupiah($harga); ?></td>
            <td><?php echo $d['tanggal']; ?></td>
            <td><a href="../page/invoice_order.php?invoice=<?php echo $invo ?>"<button type="button" class="btn btn-dark btn-rounded">Invoice</button></td>
            
            <td><span class="badge badge-outline-<?php echo $trx2 ?>"><?php echo $sts ?></span>
            </td>
              <td><a data-toggle="modal" data-target="#myModal<?php echo  $d['INVOICE']; ?>" href="#" class="action-icon"><button type="button" class="btn btn-primary btn-rounded">STATUS</button></i></a></td>
              
              
              <div id="myModal<?php echo  $d['INVOICE']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tampilkan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
<form action="../../../config/fuction/updatepay.php" method="POST">
<?php
$id = $d['INVOICE'];
      $zs = mysqli_query($koneksi,"select * from trx WHERE INVOICE='$id'");
      while( $q =  mysqli_fetch_array($zs)){
?>
            <div class="modal-body">
                
<p class='h4'>Note :</p>
  <p>Refund = Mengembalikan Dana</p>
  
<input type="hidden" name="order_id" value="<?php echo $q['INVOICE']; ?>">

<div class="hasil-data"></div>
<select  name='status' class="custom-select mb-3">
    <option value="refund">Refund</option>
</select>  
            </div>
            <div class="modal-footer">
                <button type="submit" name="btn" value="paym" class="btn btn-primary">Update</button>
            </div>
</form>
<?
      }
?>
        </tr>
        <?php
        }
         ?>
    </tbody>

</table>


</div>
</div>
</div>
</div>

<?php
      require_once "../view/footer.php"
?>
