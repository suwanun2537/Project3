<?php
//โปรแกรมคำนวณราคาสินค้า
 $price = 20; //ราคาสินค้า
 $quantiry = 30; //จำนวน
 $total = $price * $quantiry; // ราคารวมคิดโดยนำ ราคา x จำนวน

 //ภาษี   7%
 //ภาษี   7%
 $vat = $total * 0.07;
 $totalall = $total + $vat;

 echo ("ราคาสินค้า  " . $price . "จำนวน " .$quantiry. "ราคารวม" .$total );
 echo (" <br>");
 echo ("ภาษี 7%  = " .$vat  );
 echo (" <br>");
 echo ("ราคาสินค้ารวมภาษี =  " . $totalall . "บาท "  );


?>