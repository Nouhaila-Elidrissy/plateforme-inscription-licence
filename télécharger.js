window.onload = function () {
    document.getElementById("telecharger").addEventListener("click", () => {
        const invoice = document.getElementById("invoice");
        var opt = {
            margin: 1,
            filename: 'Fiche d\'inscription.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
        };
        html2pdf().from(invoice).set(opt).save();
    })
};
