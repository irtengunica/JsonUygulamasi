<?php

//dizi tanımlama
$ogrenci = array("ali", "ahmet", "elif", "oktay","hakkı","mehmet");

$arg1=$_GET['ogrenci_adi'];

if (in_array($arg1,$ogrenci))
{
    /*
    burada key-value mantığıyla Json dizisini oluşturuyoruz
    ogrenci_adi       keyine karşılık ahmet
    ogrenci_numara    keyine karşılık 25621465
    ogrenci_bolum     keyine karşılık Mekatronik Muh vs..
    sonra oluşturduğumuz bu diziyi php de ki json_encode komutuyla 
    Json objesi halinde kodluyoruz.
    */
    switch($arg1){
    
    case "ahmet":
        $jsonObje[ogrenci_adi]="ahmet";
        $jsonObje[ogrenci_numara]="25621465";	
        $jsonObje[ogrenci_bolum]="Mekatronik Muh";
        $jsonObje[ogrenci_okul]="Kou"; 
        
        $kodlanmis= json_encode($jsonObje);
        
        die($kodlanmis);
        break;
        
    case "hakkı";
    $jsonObje[ogrenci_adi]="hakki";
    $jsonObje[ogrenci_numara]="100201052";	
    $jsonObje[ogrenci_bolum]="Bilgisayar Muh";
    $jsonObje[ogrenci_okul]="KOU"; 
    
    $kodlanmis= json_encode($jsonObje);
    
    die($kodlanmis);
        break;
    case "elif":
        $jsonObje[ogrenci_adi]="elif";
        $jsonObje[ogrenci_numara]="4526441";	
        $jsonObje[ogrenci_bolum]="Bilgisayar Muh";
        $jsonObje[ogrenci_okul]="ITU"; 
        
        $kodlanmis= json_encode($jsonObje);
        
        die($kodlanmis);
        break;
        
    case "mehmet":
        $jsonObje[ogrenci_adi]="mehmet";
        $jsonObje[ogrenci_numara]="10000001";	
        $jsonObje[ogrenci_bolum]="Güzel Sanatlar";
        $jsonObje[ogrenci_okul]="Gazi"; 
        
        $kodlanmis= json_encode($jsonObje);
        
        die($kodlanmis);
        break;
    }
  }
    else
  {
    //echo "Kisi bulunamadı.";
  }
?>
    
    