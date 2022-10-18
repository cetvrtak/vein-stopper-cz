<?php
$title = 'Vein Stopper';
$comment_gender = ''; // Check language !
$certificate = 'yes'; // Always no for mobile pages (cert image for mobile is centralized)
$bottomButton = 'Klikni zde a zbav se křečových žil bez nebezpečných a bolestivých operací!';

$cCode = 'CZ';
$persiranje = '0';
$product = 'Vein Stopper';
$fullsku = '1807-911-13912';
$pCode = '1807-911';
$nCode = '1807-911-vein';
$rating = '';

$price_01 = '1080';

include_once '/var/www/sites/footer/functions/priceDecrypt.php';
$ip='';
if (getenv("HTTP_CLIENT_IP")){
    $ip = getenv("HTTP_CLIENT_IP");
}
else if(getenv("HTTP_X_FORWARDED_FOR")){
    $ip = getenv("HTTP_X_FORWARDED_FOR");
}
else if(getenv("REMOTE_ADDR")){
    $ip = getenv("REMOTE_ADDR");
}
else{
$ip = "127.0.0.1";
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php
echo '<script type="text/javascript">var uIp = "'.$ip.'"</script>';
echo '<script type="text/javascript">var pId = "'.substr($fullsku, -4).'"</script>';
echo '<script type="text/javascript">var mlId = "'.$mailstormId.'"</script>';
echo '<script type="text/javascript">var pflId = "'.$profileId.'"</script>';