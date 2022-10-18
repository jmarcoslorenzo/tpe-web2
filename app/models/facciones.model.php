<?php

class faccionesModel{
    private $db;
    

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_web2;charset=utf8','root','');
    }

    function getFacciones(){
        $query = $this->db->prepare('SELECT * FROM facciones');
        $query->execute();

        $facciones = $query->fetchAll(PDO::FETCH_OBJ);
        return $facciones;
    }
    public function insertFaccion($id_faccion, $faccion, $dominio) {
        $query = $this->db->prepare("INSERT INTO facciones (id_faccion, faccion, dominio) VALUES (?, ?, ?)");
        $query->execute([$id_faccion, $faccion, $dominio]);

        return $this->db->lastInsertId();
    }
    function deleteFaccionById($id_faccion) {
        $query = $this->db->prepare('DELETE FROM facciones WHERE id_faccion = ?');
        $query->execute([$id_faccion]);
    }
    function getFaccionById($id_faccion){
        $query = $this->db->prepare("SELECT * FROM facciones WHERE id_faccion=?");
        $query->execute([$id_faccion]);

        $faccionesbyid = $query->fetch(PDO::FETCH_OBJ);

        return $faccionesbyid;
    }
    public function updateFaccion($id_faccion, $faccion, $dominio) {
        $query = $this->getFaccionById($id_faccion);
        $query = $this->db->prepare('UPDATE facciones SET faccion=?, dominio=? WHERE id_faccion = ?');
        $query->execute([$id_faccion, $faccion, $dominio]);
        
    }

    function ShowDetalles($showDetail){
        $query = $this->db->prepare("SELECT facciones.* , campeon as campeones FROM facciones JOIN campeones ON facciones.id_campeon = campeon.id_campeon WHERE facciones.id_faccion=?");
        $query->execute([$showDetail]);
        $campeonbyfacc = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $campeonbyfacc;
    }

    function getCampeonAndFaccion($selected){
        $query = $this->db->prepare("SELECT * FROM campeones a INNER JOIN  facciones b ON a.id = b.id_faccion WHERE a.id=? ");
        $query->execute(array($selected));
        $campeonandfaccion = $query->fetchAll(PDO::FETCH_OBJ);

        return $campeonandfaccion;
    }
  

}