<?php

namespace App\Models\Entity;

class Championnat {
    private ?int $id;
    private string $nom;

    public function __construct(?int $id, string $nom) {
        $this->setId($id);
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
