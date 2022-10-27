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
        function wypiszTablice($tablica){
            for($i=0;$i<count($tablica);$i++){
                echo "tab[$i] = $tablica[$i] <br>";
            }
        }
        function wypiszAsocjacyjna($tablica){
            foreach( $tablica as $element){
                echo "$element<br>";
            }
            echo "<hr>";
            foreach( $tablica as $klucz=>$element){
                echo "$klucz=>$element<br>";
            }
        }
        $tablica=[34,65,7,98,45,2];
        print_R($tablica);
        //wypisywanie tablicy
        wypiszTablice($tablica);
        
        sort($tablica);//sortowanie według wartości od najmniejszej do największej
        echo "<hr>";
        wypiszTablice($tablica);
        $jezyki = ['PHP',"Python","c++","Type script", "JavaScript"];
        wypiszTablice($jezyki);
        
        sort($jezyki);//sortowanie według wartości ASCII od najmniejszej do największej
        echo "<hr>";
        wypiszTablice($jezyki);//najpierw duże litery potem małe
        wypiszTablice($tablica);
        
        rsort($tablica);//sortowanie według wartości od największej do najmniejszej
        echo "<hr>";
        wypiszTablice($tablica);

        //tablica asocjacyjna
        //indeksy są wartościami tekstowymi
        $tablica_kolorow = [ "czerwony"=>"#FF0000", "niebieski"=>"#0000FF","Zielony"=>"rgb (0,255,0)","fusia"=>"#888800"];
        print_r($tablica_kolorow);

        wypiszAsocjacyjna($tablica_kolorow);
        asort($tablica_kolorow);//sortuje tablicę asocjacyjna
        echo "<h3>Sortowanie asort</h3>";
        wypiszAsocjacyjna($tablica_kolorow);

        arsort($tablica_kolorow);
        wypiszAsocjacyjna($tablica_kolorow);

        ksort($tablica_kolorow);//sortowanie według klucza indeksu
        wypiszAsocjacyjna($tablica_kolorow);

?>
</body>
</html>