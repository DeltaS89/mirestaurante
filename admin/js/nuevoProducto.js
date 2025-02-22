if (sessionStorage.getItem("id") != null) {
  var id = parseInt(sessionStorage.getItem("id"));
  document.querySelector("#id").value = sessionStorage.getItem("id");
  document.querySelector("#nombre").value = sessionStorage.getItem("nombre");
  document.querySelector("#tipo").value = sessionStorage.getItem("tipo");
  document.querySelector("#costo").value = sessionStorage.getItem("costo");
  document.querySelector("#duracion").value = sessionStorage.getItem("duracion");
  // document.querySelector("#imagen").value = sessionStorage.getItem("imagen");

  sessionStorage.clear();
} else {
  id = -1;
}


document.querySelector("#guardar").onclick = () => {
  //alert("clic")
  //añadir parametros
  const datos = $("#frmProductos").serialize()
  const accion=(id==-1) ? "insplatillo" :"updplatillo"
  const peticion=(id==-1) ? "post" :"put"
  peticionGuardar(accion,peticion,datos)
}

function peticionGuardar(accion,peticion,datos) {
  //perticion ajax
 let url= `http://localhost/mirestaurante/apirestaurante/src/public/${accion}?${datos}`;
  console.log(url)
  $.ajax({
    type: peticion,
    url: url,
    dataType: "JSON",
    beforeSend: function () {
      //document.querySelector(".cargando").style.visibility="visible";

    },
    success: function (res) {
      //instrucciones success
      //console.log(res)
      Swal.fire({
        title: "Mensaje",
        text: "¡Datos Guardados Correctamente!",
        icon: "success"
      });
    },
    error: function (xhr) {
      alert("Error al procesar la petición");
      console.log(xhr.statusText + xhr.responseText);
    },
    complete: function () {
      //document.querySelector(".cargando").style.visibility="hidden";
    }
  });
}
