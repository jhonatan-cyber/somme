const boton = document.getElementById("mod");
const modo_movil = document.querySelectorAll(".mobile-hide");
function ajustes() {
  if (boton) {
    if (window.innerWidth >= 900) {
      boton.style.display = "none";
    } else {
      boton.style.display = "block";
    }
  }
  for (let i = 0; i < modo_movil.length; i++) {
    if (window.innerWidth <= 780) {
      modo_movil[i].style.display = "none";
    } else {
      modo_movil[i].style.display = "block";
    }
  }
}
ajustes();
window.addEventListener("resize", () => {
  ajustes();
});
const LENGUAJE = {
  sProcessing: "Procesando...",
  sLengthMenu: "Listar _MENU_ registros",
  sZeroRecords: "No se encontraron resultados",
  sEmptyTable: "Ningún dato disponible en esta tabla",
  sInfo: "Listando _END_ de _TOTAL_",
  sInfoEmpty: "Listando 0 de 0 ",
  sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
  sInfoPostFix: "",
  sSearch: "Buscar:",
  sUrl: "",
  sInfoThousands: ",",
  sLoadingRecords: "Cargando...",
  oPaginate: {
    sNext: ">",
    sPrevious: "<",
  },
  oAria: {
    sSortAscending: ": Activar para ordenar la columna de manera ascendente",
    sSortDescending: ": Activar para ordenar la columna de manera descendente",
  },
};
const DISPLAY_LENGTH = 5;
function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}
function toast(mensaje, tipoMensaje) {
  toastr.options = {
    closeButton: false,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-top-center",
    preventDuplicates: true,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  };

  toastr[tipoMensaje](mensaje);
}
