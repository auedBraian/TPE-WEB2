let comentarios = [];
let container = document.getElementById("productos_tabla");
let prodId= document.getElementById("productoId").value; 

async function loadComentarios() {
    try {     
                             
        let response = await fetch('api/comentarios/'+prodId); //cambiar el numero 7
       
        if (response.ok) {
            let t = await response.json();
            comentarios=t; 
            mostrarComentarios();                     
        }
        else {
            container.innerHTML = "Aun no hay comentarios para mostrar";
           
        }
    }
    catch (response) {
        container.innerHTML = "Aun no hay comentarios para mostrar";
    };
}


 
function mostrarComentarios() {
    container.innerHTML="";
    for (let i = 0; i < comentarios.length; i++) {
        let tdComentario = document.createElement('td');
        tdComentario.innerText = comentarios[i].comentario;
        let tdValoracion = document.createElement('td');
        tdValoracion.innerText = comentarios[i].valoracion;
        let tdUsuario = document.createElement('td');
        tdUsuario.innerText = comentarios[i].id_usuario;
        let tr = document.createElement('tr');
        container.appendChild(tr);
        tr.appendChild(tdComentario);
        tr.appendChild(tdValoracion);
        tr.appendChild(tdUsuario);  
    }
}

let btninsertarComentario = document.getElementById("btnInsertarComentario");
btninsertarComentario.addEventListener("click", insertarComentario);


async function insertarComentario() {
    event.preventDefault();
    let comentario = document.getElementById('comentario').value;
    let valoracion = document.getElementById('valoracion').value;
    let productoId= document.getElementById("productoId").value;

    let body = {
        "comentario": comentario,
        "valoracion": valoracion,
        "id_producto":productoId
    }
    let response = await fetch('api/comentarios', {
        "method": "POST",
        "headers": { "Content-Type": "application/json" },
        "body": JSON.stringify(body)
    })
    if (response.ok) {
       loadComentarios();                     
    } else {
        console.log("Fallo el Post");
    }
}

loadComentarios();
