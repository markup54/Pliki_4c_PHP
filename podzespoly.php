<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        https://egzamin-e14.blogspot.com/2020/04/arkusz-e14-01-2001-sg.html
--> 
<table>
<tr>
    <th>NUMER</th>
    <th>NAZWA PODZESPOŁU </th>
    <th>OPIS</th>
    <th>CENA</th>
</tr>

<?php
$polaczenie=mysqli_connect("localhost","root","","sklep");
$zapytanie="SELECT `id`, `nazwa`, `opis`, `cena` FROM `podzespoly` WHERE `cena` < 1000";
$wynik = mysqli_query($polaczenie,$zapytanie);
while($rekord=mysqli_fetch_array($wynik)){
    echo "<tr><td>$rekord[0]</td><td>$rekord[1]</td><td>$rekord[2]</td><td>$rekord[3]</td></tr>";
}
mysqli_close($polaczenie);
//https://pastebin.com/6k3iBu5z
?>
</table>
</body>
</html>