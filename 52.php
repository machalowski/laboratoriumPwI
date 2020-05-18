<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="53.php" id="usun" method=post>
        <select id="studenci" form="usun" name="studenci">

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

        $sql = "SELECT id, imie, nazwisko FROM studenci";
        $stmt = $polacz->query($sql);
        while ($row = $stmt->fetch()) {
            print "<option value='" .$row["id"]. "'>" .$row["imie"]. " " .$row["nazwisko"] . "</option>";

        
        ?>

             </select>
        <button type="submit">usun</button>
    </form>
</body>
</html>