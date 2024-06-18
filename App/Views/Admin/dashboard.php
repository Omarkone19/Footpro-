<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTPRO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #db4444;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }




        button[type="submit"] {
    padding: 10px 20px;
    font-weight: bold;
    color: white;
    background-color: #db4444;
    border: none;
    border-radius: 8px;
    transition: background-color 0.2s ease;
  }








        .container {
            display: flex;
            flex-direction: column;
            margin: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            padding: 20px;
            background-color: #db4444;
            border-radius: 10px;
            color: #fff;
            margin-bottom: 20px;
        }

        .sidebar h2 {
            margin-top: 0;
            font-weight: bold;
        }

        .menu {
            margin-top: 20px;
        }

        .menu a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 0;
            font-size: 18px;
        }

        .menu a:hover {
            background-color: #0056b3;
        }

        .content {
            padding: 20px;
        }

        .content h1 {
            color: #333;
            margin-top: 0;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card h2 {
            margin-top: 0;
            color: #db4444;
            font-weight: bold;
        }

        .card p {
            color: #555;
        }

        .card i {
            font-size: 48px;
            color: #db4444;
            margin-bottom: 10px;
        }

        .tab {
            display: none;
        }

        .tab.active {
            display: block;
        }
    </style>
    <script>
        function showTab(tabId) {
            var tabs = document.querySelectorAll('.tab');
            tabs.forEach(function(tab) {
                tab.classList.remove('active');
            });
            document.getElementById(tabId).classList.add('active');
        }
    </script>
</head>
<body>
    <div class="navbar">
    <h1>FOOTPRO</h1>
      
    </div>

    <div class="container">
        <div class="sidebar">
            <h2>Fonctionnalités</h2>
            <div class="menu">
                <a href="javascript:void(0)" onclick="showTab('tab-ajouter')"><i class="fas fa-plus-circle"></i> Ajouter Maillot</a>
                <a href="javascript:void(0)" onclick="showTab('tab-modifier')"><i class="fas fa-edit"></i> Modifier Maillot</a>
                <a href="javascript:void(0)" onclick="showTab('tab-supprimer')"><i class="fas fa-trash-alt"></i> Supprimer Maillot</a>
                <a href="javascript:void(0)" onclick="showTab('tab-utilisateurs')"><i class="fas fa-users"></i> Utilisateurs</a>

                <a href="<?= URL ?>Accueil"><i class="fas fa-cog"></i> Déconnexion</a>
            </div>
        </div>

        <div class="content">
            <h1>Bienvenue Omar</h1>

            <div id="tab-ajouter" class="tab active">
                <div class="card">
                    <h2>Ajouter Maillot</h2>
                    <form action="<?= URL ?>ajouter_maillot" method="post">
                    <label for="nom">Nom du maillot :</label>
    <input type="text" id="nom" name="nom" placeholder="Arsenal" value="" required>
    
    <label for="type">Type :</label>
    <input type="text" id="type" name="type" placeholder="Domicile" required>
    
    <label for="taille">Taille :</label>
    <input type="text" id="taille" name="taille" placeholder="S" required>
    
    <label for="saison">Saison :</label>
    <input type="text" id="saison" name="saison" placeholder="2023/2024" required>
    
    <label for="prix">Prix :</label>
    <input type="number" id="prix" name="prix" placeholder="90.00" required>
    
    <label for="club_id">ID du Club :</label>
    <input type="number" id="club_id" name="club_id" placeholder="56" value="" required>
    
    <div class="form-group">
          <button type="submit">Ajouter Maillot</button>
        </div>
      </form>
                    </form>
                </div>
            </div>
          
        </div>
      </form>
            
            <div id="tab-modifier" class="tab">
                <div class="card">
                    <h2>Modifier Maillot</h2>
                    <form action="modifier_maillot.php" method="post">
    <label for="nom">Nom du maillot :</label>
    <input type="text" id="nom" name="nom" placeholder="Arsenal" value="" required>
    
    <label for="type">Type :</label>
    <input type="text" id="type" name="type" placeholder="Domicile" required>
    
    <label for="taille">Taille :</label>
    <input type="text" id="taille" name="taille" placeholder="S" required>
    
    <label for="saison">Saison :</label>
    <input type="text" id="saison" name="saison" placeholder="2023/2024" required>
    
    <label for="prix">Prix :</label>
    <input type="number" id="prix" name="prix" placeholder="90.00" required>
    
    <label for="club_id">ID du Club :</label>
    <input type="number" id="club_id" name="club_id" placeholder="56" value="" required>
    
    <button type="submit">Modifier Maillot</button>
</form>
                </div>
            </div>

            <div id="tab-supprimer" class="tab">
    <div class="card">
        <h2>Supprimer Maillot</h2>
        <form action="supprimer_maillot.php" method="post">
            <label for="nom">Nom du maillot :</label>
            <input type="text" id="nom" name="nom" placeholder="Arsenal" required>

            <label for="type">Type :</label>
            <input type="text" id="type" name="type" placeholder="Domicile" required>

            <label for="taille">Taille :</label>
            <input type="text" id="taille" name="taille" placeholder="S" required>

            <label for="saison">Saison :</label>
            <input type="text" id="saison" name="saison" placeholder="2023/2024" required>

            <label for="prix">Prix :</label>
            <input type="number" id="prix" name="prix" placeholder="90.00" required>

            <label for="club_id">ID du Club :</label>
            <input type="number" id="club_id" name="club_id" placeholder="56" required>

            <button type="submit">Supprimer Maillot</button>
        </form>
    </div>
</div>




<div id="tab-utilisateurs" class="tab">
    <div class="card">
        <h2>Utilisateurs</h2>
        
        <form action="ajouter_utilisateur_action" method="post">
            <!-- Nom de l'utilisateur -->
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez le nom" required>
            
            <!-- Prénom de l'utilisateur -->
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez le prénom" required>
            
            <!-- Email de l'utilisateur -->
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="exemple@domaine.com" required>
            
            <!-- Mot de passe de l'utilisateur -->
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Entrez le mot de passe" required>
            
            <!-- Rôle de l'utilisateur -->
            <label for="role">Rôle :</label>
            <select id="role" name="role" required>
                <option value="utilisateur">Utilisateur</option>
                <option value="admin">Administrateur</option>
            </select>
            
            <!-- Bouton de soumission -->
            <button type="submit">Ajouter Utilisateur</button>
        </form>
            
                </div>
            </div>
        </div>
    </div>
</body>
</html>
