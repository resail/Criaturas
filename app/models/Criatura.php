<?php

class Criatura {
    
    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;
    
    public function __construct() {}
    
    public function getIdCreature(){
        return $this->idCreature;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function getAvatar(){
        return $this->avatar;
    }
    
    public function getAttackPower(){
        return $this->attackPower;
    }
    
    public function getLifeLevel(){
        return $this->lifeLevel;
    }
    
    public function getWeapon(){
        return $this->weapon;
    }
    
    public function setIdCreature($idCreature) {
        $this->idCreature = $idCreature;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }
    
    public function setAttackPower($attackPower) {
        $this->attackPower= $attackPower;
    }
    
    public function setLifeLevel($lifeLevel) {
        $this->lifeLevel = $lifeLevel;
    }
    
    public function setWeapon($weapon) {
        $this->weapon = $weapon;
    }
    
    
    function CriaturasHTML(){
        $html = '<div class="card">';
        $html .= '<img src="'. $this->getAvatar(). '" class="card-img-top" alt="card-img-top">';
        $html .= '<div class="card-body">';
        $html .= '<h5 class="card-title">'. $this->getName() .'</h5>';
        $html .= '<p class="card-text">' . $this->getDescription() . '</p>';
        $html .= '</div>';
        
        $html .= '<div class="card-footer">';
        $html .= '<a type="button" class="btn btn-outline-secondary" href="app/view/detail.php?id=' . $this->getIdCreature() . '">Detalles</a>';
        $html .= '<a type="button" class="btn btn-outline-secondary" href="app/view/edit.php?id=' . $this->getIdCreature() . '">Editar</a>';
        $html .= '<a type="button" class="btn btn-outline-secondary" href="app/controllers/deleteController.php?id=' . $this->getIdCreature() . '">Borrar</a>';
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }
    
}