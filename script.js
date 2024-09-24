document.addEventListener("DOMContentLoaded", function() {
    const colorInput = document.getElementById('bgColor');
    const imageInput = document.getElementById('bgImage');
    const saveButton = document.getElementById('saveSettings');

    saveButton.addEventListener('click', function() {
        const color = colorInput.value;

        // Guardar el color en local storage
        localStorage.setItem('backgroundColor', color);
        document.body.style.backgroundColor = color;

        // Cargar y guardar la imagen
        if (imageInput.files.length > 0) {
            const reader = new FileReader();
            reader.onload = function(e) {
                localStorage.setItem('backgroundImage', e.target.result);
                document.body.style.backgroundImage = `url(${e.target.result})`;
            };
            reader.readAsDataURL(imageInput.files[0]);
        }
    });

    // Cargar cambios al inicio
    const savedColor = localStorage.getItem('backgroundColor');
    const savedImage = localStorage.getItem('backgroundImage');

    if (savedColor) {
        document.body.style.backgroundColor = savedColor;
        colorInput.value = savedColor;  // Opcional
    }
    if (savedImage) {
        document.body.style.backgroundImage = `url(${savedImage})`; // Opcional
    }
});
