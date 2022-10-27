<?php
function suma($x,$y){
    $s=$x+$y;
    return $s;
}
$a=15;
$b=20;
echo suma($a,$b);

function suma2(&$x,$y){
    //& przekazywanie argumentu przez referencję
    //do funkcji idzie oryginalna zmienna
    //brak przekazywanie przez wartość
    //przekazujemy kopię zmiennej oryginał bez zmian
    $x++;
    $y++;
    return $x+$y;
}
echo "<hr> zmienna a = $a";//15
echo "<br> zmienna b = $b";//20
echo "<br>suma=".suma2($a,$b);//37
echo "<hr> zmienna a = $a";//16
echo "<br> zmienna b = $b";//20

function licznikWywolan(){
    static $licznik = 0 ;
    $licznik++;
    echo "Uruchomiono funkcję $licznik<br>";
}
licznikWywolan();
licznikWywolan();
licznikWywolan();
licznikWywolan();
licznikWywolan();
$c=25;
function jakas(){
    global $c;
    echo $c;
}
jakas();
?>