<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carousel Page</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
  background-color: #333; 
  color: white; 
  padding: 1rem 2rem; 
  display: flex; 
  justify-content: space-between;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000; 
}

.company-name {
  font-weight: bold;
  font-size: 1.75rem; 
  margin: 0;
}

nav {
  display: flex;
  align-items: center; 
}

nav a {
  color: white; 
  margin: 0 15px; 
  text-decoration: none; 
  font-size: 1rem;
  transition: color 0.3s; 
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
    width: 100%;
    justify-content: space-around; 
  }

  nav a {
    margin: 0; 
  }
}

    .carousel {
      background-color: #222;
      color: white;
      text-align: center;
      padding: 3rem 1rem;
    }

    .carousel h2 {
      font-size: 2rem;
    }

    .carousel p {
      font-size: 1rem;
    }

    .carousel .btn {
      background-color: #007bff;
      color: white;
      padding: 0.5rem 1rem;
      text-decoration: none;
      border-radius: 5px;
    }

    /* Columns Section */
    .columns {
      display: flex;
      justify-content: space-around;
      padding: 2rem 1rem;
      background-color: #f8f9fa;
    }

    .column {
      text-align: center;
      max-width: 300px;
    }

    .column .icon {
      width: 100px;
      height: 100px;
      background-color: #000;
      border-radius: 50%;
      margin: 0 auto;
    }

    .column h3 {
      margin: 1rem 0;
    }

    .column .btn {
      background-color: #007bff;
      color: white;
      padding: 0.5rem 1rem;
      text-decoration: none;
      border-radius: 5px;
    }

    .featurette {
  display: flex; 
  justify-content: flex-start; 
  align-items: center; 
  padding: 2rem 1rem;
  margin-bottom: 2rem; 
}

.featurette-text {
  flex: 1; 
  padding-right: 10px; 
  padding-left: 20px; 
  padding-top: 0px;   
  padding-bottom: 0px;
}

.featurette-image {
  order: 2; 
}
.featurette-image img {
  width: 600px !important;  
  height: 500px !important;
  object-fit: cover;
}

.featurette.reverse {
  flex-direction: row-reverse; 
}

.featurette.reverse .featurette-text {
  padding-left: 0px; 
}
.featurette.reverse .featurette-image {
  order: 1; /
}
    * { box-sizing: border-box; }
    body { font-family: Verdana, sans-serif; }
    .mySlides { display: none; }
    img { vertical-align: middle; }

   
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from { opacity: .4 }
      to { opacity: 1 }
    }

    @media only screen and (max-width: 300px) {
      .text { font-size: 11px }
    }
    


  
footer.container {
  background-color: #333; 
  color: white; 
  padding: 2rem 1rem; 
  text-align: center;
  font-size: 0.9rem; 
  position: relative; 
}

footer p {
  margin: 0.5rem 0; /* Marge entre les paragraphes */
}

footer a {
  color: #007bff; /* Couleur des liens */
  text-decoration: none; /* Supprime la décoration par défaut des liens */
  transition: color 0.3s ease; /* Transition de la couleur du lien */
}

footer a:hover {
  color: #0056b3; /* Couleur au survol */
}

/* Styles pour "Back to top" */
footer .float-end {
  position: absolute; /* Positionner le bouton à droite */
  right: 1rem;
  top: 1rem;
}

footer .float-end a {
  background-color:rgb(48, 69, 92); /* Fond bleu pour le lien */
  color: white; /* Texte blanc pour le lien */
  padding: 0.5rem 1rem;
  border-radius: 5px; /* Coins arrondis */
  text-decoration: none;
}

footer .float-end a:hover {
  background-color: #0056b3; /* Changement de couleur de fond au survol */
}

/* Responsive - Pour les petits écrans */
@media (max-width: 600px) {
  footer.container {
    font-size: 0.8rem; /* Réduit la taille de la police sur mobile */
  }

  footer .float-end {
    position: relative; /* Réduit l'effet de flottement pour les petits écrans */
    right: 0;
    top: 0;
    margin-top: 1rem;
  }
}

  </style>
