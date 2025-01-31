<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    echo "<script>alert('Veuillez vous connecter d\'abord!'); window.location.href = 'login.html';</script>";
    exit;
}

// Afficher le nom de l'utilisateur
$user = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau Editable</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.2/xlsx.full.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>




<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">Théme</a>
    </header>
    <ul class="nav">
      <li>
        <a href="#">
          <i  class="theme-item" data-theme="Thème 1"></i> Théme 1
        </a>
      </li>
      <li>
        <a href="#">
          <i class="theme-item" data-theme="Thème 1"></i> Théme 2
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-widgets"></i> Théme 3
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-calendar"></i> Théme 4
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-info-outline"></i> Théme 5
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-settings"></i> Théme 7
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-comment-more"></i> Théme 8
        </a>
      </li>
    </ul>
  </div>
  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      
    </nav>
    
  </div>
</div>




<div class="user-date-container">
<div class="date-nav">
    <button class="date-button" id="todayButton">Aujourd'hui</button>
    <button class="date-button" id="prevWeekButton">&lt;</button>
    <button class="date-button" id="nextWeekButton">&gt;</button>
  </div>
  <div>
        <h2>Utilisateur</h2>
        <span id="ff"><?php echo htmlspecialchars($user); ?></span> <!-- Afficher le nom de l'utilisateur -->
    </div>
 
<div class="horizontal-line"></div>
  <div class="date-container" id="dateContainer">
        <!-- La date sera affichée ici -->
         <h2>semaine</h2>
         <p id="currentWeek"></p>
    </div>
 
</div>

  <div class="table-container">
  <div class="vertical-line"></div>
  <div class="horizontal-line"></div>
    <table class="editable-table">
      <thead>
        <tr>
          <th>Heure</th>
          <th>Lundi <br> </th>
          <th>Mardi<br> </th>
          <th>Mercredi<br> </th>
          <th>Jeudi<br> </th>
          <th>Vendredi<br> </th>
          <th>Samedi<br> </th>
          <th>Dimanche<br> </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>00-01</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"  id="cell-lundi"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14" id="cell-mardi"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15" id="cell-mercredi"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16" id="cell-jeudi"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17" id="cell-vendredi"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18" id="cell-samedi"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19" id="cell-dimanche"></td>
         
        </tr>
        <tr>
          <td>01-02</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        <tr>
          <td>02-03</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        <tr>
          <td>03-04</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        <tr>
          <td>04-05</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        <tr>
          <td>05-06</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        <tr>
        <tr id="default-row">
          <td>06-07</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        <tr>
          <td>07-08</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        <tr>
        <td>8-9</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" ddata-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        <tr>
          <td>9-10</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        <tr>
          <td>10-11</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>11-12</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>12-13</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>13-14</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>14-15</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>15-16</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>16-17</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>17-18</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        <tr>
          <td>18-19</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>19-20</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>20-21</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        <tr>
          <td>21-22</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>22-23</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr><tr>
          <td>23-00</td>
          <td class="editable-cell" data-time="" data-date="2025-01-13"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-14"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-15"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-16"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-17"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-18"></td>
          <td class="editable-cell" data-time="" data-date="2025-01-19"></td>
        </tr>
        
      </tbody>
    </table>
  </div>
  <form action="modale_action.php" method="POST">
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close-btn">&times;</span>
      
      <h3>Utilisateur</h3>
      <input type="hidden" name="user" value="<?php echo htmlspecialchars($user); ?>"> <!-- Champ caché pour l'utilisateur -->
      <span id="ff"><?php echo htmlspecialchars($user); ?></span> <!-- Affichage de l'utilisateur -->
      <h3 id="modalTitle">Thème</h3>
      <!-- Sélection du thème -->
      <label for="theme">
      </label>
      <select id="theme" name="theme" required>
        <option value="" disabled selected>-- Sélectionnez un thème --</option>
        <option value="théme1">Thème 1</option>
        <option value="théme2">Thème 2</option>
        <option value="théme3">Thème 3</option>
        <option value="théme4">Thème 4</option>
        <option value="théme5">Thème 5</option>
        <option value="théme6">Thème 6</option>
      </select>

      <label for="start-time">Heure Début:</label>
      <input type="time" name="start_time" id="start-time" required onchange="calculateTime()">

      <label for="end-time">Heure fin:</label>
      <input type="time" name="end_time" id="end-time" required onchange="calculateTime()">

      <label for="task">Tâche:</label>
      <select name="task" id="task" required>
        <option value="task1">Tâche 1</option>
        <option value="task2">Tâche 2</option>
        <option value="task3">Tâche 3</option>
        <option value="task4">Tâche 4</option>
      </select>

      <label for="remaining-time">Durée restante:</label>
      <input type="text" name="remaining_time" id="remaining-time" placeholder="Entrez la durée restante">

      <label for="time-spent">Temps réalisé:</label>
      <input type="text" name="time_spent" id="time-spent" placeholder="Entrez le temps réalisé">

      <label for="description">Commentaire:</label>
      <textarea name="description" id="description" rows="4" cols="50" placeholder="Ajoutez un commentaire"></textarea>
      <button id="save-btn" type="submit">Ok</button>
    </div>
  </div>
