<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Jakie ryby chcesz?
        <br>
        <input type="radio" name="tryb" id="" value="1">1 <br>
        <input type="radio" name="tryb" id="" value="2">2 <br>
        <input type="submit" value="wybierz ryby">
    </form>
    <h1>Ryby</h1>
    <table>
        <tr>
            <th>Nazwa</th>
            <th>Występowanie</th>
            <th>Styl życia</th>
        </tr>
        <?php
    $polaczenie=mysqli_connect("localhost","root","","klasa4c");
    $zapytanie="SELECT `nazwa`, `wystepowanie`, `styl_zycia` FROM `ryby`";
    if(isset($_POST['tryb'])){
        $tryb= $_POST['tryb'];
        $zapytanie="SELECT `nazwa`, `wystepowanie`, `styl_zycia` FROM `ryby` WHERE `styl_zycia` = $tryb";
    }
    $wynik=mysqli_query($polaczenie,$zapytanie);
    while($rekord=mysqli_fetch_array($wynik)){
        echo "<tr>
        <td>$rekord[0]</td>
        <td>$rekord[1]</td>
        <td>$rekord[2]</td>
            </tr>";
    }

    mysqli_close($polaczenie);

?>
    </table>
</body>
</html>