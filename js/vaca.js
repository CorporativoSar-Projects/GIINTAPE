document.getElementById('contact-form').addEventListener('submit', function(event) {
    var respuesta = grecaptcha.getResponse();
    if (respuesta.length === 0) {
        alert("Por favor, completa el captcha.");
        event.preventDefault(); // Evita que el formulario se envíe
    }
});