</form>
<script src="script2.js"></script>

  
  <style>
/* Désactiver le défilement de la page */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  overflow: hidden; /* Désactiver le défilement de la page */
}
/* Conteneur pour le tableau */
/* Conteneur pour le tableau */
.table-container {
  height: 80vh; /* Hauteur définie */
  overflow: auto; /* Activer le défilement */
  margin-left: 180px; /* Espace pour la sidebar */
  position: relative;
  padding-top: 70px; /* Espace pour un en-tête fixe */
  height: 80vh; /* Hauteur du conteneur */
  overflow: auto; /* Activer le défilement vertical */
  left: 4px; /* Ajuste la position de la table */
}

/* Table */
.editable-table {
  width: 100%; /* Table prend toute la largeur disponible */
  border-collapse: collapse;
  table-layout: fixed; /* Colonnes fixes */
}

.editable-table thead {
  position: sticky;
  top: -50px; /* Déplace l'en-tête 50px vers le bas */
  z-index: 10;
  background-color: #f4f4f4;
}
/* Cellules de l'en-tête */
.editable-table thead th {
  padding: 10px; /* Augmentez le padding pour plus d'espacement */
  text-align: center;
  border: 1px solid #ccc;
  background-color: #f4f4f4;
  font-weight: bold;
  height: 20px;
  width: 150px;
  padding-right: 10px; 
  padding-left: 25px; /* Ajustez le padding à gauche */
}

/* Cellules du corps de table */
.editable-table tbody td {
  padding: 8px;
  text-align: center;
  border: 1px solid #ccc;
  cursor: pointer;
  background-color: #fff;
  position: relative; /* Permet de gérer le z-index correctement */
  z-index: 1; /* Assure que le contenu reste sous l'en-tête */
}





/* Modale container */
.modal {
    display: none; /* Initialement cachée */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 10px; /* Réduit le padding pour limiter l'espace interne */
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    width: 90%;
    max-width: 600px; /* Réduit la largeur maximale */
    height: auto;
    max-height: 75vh; /* Réduit la hauteur maximale pour éviter les grands espaces */
    overflow-y: auto;
    transition: transform 0.3s ease-in-out;
}

/* Contenu de la modale */
.modal-content {
    width: 100%;
    padding: 10px; /* Réduit le padding interne */
    background-color: #f9f9f9;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Fermeture de la modale */
.close-btn {
    font-size: 20px;
    position: absolute;
    top: 10px; /* Réduit l'espace en haut */
    right: 10px; /* Réduit l'espace à droite */
    color: #999;
    cursor: pointer;
    transition: color 0.3s ease;
}
/* Champs de formulaire */
input[type="time"], input[type="text"], select, textarea {
    width: 100%;
    padding: 6px; /* Réduit le padding pour rapprocher le texte */
    margin: 4px 0 8px; /* Réduit les marges */
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 6px;
    background-color: #f7f7f7;
    box-sizing: border-box;
    color: #333;
    transition: border-color 0.3s ease;
}
textarea {
    resize: vertical;
    min-height: 50px; /* Réduit la hauteur minimale */
}

/* Bouton de sauvegarde */
button {
    padding: 8px 16px; /* Réduit la taille du bouton */
    font-size: 14px;
    margin-top: 8px; /* Réduit l'espace en haut */
    background-color:rgb(85, 87, 87);
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color:rgb(109, 110, 112);
}

/* Table pour les tâches */
#task-table {
    width: 100%;
    margin-top: 10px; /* Réduit l'espace au-dessus */
    border-collapse: collapse;
}

.task-cell {
    width: 80px; /* Réduit la taille des cellules */
    height: 80px;
    border: 1px solid #000;
    background-color: #ddd;
    cursor: pointer;
}

.task-cell:hover {
    background-color: #e0e0e0;
}


/* Style pour le box des couleurs */
#colored-box {
    margin-top: 5px;
    padding: 0px;
    background-color: #f0f8ff;
    border-radius: 6px;
    font-size: 14px;
    color: #555;
}

