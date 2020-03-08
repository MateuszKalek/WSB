<?php
  $potega=2**10;
  echo $potega;,"<hr>";

  //operatory bitowe

  $x=0b1010;
  echo $x; //10
  $x=$x>>1;
  echo $x; //5 bo 101 to 5 (bylo przesuniecie)
  $x=$x<<2;
  echo $x,"<hr>"; //20

  //operatory

    $x=10;
    $y=20;

    $result= $x<=>$y;
    echo $result,"<hr>";

  //równe / identyczne
  
     $x=1;
     $y=1.0;

     if ($x==$y)
     {
       echo "Równe<br>";
     }
     else { 
           echo "Różne<br>";
       }

       if ($x===$y)
       {
         echo "Identyczne<br>";
       }
       else { 
             echo "Nieidentyczne<br>";
         }

         echo gettype($x);
         echo gettype($y);
   // operatory rzutowania
   
     $text1="123ssd";
     $x1 = (int)$text1;
     echo $x1;"<br>";
     echo gettype($text1);
     echo gettype($x1);

     $text2 = 0;
     $x2 = (bool)$text2;
     echo $x2;
     
     $text3= 10;
     $x3 = (unset)$text2;
     echo $text3;
     echo $x3;
     echo gettype($text3);
     echo gettype($x3)."<hr>"; //NULL


  //rozmiar typu integer
    echo PHP_INT_SIZE,"<br>"; //8  
    echo PHP_INT_MAX,"<br>"; //8 
    
  //kontrola typu zmiennych
    $x=10;
    echo is_int($x); //1  
    echo is_string($x);
    echo is_bool($x);
    echo is_float($x);
    echo is_null($x),"<hr>";

  //operator ignorowania błędów
    $w;
    echo @$w;
    echo @gettype($w); //NULL
    
  //zmienne superglobalne
  //$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER
  
    echo $_SERVER['SERVER_PORT'],"<br>"; //80
    echo $_SERVER['SERVER_NAME'],"<br>"; //127.0.0.1   
    echo $_SERVER['SCRIPT_NAME'],"<br>"; //127.0.0.1   
    echo $_SERVER['DOCUMENT_ROOT'],"<br>"; //127.0.0.1    

    $fileLocal =  $_SERVER['DOCUMENT_ROOT'];
    $fileLocal .=  $_SERVER['SCRIPT_NAME'];
    echo $fileLocal,"<hr>";
    
 //stałe - nazwy z dużych liter
     define('SURNAME',"Kowal");
     echo SURNAME;
     
     define('namE',"Anna",true);
     echo name;

 //stałe predefiniowane
    echo PHP_VERSION; //7.3.2    
    echo PHP_OS; //WINNT
    echo __LINE__; //104 -linia kodu
    echo __FILE__; //sciezka z nazwa pliku
    echo __DIR__; // sciezka bez nazwy pliku
    


?>  