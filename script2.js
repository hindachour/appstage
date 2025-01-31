  
// Sélection des éléments du DOM
const modal = document.getElementById("myModal");
const closeBtn = document.querySelector(".close-btn");
const tableHeaders = document.querySelectorAll('.editable-table thead th');
const weekDisplay = document.getElementById('currentWeek');
const prevWeekButton = document.getElementById('prevWeekButton');
const nextWeekButton = document.getElementById('nextWeekButton');
const todayButton = document.getElementById('todayButton');

// Fonction pour ouvrir le modal et mettre à jour les champs
function openModal(startTime, endTime, selectedDate) {
    if (!modal) return;

    modal.style.display = "block";

    const dateObj = new Date(selectedDate);
    const formattedDate = dateObj.toLocaleDateString('fr-FR');

    document.getElementById("start-time").value = startTime;
    document.getElementById("end-time").value = endTime;

    const dateField = document.getElementById("date");
    if (dateField) {
        dateField.value = formattedDate;
    }

    console.log(`Date sélectionnée: ${formattedDate}`);
}

// Fonction pour fermer le modal
function closeModal() {
    if (modal) {
        modal.style.display = "none";
    }
}

// Écouteurs d'événements
if (closeBtn) {
    closeBtn.addEventListener("click", closeModal);
}
document.addEventListener("click", (event) => {
    if (event.target.classList.contains("editable-cell")) {
        const row = event.target.closest("tr");
        const timeRange = row.querySelector("td").innerText;
        
        // Ajout d'un log pour vérifier le contenu de timeRange
        console.log(`Time range clicked: ${timeRange}`);
        
        const [startTime, endTime] = timeRange.split("-");
        
        // Vérifiez si startTime et endTime sont définis
        if (startTime && endTime) {
            const selectedDate = event.target.getAttribute('data-date');
            openModal(`${startTime}:00`, `${endTime}:00`, selectedDate);
        } else {
            console.error("Heures de début ou de fin non trouvées pour la plage horaire:", timeRange);
        }
    }
});


// Initialisation de la date de référence
let currentDate = new Date();
// Fonction pour obtenir les dates de début et de fin de la semaine
function getWeekRange(date) {
    const startOfWeek = new Date(date);
    startOfWeek.setDate(date.getDate() - date.getDay() + 1); // Début lundi
    const endOfWeek = new Date(startOfWeek);
    endOfWeek.setDate(startOfWeek.getDate() + 6); // Fin dimanche
    return { start: startOfWeek, end: endOfWeek };
}
// Fonction pour formater une date en chaîne lisible
function formatDate(date) {
    return `${String(date.getDate()).padStart(2, '0')}/${String(date.getMonth() + 1).padStart(2, '0')}/${date.getFullYear()}`;
}
// Fonction pour mettre à jour l'affichage des dates dans le tableau
function updateWeekDates() {
    const weekRange = getWeekRange(currentDate);
    const daysOfWeek = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

    tableHeaders.forEach((header, index) => {
        if (index > 0) {
            const dayDate = new Date(weekRange.start);
            dayDate.setDate(weekRange.start.getDate() + index - 1);
            header.innerHTML = `${daysOfWeek[index - 1]}<br>${formatDate(dayDate)}`;
            header.setAttribute('data-date', dayDate.toISOString().split('T')[0]);
        }
    });

    const rows = document.querySelectorAll('.editable-table tbody tr');
    rows.forEach((row) => {
        const cells = row.querySelectorAll('td.editable-cell');
        cells.forEach((cell, colIndex) => {
            if (colIndex > 0) {
                const dayDate = new Date(weekRange.start);
                dayDate.setDate(weekRange.start.getDate() + colIndex - 1);
                cell.setAttribute('data-date', dayDate.toISOString().split('T')[0]);
            }
        });
    });
    if (weekDisplay) {
        weekDisplay.textContent = `Du ${formatDate(weekRange.start)} au ${formatDate(weekRange.end)}`;
    }
}
// Événements pour naviguer entre les semaines
if (prevWeekButton) {
    prevWeekButton.addEventListener('click', () => {
        currentDate.setDate(currentDate.getDate() - 7);
        updateWeekDates();
    });
}
if (nextWeekButton) {
    nextWeekButton.addEventListener('click', () => {
        currentDate.setDate(currentDate.getDate() + 7);
        updateWeekDates();
    });
}
if (todayButton) {
    todayButton.addEventListener('click', () => {
        currentDate = new Date();
        updateWeekDates();
    });
  
}
updateWeekDates();
window.onclick = function(event) {
    if (event.target === modal) {
        closeModal();
    }
};
document.addEventListener('keydown', (event) => {
    if (event.key === "Escape") {
        closeModal();
    }
});


document.addEventListener('DOMContentLoaded', function () {
    setTimeout(() => {
        const tableBody = document.querySelector('.editable-table tbody');
        if (tableBody) {
            tableBody.scrollIntoView({ behavior: 'smooth', block: 'end' });
        } else {
            console.error('Table body non trouvé après délai');
        }
    }, 500); // délai en millisecondes
});


function colorCellBasedOnMinutes(cell, minutes) {
    const colorBlock = document.createElement('div');
    colorBlock.classList.add('color-block');

    let height;
    if (minutes === 0) {
        height = '100%';
    } else if (minutes === 15) {
        height = '25%';
    } else if (minutes === 30) {
        height = '50%';
    } else if (minutes === 45) {
        height = '75%';
    } else {
        height = '0%'; // Cas par défaut
    }

    colorBlock.style.height = height;
    cell.appendChild(colorBlock);
}
function getMinutesFromCell(cell) {
    // Exemple de récupération des minutes d'une cellule qui contient une plage horaire
    const timeRange = cell.innerText; // Supposons que la cellule contient un créneau horaire comme "08:00 - 09:00"
    const [startTime, endTime] = timeRange.split("-");
    const startMinute = parseInt(startTime.split(":")[1], 10); // Prend les minutes du début

    return startMinute; // Renvoie les minutes comme 0, 15, 30, 45
}
