<?php
session_start();
ob_start();
if(!$_POST){
      $_SESSION["sayi"]=$sayi=rand(1,100); 
      $mesaj="Bir sayı tuttuk bilin bakalım kaç!";
}
else{
   $tahmin=$_POST["tahmin"];
   $sayi=$_SESSION["sayi"];
   if($tahmin>$sayi)
      $mesaj="Daha küçük bir sayı giriniz.";
   elseif($tahmin<$sayi)
      $mesaj="Daha BÜYÜK bir sayı giriniz.";
   else{
      $mesaj="Tebrikler bildiniz!";
      $_SESSION["sayi"]=$sayi=rand(1,100);
      $mesaj.="<br><a href='index.php'>Tekrar denemek için tıklayınız.</a>";

   }
}
?>
<html>
<body>
   <form name="form1" method="post" action="index.php">
      Tahmin: <input type="text" name="tahmin"><br>
      <input type="submit" name="tahminet" value="Tahmin Et">
   </form>

<?php
echo $mesaj;
?>
</body>
</html>