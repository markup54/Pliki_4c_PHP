<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Formularze w js cd.</h3>
    <form >
    <p>Jaki jest twój ulubiony kolor</p>
    <input type="radio" name="kolor" id="" value="czerwony">czerwony <br>
    <input type="radio" name="kolor" id="" value="zielony">zielony <br>
    <input type="radio" name="kolor" id="" value="niebieski">niebieski <br>
    <input type="radio" name="kolor" id="" value="czarny">czarny <br>
    <input type="radio" name="kolor" id="" value="zółty">żółty <br>
    <input type="button" onClick = "przepisz()" value="Przepisz">
    <p id="komuikat"></p>
    </form>
    <script>
           function przepisz(){
            console.log("kliknięto");
            let kolorek = document.getElementsByName("kolor");
            for(let i=0;i<kolorek.length;i++){
                if(kolorek[i].checked){
                    console.log(kolorek[i].value);
                    document.getElementById("komunikat").innerHTML="Twój ulubiony kolor to "+kolorek[i].value;
                }
            }
           } 
    </script>
<form>
    Jakie kolory tolerujesz? <br>
    <input type="checkbox" name="kolor2" id="" value="czerwony">czerwony <br>
    <input type="checkbox" name="kolor2" id="" value="zielony">zielony <br>
    <input type="checkbox" name="kolor2" id="" value="niebieski">niebieski <br>
    <input type="checkbox" name="kolor2" id="" value="czarny">czarny <br>
    <input type="checkbox" name="kolor2" id="" value="zółty">żółty <br>
    <input type="button"  onClick= "przepisz2()" value="Przpisz poniżej">
</form>
<p id="komunikat2"></p>
<script>
    function przepisz2(){
        kolorki2=document.getElementsByName("kolor2");
        let akapit= document.getElementById("komunikat2");
        akapit.innerHTML = "Twoje ulubione kolory: <ul>";
        for(i=0;i<kolorki2.length;i++){
            if(kolorki2[i].checked){
            console.log(kolorki2[i].value);
            akapit.innerHTML=akapit.innerHTML+"<li>"+kolorki2[i].value+"</li>";
            }
        }
        akapit.innerHTML=akapit.innerHTML+"</ul>";
    }
</script>
</body>
</html>