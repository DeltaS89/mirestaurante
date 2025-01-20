cargarTablaUsers();
function cargarTablaUsers() {
  $.ajax({
    type: "get",
    url: `http://localhost/mirestaurante/apirestaurante/src/public/getusuario`,
    dataType: "JSON",
    beforeSend: function () {
    },
    success: function (res) {

      let filas = "";
      res.forEach(p => {
        filas += `
                <tr>
                    <td scope="col">${p.id}</td>
                    <td scope="col">${p.nombre}</td>
                    <td scope="col">${p.usuario}</td>
                    <td scope="col">${p.contrasena}</td>
                    <td scope="col">${p.gmail}</td>
                    <td scope="col">${p.telefono}</td>
                    <td scope="col">${p.rol}</td>
                    <td scope="col" class="btn-users d-flex align-items-center">
                      <button class="me-3 btn btn-outline-secondary"><i class="fa-regular fa-pen-to-square"></i></button>
                      <button class="btn btn-outline-secondary"><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>
                `
      });
      document.querySelector("#datosTablaUsuarios").innerHTML = filas
    },
    error: function (xhr) {
      alert("Error al procesar la petición");
      console.log(xhr.statusText + xhr.responseText);
    },
    complete: function () {
    }
  });

}

//crear eventos a nodos dinamicos
//definir un eventlister al padre de los nodos dinamicos
document.querySelector("#datosTablaUsuarios").addEventListener("click", (e) => {
  //discriminar los nodos a aplicar el evento
  if (e.target.classList.contains("btn-outline-secondary") ||
    e.target.classList.contains("fa-pen-to-square")) {
    {
      //generar variables de sesion
      sessionStorage.setItem("id", e.target.closest("tr").childNodes[1].innerHTML)
      sessionStorage.setItem("nombre", e.target.closest("tr").childNodes[3].innerHTML)
      sessionStorage.setItem("usuario", e.target.closest("tr").childNodes[5].innerHTML)
      sessionStorage.setItem("contrasena", e.target.closest("tr").childNodes[7].innerHTML)
      sessionStorage.setItem("gmail", e.target.closest("tr").childNodes[9].innerHTML)
      sessionStorage.setItem("telefono", e.target.closest("tr").childNodes[11].innerHTML)
      sessionStorage.setItem("rol", e.target.closest("tr").childNodes[13].innerHTML)

      location.href = "index.php?page=nuevoUsuario";
    }
  } else if (e.target.classList.contains("btn-outline-secondary") ||
    e.target.classList.contains("fa-trash-can")) {
    eliminar(e.target.closest("tr").childNodes[1].innerHTML)
    e.target.closest("tr").parent(e.target.closest("tr"));
  }
})

function modificar(id) {

}


function eliminar(id) {
  Swal.fire({
    title: "¿Está seguro que desea eliminar este Registro?",
    text: "Los datos no se podrán recuperar",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Sí, Borrar"
  }).then((result) => {
    if (result.isConfirmed) {
      procesarBorrado(id);
    }
  });
}

function procesarBorrado(id) {
  $.ajax({
    type: "DELETE",
    url: `http://localhost/mirestaurante/apirestaurante/src/public/deleteusuario/${id}`,
    beforeSend: function () {
    },
    success: function (res) {
      console.log(res);
      Swal.fire({
        title: "¡Mensaje!",
        text: "Datos Borrados correctamente",
        icon: "success"
      });
    },
    error: function (xhr) {
      console.log("Error al procesar la petición");
      console.log(xhr.statusText + xhr.responseText);
      Swal.fire({
        title: "¡Mensaje!",
        text: "Error al procesar la petición",
        icon: "error"
      });
    },
    complete: function () {

    }
  });
}