</head>
<body>

  <!-- Header Section -->
  <header>
    <div class="company-name">Caveo</div>
    <nav>
      <a href="#">Home</a>
     
      <a href="sign.html">Sign up</a>
      <a href="contact.php">Contact us</a>
    </nav>
  </header>

  <!-- Slideshow Section -->
  <div class="slideshow-container">
    <div class="mySlides fade">
     
      <img src="IMG_5718.jpeg" style="width:100%">
     
    </div>
    
    <div class="mySlides fade">
     
      <img src="IMG_5721.jpeg" style="width:100%">
  
    </div>
    
    <div class="mySlides fade">
     
      <img src="IMG_5722.jpeg" style="width:100%">
      
    </div>
  </div>

  <!-- Columns Section -->
  <div class="columns">
  <div class="column">
    <img src="h1.jpg" alt="Icon" class="icon">
  
    <p>CAVEO Spécialisée dans la conception, la fabrication et la commercialisation de ressorts à lames conventionnels et paraboliques pour tout type de véhicules.</p>
   
  </div>
    <div class="column">
    <img src="h2.jpg" alt="Icon" class="icon">
      <p>Chez Caveo, nous favorisons l'amélioration continue, l'efficacité et l'innovation de nos produits pour augmenter la sécurité, le confort et la performance.</p>
      
    </div>
    <div class="column">
    <img src="c1.png" alt="Icon" class="icon">
      <p>La recherche continue de l'innovation permet à Caveo de fournir à ses clients des solutions pour les besoins actuels et futurs.</p>
      
    </div>
  </div>

  <!-- Featurette Section 1 - Image à droite et texte à gauche -->
<div class="featurette">
  <div class="featurette-text">
    <h2>Founder</h2>
    <p>La Compagnie Tunisienne de Ressorts à Lames COTREL - CAVEO AUTOMOTIVE Tunisie - Société Anonyme créée en 1981, fait partie d’un groupe de sociétés intégrées dans le secteur du véhicule industriel (CAVEO). Spécialisée dans la conception, la fabrication et la commercialisation de ressorts à lames conventionnels et paraboliques pour tout type de véhicules. COTREL est le fournisseur des plus grands constructeurs automobiles internationaux.</p>
  </div>
  <div class="featurette-image">
    <img src="h1.jpg" alt="Image description" style="width:100%; height:auto;">
  </div>
</div>

<!-- Featurette Section 2 - Image à gauche et texte à droite -->
<div class="featurette reverse">
  <div class="featurette-text">
    <h2>Activity</h2>
    <p>Caveo assiste ses clients dans la conception de nouveaux produits, assure la qualité totale des produits commercialisés et maîtrise parfaitement la logistique de livraisons. Aujourd’hui, COTREL occupe une position stratégique au cœur de marchés fortement concurrentiels grâce à une valorisation des compétences, une utilisation des technologies modernes et pointues mais aussi et surtout grâce à un engagement de performance et d’efficacité au profit d’une clientèle de plus en plus exigeante.</p>
  </div>
  <div class="featurette-image">
    <img src="hjj.jpg" alt="Image description" style="width: 300px; height: auto;">
  </div>
</div>

<div class="featurette">
  <div class="featurette-text">
    <h2>certificate</h2>
    <p> L’organisation structurelle mise en place par COTREL est certifiée ISO 9001 (2015), IATF16949, ISO 14001 et OHSAS 18001 par l’AFAQ.
    Caveo a acquis son savoir faire de la société Japonaise NHK, l’un des leaders mondiaux de la fabrication de ressorts à lames.</p>
  </div>
  <div class="featurette-image">
    <img src="IMG_5721.jpeg" alt="Image description" style="width:100%; height:auto;">
  </div>
</div>

 
  <script>
    // Slideshow functionality
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (var i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>

<footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2025–2024 Caveo <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</body>
</html>
