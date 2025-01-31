<?php
// Configuration de la connexion à la base de données
$host = 'localhost'; // Hôte
$dbname = 'app'; // Nom de la base
$username = 'root'; // Nom d'utilisateur MySQL
$password = ''; // Mot de passe MySQL

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = trim($_POST['name']);  // Assurez-vous que 'name' est récupéré ici
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // Débogage : vérifier si les données sont bien récupérées
    echo "Nom : $name<br>";
    echo "Téléphone : $phone<br>";
    echo "Message : $message<br>";

    // Préparer la requête pour insérer les données
    $sql = "INSERT INTO contactus (Name, phone, message) VALUES (:Name, :phone, :message)";
    $stmt = $pdo->prepare($sql);
    
    // Exécuter la requête avec les données du formulaire
    try {
        $stmt->execute([
            ':Name' => $name, // Utilisation de 'Name' pour correspondre à la colonne
            ':phone' => $phone,
            ':message' => $message
        ]);

        // Message de confirmation
        echo "<script>
                alert('Merci pour votre message!');
                window.location.href = 'contact.php';
              </script>";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
