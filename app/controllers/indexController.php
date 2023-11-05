<?php
require_once(dirname(__FILE__) . '/../../persistence/DAO/CriaturaDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Criatura.php');

// Obtención de la lista completa de criaturas
function indexAction() {
    $criaturaDAO = new CriaturaDAO();
    return $criaturaDAO->selectAll();
}

?>