<!DOCTYPE html>
<html>
<head>
<title>PHP2</title>
</head>
<body>

<?php
$sayi1=$_POST['sayi1'];
$sayi2=$_POST['sayi2'];

$topla=$sayi1+$sayi2;

$cikar=$sayi1-$sayi2;

$carp=$sayi1*$sayi2;

$bol=$sayi1/$sayi2;

?>

    
<h2>MATEMATİKSEL İŞLEMLER SONUÇLARI</h2>
 
    <p>Birinci Sayı: <?php echo $sayi1; ?> <br>Sayının Binary Yazılımı:<?php echo base_convert($sayi1,10,2); ?></p>
    <p>İkinci Sayı: <?php echo $sayi2; ?> <br>Sayının Binary Yazılımı:<?php echo base_convert($sayi2,10,2); ?></p>

  
    <p>Sayıların Toplamı: <?php echo $topla; ?><br>Sayının Binary Yazılımı:<?php echo base_convert($topla,10,2); ?></p>
    
    <p>Sayıların Farkı:<?php echo $cikar; ?><br>Sayının Binary Yazılımı:<?php echo base_convert($cikar,10,2); ?></p>
    
    <p>Sayıların Çarpımı:<?php echo $carp; ?><br>Sayının Binary Yazılımı:<?php echo base_convert($carp,10,2); ?></p>
   
    <p>Sayıların Bölümü:<?php echo $bol; ?><br>Sayının Binary Yazılımı:<?php echo base_convert($bol,10,2); ?></p>
    
<a href="php1.php">Geri dön</A>
</body>
</html>