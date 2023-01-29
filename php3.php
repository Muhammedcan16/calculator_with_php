<!DOCTYPE html>
<html>
<head>
<title>PHP3</title>
</head>
<body>
<h2>MANTIKSAL İŞLEMLER SONUÇLARI</h2>
<?php

 

$giris1a=$_POST['giris1a'] ;
$giris2a=$_POST['giris2a'] ;
$giris3a=$_POST['giris3a'] ;
$giris4a=$_POST['giris4a'] ;
$giris1b=$_POST['giris1b'] ;
$giris2b=$_POST['giris2b'] ;
$giris3b=$_POST['giris3b'] ;
$giris4b=$_POST['giris4b'] ;
$bos=0;
$dolu=1;

$VE1=$giris1a == $giris1b ;
$VE2=$giris2a == $giris2b ;
$VE3=$giris3a == $giris3b ;
$VE4=$giris4a == $giris4b ;

$VEYA1=$giris1a || $giris1b ;
$VEYA2=$giris2a || $giris2b ;
$VEYA3=$giris3a || $giris3b ;
$VEYA4=$giris4a || $giris4b ;

$XOR1=$giris1a != $giris1b ;
$XOR2=$giris2a != $giris2b ;
$XOR3=$giris3a != $giris3b ;
$XOR4=$giris4a != $giris4b ;

$XNOR1=$giris1a == $giris1b ;
$XNOR2=$giris2a == $giris2b ;
$XNOR3=$giris3a == $giris3b ;
$XNOR4=$giris4a == $giris4b ;

?>


<p>Dört İşlem Sonucu</p>
  
    <p>Giriş1 Ve Giriş2 :<?php echo $giris1a;?><?php echo $giris2a;?>
    <?php echo $giris3a;?><?php echo $giris4a;?> VE <?php echo $giris1b;?><?php echo $giris2b;?>
    <?php echo $giris3b;?><?php echo $giris4b;?> = 

    <?php

if($VE1)
{
 echo $dolu;
}
else
{
  echo $bos;
}

if($VE2)
{
 echo $dolu;
}
else
{
  echo $bos ;
}
if($VE3)
{
 echo $dolu;
}
else
{
  echo $bos ;
}
if($VE4)
{
 echo $dolu;
}
else
{
  echo $bos;
}

?>
  </p>




  <p>Giriş1 Ve Giriş2 :<?php echo $giris1a;?><?php echo $giris2a;?>
    <?php echo $giris3a;?><?php echo $giris4a;?> VEYA <?php echo $giris1b;?><?php echo $giris2b;?>
    <?php echo $giris3b;?><?php echo $giris4b;?> = 
    
    <?php  
    
    if($VEYA1)
{
 echo $dolu;
}
else
{
  echo $bos;
}

if($VEYA2)
{
 echo $dolu;
}
else
{
  echo $bos;
}

if($VEYA3)
{
 echo $dolu;
}
else
{
  echo $bos;
}

if($VEYA4)
{
 echo $dolu;
}
else
{
  echo $bos;
}
    ?> 
  </p>



  <p>Giriş1 Ve Giriş2 :<?php echo $giris1a;?><?php echo $giris2a;?>
    <?php echo $giris3a;?><?php echo $giris4a;?> XOR <?php echo $giris1b;?><?php echo $giris2b;?>
    <?php echo $giris3b;?><?php echo $giris4b;?> = 
    
    <?php 
    
    if($XOR1)
    {
     echo $dolu;
    }
    else
    {
      echo $bos;
    }
    
    if($XOR2)
    {
     echo $dolu;
    }
    else
    {
      echo $bos;
    }
    
    if($XOR3)
    {
     echo $dolu;
    }
    else
    {
      echo $bos;
    }
    
    if($XOR4)
    {
     echo $dolu;
    }
    else
    {
      echo $bos;
    }
    
    
    ?> 
  </p>

  <p>Giriş1 Ve Giriş2 :<?php echo $giris1a;?><?php echo $giris2a;?>
    <?php echo $giris3a;?><?php echo $giris4a;?> XNOR <?php echo $giris1b;?><?php echo $giris2b;?>
    <?php echo $giris3b;?><?php echo $giris4b;?> = 
    
    <?php 
    
    if($XNOR1)
    {
     echo $dolu;
    }
    else
    {
      echo $bos;
    }
    
    if($XNOR2)
    {
     echo $dolu;
    }
    else
    {
      echo $bos;
    }
    
    if($XNOR3)
    {
     echo $dolu;
    }
    else
    {
      echo $bos;
    }
    
    if($XNOR4)
    {
     echo $dolu;
    }
    else
    {
      echo $bos;
    }
    
    
    ?> 
  </p>
    
    <a href="php1.php">Geri dön</A>

</body>
</html>