<?php

require_once(dirname(__FILE__) . '\..\..\persistence\DAO\CriaturaDAO.php');
require_once(dirname(__FILE__) . '\..\models\Criatura.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $criaturaDAO = new CriaturaDAO();
    $criatura = $criaturaDAO->selectById($id);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Criaturas</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Page Content -->
        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Name: <?php echo (isset($_GET["id"]) ? $criatura->getName() : ""); ?></h2>
            <i class="description">Description: <?php echo (isset($_GET["id"]) ? $criatura->getDescription() : ""); ?></i>
            <p class="description"><img src="<?php echo (isset($_GET["id"]) ? $criatura->getAvatar() : ""); ?>" class="img-thumbnail" alt="img-thumbnail"></p>
            <p class="description">Attack Power: <?php echo (isset($_GET["id"]) ? $criatura->getAttackPower() : ""); ?></p>
            <p class="description">Life Level: <?php echo (isset($_GET["id"]) ? $criatura->getLifeLevel() : ""); ?></p>
            <p class="description">Weapon: <?php echo (isset($_GET["id"]) ? $criatura->getWeapon() : ""); ?></p>
            <a type="button" class="btn btn-success" href="edit.php?id=<?php echo (isset($_GET["id"]) ? $criatura->getIdCreature() : ""); ?>">Modificar</a>
            <a type="button" class="btn btn-danger" href="../controllers/deleteController.php?id=<?php echo (isset($_GET["id"]) ? $criatura->getIdCreature() : ""); ?>">Borrar</a>
        </div>
    </div>
</div>
        <!-- /.container -->
        <!-- Java Script Boostrap-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
    </body>
</html>