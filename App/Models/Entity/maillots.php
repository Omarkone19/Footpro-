<?php

namespace App\Models\Entity;

class Maillot {
    private ?int $id;
    private string $type;
    private string $taille;
    private float $prix;
    private string $nom;
    private ?int $club_id;  // Propriété club_id
    private string $saison; // Propriété saison

    public function __construct(?int $id, string $type, string $taille, float $prix, string $nom, ?int $club_id, string $saison) {
        $this->setId($id);
        $this->setType($type);
        $this->setTaille($taille);
        $this->setPrix($prix);
        $this->setNom($nom);
        $this->setClubId($club_id);  // Initialisation de club_id
        $this->setSaison($saison);   // Initialisation de saison
    }

    /**
     * @return int|null
     */
    public function getId(): ?int {       // Méthodes getters et setters...
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getTaille(): string {
        return $this->taille;
    }

    /**
     * @param string $taille
     */
    public function setTaille(string $taille): void {
        $this->taille = $taille;
    }

    /**
     * @return float
     */
    public function getPrix(): float {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix(float $prix): void {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    /**
     * @return int|null
     */
    public function getClubId(): ?int {
        return $this->club_id;
    }

    /**
     * @param int|null $club_id
     */
    public function setClubId(?int $club_id): void {
        $this->club_id = $club_id;
    }

    /**
     * @return string
     */
    public function getSaison(): string {
        return $this->saison;
    }

    /**
     * @param string $saison
     */
    public function setSaison(string $saison): void {
        $this->saison = $saison;
    }
}









