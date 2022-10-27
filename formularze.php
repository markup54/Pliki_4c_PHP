<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formularze</h1>
    <form action="" method="get">
        Podaj login 
        <input type="text" name="login" id="">
       <br>
        podaj hasło
        <input type="password" name="haslo" id="">
        <input type="submit" value="zaloguj">
    </form>
    <?php
    print_r($GLOBALS);
    //metoda get jest niedopuszczalna dla przesyłania haseł tu jest ŻLE
    //get przesyła dane przez url
    if(!empty($_GET['login']))
    {
    $login= $_GET['login'];
    echo $login;
    }
    ?>
    <hr>
    <h1>Formularz taki jak trzeba</h1>
    <form action="" method="post">
    Podaj login 
        <input type="text" name="login" id="">
       <br>
        podaj hasło
        <input type="password" name="haslo" id="">
        <input type="submit" value="zaloguj">
    </form>
    <?php
    //przesyłanie metodą post przez nagłówek strony
    if(!empty($_POST['login']) && !empty($_POST['haslo'])){
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        echo "Witaj $login";
        if($login=='admin' && $haslo== '1234')
        {
            echo "poprawnie zalogowano";
        }
        else{
            echo "błędny login lub hasło";
        }
    }
    ?>
    <hr>
    <script>
        console.log("teścik");
    </script>
    <?php
        for($i=0;$i<100;$i++){
            echo "$i, ";
        }

    ?>
    <h1>Formularz w js</h1>
    Podaj login <input type="text" name="" id="login"><br>
    Podaj hasło <input type="password" id="haslo"><br>
    <input type="button" value="sprawdz dane" onClick="sprawdzanie()">
    <br>
    <p id="komunikat"></p>
    <script>
        function sprawdzanie(){
            console.log("naciśnięto button");
            let login = document.getElementById("login").value;
            console.log(login);
            document.getElementById("komunikat").innerHTML = "Witaj "+login;
        }
    </script>
    <hr>
    <form action="nowyformularz.php" method="post">
            Podaj liczbę <input type="number" name="liczba" id="">
            <input type="submit" value="Sprawdź">
    </form>
</body>
</html>