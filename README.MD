# DOCUMENTATION DU PROJET FOOTPRO

Pour développer ce projet, j'ai crée un fichier docker-compose.yml dans le répertoire principal du projet. 

Ce fichier contient la configuration de tous les services dont j'ai besoin. 

Pour MySQL, j'utilise l'image officielle MySQL, et pour phpMyAdmin, j'utilise l'image officielle phpMyAdmin.


## 1.Mise en place de l'environnement Docker
Ensuite, j'ai crée une image Docker pour mon application web, Footpro, en utilisant un Dockerfile. 

## 2.Configuration de Docker Compose : 
J'ai utilisé le fichier docker-compose.yml fourni pour démarrer les services Docker nécessaires en exécutant la commande suivante sur mon terminal :

    ```bash
    docker-compose up -d
    ```

## Accès aux services Docker

- **phpMyAdmin :** phpMyAdmin : J'accède à phpMyAdmin via <votre_adresse_IP>:8888 dans mon navigateur. J'utilise les informations d'identification MySQL que j'ai configurées dans le fichier docker-compose.yml pour me connecter.


## 3. Étape Figma: Conception des Maquettes

**Wireframe** :J'ai établi une structure de base avec des croquis simplifiés, en me concentrant sur la disposition et la navigation.

**Maquette à Faible Fidélité** : J'ai créé une version simplifiée pour valider la structure et le parcours de mon interface.

**Maquette à Moyenne Fidélité** :J'ai ajouté des détails visuels tels que les couleurs et les typographies pour affiner l'apparence.

**Maquette à Haute Fidélité** : J'ai finalisé avec tous les détails visuels et graphiques pour obtenir une version prête à être développée.

Chaque étape m'a permis d'affiner et de valider différents aspects de mon interface avant de passer à la prochaine étape.


## 4. Frontend de FOOTPRO

**Structure HTML,CSS, ET JAVASCRIPT**

Pour définir la structure de mes pages web, j'ai utilisé HTML.

Voici comment j'ai structuré la page d'accueil :

La page d'accueil contient un en-tête avec le titre du site et une barre de navigation.

Ensuite, le corps de la page est divisé en sections, avec une section principale pour le contenu principal et une section pour le pied de page.



**Styles CSS** :

J'ai mis en place une mise en page responsive avec des règles de style pour différents types d'appareils, assurant ainsi une bonne expérience utilisateur sur toutes les plateformes.

J'ai utilisé des sélecteurs pour cibler spécifiquement les éléments HTML et leur appliquer des styles personnalisés.

J'ai également utilisé des techniques de mise en page flexbox et grid pour organiser les éléments de manière esthétique sur la page, offrant une mise en page flexible et facile à maintenir.



**Interactions JavaScript** :    

Animations : J'ai utilisé JavaScript pour créer des animations et des effets visuels, améliorant ainsi l'expérience utilisateur en rendant le site plus interactif et attrayant.

Gestion des événements : J'ai attaché des écouteurs d'événements à certains éléments HTML pour détecter les interactions de l'utilisateur, ce qui a permis une interactivité plus fluide avec le site.




## 5. Création de la Base de Données (BDD)

Après avoir configuré mon environnement Docker et réalisé mes maquettes, j'ai procédé à la création de ma base de données (BDD) pour mon projet Footpro. Voici les tables que j'ai créées :

**Utilisateurs** : Cette table contient les informations des utilisateurs de mon application, telles que leurs identifiants, noms d'utilisateur, adresses e-mail, etc.

**Commandes** : La table des commandes stocke les détails des commandes passées par les utilisateurs, y compris les produits commandés, les quantités, les dates, etc.

**Championnats** : Cette table répertorie les différents championnats disponibles dans l'application, avec des informations telles que le nom du championnat, le pays associé, etc.

**Clubs** : La table des clubs contient les détails des clubs de football, y compris leur nom, leur pays d'origine, leur année de fondation, etc.

**Maillots** : Cette table stocke les informations sur les maillots disponibles à la vente, tels que le nom du maillot, le club associé, la saison, etc.


# Création de la Base de Données (BDD)

**Dictionnaire de Données**

Avant de commencer la modélisation, j'ai élaboré un dictionnaire de données pour définir les termes clés utilisés dans ma base de données.

# Modèle Conceptuel des Données (MCD)

**Identifier les Entités** : J'ai identifié les entités principales de mon système, telles que Utilisateur, Commande, Championnat, Club et Maillot.

**Définir les Relations** : J'ai déterminé les relations entre ces entités. Par exemple, un Utilisateur peut passer plusieurs Commandes, un Club peut appartenir à un Championnat, etc.

**Attributs des Entités** : Pour chaque entité, j'ai identifié les attributs clés nécessaires. Par exemple, pour un Utilisateur, cela inclut des attributs comme ID Utilisateur, Nom d'utilisateur, Adresse e-mail, etc.

**Identifiez les Clés Primaires** : J'ai choisi une clé primaire pour chaque entité, garantissant ainsi l'unicité de chaque enregistrement dans cette entité.


Une fois que j'ai identifié les entités, défini les relations, attribué les attributs clés et choisi les clés primaires, j'ai procédé à la création de la structure de base de données dans MySQL. Pour ce faire, j'ai utilisé des instructions SQL pour créer chaque table avec les champs correspondants, en veillant à respecter les contraintes de clés primaires et étrangères lorsque cela était nécessaire.

# MYSQL (BDD)

Une fois que j'ai identifié les entités, défini les relations, attribué les attributs clés et choisi les clés primaires, j'ai procédé à la création de la structure de base de données dans MySQL. 

Pour ce faire, j'ai utilisé des instructions SQL pour créer chaque table avec les champs correspondants, en veillant à respecter les contraintes de clés primaires et étrangères lorsque cela était nécessaire.

Pour créer une table dans MySQL, j'ai utilisé la commande SQL CREATE TABLE. Voici un exemple de commande pour créer une table "Utilisateur" avec quelques champs :

   ```bash
CREATE TABLE Utilisateur
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    date_inscription DATE
 ```


## 6. Mise en place de l'architecture MVC



