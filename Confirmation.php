<!-- confirmation.php -->

<?php
// Assurez-vous de configurer vos informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$database = "licence";

try {
    // Connexion à la base de données MySQL avec PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérez le nom et le prénom de l'étudiant depuis la base de données
    $stmt = $conn->prepare("SELECT * FROM Candidats ORDER BY temps_inscription DESC LIMIT 1");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifiez si des résultats ont été obtenus
    if ($result) {
        $nom = $result['Nom'];
        $prenom = $result['Prenom'];
        $cne= $result['CNE'];
        $cni= $result['CNI'];
        $filière= $result['FiliereSouhaitee'];

    } else {
        // Ajustez cette partie en fonction de votre logique, par exemple redirigez vers une page d'erreur
        die("Aucun étudiant trouvé dans la base de données.");
    }

} catch (PDOException $e) {
    // Gérez les erreurs de connexion à la base de données
    die("Erreur de connexion à la base de données: " . $e->getMessage());
} finally {
    // Fermez la connexion
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche d'inscription</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: white; /* Ajoutez une couleur de fond au header si nécessaire */
        }
        .container {
            width: 800px; /* Largeur fixe du conteneur */
            margin: 0 auto; /* Centrage horizontal */
        }

        header img {
            width: 200px;
            height: 80px;
        }
        h1{
            text-align: center;
            text-decoration: underline;
            font-size: 20px;
            font-weight: bold;
        }

        h1, p {
            margin: 20px;
        }

        .hide-on-print {
            display: none;
        }
        #telecharger {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        float: right; /* Alignement à droite */

    }

    #telecharger:hover {
        background-color: #2980b9;
    }
    </style>
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

</head>

<body >
    <div class="container">
     <section id="invoice">

    <header>
        <!-- Logo de l'établissement 1 -->
        <img src="est.png" alt="Logo de l'établissement 1" >

        <img src="ecole.png" alt="logo 3">

        <!-- Logo de l'établissement 2 -->
        <img src="sb.png" alt="Logo de l'établissement 2" >
    </header>


    <h1>Fiche d'inscription</h1><br><br>

    <p>Le Directeur Par Intérin de l'Ecole Supérieure de Technologie Sidi-Bennour atteste que <br>l'étudiant (e):</p>
    <p>Bonjour <?php echo ucfirst($prenom) . ' ' . ucfirst($nom); ?>,</p><br>
    
    <p>Code Massar: <?php echo $cne ?> </p>
    <p>Carte nationale d'idantité: <?php echo $cni ?> </p>
    <p>Filière:<?php echo $filière ?> </p><br><br>

    
   

    <p>Est réguliérement incsrit (e) à l'ECOLE SUPERIEURE DE TECHNOLOGIE SIDI BENNOUR <br>pour l'année unversitaire 2023/2024.</p>
    </section>
    <!-- Ajoutez un lien pour télécharger la fiche au format PDF -->
    <input type="submit" class="btn" value="telecharger" id="telecharger" >
      <script src="télécharger.js"></script>

</div>

</body>

</html>
