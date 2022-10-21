<?php

class campeonModel {
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8','root','');
    }

    function getCampeones(){
        $query = $this->db->prepare('SELECT * FROM campeones');
        $query->execute();

        $campeones = $query->fetchAll(PDO::FETCH_OBJ);
        return $campeones;
    }
    public function insertCampeones($id_faccion_fk, $campeon, $rareza, $afinidad) {
        $query = $this->db->prepare("INSERT INTO campeones (id_faccion_fk, campeon, rareza, afinidad) VALUES (?, ?, ?, ?)");
        $query->execute([$id_faccion_fk, $campeon, $rareza, $afinidad]);

        return $this->db->lastInsertId();
    }


    function deleteCampeonById($id) {
        $query = $this->db->prepare('DELETE FROM campeones WHERE id = ?');
        $query->execute([$id]);
    }

    function getCampeonById($id){
        $query = $this->db->prepare("SELECT * FROM campeones WHERE id=?");
        $query->execute([$id]);
        $campeonbyid = $query->fetch(PDO::FETCH_OBJ);

        return $campeonbyid;
    }

    public function getDetailsCampeones($id){
        $query = $this->db->prepare("SELECT * FROM campeones WHERE id=?");
        $query->execute([$id]);
        $campeonbyid = $query->fetchAll(PDO::FETCH_OBJ);
        return $campeonbyid;
    }


    public function updateCampeon($campeon, $rareza, $afinidad, $id) {
        $query = $this->getCampeonById($id);
        $query = $this->db->prepare('UPDATE campeones SET campeon=?, rareza=?, afinidad=? WHERE id = ?');
        $query->execute([$campeon, $rareza, $afinidad, $id]);
        
    }

   

}
