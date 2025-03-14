function updateLabel(inputId, labelId, iconId) {
    var input = document.getElementById(inputId);
    var label = document.getElementById(labelId);
    var icon = document.getElementById(iconId);

    if (input.files.length > 0) {
        label.textContent = input.files[0].name;
        icon.src = getFileIcon(input.files[0].type);
    } else {
        label.textContent = 'Choisir un fichier';
        icon.src = '';
    }
}

