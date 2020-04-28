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
            $connect = new PDO('mysql:host=localhost;dbname=Motoryzacja', 'root', '');
        }
        catch (PDOException $e)
        {
            echo $e -> getMessage() . "<br/>";
            die();
        }

        $zap = 'SELECT * FROM Samochody WHERE id = 1 OR id = 3';
        foreach($connect->query($zap) as $row){
            echo $row['marka'];
            echo $row['model'];
            echo $row['pojemnosc'];
        }
    
    ?>
</body>
</html>