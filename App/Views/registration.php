<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire Inscription</title>
    <link rel="stylesheet" href="assets/css/connexion.css" />
  </head>
  <body>
    <!-- Navbar -->
    <a class="navbar-brand mt-2 mt-lg-0"  href="<?= URL ?>Accueil">
                <img
                    src="assets/imgs/Logo/logo.png"
                    height="100"
                    alt="logo"
                    loading="lazy"
                />
                </a>

    <div class="form-container">
      <h2>Inscription</h2>
      <form action="/submit_registration" method="post">
        <!-- Nom Input -->
        <div class="form-group">
          <label for="name">Nom, Prenom :</label>
          <input
            class="clique"
            type="text"
            id="name"
            name="name"
            placeholder="Entrez votre nom et votre prenom"
            required
            pattern="[A-Za-zÀ-ÿ '-]+"
          />
          <span class="error-message">Veuillez entrer un nom valide.</span>
          <span class="valid-message">Le nom semble correct.</span>
        </div>

        <!-- Email Input -->
        <div class="form-group">
          <label for="email">Email :</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="exemple@domaine.com"
            required
          />
          <span class="error-message">Veuillez entrer une adresse email valide.</span>
          <span class="valid-message">L'adresse email semble correcte.</span>
        </div>

        <!-- Password Input -->
        <div class="form-group">
          <label for="password">Mot de passe :</label>
          <input
            type="password"
            id="password"
            name="password"
            required
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Doit contenir au moins 8 caractères, dont une majuscule, une minuscule, et un chiffre"
          />
          <span class="error-message">Veuillez entrer un mot de passe valide (min. 8 caractères, une majuscule, une minuscule et un chiffre).</span>
          <span class="valid-message">Le mot de passe semble correct.</span>
        </div>

        <!-- Confirm Password Input -->
        <div class="form-group">
          <label for="confirm_password">Confirmez le mot de passe :</label>
          <input
            type="password"
            id="confirm_password"
            name="confirm_password"
            required
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Doit contenir au moins 8 caractères, dont une majuscule, une minuscule, et un chiffre"
          />
          <span class="error-message">Les mots de passe ne correspondent pas.</span>
          <span class="valid-message">Les mots de passe correspondent.</span>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
          <button type="submit">Soumettre</button>
        </div>
      </form>

      <!-- Login Invitation -->
      <div class="login-invite align-further-right mt-3">
        <p>Vous avez déjà un compte ?</p>
        <a href="connexion" class="btn btn-primary">Connectez-vous</a>
      </div>

      <div class="d-flex justify-content-between mt-5 move-down">
        <a href="Accueil" type="button" class="btn" style="color: #e80707;">
          <i class="fas fa-arrow-left me-1"></i> Retour                    
        </a>
      </div>
    </div>
  </body>
</html>
