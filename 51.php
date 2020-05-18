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


    $sql = $polacz -> prepare('INSERT INTO studenci VALUES(?,?,?,?,?)');
    $sql -> bindValue(1, $_GET["id"], PDO::PARAM_INT);
    $sql -> bindValue(2, $_GET["imie"], PDO::PARAM_STR);
    $sql -> bindValue(3, $_GET["nazwisko"],PDO::PARAM_STR);
    $sql -> bindValue(4, $_GET["email"], PDO::PARAM_STR);
    $sql -> bindValue(5, $_GET["rok"], PDO::PARAM_INT);
    $sql -> execute();


    ?>
</body>
</html>