<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription aux filiéres de licence</title>
    <link rel="stylesheet" href="Acceuil.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>



    <form action="traiter.php" method="post" class="form" id="form" enctype="multipart/form-data">
        <!-- logo de l'ecole -->
        <div class="champs1">
            <div class="inputs">


            </div>
        </div>
        <!-- titre -->
        <div class="titre">
            <div class="inputs">
                <p> Fiche de Pré-inscription en Ligne pour Accéder aux <b>Licences Professionnelles</b>
                </p><br>
                <p class="red"> * indique obligatoire</p>

            </div>

        </div>
        <!-- Information sur le condidat -->
        <div class="champs">
            <div class="inputs">

                <label for=""> Information sur le condidat</label>


            </div>
        </div>

        <!-- CNE  -->
        <div class="container">
            <div class="inputs">
                <label for="CNE"> Massar/CNE: <span class="star">*</span>
                </label><br><br>
                <input type="text" name="code_massar" placeholder="votre réponse" id="CNE" required>


            </div>
        </div>

        <!-- CNI -->
        <div class="container">
            <div class="inputs">
                <label for="CNI"> CNI :<span class="star">*</span>
                </label><br><br>
                <input type="text" name="cni" placeholder="votre réponse" id="cni" required>


            </div>
        </div>
    
        <!-- NOM -->
        <div class="container">
            <div class="inputs">
                <label for="Nom"> Nom :<span class="star">*</span></label><br><br>

                <input type="text" name="nom" placeholder="votre réponse " id="Nom" required>
            </div>
        </div>

        <!-- prenon -->
        <div class="container">
            <div class="inputs">
                <label for="prenom"> Prenom :<span class="star">*</span></label><br><br>

                <input type="text" name="prenom" placeholder=" votre réponse" id="prenom" required>
            </div>
        </div>
   
      

        <!-- e-mail -->
        <div class="container">
            <div class="inputs">
                <label for="e_mail"> E-mail :<span class="star">*</span></label><br><br>

                <input type="email" name="email" placeholder="votre réponse" id="e_mail" required>
            </div>
        </div>

        <!-- tel -->
        <div class="container">
            <div class="inputs">
                <label for="tel"> Téléphone: <span class="star">*</span></label><br><br>

                <input type="tel" name="telephone" placeholder="votre réponse" id="tel" required>
            </div>
        </div>

        <!-- Information a propos du Baccalauréat -->
        <div class="champs">
            <div class="inputs">
                <label for="">Baccalauréat </label>


            </div>
        </div>

        <!-- Baccalauréat  -->

        <div class="container">
            <div class="inputs ">
                <label for="bac"> Baccalauréat <span class="star">*</span>
                </label><br><br>

                <select class="bac " name="baccalaureat" id="bac">
                    <option value="" hidden disabled selected>Sélectioner</option>

                    <option value="Sciences Phisiques">Sciences Phisiques</option>
                    <option value="Sciences de la Vie et de la Terre">Sciences de la Vie et de la Terre</option>
                    <option value="Sciences Maths A">Sciences Maths A</option>
                    <option value="Sciences Maths B">Sciences Maths B</option>
                    <option value="Sciences Economiques">Sciences Economiques</option>
                    <option value="Sciences Expérimentales">Sciences Expérimentales</option>
                    <option value="Sciences Agronomiques">Sciences Agronomiques</option>
                    <option value="Sciences Humaines et littéraires">Sciences Humaines et littéraires</option>
                    <option value="Sciences et Technologies Electriques">Sciences et Technologies Electriques</option>
                    <option value="Sciences et Technologies Mécaniques">Sciences et Technologies Mécaniques</option>
                    <option value="Arts Appliquées">Arts Appliquées</option>
                    <option value="Autre">Autre</option>

                </select>
               


            </div>
        </div>

        <!-- Année d'obtention   -->
        <div class="container">
            <div class="inputs">
                <label for="date_bac"> Année d'obtention <span class="star">*</span>
                </label><br><br>
                <input type="number" name="anneeObtentionBac" placeholder="votre réponse" id="date_bac" required>

                <!-- Infos concernant Diplôme Bac+2  -->
            </div>
        </div>

        <!-- Infos concernant Diplôme Bac+2  -->
        <div class="champs">
            <div class="inputs">

                <label for="">Diplôme Bac+2 </label>


            </div>
        </div>

        <!-- Diplôme Bac+2  -->
        <div class="container">
            <div class="inputs">
                <label for="diplome">Diplôme Bac+2 <span class="star">*</span>
                </label><br><br>

                <select class="diplome " name="diplome" id="diplome">
                    <option value="" hidden disabled selected>Sélectioner</option>

                    <option value="DUT">DUT</option>
                    <option value="DEUG">DEUG</option>
                    <option value="DEUST">DEUST</option>
                    <option value="BTS">BTS</option>
                    <option value="DTS">DTS</option>
                    <option value="CPGE">CPGE</option>
                    <option value="ISTA">ISTA</option>
                    <option value="AUTRE">AUTRE</option>


                </select>
              

            </div>
        </div>

        <!-- Spécialité -->
        <div class="container">
            <div class="inputs">
                <label for="Specialité"> Spécialité <span class="star">*</span>
                </label><br><br>
                <input type="text" name="specialite" placeholder="votre réponse" id="Specialité" required>


            </div>
        </div>


        <!-- Année d'obtention -->
        <div class="container">
            <div class="inputs">
                <label for="anne_diplome"> Année d'obtention <span class="star">*</span>
                </label><br><br>
                <input type="number" name="anneeObtentionDiplome" placeholder="votre réponse" id="anne_diplome"
                    required>


            </div>
        </div>

        <!-- Moyenne générale  -->
        <div class="container">
            <div class="inputs">
                <label for="moyenne">Moyenne générale <span class="star">*</span>
                </label><br><br>
                <input type="number" name="moyenneGenerale" placeholder="votre réponse" id="moyenne" required>



            </div>
        </div>

        <!-- Condidature -->

        <div class="champs">
            <div class="inputs">

                <label for=""> Condidature</label>


            </div>
        </div>

        <!-- filiéres -->
        <div class="container">
            <div class="inputs ">
                <label for="licence">Je postule ma candidature à la licence professionnelle :
                    <span class="star">*</span>
                </label><br><br>


                <select class="licence " name="filiereSouhaitee" id="licence">

                    <option value="" hidden disabled selected>Sélectioner</option>
                    <option value="Cyber Sécurité et Technologie Cloud (CSTC)">Cyber Sécurité et Technologie Cloud
                        (CSTC)</option>
                    <option value="Ingénierie des Systèmes Informatique et Technologie Web (ISITW)">Ingénierie des
                        Systèmes Informatique et Technologie Web (ISITW)</option>
                    <option value="Contabilité,Controle et Audit(CCA)">Contabilité,Controle et Audit(CCA)</option>
                    <option value="Finance,Banque,Assurance(FBA)">Finance,Banque,Assurance(FBA)</option>
                    <option value="Gestion Comptable et Finance (GCF)">Gestion Comptable et Finance (GCF)</option>
                    <option value="Management des Organisations">Management des Organisations</option>




                </select>
               

            </div>
        </div>
        <!-- Upload Photo -->
        <div class="container file-container">
            <div class="inputs">
                <label for="Photo_upload">Upload PHOTO (fichier.Pdf) <span class="star">*</span></label><br><br>
                <div class="file-input-container">
                    <input type="file" name="photo_upload" id="photo_upload" accept=".pdf" required
                        onchange="updateLabel('photo_upload', 'photo_label', 'photo_icon')">
                    <img src="" alt="" class="file-icon" id="photo_icon">
                    <label for="photo_upload" class="file-input-label" id="photo_label">Choisir un fichier</label>
                </div>
            </div>
        </div>
        <!-- Upload CIN  -->

        <div class="container file-container">
            <div class="inputs">
                <label for="cin_upload">Upload CNI (fichier.Pdf) <span class="star">*</span></label><br><br>
                <div class="file-input-container">
                    <input type="file" name="cni_upload" id="cin_upload" accept=".pdf" required
                        onchange="updateLabel('cin_upload', 'cin_label', 'cin_icon')">
                    <img src="" alt="" class="file-icon" id="cin_icon">
                    <label for="cin_upload" class="file-input-label" id="cin_label">Choisir un fichier</label>
                </div>
            </div>
        </div>

        <!-- Upload du diplôme Bac+2 -->
        <div class="container file-container">
            <div class="inputs">
                <label for="diplome_upload">Upload Diplôme Bac+2 (fichier.Pdf) <span
                        class="star">*</span></label><br><br>
                <div class="file-input-container">
                    <input type="file" name="diplome_upload" id="diplome_upload" accept=".pdf" required
                        onchange="updateLabel('diplome_upload', 'diplome_label', 'diplome_icon')">
                    <img src="" alt="" class="file-icon" id="diplome_icon">
                    <label for="diplome_upload" class="file-input-label" id="diplome_label">Choisir un fichier</label>
                </div>
            </div>
        </div>

        <!-- Upload du relevé de notes -->
        <div class="container file-container">
            <div class="inputs">
                <label for="releve_upload">Upload relevé de notes (fichier.Pdf) <span
                        class="star">*</span></label><br><br>
                <div class="file-input-container">
                    <input type="file" name="releve_upload" id="releve_upload" accept=".pdf" required
                        onchange="updateLabel('releve_upload', 'releve_label', 'releve_icon')">
                    <img src="" alt="" class="file-icon" id="releve_icon">
                    <label for="releve_upload" class="file-input-label" id="releve_label">Choisir un fichier</label>
                </div>
            </div>
        </div>

        <!-- valider la formulaire -->

        <div class="valider">

            <input type="submit" value="Envoyer" class="cls">
            <a href="#" onclick="resetForm()">effacer la formulaire</a>
        </div>

    </form>
    <footer>
        <p>&copy; 2024 EST SB. Tous droits réservés.</p>
    </footer>


    <script src="obligation.js"></script>
    <script src="fichier.js"></script>
     <script src="Taille.js"></script>




    <script>
        function submitForm() {
            // Vous pouvez ajouter ici le code pour soumettre les données du formulaire
            alert("Formulaire soumis !");

            // Réinitialiser le formulaire après la soumission
            resetForm();
        }

        function resetForm() {
            // Réinitialiser les champs du formulaire en vidant leurs valeurs
            document.getElementById("form").reset();
        }
    </script>

</body>

</html>