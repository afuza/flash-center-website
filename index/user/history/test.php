<?php
$php_to_html = file_get_contents("https://hpanel.flashing.center/index/user/page/invoice_order.php?invoice=B67FIj");
$html_encoded = htmlentities($php_to_html);  
echo $html_encoded;
?>

