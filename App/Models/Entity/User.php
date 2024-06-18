<?php

namespace App\Models\Entity;
class User{
        private ?int $id;
        private string $firstname;
        private string $email;
        private string $password;
        private string $adresse;
    
        public function __construct($id, $firstname, $email, $password, $adresse)
        {
            $this->setId($id);
            $this->setFirstname($firstname);
            $this->setEmail($email);
            $this->setPassword($password);
            $this->setAdresse($adresse);
        }
    
        /**
         * @return int|null
         */
        public function getId(): ?int
        {
            return $this->id;
        }
    
        /**
         * @param int|null $id
         */
        public function setId(?int $id): void
        {
            $this->id = $id;
        }
    
        /**
         * @return string
         */
        public function getFirstname(): string
        {
            return $this->firstname;
        }
    
        /**
         * @param string $firstname
         */
        public function setFirstname(string $firstname): void
        {
            $this->firstname = $firstname;
        }
    
        /**
         * @return string
         */
        public function getEmail(): string
        {
            return $this->email;
        }
    
        /**
         * @param string $email
         */
        public function setEmail(string $email): void
        {
            $this->email = $email;
        }
    
        /**
         * @return string
         */
        public function getPassword(): string
        {
            return $this->password;
        }
    
        /**
         * @param string $password
         */
        public function setPassword(string $password): void
        {
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        }
    
        /**
         * @return string
         */
        public function getAdresse(): string
        {
            return $this->adresse;
        }
    
        /**
         * @param string $adresse
         */
        public function setAdresse(string $adresse): void
        {
            $this->adresse = $adresse;
        }
    
    
    
    
    }
    
