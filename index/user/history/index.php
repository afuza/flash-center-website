<?php
require_once "../view/header.php"
 ?>
 <?php
  include '../../../config/database/koneksi.php';
 ?>
<?php
                           if(isset($_GET['transaction_status'])){
                             if($_GET['transaction_status'] == "settlement"){
                             echo "<script> Swal.fire({
                             position: 'center',
                              icon: 'success',
                              title: 'Pembayaran Berhasil',
                              showConfirmButton: false,
                              timer: 2000
                              }) </script>";
                           }else if($_GET['transaction_status'] == "pending"){
                               echo "<script>  Swal.fire({
                             position: 'center',
                              icon: 'info',
                              title: 'Menunggu Pembayaran',
                              showConfirmButton: false,
                              timer: 2000
                              }) </script>";
                            }else if($_GET['transaction_status'] == "expire"){
                               echo "<script> Swal.fire({
                             position: 'center',
                              icon: 'error',
                              title: 'Pembayaran Expired',
                              showConfirmButton: false,
                              timer: 2000
                              }) </script>";
                             }else if($_GET['transaction_status'] == "deny"){
                                echo "<script> Swal.fire({
                              position: 'center',
                               icon: 'error',
                               title: 'Pembayaran deny',
                               showConfirmButton: false,
                               timer: 2000
                               }) </script>";
                              }else if($_GET['transaction_status'] == "cancel"){
                                 echo "<script> Swal.fire({
                               position: 'center',
                                icon: 'error',
                                title: 'Pembayaran cancel',
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
                  <h4 clas="">Riwayat Order</h4>
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>INVOICE</th>
                            <th>TOTAL</th>
                            <th>TANGAL</th>
                            <th>PDF FILE</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        
<?php
$data = mysqli_query($koneksi,"select * from trx where email = '".$_SESSION['email']."'");
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
            <td><?php echo rupiah($harga); ?></p></td>
            <td><?php echo $d['tanggal']; ?></td>
            <td><a href="../page/invoice_order.php?invoice=<?php echo $invo ?>"<button type="button" class="btn btn-dark btn-rounded">Invoice</button></td>
            
            <td><a href="../midtrans-creat/<?php echo $trx5 ?>.php?invo=<?php echo $invo ?>"><button type="button" class="btn btn-<?php echo $trx2 ?> btn-rounded" <?php echo $trx3 ?>><?php echo $sts ?></button></a></td>
        </tr>
        <?php
        }
         ?>
    </tbody>

</table>

<?php

    $data = mysqli_query($koneksi,"SELECT status, SUM(amount) FROM trx GROUP BY status='paid' and email ='$_SESSION[email]' ");
    while($z = mysqli_fetch_array($data)){
   $hasil_total =$z['SUM(amount)'];
              }
?>
<?php

mysqli_query($koneksi,"UPDATE saldo SET sal='$hasil_total' WHERE email='$_SESSION[email]'");

?>

</div>
</div>
</div>
</div>

<?php
      require_once "../view/footer.php"
?>
