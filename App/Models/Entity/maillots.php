<?php

namespace App\Models\Entity;

class Maillot {
    private ?int $id;
    private string $type;
    private string $taille;
    private float $prix;
    private string $nom;

    public function __construct(?int $id, string $type, string $taille, float $prix, string $nom) {
        $this->setId($id);
        $this->setType($type);
        $this->setTaille($taille);
        $this->setPrix($prix);
        $this->setNom($nom);
    }

    /**
     * @return int|null
     */
    public function getId(): ?int {
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
}
