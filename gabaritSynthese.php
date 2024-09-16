<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="frontal.php" method="Post">
    <p> 
        Entrer l'id du client :<input type="text" name="id_client"
        pattern="[0-9]+"  title="Saisissez uniquement des chiffres de 0 à 9 ">
    </p> 
    <p>
        <input type="submit" value="valider" name="btnsynthese">
    </p>
    </form>
    <?php echo $contenue10 ?>
    <?php echo $erreur ?>
</body>
</html>