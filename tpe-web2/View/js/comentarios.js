
let comentarios = [];
let container = document.getElementById("productos_tabla");
//toma un valor del front
let prodId= document.getElementById("productoId").value; 

//le pide a la api que le traiga los comentarios para el producto con el id que tomo anteriormnete
async function loadComentarios() {
    try {     
        let response = await fetch('api/comentarios/'+prodId); 
        if (response.ok) { //si la api responde correctamente, muestra los comentarios en pantalla
            let t = await response.json();
            comentarios=t; 
            mostrarComentarios();                     
        }
        else {//si no hay comentarios, imprime un mensaje de que no hay comentarios para mostrar
            container.innerHTML = "Aun no hay comentarios para mostrar";
        }
    }
    catch (response) {
        container.innerHTML = "Aun no hay comentarios para mostrar";
    };
}
 //toma los comentarios que vienen del back a traves de la api y los muestra en el front
function mostrarComentarios() {
    container.innerHTML="";
    for(let i = 0; i < comentarios.length; i++){
        let tdComentario = document.createElement('td');
        tdComentario.innerText = comentarios[i].comentario;
        let tdValoracion = document.createElement('td');
        tdValoracion.innerText = comentarios[i].valoracion;
        let tdUsuario = document.createElement('td');
        tdUsuario.innerText = comentarios[i].email;
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
     //Evita recargar la pagina
    event.preventDefault();
  
    //Toma los datos del front
    let comentario = document.getElementById('comentario').value;
    let valoracion = document.getElementById('valoracion').value;
    let productoId= document.getElementById("productoId").value;
    //Genera un Json con los datos del front
    let body = {
        "comentario": comentario,
        "valoracion": valoracion,
        "id_producto":productoId
    }
    //Envia el Json con el metodo POST a la API
    let response = await fetch('api/comentarios', {
        "method": "POST",
        "headers": { "Content-Type": "application/json" },
        "body": JSON.stringify(body)
    }) //Si la API responde correctamente, vuelve a mostrar los comentarios
    if (response.ok) {
       loadComentarios();                     
    } else {//Si  la API no responde, da un msj por consola.
        console.log("Fallo el Post");
    }
}

loadComentarios();
