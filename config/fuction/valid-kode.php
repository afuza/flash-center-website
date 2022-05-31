<?php

                                            include "../database/koneksi.php";
                                          
                                            $kode= $_POST['kode'];
                                            $nope= $_POST['nope'];
                                            $invo= $_POST['invo'];
                                            
                                             $sql_cek=mysqli_query($koneksi,"SELECT * FROM req WHERE id_req='".$invo."' and token ='".$kode."' and confrim ='0'");
                                            $jml_data=mysqli_num_rows($sql_cek);
                                            
                                            if ($jml_data>0) {
                                                
                                            $req_valid2 = "UPDATE req SET status ='waiting' WHERE id_req='$invo'and token='$kode' and confrim ='0'";
                                              mysqli_query($koneksi, $req_valid2);
                                                
                                             $req_valid = "UPDATE req SET confrim ='1' WHERE id_req='$invo'and token='$kode' and confrim ='0'";
                                                
                                              if(mysqli_query($koneksi, $req_valid)){
                                                  
                                                   header('location:../../index/user/chating/index.php?info=sukses');
                                                  
                                              }
                                            
                                            
                                            }else{
                                                
                                                 header('location:../../index/user/download/confrim_otp.php?nope='.$nope.'&invo='.$invo.'&info=gagal');
                                            }
                                  
                                            
?>

