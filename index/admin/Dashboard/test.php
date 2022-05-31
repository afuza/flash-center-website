 <?php
  include '../../../config/database/koneksi.php';
                                                
                                                $datas = mysqli_query($koneksi,"SELECT * FROM s_order WHERE YEARWEEK(order_date) = YEARWEEK(NOW() - INTERVAL 1 WEEK) GROUP BY order_date");

                                                while($ds =mysqli_fetch_array($datas)){
                                                    
                                                $date = $ds[order_date];
                                                
                                                $waktu = date('D', strtotime($date));
                                                
                                  

?>

<?php $i = mysqli_query($koneksi,"select * from s_order where order_date ='$date'");
					echo mysqli_num_rows($i);
?>,

<?php
}
?>
========================================================================
 <?php
  include '../../../config/database/koneksi.php';
                                                
                                                $datas1 = mysqli_query($koneksi,"SELECT * FROM s_order WHERE YEARWEEK(order_date) = YEARWEEK(NOW()) GROUP BY order_date");

                                                while($dss =mysqli_fetch_array($datas1)){
                                                    
                                                $datse = $dss[order_date];
                                                
                                                $waktu1 = date('D', strtotime($datse));
                                                
                                  

?>

<table>
<tbody>
<tr>
<td><?php echo $waktu1 ?></td>
<td><?php $i = mysqli_query($koneksi,"select * from s_order where order_date ='$datse'");
				
					echo mysqli_num_rows($i);
?></td>
</tr>
</tbody>
</table>

<!-- DivTable.com -->


<?php
}
                                                

?>