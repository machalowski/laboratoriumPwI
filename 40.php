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

        $zapytanie1 = "INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES (?,?,?,?)";
        
        $polacz->prepare($zapytanie1)->execute(["Patryk", "Klimala", "jestemspokojnyogole@gmail.com", "1"]);
        $polacz->prepare($zapytanie1)->execute(["Bartosz", "Kwiecień", "kwiecienplecien@gmail.com", "1"]);
        $polacz->prepare($zapytanie1)->execute(["Jakub", "Wójcicki", "prostenogi@gmail.com", "2"]);

        $zapytanie2 = "INSERT INTO rok (nazwa, kierunek, stopien) VALUES (?,?,?)";
        
        $polacz->prepare($zapytanie2)->execute(["1", "Informatyka", "1"]);
        $polacz->prepare($zapytanie2)->execute(["2", "Fizyka", "2"]);
    
    ?>


    
</body>
</html>