function guardarNombre() {
    const nombre = document.getElementById('nombre').value;
    axios.post('guardar_nombre.php', { "nombre": nombre })
        .then(response => {
            console.log(response);
            // let element = document.getElementById("array");
            // response.data.forEach(item => {
            //   element.innerHTML += item;
        })
        .catch(error => {
            console.error(error);
        });
}

    // function pintar_consola(){
    //     fetch('http://localhost/crear_nombre/imprimir_nombre.php')
    //     .then(response => response.json())
    //     .then(array => {
    //       })
    //     })};
    // pintar_consola();






















