<?php
require_once(dirname(__FILE__) . '/../../persistence/DAO/CriaturaDAO.php');
require_once(dirname(__FILE__) . '/../models/Criatura.php');

$criaturaDAO = new CriaturaDAO();

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    deleteAction();
}

function deleteAction() {
    $idCriatura = $_GET["id"];

    $criaturaDAO = new CriaturaDAO();
    $criaturaDAO->delete($idCriatura);

    header('Location: ../../index.php');
}
?>

