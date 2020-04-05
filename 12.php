<?php
if ($_GET['a'] != null && $_GET['b'] != null)
{
  $a = $_GET['a'];
  $b = $_GET['b'];
  echo("A = $a </br> B = $b");
} 

    else
    {
        echo("Nie podano ktorejs z liczb");
    }
?>