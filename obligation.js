

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('form');
    const inputs = form.querySelectorAll('input');

    inputs.forEach(input => {
        input.addEventListener('blur', function () {
            checkInput(input);
        });
    });
});

function checkInput(input) {
    const container = input.closest('.container');
    const error = container.querySelector('.error');

    if (!input.value) {
        container.style.borderColor = "red";
        input.style.borderColor = "red";

        if (!error) {
            const newError = document.createElement('div');
            newError.textContent = "Champ obligatoire *";
            newError.style.color = "red";
            newError.className = "error";
            container.appendChild(newError);
        }
    } else {
        container.style.borderColor = "";
        input.style.borderColor = "";

        if (error) {
            container.removeChild(error);
        }
    }
}




