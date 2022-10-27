<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styl4.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>LP</th>
            <th>Data</th>
            <th>Noc - temperatura</th>
            <th>Dzień - temperatura</th>
            <th>Opady</th>
            <th>ciśnienie</th>
        </tr>
    <?php
$polaczenie= mysqli_connect("localhost","root","","prognoza");
$zapytanie="SELECT * FROM `pogoda` WHERE `miasta_id` = 2 ORDER BY `data_prognozy` DESC";
$wynik = mysqli_query($polaczenie,$zapytanie);
$i=0;
while($rekord=mysqli_fetch_array($wynik)){
    $i++;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>$rekord[0]</td>  <td>$rekord[1]</td>  <td>$rekord[2]</td>     <td>$rekord[3]</td> <td>$rekord[4]</td>";
    echo "</tr>";
}



mysqli_close($polaczenie);
    ?>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </table>
</body>
</html>