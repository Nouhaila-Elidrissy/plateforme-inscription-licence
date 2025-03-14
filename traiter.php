<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitemt de données</title>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>

<body>


    <?php




    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifiez la présence des champs obligatoires
        if (empty($_POST['code_massar']) || empty($_POST['cni']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['telephone']) || empty($_POST['baccalaureat']) || empty($_POST['anneeObtentionBac']) || empty($_POST['diplome']) || empty($_POST['specialite']) || empty($_POST['anneeObtentionDiplome']) || empty($_POST['moyenneGenerale']) || empty($_POST['filiereSouhaitee'])) {
            echo "Veuillez remplir tous les champs obligatoires.";
            // Vous pouvez rediriger l'utilisateur vers le formulaire ici si nécessaire
            exit;
        }

        $cne = $_POST['code_massar'];
        $cni = $_POST['cni'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $baccalaureat = $_POST['baccalaureat'];
        $anneeObtentionBac = $_POST['anneeObtentionBac'];
        $diplome = $_POST['diplome'];
        $specialite = $_POST['specialite'];
        $anneeObtentionDiplome = $_POST['anneeObtentionDiplome'];
        $moyenneGenerale = $_POST['moyenneGenerale'];
        $filiereSouhaitee = $_POST['filiereSouhaitee'];

        // Informations de connexion MySQL
        $servername = "localhost";
        $database = "licence"; // Remplacez par le nom de votre base de données MySQL
        $username = "root"; // Remplacez par le nom d'utilisateur de votre base de données MySQL (par défaut, c'est "root")
        $password = ""; // Laissez vide si vous n'avez pas défini de mot de passe pour votre base de données MySQL
    
        try {
            // Connexion à la base de données MySQL avec PDO
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Vérifier si le code massar existe déjà
            $existingQuery = "SELECT COUNT(*) FROM Candidats WHERE CNE = ?";
            $existingStmt = $conn->prepare($existingQuery);
            $existingStmt->execute([$cne]);
            $existingCount = $existingStmt->fetchColumn();

            if ($existingCount > 0) {
                // Candidat déjà inscrit avec le même code massar
                echo '<script>
                    swal({
                        title: "Erreur",
                        text: "Étudiant déjà inscrit avec le même code massar.",
                        icon: "error",
                    });
                </script>';
            } else {
                // Préparez la requête SQL pour l'insertion
                $insertQuery = "INSERT INTO Candidats (CNE, CNI, Nom, Prenom, Email, Telephone, Baccalaureat, AnneeObtentionBac, Diplome, Specialite, AnneeObtentionDiplome, MoyenneGenerale, FiliereSouhaitee) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $insertStmt = $conn->prepare($insertQuery);
                $insertStmt->execute([$cne, $cni, $nom, $prenom, $email, $telephone, $baccalaureat, $anneeObtentionBac, $diplome, $specialite, $anneeObtentionDiplome, $moyenneGenerale, $filiereSouhaitee]);





                echo '<script>
        swal({
        title: "Inscription réussie!",
        text: "Vous êtes maintenant inscrit.",
        icon: "success",
        }).then(function() {
        // Redirection vers confirmation.php après la confirmation de   
        window.location.href = "confirmation.php";
       });
       </script>';


                $dossier_destination = "dossiers_etudiants/$cne";

                // Vérifier si le dossier de destination existe, sinon le créer
                if (!file_exists($dossier_destination)) {
                    mkdir($dossier_destination, 0777, true);
                }

                // Traiter chaque fichier téléchargé
                foreach ($_FILES as $key => $file) {
                    // Vérifier si le fichier a été téléchargé avec succès
                    if ($file['error'] == UPLOAD_ERR_OK) {
                        // Déplacer le fichier vers le dossier de destination avec un nouveau nom si nécessaire
                        $nom_fichier = $file['name'];
                        $chemin_destination = $dossier_destination . '/' . $nom_fichier;
                        move_uploaded_file($file['tmp_name'], $chemin_destination);
                    }
                }
                
                $destinataire = "$email";
                $sujet = "Inscription aux filières de licence à l'École supérieure de technologie Sidi Benneur";
                $message = "Bonjour " . ucfirst($prenom) . " " . ucfirst($nom) . ",,\n\nNous avons le plaisir de vous informer que votre inscription à l'École Supérieure de Technologie Sidi Benneur a été confirmée avec succès.";
                $headers = "From: nouhailael475@gmail.com";
                mail($destinataire, $sujet, $message, $headers);

            }



        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                // Code d'erreur 1062 correspond à une violation d'intégrité (clé primaire déjà existante)
                echo '<script>
                swal({
                    title: "Erreur",
                    text: "Étudiant déjà inscrit avec le même code massar.",
                    icon: "error",
                });
            </script>';
            } else {
                echo '<script>
                swal({
                    title: "Erreur",
                    text: "Erreur lors de l\'enregistrement : ' . $e->getMessage() . '",
                    icon: "error",
                });
            </script>';
            }
        } finally {
            // Fermez la connexion
            $conn = null;
        }











    }

    ?>




</body>

</html>