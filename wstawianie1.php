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
        Podaj datę <input type="date" name="data" id="">
        <br>
        Podaj wynik <input type="number" name="wynik" id="">
        <br>
        <input type="submit" value="dodaj do bazy">
    </form>
    <?php
    if(!empty($_POST['data']) && !empty($_POST['wynik'])){
        echo "wypełniono formularz";
        $data = $_POST['data'];
        $wynik = $_POST['wynik'];
        $zapytanie="INSERT INTO `wynik` (`id`, `bmi_id`, `data_pomiaru`, `wynik`) VALUES (NULL, '2', '$data', '$wynik');";
        $polaczenie= mysqli_connect("localhost","root","","egzamin5");
        mysqli_query($polaczenie,$zapytanie);

        mysqli_close($polaczenie);

    }

?>
<form action="" method="post">
    Podaj nazwę pliku
    <input type="text" name="plik" id="">
    <br>
    Podaj podpis pliku
    <input type="text" name="podpis" id="">
    <br>
    <input type="submit" value="dodaj do bazy">

</form>

<?php
if(!empty($_POST['plik']) && !empty($_POST['podpis'])){
    $plik = $_POST['plik'];
    $podpis = $_POST['podpis'];
    $zapytanie = "INSERT INTO `zdjecia` (`id`, `nazwaPliku`, `podpis`) VALUES (NULL, '$plik', '$podpis');";
    $polaczenie= mysqli_connect("localhost","root","","egzamin5");
    mysqli_query($polaczenie,$zapytanie);

    mysqli_close($polaczenie);
}

?>
</body>
</html>