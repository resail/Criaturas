<?php
//dirname(__FILE__) Es el directorio del archivo actual
require_once(dirname(__FILE__) . '\..\conf\PersistentManager.php');


class CriaturaDAO {

    const CRIATURA_TABLE = 'creature';

    private $conn = null;

    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }

    public function selectAll() {
        $query = "SELECT * FROM " . CriaturaDAO::CRIATURA_TABLE;
        $result = mysqli_query($this->conn, $query);
        $criaturas= array();
        while ($criaturaBD = mysqli_fetch_array($result)) {

            $criatura = new Criatura();
            $criatura->setIdCreature($criaturaBD["idCreature"]);
            $criatura->setName($criaturaBD["name"]);
            $criatura->setDescription($criaturaBD["description"]);
            $criatura->setAvatar($criaturaBD["avatar"]);
            $criatura->setLifeLevel($criaturaBD["lifeLevel"]);
            $criatura->setAttackPower($criaturaBD["attackPower"]);
            $criatura->setWeapon($criaturaBD["weapon"]);
            
            array_push($criaturas, $criatura);
        }
        return $criaturas;
    }

    public function insert($criatura) {
        $query = "INSERT INTO " . CriaturaDAO::CRIATURA_TABLE .
                " (name, description, avatar, attackPower, lifeLevel, weapon) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $criatura->getName();
        $description = $criatura->getDescription();
        $avatar = $criatura->getAvatar();
        $attackPower = $criatura->getAttackPower();
        $lifeLevel = $criatura->getLifeLevel();
        $weapon = $criatura->getWeapon();
        
        mysqli_stmt_bind_param($stmt, 'sssiis', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);
        return $stmt->execute();
    }

    public function selectById($idCreature) {
        $query = "SELECT name, description, avatar, attackPower, lifeLevel, weapon FROM " . CriaturaDAO::CRIATURA_TABLE . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $idCreature);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);

        $criatura = new Criatura();
        while (mysqli_stmt_fetch($stmt)) {
            $criatura->setIdCreature($idCreature);
            $criatura->setName($name);
            $criatura->setDescription($description);
            $criatura->setAvatar($avatar);
            $criatura->setAttackPower($attackPower);
            $criatura->setLifeLevel($lifeLevel);
            $criatura->setWeapon($weapon);
       }

        return $criatura;
    }

    public function update($criatura) {
        $query = "UPDATE " . CriaturaDAO::CRIATURA_TABLE .
                " SET name=?, description=?, avatar=?, attackPower=?, lifeLevel=?, weapon=?"
                . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $criatura->getName();
        $description= $criatura->getDescription();
        $avatar = $criatura->getAvatar();
        $idCreature = $criatura->getIdCreature();
        $attackPower = $criatura->getAttackPower();
        $lifeLevel = $criatura->getLifeLevel();
        $weapon = $criatura->getWeapon();
        mysqli_stmt_bind_param($stmt, 'sssiisi', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon, $idCreature);
        return $stmt->execute();
    }
    
    public function delete($idCreature) {
        $query = "DELETE FROM " . CriaturaDAO::CRIATURA_TABLE . " WHERE idCreature =?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $idCreature);
        return $stmt->execute();
    }
}
?>
