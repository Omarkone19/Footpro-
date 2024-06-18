<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Image</title>
    <link rel="stylesheet" href="assets/css/connexion.css" />
  </head>
  <body>
    <!-- Navbar -->
    <a class="navbar-brand mt-2 mt-lg-0" href="<?= URL ?>Accueil">
      <img
        src="assets/imgs/Logo/logo.png"
        height="100"
        alt="logo"
        loading="lazy"
      />
    </a>

    <div class="form-container">
      <h2>Connexion</h2>
      <form action="/submit_form" method="post">
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

        <!-- Nom Input -->
         <!--  <div class="form-group">
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

        <-- Password Input -->
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
          <span class="error-message">
            Veuillez entrer un mot de passe valide (min. 8 caractères, une
            majuscule, une minuscule et un chiffre).
          </span>
          <span class="valid-message">Le mot de passe semble correct.</span>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
          <button type="submit">Soumettre</button>
        </div>
      </form>

      <!-- Registration Invitation -->
      <div class="registration-invite align-further-right mt-3">
        <p>BESOIN DE CRÉER UN COMPTE ?</p>
        <a href="registration" class="btn btn-primary">INSCRIVEZ-VOUS pour créer un compte</a>
      </div>

      <div class="d-flex justify-content-between mt-5">
        <a href="Accueil" type="button" class="btn" style="color: #e80707;">
          <i class="fas fa-arrow-left me-1"></i> Retour
        </a>
      </div>
    </div>
  </body>
</html>
