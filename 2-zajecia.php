<!DOCTYPE html>
<html lang="pl" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Struktura dokumentu</title>

  </head>
  <body>
    <?php
    $name="Janusz";
    $surname="Nowak";
      echo "$name $surname";
      echo '$name $surname';
      echo $name.$surname."<hr>";

      //heredoc


       echo <<<SHOW
       <hr>
       
       
        Imię: $name<br>
        Nazwisko: $surname<br>
       <hr> 
       SHOW;
        $text= <<<'X'
        Imię: $name
     X;
          echo $text,"<br>";

    //typy danych
              $int = 10;
              $hex = 0xA; //
              $oct = 012; //2*8^0 + 1*8^1 = 24

              echo $int,"<br>";
              echo $hex,"<br>";
              echo $oct,"<br>";

              echo phpinfo();
      ?>
  </body>
</html>