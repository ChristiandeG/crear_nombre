function guardarNombre() {
    const nombre = document.getElementById('nombre').value;
    axios.post('guardar_nombre.php', { "nombre": nombre })
    .then(response => {
    console.log(response.data);
    })
    .catch(error => {
    console.error(error);
    });
    }
    
    
    function imprimir_nombre(){
    let nombre = document.getElementById("nombre").value;
    let text = document.createElement("p");
    text.innerHTML = nombre;
    document.body.appendChild(text);
    }
    
    document.getElementsByTagName("button")[0].addEventListener("click", imprimir_nombre);
    
    