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

        $sql = "DELETE FROM studenci WHERE id=:id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id', $_POST["studenci"], PDO::PARAM_STR);
        $sql->execute();

    ?>
</body>
</html>