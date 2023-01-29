<!DOCTYPE html>
<html>
<head>
<title>PHP1</title>
</head>
<body>

<form action="php2.php" method="post">
  <h2>Matematiksel İşlemler</h2>

    <p>Birinci Sayıyı Giriniz:</p>
    <input name="sayi1" type="number" />

    <p>İkinci Sayıyı Giriniz:</p>
    <input name="sayi2" type="number" />

<input name="gonder" type="submit"/>
</form>
<br>
<br>

<br>
<br>




<form action="php3.php" method="post">
  <h2>MANTIKSAL İŞLEMLER</h2>
    <p>
      <h4>Giriş 1 (4 Bit)</h4>                                
    <input type="radio" name="giris1a" value="0" > 0
    <input type="radio" name="giris2a" value="0"> 0
    <input type="radio" name="giris3a" value="0"> 0
    <input type="radio" name="giris4a" value="0"> 0<br>
    <input type="radio" name="giris1a" value="1"> 1
    <input type="radio" name="giris2a" value="1"> 1
    <input type="radio" name="giris3a" value="1"> 1
    <input type="radio" name="giris4a" value="1"> 1<br>


    <h4>Giriş 2 (4 Bit)</h4>                                
    <input type="radio" name="giris1b" value="0" >0
    <input type="radio" name="giris2b" value="0"> 0
    <input type="radio" name="giris3b" value="0"> 0
    <input type="radio" name="giris4b" value="0"> 0<br> 
    <input type="radio" name="giris1b" value="1"> 1
    <input type="radio" name="giris2b" value="1"> 1
    <input type="radio" name="giris3b" value="1"> 1
    <input type="radio" name="giris4b" value="1"> 1<br>

    <input type="submit" name="gonder">
    <input type="reset" value="Sıfırla">
    </P>
 </form>

<?php

            
?>       



</body>
</html>