/* Mise en forme du texte affichant l'intervalle de temps */
#time-interval {
    font-weight: 500;
}

/* Animation de la modale */
@keyframes modalFadeIn {
    from {
        opacity: 0;
        transform: translate(-50%, -60%);
    }
    to {
        opacity: 1;
        transform: translate(-50%, -50%);
    }
}

.modal.show {
    animation: modalFadeIn 0.3s ease-out;
}

.user-date-container {
    display: flex;
  justify-content: center;  
  align-items: center;  
  margin-bottom: 20px; 
  width: 100%; 
}

.user-date-container > div {
  width: auto; 
  margin-right: 80px;
}

.user-date-container > div h2 {
  margin-bottom: 5px;  
}

.user-date-container > div span {
  font-size: 18px; 
}

.table-container {
  margin-left: 180px; /* Adjust the value to shift the table as much as needed */
  position: relative;
  padding-top: 50px;
}
 /* Ajout de styles de base pour votre table et les boutons */
 .date-nav {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .date-button {
            margin: 0 5px;
            padding: 10px 15px;
            cursor: pointer;
        }
        .editable-table {
            width: 100%;
            border-collapse: collapse;
        }
        .editable-table th, .editable-table td {
            border: 1px solid #ccc;
            text-align: center;
            padding: 8px;
        }
        .editable-cell {
            background-color: #f9f9f9;
            cursor: pointer;
        }

       
 

        @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

:root {
  --sidebar-width: 220px; /* Largeur modifiable de la sidebar */
  --sidebar-bg: #37474F;
  --sidebar-header-bg: #263238;
  --sidebar-text: #CFD8DC;
  --sidebar-hover: #ECEFF1;
  --sidebar-border: #455A64;
}

body {
  overflow-x: hidden;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
  margin: 0; /* Assurez-vous qu'il n'y a pas de marges par défaut */
}

/* Toggle Styles */

#viewport {
  padding-left: var(--sidebar-width);
  transition: all 0.4s ease-in-out;
}

#content {
  width: 100%;
  position: relative;
  margin-right: 0;
}

/* Sidebar Styles */

#sidebar {
  z-index: 1000;
  position: fixed;
  left: 0; /* Place la sidebar contre le bord gauche de la page */
  width: var(--sidebar-width);
  height: 100vh; /* 100% de la hauteur de la fenêtre */
  top: 0; /* Commence en haut de la page */
  overflow-y: auto;
  background: var(--sidebar-bg);
  transition: all 0.4s ease-in-out;
}

#sidebar header {
  background-color: var(--sidebar-header-bg);
  font-size: 20px;
  line-height: 52px;
  text-align: center;
}

#sidebar header a {
  color: var(--sidebar-text);
  display: block;
  text-decoration: none;
}

#sidebar header a:hover {
  color: var(--sidebar-hover);
}

#sidebar .nav a {
  background: none;
  border-bottom: 1px solid var(--sidebar-border);
  color: var(--sidebar-text);
  font-size: 14px;
  padding: 12px 16px; /* Réduction de padding */
  display: flex;
  align-items: center; /* Centre les icônes et le texte */
  transition: all 0.3s ease-in-out;
}

#sidebar .nav a:hover {
  background: rgba(255, 255, 255, 0.05); /* Ajout d'une légère surbrillance */
  color: var(--sidebar-hover);
}

#sidebar .nav a i {
  margin-right: 12px; /* Réduction de l'espacement des icônes */
  font-size: 18px;
  transition: transform 0.3s ease;
}

#sidebar .nav a:hover i {
  transform: scale(1.1); /* Effet au survol des icônes */
}

/* Responsive Sidebar */
@media (max-width: 768px) {
  :root {
    --sidebar-width: 180px; /* Réduction automatique de la largeur sur petits écrans */
  }

  #viewport {
    padding-left: var(--sidebar-width);
  }

  #sidebar {
    width: var(--sidebar-width);
    margin-left: calc(-1 * var(--sidebar-width));
  }
}




/* Style de la boîte colorée */
.box {
  width: 100%;
  height: 50px;
  border: 1px solid #ccc;
  margin: 10px 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
}
/* Différence de 0 minute */
.diff-0 {
  background-color: red;
}
/* Différence de 15 minutes */
.diff-15 {
  background: linear-gradient(to right, red 25%, white 25%);
}

/* Différence de 30 minutes */
.diff-30 {
  background: linear-gradient(to right, red 50%, white 50%);
}

/* Différence de 45 minutes */
.diff-45 {
  background: linear-gradient(to right, red 75%, white 75%);
}



</style>
</body>
</html>


