<?php

namespace App\Models\Entity;

class Commande {
    private ?int $id;
    private int $utilisateurId;
    private string $maillots;
    private int $quantite;
    private string $dateDeCommande;

    public function __construct(?int $id, int $utilisateurId, string $maillots, int $quantite, string $dateDeCommande) {
        $this->setId($id);
        $this->setUtilisateurId($utilisateurId);
        $this->setMaillots($maillots);
        $this->setQuantite($quantite);
        $this->setDateDeCommande($dateDeCommande);
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
     * @return int
     */
    public function getUtilisateurId(): int {
        return $this->utilisateurId;
    }

    /**
     * @param int $utilisateurId
     */
    public function setUtilisateurId(int $utilisateurId): void {
        $this->utilisateurId = $utilisateurId;
    }

    /**
     * @return string
     */
    public function getMaillots(): string {
        return $this->maillots;
    }

    /**
     * @param string $maillots
     */
    public function setMaillots(string $maillots): void {
        $this->maillots = $maillots;
    }

    /**
     * @return int
     */
    public function getQuantite(): int {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite(int $quantite): void {
        $this->quantite = $quantite;
    }

    /**
     * @return string
     */
    public function getDateDeCommande(): string {
        return $this->dateDeCommande;
    }

    /**
     * @param string $dateDeCommande
     */
    public function setDateDeCommande(string $dateDeCommande): void {
        $this->dateDeCommande = $dateDeCommande;
    }
}
