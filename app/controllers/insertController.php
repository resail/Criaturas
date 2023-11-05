<?php
require_once '../models/Criatura.php';
require_once '../../persistence/DAO/CriaturaDAO.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   createAction();
}

function createAction() {
    
    $nombre = $_POST["Nombre"];
    $descripcion = $_POST["Descripcion"];
    $avatar = $_POST["Avatar"];
    $ataque = $_POST["Ataque"];
    $vida = $_POST["Vida"];
    $arma = $_POST["Arma"];
    
     
    $criatura = new Criatura();
    $criatura->setName($nombre);
    $criatura->setDescription($descripcion);
    $criatura->setAttackPower($ataque);
    $criatura->setAvatar($avatar);
    $criatura->setLifeLevel($vida);
    $criatura->setWeapon($arma);
    
    $criaturaDAO = new CriaturaDAO();
    $criaturaDAO->insert($criatura);
 
    
    header('Location: ../../index.php');
}