<?php

namespace App\Models\Entity;

class Club {
    private ?int $id;
    private string $nom;
    private string $championnat;

    public function __construct(?int $id, string $nom, string $championnat) {
        $this->setId($id);
        $this->setNom($nom);
        $this->setChampionnat($championnat);
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
     * @return string
     */
    public function getChampionnat(): string {
        return $this->championnat;
    }

    /**
     * @param string $championnat
     */
    public function setChampionnat(string $championnat): void {
        $this->championnat = $championnat;
    }
}
