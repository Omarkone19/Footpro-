<?php
// Configuration de la base de données
$dsn = "mysql:host=192.168.1.110;dbname=footpro;charset=utf8;port=3307";
$username = "root";  // Remplacez par votre nom d'utilisateur MySQL
$password = "Azertyuiop*";  // Remplacez par votre mot de passe MySQL

try {
    // Créer une connexion PDO
    $conn = new PDO($dsn, $username, $password);
  

    // Définir le mode d'erreur PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer la requête de recherche
    if (isset($_GET['query'])) {
        $query = $_GET['query'];
        var_dump($query);

        // Échapper les caractères spéciaux pour éviter les injections SQL
        $query = "%$query%";

        // Requête SQL pour rechercher les clubs
        $sql = "SELECT clubs.nom AS club_nom, championnats.nom AS championnat_nom 
                FROM clubs 
                JOIN championnats ON clubs.championnat_id = championnats.id 
                WHERE clubs.nom LIKE :query";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':query', $query, PDO::PARAM_STR);
        $stmt->execute();

        // Vérifier si des résultats ont été trouvés
        if ($stmt->rowCount() > 0) {
            // Redirection vers la page du club trouvé
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $club_nom = strtolower(str_replace(' ', '_', $row['club_nom'])) . ".php";
            header("Location: $club_nom");
            exit(); // Arrêter l'exécution du script après la redirection
        } else {
            echo "Aucun résultat trouvé.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

// Fermer la connexion (PDO ferme automatiquement la connexion en fin de script)
?>
