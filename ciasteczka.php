<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        setcookie("pierwsze_ciasteczko","wartość w ciasteczku",time()+60*60*24*7);
        //ciasteczko na 7 dni
        print_r($GLOBALS);
//licznik odświeżeń strony

//jeżeli jest ktoś po raz pierwszy to licznik =0
    if(!isset($_COOKIE['licznik'])){
        setcookie("licznik",0,time()+60*60);
        echo "Licznik startuje";
    }
    else{
//jeżeli po raz kolejny to licznik się zwiększa o 1
        $licznik = $_COOKIE['licznik'];
        $licznik++;
        echo "odświeżono po raz $licznik";
        setcookie("licznik",$licznik,time()+60*60);
    }

      //licznik sekund od ostatniego odwiedzenia
      
      if(!isset($_COOKIE['kiedy'])){
        echo "Zaczynamy liczyć czas";
        setcookie("kiedy",time(),time()+60);
      }
      else{
        $kiedys = $_COOKIE['kiedy'];
        $teraz=time();
        $ile_sekund= $teraz-$kiedys;
        echo "Byłaś/eś ostatnio $ile_sekund temu";
        setcookie("kiedy",time(),time()+60);
      }
    ?>
</body>
</html>