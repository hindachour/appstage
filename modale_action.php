<?php 
session_start(); // Démarrer la session

// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupération des données envoyées
    $user = isset($_POST['user']) ? htmlspecialchars($_POST['user']) : null;
    $start_time = isset($_POST['start_time']) ? htmlspecialchars($_POST['start_time']) : null;
    $end_time = isset($_POST['end_time']) ? htmlspecialchars($_POST['end_time']) : null;
    $task = isset($_POST['task']) ? htmlspecialchars($_POST['task']) : null;
    $remaining_time = isset($_POST['remaining_time']) ? htmlspecialchars($_POST['remaining_time']) : null;
    $time_spent = isset($_POST['time_spent']) ? htmlspecialchars($_POST['time_spent']) : null;
    $description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : null;
    $theme = isset($_POST['theme']) ? htmlspecialchars($_POST['theme']) : null;

    // Vérification des champs obligatoires
    if ($start_time && $end_time && $task && $theme) {

        // Préparer la requête SQL
        $stmt = $conn->prepare(
            "INSERT INTO modale (user, `heure début`, `heure fin`, tache, `duré restante`, `temps réalisé`, commentaire, theme) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
        );

        if ($stmt === false) {
            $_SESSION['message'] = "Erreur de préparation de la requête : " . $conn->error;
            $_SESSION['message_type'] = "error";
        } else {
            // Associer les paramètres
            $stmt->bind_param("ssssssss", $user, $start_time, $end_time, $task, $remaining_time, $time_spent, $description, $theme);

            // Exécuter la requête
            if ($stmt->execute()) {
                $_SESSION['message'] = "Données enregistrées avec succès !";
                $_SESSION['message_type'] = "success";
            } else {
                $_SESSION['message'] = "Erreur lors de l'exécution de la requête : " . $stmt->error;
                $_SESSION['message_type'] = "error";
            }

            // Fermer la requête
            $stmt->close();
        }
    } else {
        $_SESSION['message'] = "Veuillez remplir tous les champs obligatoires.";
        $_SESSION['message_type'] = "error";
    }

    // Rediriger vers table.php avec un message
    header("Location: table.php");
    exit();
}

// Fermer la connexion à la base de données
$conn->close();
?>
