// Capturamos el input y la tabla
const filterInput = document.getElementById('filter');
const table = document.getElementById('vacanciesTable');
const rows = table.getElementsByTagName('tr');
const noMatchesRow = document.getElementById('noMatches'); // Mensaje de no coincidencias

// Evento para filtrar
filterInput.addEventListener('keyup', () => {
    const filterValue = filterInput.value.toLowerCase();
    let rowMatchFound = false; // Variable para verificar si encontramos una fila

    // Iterar por las filas (excluyendo la cabecera y el mensaje de error)
    const trRows = table.querySelectorAll('tbody tr:not(#noMatches)');
    let rowsVisible = 0;

    for (let i = 0; i < trRows.length; i++) {
        const cells = trRows[i].getElementsByTagName('td');
        let rowMatch = false;

        // Buscar el valor en las celdas
        for (let cell of cells) {
            if (cell.textContent.toLowerCase().includes(filterValue)) {
                rowMatch = true;
                break;
            }
        }

        // Mostrar/ocultar la fila según el resultado
        if (rowMatch) {
            trRows[i].style.display = '';
            rowsVisible++;
        } else {
            trRows[i].style.display = 'none';
        }
    }

    // Mostrar mensaje de "No hay coincidencias" si no se encontraron filas
    if (rowsVisible === 0) {
        noMatchesRow.style.display = ''; // Mostrar el mensaje
    } else {
        noMatchesRow.style.display = 'none'; // Ocultar el mensaje
    }
});
