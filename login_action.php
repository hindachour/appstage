<?php
$host = 'localhost'; // Hôte
$dbname = 'app'; // Nom de la base
$username = 'root'; // Nom d'utilisateur MySQL
$password = ''; // Mot de passe MySQL

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !<br>"; // Débogage : vérifier la connexion
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $inputUsername = trim($_POST['username']);
    $inputPassword = trim($_POST['password']);
    
    // Débogage : vérifier les données du formulaire
    echo "Nom d'utilisateur : $inputUsername<br>"; 
    echo "Mot de passe : $inputPassword<br>";

    // Préparer la requête
    $sql = "SELECT * FROM user WHERE `Nom prénom` = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ ':username' => $inputUsername ]);
    
    // Vérifier si l'utilisateur existe
    if ($stmt->rowCount() > 0) {
        echo "Utilisateur trouvé !<br>"; // Débogage : vérifier si l'utilisateur est trouvé

        // Récupérer l'utilisateur
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($inputPassword == $user['Mot de passe']) { 
            echo "Mot de passe correct !<br>"; 
            session_start();
            $_SESSION['username'] = $user['Nom prénom'];
            echo "Redirection vers table.php...<br>";
            header("Location: table.php");
            exit;
        } else {
            echo "<script>
                    alert('Mot de passe incorrect!');
                    window.location.href = 'sign.html';
                  </script>";
            exit;
        }
    } else {
        echo "<script>
                alert('Nom d\'utilisateur incorrect!');
                window.location.href = 'sign.html';
              </script>";
        exit;
    }
}






try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = trim($_POST['username']);
    $inputPassword = trim($_POST['password']);
    $sql = "SELECT * FROM user WHERE `Nom prénom` = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ ':username' => $inputUsername ]);
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($inputPassword == $user['Mot de passe']) { 
            session_start();
            $_SESSION['username'] = $user['Nom prénom'];
            header("Location: table.php");
            exit;
        } else {
            echo "<script>
                    alert('Mot de passe incorrect!');
                    window.location.href = 'sign.html';
                  </script>";
            exit;
        }
    } else {
        echo "<script>
                alert('Nom d\'utilisateur incorrect!');
                window.location.href = 'sign.html';
              </script>";
        exit;
    }
}
?>
