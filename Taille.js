
// condition pour le code  massar

document.addEventListener("DOMContentLoaded", function () {
    // Ajoutez une fonction de validation au formulaire lorsqu'il est prêt
    document.getElementById("form").addEventListener("submit", function (event) {
        // Récupérer la valeur du champ code_massar
        var codeMassar = document.getElementById("CNE").value;

        // Utiliser une expression régulière pour vérifier le format
        var regex = /^[A-Za-z]\d{9}$/;

        // Vérifier si le format est correct
        if (!regex.test(codeMassar)) {
            // Afficher un message d'erreur
            alert("Le code massar doit commencer par une lettre et contenir exactement 9 chiffres.");

            // Empêcher la soumission du formulaire
            event.preventDefault();
        }
    });
});

// condition pour le cni

document.addEventListener("DOMContentLoaded", function () {
    // Ajoutez une fonction de validation au formulaire lorsqu'il est prêt
    document.getElementById("form").addEventListener("submit", function (event) {
        // Récupérer la valeur du champ CNI
        var cniValue = document.getElementById("cni").value;

        // Utiliser une expression régulière pour vérifier le format
        var regex = /^[A-Za-z]{2}\d{6}$/;

        // Vérifier si le format est correct
        if (!regex.test(cniValue)) {
            // Afficher un message d'erreur
            alert("Le CNI doit commencer par deux lettres et contenir exactement 6 chiffres.");

            // Empêcher la soumission du formulaire
            event.preventDefault();
        }
    });
});
