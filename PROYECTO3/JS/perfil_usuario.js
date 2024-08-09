document.addEventListener("DOMContentLoaded", function() {
    cargarAvatares();
});

function cargarAvatares() {
    const usuarioId = 1; // Aquí deberías usar el ID del usuario actualmente autenticado

    fetch(`../../Controladores/obtener_avatares.php?usuarioId=${usuarioId}`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const avatares = data.avatares;
                const avataresCreados = document.getElementById('avataresCreados');
                avatares.forEach(avatar => {
                    const col = document.createElement('div');
                    col.className = 'col-md-4';

                    const card = document.createElement('div');
                    card.className = 'card';

                    const img = document.createElement('img');
                    img.src = avatar.imagen;
                    img.className = 'card-img-top';
                    img.alt = avatar.titulo;

                    const cardBody = document.createElement('div');
                    cardBody.className = 'card-body';

                    const cardTitle = document.createElement('h5');
                    cardTitle.className = 'card-title';
                    cardTitle.textContent = avatar.titulo;

                    const cardText = document.createElement('p');
                    cardText.className = 'card-text';
                    cardText.textContent = avatar.comentario;

                    cardBody.appendChild(cardTitle);
                    cardBody.appendChild(cardText);
                    card.appendChild(img);
                    card.appendChild(cardBody);
                    col.appendChild(card);
                    avataresCreados.appendChild(col);
                });
            } else {
                console.error('Error al obtener los avatares');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
