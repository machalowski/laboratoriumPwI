<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
        
        try
        {
            $polacz = new PDO('mysql:host=localhost;dbname=Uczelnia', 'root', '');
        }
        catch (PDOException $e)
        {
            echo $e->getMessage() . "<br/>";
            die();
        }

        $zapytanie = "SELECT s.imie, s.nazwisko, r.kierunek, r.stopień FROM studenci s JOIN rok r ON (s.id_rok_studiow = r.id)";
        $dod = $polacz->query($zapytanie);
        while ($row = $dod->fetch()) 
        {
            print $row['imie'] . "\t";
            print $row['nazwisko'] . "\t";
            print $row['kierunek'] . "\t";
            print $row['stopień'] . "<br />\n";
        }
    ?>


    
</body>
</html>