 // Récupérer les éléments du DOM
 const modal = document.getElementById('myModal');
 const closeButton = document.querySelector('.close-btn');
 const editableCells = document.querySelectorAll('.editable-cell.empty');

 // Fonction pour ouvrir la modale
 function openModal(event) {
     modal.style.display = 'block';
 }

 // Fermer la modale
 closeButton.addEventListener('click', () => {
     modal.style.display = 'none';
 });

 // Fermer la modale en cliquant en dehors
 window.addEventListener('click', (event) => {
     if (event.target === modal) {
         modal.style.display = 'none';
     }
 });

 // Attacher l'événement de clic uniquement aux cellules vides
 editableCells.forEach(cell => {
     cell.addEventListener('click', openModal);
 });