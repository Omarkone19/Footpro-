<?php

namespace App\Models\Manager;
use App\Core\Database;
use App\Models\Entity\Maillot;


class MaillotManager{
    private Database $db;

    public function __construct()
    {
        //$this->db=new PDO("mysql:host=localhost;dbname=hoteldanton;charset=utf8;port=8889", "root","root");
        $this->db=new Database();
    }

    /**
     * @param Maillot $maillot
     * @return bool
     */
    public function insertMaillot(Maillot $maillot): bool
{
    $stmt = $this->db->prepare("INSERT INTO maillots (id, nom, type, taille, saison, prix, club_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $maillot_valid = $stmt->execute([
        $maillot->getId(),        
        $maillot->getNom(),       
        $maillot->getType(),      
        $maillot->getTaille(),    
        $maillot->getSaison(),    
        $maillot->getPrix(),      
        $maillot->getClubId()     
    ]);
    return $maillot_valid; 
}


public function updateMaillot(Maillot $maillot): bool
{
    $stmt = $this->db->prepare("UPDATE maillots SET nom = ?, type = ?, taille = ?, saison = ?, prix = ?, club_id = ? WHERE id = ?");
    $maillot_valid = $stmt->execute([
        $maillot->getNom(),      
        $maillot->getType(),      
        $maillot->getTaille(),    
        $maillot->getSaison(),   
        $maillot->getPrix(),      
        $maillot->getClubId(),    
        $maillot->getId()         
    ]);
    
    return $maillot_valid; 
}



public function deleteMaillot(Maillot $maillot): bool
{
    $stmt = $this->db->prepare("DELETE FROM maillots WHERE id = ?");
    $maillot_valid = $stmt->execute([$maillot->getId()]);
    
    return $maillot_valid; 
}




}
