
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wprowadzenie do php</title>
</head>
<body>
    <p>
        pliki muszą być zapisane w c:/xampp/htdocs
        żeby uruchomić plik w przeglądarce 
        lacalhost/nazwa pliku lub katalogu

    </p>
        <?php
echo "Witaj przed <b>egzaminem</b>";
echo "";
$zmienna=10;
echo "<br>$zmienna<br>";
echo "<br>wart zmienna ++ <br>".$zmienna++;
echo "<br>$zmienna<br>";
echo "<br>++ wart zmienna<br>".++$zmienna;
?>
<hr>
<?php
 echo gettype($zmienna)."<br>";
 $tekst="jakis tekst";
 echo gettype($tekst)."<br>";
 $czy=true;
 echo gettype($czy)."<br>";
 $liczbaPI=3.14;
 echo gettype($liczbaPI)."<br>";
?>
<hr>
<?php
if($zmienna%2 == 0){
    echo "$zmienna jest parzysta";
}
else{
    echo "$zmienna jest nieparzysta";
}

?>
<hr>
<?php
$ocena=7;
switch($ocena){
    case 1:
        echo "ndst";
        break;
    case 2:
        echo "dop";
        break;
    case 3:
        echo "dst";
        break;
    case 4:
        echo "db";
        break;
    case 5:
        echo "bdb";
        break;
    case 6:
        echo "cel";
        break;
    default:
        echo "nie ma takiej oceny";
}
?>
<hr>
<?php
#komentarz
    for($i=35;$i<=89;$i++){
        echo "$i, ";
    }
    //warunek początkowy, warunek powtarza pętli, zmiana w iteracjach
/*
komentarz wieloliniowy
*/
echo "<hr>";
for($i=1000; $i>500 ; $i=$i-2){
    echo "$i, ";
}
echo "<hr>";
//losuj liczby z zakresu od 1 do 100 
//tak długo aż wylosujesz cyfrę
$liczba=rand(1,100);
echo $liczba." ";
//dopóki $liczba jest większa od 9
while($liczba>9)
{
    $liczba=rand(1,100);
    echo $liczba." ";
    //losuj i wypisz
}

?>
</body>
</html>