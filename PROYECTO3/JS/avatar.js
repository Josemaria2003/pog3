function crearAvatar() {
    const colorCabello = document.querySelector('input[name="colorCabello"]:checked').value;
    const tonoPiel = document.querySelector('input[name="tonoPiel"]:checked').value;
    const estiloCabello = document.querySelector('input[name="estiloCabello"]:checked').value;
    const lentes = document.querySelector('input[name="lentes"]:checked').value;
    const animo = document.querySelector('input[name="animo"]:checked').value;

    const imagen = `${tonoPiel}_${colorCabello}_${estiloCabello}_${lentes}_${animo}.JPG`;
    document.getElementById('avatarImagen').src = `../../img/${imagen}`;
    document.getElementById('imagenAvatar').value = imagen;
    document.getElementById('tonoPiel').value = tonoPiel;
    document.getElementById('colorCabello').value = colorCabello;
    document.getElementById('estiloCabello').value = estiloCabello;
    document.getElementById('lentes').value = lentes;
    document.getElementById('animo').value = animo;
    document.getElementById('avatarResult').classList.remove('d-none');
}

function guardarAvatar() {
    alert('Avatar guardado exitosamente.');
}

function resetForm() {
    document.getElementById('avatarForm').reset();
    document.getElementById('avatarResult').classList.add('d-none');
}
