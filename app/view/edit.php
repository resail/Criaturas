<?php
require_once(dirname(__FILE__) . '\..\..\persistence\DAO\CriaturaDAO.php');
require_once(dirname(__FILE__) . '\..\models\Criatura.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $CriaturaDAO = new CriaturaDAO();
    $criatura = $CriaturaDAO->selectById($id);
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criatura</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="../../index.php">Criaturas</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
            </div>
      </nav>

        <div class="container">

            <form method="POST" action="../controllers/editController.php" name="Editar">

                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $criatura->getName(); ?>">
                <label for="Descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="<?php echo $criatura->getDescription();?>">
                <label for="Avatar" class="form-label">Avatar</label>
                <input type="text" class="form-control" id="Avatar" name="Avatar" value="<?php echo $criatura->getAvatar(); ?>">
                <label for="Ataque" class="form-label">ATK</label>
                <input type="text" class="form-control" id="Ataque" name="Ataque" value="<?php echo $criatura->getAttackPower(); ?>">
                <label for="Vida" class="form-label">HP</label>
                <input type="text" class="form-control" id="Vida" name="Vida" value="<?php echo $criatura->getLifeLevel(); ?>">
                <label for="Arma" class="form-label">Arma</label>
                <input type="text" class="form-control" id="Arma" name="Arma" value="<?php echo $criatura->getWeapon() ?>">
                <input type="hidden" name="idCriatura" value="<?php echo $criatura->getIdCreature(); ?>">
                <input type="submit" id="btnEeditar">

            </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

