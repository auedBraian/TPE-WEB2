'use stric';

document.addEventListener('DOMContentLoaded', loadComentarios);

let comentarios = [];
let container = document.getElementById("productos_tabla");
let prodID = document.getElementById("prodId").value;

async function loadComentarios() {
    try {
        let response = await fetch('api/comentarios/' + prodID);
        if (response.ok) {
            let t = await response.json();
            comentarios = t;
            mostrarComentarios();
        }
        else {
            container.innerHTML = "No hay comentarios para mostrar";
        }
    }
    catch (response) {
        container.innerHTML = "No hay comentarios para mostrar";
    };
}


//puede esperar un poquito 
function mostrarComentarios() {
    console.log(comentarios);
    for (let i = 0; i < comentarios.length; i++) {
        let tdComentario = document.createElement('td');
        tdComentario.innerText = comentarios[i].comentario;
        let tdValoracion = document.createElement('td');
        tdValoracion.innerText = comentarios[i].valoracion;
        let tdUsuario = document.createElement('td');
        tdUsuario.innerText = comentarios[i].id_usuario;
        let tr = document.createElement('tr');
        container.appendChild(tr);
        // creo el boton de eliminar comentario
        let btnEliminarComentario = document.createElement('input');
        //le digo al input que sea un boton asi no se me refresca la pagina al apretarlo
        btnEliminarComentario.setAttribute('type', "button")
        btnEliminarComentario.setAttribute('value', 'ELIMINAR')
        btnEliminarComentario.addEventListener('click', (e) => {
            eliminarComentario(comentarios[i].id_comentario);
        })
        console.log(comentarios[i].id_comentario);
        tr.appendChild(tdComentario);
        tr.appendChild(tdValoracion);
        tr.appendChild(tdUsuario);
        tr.appendChild(btnEliminarComentario);
    }
}

async function eliminarComentario(id) {
    try {
        let response = await fetch('api/comentarios/' + id, {  //cambiar el numero 7
            "method": "DELETE",
            "headers": {
                "Content-Type": "application/json"
            }
        })
        if (response.ok) {
            //vacio la tabla
            container.innerHTML = "";
            //vuelvo a cargar todos los comentarios que quedaron en la base
            loadComentarios();
        }
        else {
            container.innerHTML = "<h1>Error - Failed URL!</h1>";
            console.log("todo mal");
        }
    }
    catch (response) {
        container.innerHTML = "<h1>Connection error</h1>";
    };
}
//loadComentarios();