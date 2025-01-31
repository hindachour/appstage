<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        /* Style basique pour le formulaire */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Prendre toute la hauteur de la fenêtre */
            margin: 0;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #ccc;
            width: 600px;
            height: 600px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #333;
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Conteneur du formulaire centré -->
    <div class="form-container">
        <h3>Utilisateur</h3>
        <h3>Thème</h3>

        <form>
            <!-- Informations temporelles -->
            <div>
                <label for="start-date">Début:</label>
                <input type="text" id="start-date" value="8:00 - 13/01/25" disabled>

                <label for="end-date">Heure fin:</label>
                <input type="text" id="end-date" value="9:00 - 13/01/25" disabled>
            </div>

            <!-- Tâche -->
            <div>
                <label for="task">Tâche:</label>
                <select id="task">
                    <option value="task1">Tâche 1</option>
                    <option value="task2">Tâche 2</option>
                    <option value="task3">Tâche 3</option>
                    <option value="task4">Tâche 4</option>
                </select>
            </div>

            <!-- Durée restante et temps réalisé -->
            <div>
                <label for="remaining-time">Durée restante:</label>
                <input type="text" id="remaining-time" placeholder="Durée restante" disabled>

                <label for="time-spent">Temps réalisé:</label>
                <input type="text" id="time-spent" placeholder="Entrez le temps réalisé">
            </div>

            <!-- Commentaire -->
            <div>
                <label for="description">Commentaire:</label>
                <textarea id="description" rows="4" cols="50" placeholder="Entrer votre commentaire..."></textarea>
            </div>

            <!-- Bouton d'enregistrement -->
            <div>
                <button id="save-btn" type="submit">Ok</button>
            </div>
        </form>
    </div>

    <script>
        // Script pour changer la durée restante en fonction de la tâche sélectionnée
        document.getElementById("task").addEventListener("change", function() {
            var task = this.value;
            var remainingTimeInput = document.getElementById("remaining-time");

            if (task === "task1") {
                remainingTimeInput.value = "4 ";
            } else if (task === "task2") {
                remainingTimeInput.value = "6 ";
            } else if (task === "task3") {
                remainingTimeInput.value = "8 "; // Si Tâche 3 est sélectionnée
            } else {
                remainingTimeInput.value = "5 "; // Par défaut pour les autres tâches
            }
        });

        // Initialisation à la première tâche sélectionnée par défaut
        document.getElementById("task").dispatchEvent(new Event('change'));
    </script>

</body>
</html>












//modal




// Initialisation de la date de référence
let currentDate = new Date();

// Fonction pour obtenir les dates de début et de fin de la semaine
function getWeekRange(date) {
  const startOfWeek = new Date(date);
  startOfWeek.setDate(date.getDate() - date.getDay() + 1); // Début lundi
  const endOfWeek = new Date(startOfWeek);
  endOfWeek.setDate(startOfWeek.getDate() + 6); // Fin dimanche
  return {
    start: startOfWeek,
    end: endOfWeek
  };
}

// Fonction pour formater une date en chaîne lisible
function formatDate(date) {
  return `${String(date.getDate()).padStart(2, '0')}/${String(date.getMonth() + 1).padStart(2, '0')}/${date.getFullYear()}`;
}

// Fonction pour mettre à jour l'affichage des dates dans le tableau
function updateWeekDates() {
  const weekRange = getWeekRange(currentDate);

  // Tableau des jours de la semaine (lundi à dimanche)
  const daysOfWeek = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
  const tableHeaders = document.querySelectorAll('.editable-table thead th');

  // Mettre à jour les en-têtes du tableau avec les dates
  for (let i = 0; i < daysOfWeek.length; i++) {
    const dayDate = new Date(weekRange.start);
    dayDate.setDate(weekRange.start.getDate() + i); // Définir la date pour chaque jour

    // Mettre à jour l'en-tête avec le nom du jour et la date
    tableHeaders[i + 1].innerHTML = `${daysOfWeek[i]}<br>${formatDate(dayDate)}`;
  }

  // Affichage de la plage de la semaine
  const weekDisplay = document.getElementById('currentWeek');
  if (weekDisplay) {
    weekDisplay.textContent = `Du ${formatDate(weekRange.start)} au ${formatDate(weekRange.end)}`;
  }
}

// Événements pour naviguer entre les semaines
document.getElementById('prevWeekButton').addEventListener('click', () => {
  currentDate.setDate(currentDate.getDate() - 7); // Aller à la semaine précédente
  updateWeekDates();
});

document.getElementById('nextWeekButton').addEventListener('click', () => {
  currentDate.setDate(currentDate.getDate() + 7); // Aller à la semaine suivante
  updateWeekDates();
});

document.getElementById('todayButton').addEventListener('click', () => {
  currentDate = new Date(); // Réinitialiser à la date actuelle
  updateWeekDates();
});

// Initialiser l'affichage au chargement de la page
updateWeekDates();

// Get the modal element
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var tableCells = document.querySelectorAll(".editable-cell"); // All editable table cells

// Get the <span> element that closes the modal
var closeBtn = document.getElementsByClassName("close-btn")[0];

// When the user clicks on a table cell, open the modal
tableCells.forEach(function(cell) {
    cell.onclick = function() {
        modal.style.display = "block";  // Show the modal when a cell is clicked
    }
});

// When the user clicks on <span> (x), close the modal
closeBtn.onclick = function() {
    modal.style.display = "none";  // Close the modal
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";  // Close the modal when clicking outside
    }
}