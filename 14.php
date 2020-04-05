<?php
    $a = $_POST['a'];
    $b = $_POST['b'];

    $wynik = $a + $b;
    $napis = "$a + $b = ";	
    echo($napis. $wynik);

    echo("<br>");

    $wynik = $a - $b;
    $napis = "$a - $b = ";	
    echo($napis. $wynik);

    echo("<br>");

    $wynik = $a * $b;
    $napis = "$a * $b = ";	
    echo($napis. $wynik);

    echo("<br>");

    if ($b == 0) 
    {
    	echo ("Nie mozna dzielic przez 0");
    }
    
    else
    {
        $wynik = $a / $b;
        $napis = "$a / $b = ";	
        echo($napis. $wynik);
    }



?>