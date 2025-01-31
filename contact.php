
<header>
    <div class="company-name">Caveo</div>
    <nav>
      <a href="app.php">Home</a>
     
      <a href="sign.html">Sign up</a>
      <a href="contact.php">Contact us</a>
    </nav>
  </header>
  
  <form class="colorful-form" action="contact_action.php" method="POST">
  <div class="form-group">
    <label class="form-label" for="name">Name:</label>
    <input required="" placeholder="Enter your name" class="form-input" type="text" name="name"> <!-- Ajout de l'attribut 'name' -->
  </div>
  <div class="form-group">
    <label class="form-label" for="phone">Phone:</label>
    <input required="" placeholder="Enter your number" class="form-input" name="phone" id="email" type="text">
  </div>
  <div class="form-group">
    <label class="form-label" for="message">Message:</label>
    <textarea required="" placeholder="Enter your message" class="form-input" name="message" id="message"></textarea>
  </div>
  <button class="form-button" type="submit">Submit</button>
</form>

<style>
   html, body {
  height: 100%; /* Assurez-vous que le body et html occupent toute la hauteur de la page */
  margin: 0; /* Supprimez les marges par défaut */
  display: flex; /* Utilisation de Flexbox pour le centrage */
  justify-content: center; /* Centre horizontalement */
  align-items: center; /* Centre verticalement */
  background-color: #f4f4f9; /* Couleur de fond douce pour la page */
}

.colorful-form {
  max-width: 1000px; /* Augmente la largeur maximale à 1000px */
  width: 85%; /* Le formulaire prendra jusqu'à 85% de la largeur de la page */
  padding: 60px; /* Augmente l'espace intérieur du formulaire */
  background-color: #f5f5f5;
  border-radius: 15px; /* Bords encore plus arrondis pour un look plus doux */
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* Ombre subtile pour donner de la profondeur */
}

.form-group {
  margin-bottom: 30px; /* Augmente l'espacement entre les champs pour plus d'espace */
}

.form-label {
  display: block;
  font-weight: bold;
  margin-bottom: 10px; /* Augmente l'espacement sous le label */
  color: #333;
}

.form-input {
  width: 100%;
  padding: 15px; /* Augmente la taille des champs de saisie pour un confort optimal */
  border: none;
  background-color: #fff;
  color: #333;
  border-radius: 5px;
  font-size: 1.1rem; /* Agrandit la taille du texte dans les champs de saisie */
}

textarea.form-input {
  height: 200px; /* Augmente encore la hauteur de la zone de texte */
}

.form-button {
  display: block;
  width: 100%;
  padding: 15px; /* Augmente la taille du bouton pour le rendre plus grand */
  background-color:rgb(38, 33, 33);
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1.1rem; /* Augmente la taille du texte dans le bouton */
  transition: background-color 0.3s ease;
}

.form-button:hover {
  background-color:rgb(24, 22, 22);
}
header {
  background-color: #333; /* Couleur de fond sombre */
  color: white; /* Texte blanc */
  padding: 1rem 2rem; /* Espacement intérieur, ajusté pour plus d'espace */
  display: flex; /* Utilisation de Flexbox pour la mise en page */
  justify-content: space-between; /* Espacement entre la société et la navigation */
  align-items: center; /* Centrer verticalement le contenu */
  position: fixed; /* Fixe le header en haut de la page */
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000; /* S'assurer que le header reste en haut par rapport au reste du contenu */
}

.company-name {
  font-weight: bold;
  font-size: 1.75rem; /* Agrandir le nom de la société */
  margin: 0; /* Enlève les marges par défaut */
}

nav {
  display: flex;
  align-items: center; /* Centrer les liens de navigation verticalement */
}

nav a {
  color: white; /* Couleur des liens */
  margin: 0 15px; /* Espacement horizontal entre les liens */
  text-decoration: none; /* Supprime le soulignement par défaut */
  font-size: 1rem; /* Taille des liens */
  transition: color 0.3s; /* Transition douce pour le survol des liens */
}

nav a:hover {
  color: #a78bfa; /* Change la couleur au survol */
}

nav .disabled {
  color: gray; /* Couleur pour les liens désactivés */
  pointer-events: none; /* Empêche le clic */
}

/* Pour rendre le header plus responsive sur mobile */
@media (max-width: 768px) {
  header {
    flex-direction: column; /* Met le nom de la société au-dessus de la navigation */
    align-items: flex-start; /* Aligne la société à gauche */
  }

  .company-name {
    margin-bottom: 1rem; /* Ajoute un espacement sous le nom de la société */
  }

  nav {
    width: 100%; /* Occupe toute la largeur */
    justify-content: space-around; /* Espacement égal entre les liens */
    margin-top: 1rem; /* Espacement entre le nom de la société et la navigation */
  }

  nav a {
    margin: 0; /* Enlève les marges horizontales sur mobile */
  }
}


</style>