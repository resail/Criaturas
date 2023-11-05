<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criaturas</title>
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

            <form method="POST" action="../controllers/insertController.php" name="Insertar">

                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre" id="Nombre" value="">
                <label for="Descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="">
                <label for="Avatar" class="form-label">Avatar</label>
                <input type="text" class="form-control" name="Avatar" id="Avatar" value="">
                <label for="Ataque" class="form-label">ATK</label>
                <input type="text" class="form-control" name="Ataque" id="Ataque" value="">
                <label for="Vida" class="form-label">HP</label>
                <input type="text" class="form-control" name="Vida" id="Vida" value="">
                <label for="Arma" class="form-label">Arma</label>
                <input type="text" class="form-control" name="Arma" id="Arma" value="">
                <button type="submit" class="btn btn-default">Añadir</button>

            </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

