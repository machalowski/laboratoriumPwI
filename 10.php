<?php

for ($i = 1; $i <= 15; $i++) 
{
    echo $i."</br>";
}
echo("</br>");

$i = 1;
while ($i <= 15) 
{
    echo $i++."</br>";
}
echo("</br>");

$tablica = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

foreach ( $tablica as $wartosc )
{
    echo $wartosc."</br>";
}

?>
