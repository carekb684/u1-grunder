<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $tal1 = 5;
        $tal2 = 3;
        $summa = $tal1+$tal2;
        echo $summa;
        //gör variabler, addera dom, skriv ut summan
        $string1 ="<br>Hej,";
        $string2 ="detta är en ";
        $string3 ="mening uppbyggd av stringvariabler<br>";
        echo $string1 . $string2 . $string3;
        //gör string variabler, <br> för ny rad, skriv ut
        
        if($summa>10){
            
            echo "Summa är mer än 10.<br> ";
        }else if($summa<10){
            
            echo "Summa är mindre än 10.<br>";
        }
        
        switch($summa){
            
            case 6:
                echo "Summa är 6.";
                break;
            case 7:
                echo "Summa är 7.";
                break;
            case 8:
                echo "Summa är 8.";
                break;
            case 9:
                echo "Summa är 9.";
                break;
        }
        
        $carl=false;
        if(!$carl){
            echo"ja";
        }else {
            echo"nej";
        }
        ?>
    </body>
</html>
