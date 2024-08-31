document.getElementById('contact-form').addEventListener('submit', function(event) {
    const fileInput = document.getElementById('btn-file');
    const fileError = document.getElementById('file-error');
    const file = fileInput.files[0];
  
    if (file) {
      // Validar tipo de archivo
      const validTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
      if (!validTypes.includes(file.type)) {
        fileError.textContent = 'Formato de archivo no válido. Por favor, adjunta un archivo en formato PDF, DOC o DOCX.';
        fileError.style.display = 'block';
        event.preventDefault();
        return;
      }
  
      // Validar tamaño del archivo (5 MB)
      const maxSize = 5 * 1024 * 1024;
      if (file.size > maxSize) {
        fileError.textContent = 'El archivo es demasiado grande. Por favor, adjunta un archivo con un tamaño máximo de 5 MB.';
        fileError.style.display = 'block';
        event.preventDefault();
        return;
      }
    } else {
      // Mostrar error si el archivo no está adjunto
      fileError.textContent = 'Adjuntar CV es obligatorio.';
      fileError.style.display = 'block';
      event.preventDefault();
    }
  });
  