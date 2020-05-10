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

        $zapytanie = "DELETE FROM studenci WHERE id = 2";
        $polacz->query($zapytanie);
    ?>


    
</body>
</html>