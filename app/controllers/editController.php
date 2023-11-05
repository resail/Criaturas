<?php
require_once(dirname(__FILE__) . '/../../persistence/DAO/CriaturaDAO.php');
require_once(dirname(__FILE__) . '/../models/Criatura.php');
editAction();
function editAction() {
    $id = $_POST["idCriatura"];
    $nombre = $_POST["Nombre"];
    $descripcion = $_POST["Descripcion"];
    $avatar = $_POST["Avatar"];
    $ataque = $_POST["Ataque"];
    $vida = $_POST["Vida"];
    $arma = $_POST["Arma"];
    $criatura = new Criatura();
    $criatura->setIdCreature($id);
    $criatura->setName($nombre);
    $criatura->setDescription($descripcion);
    $criatura->setAvatar($avatar);
    $criatura->setAttackPower($ataque);
    $criatura->setLifeLevel($vida);
    $criatura->setWeapon($arma);
    
    $criaturaDAO = new CriaturaDAO();
    $criaturaDAO->update($criatura);

    header('Location: ../../index.php');
}

?>

