let tbRol;
document.addEventListener("DOMContentLoaded", () => {
  getRoles();
});

function MRol(e) {
  e.preventDefault();
  const nombre = document.getElementById("nombre_rol");
  $("#titulo_rol").text("Nuevo Rol");
  nombre.value = "";
  $("#ModalRol").modal("show");
  $("#ModalRol").on("shown.bs.modal", () => {
    nombre.focus();
  });
}

async function getRoles() {
  const url = `${BASE_URL}getRoles`;
  try {
    const response = await fetch(url);
    const data = await response.json();
    if (data.estado == "ok" && data.codigo == 200) {
      if ($.fn.DataTable.isDataTable("#tbRol")) {
        tbRol = new DataTable("#tbRol").clear().destroy();
      }
      tbRol = new DataTable("#tbRol", {
        data: data.data,
        language: LENGUAJE,
        destroy: true,
        responsive: true,
        info: true,
        lengthMenu: [DISPLAY_LENGTH, 10, 25, 50],
        autoWidth: true,
        paging: true,
        searching: true,
        columns: [
          {
            data: null,
            render: (data, type, row, meta) =>
              ` <span class="badge badge-sm badge bg-gradient-primary" >${formatNumber(
                meta.row + 1
              )}</span>`,
          },
          { data: "nombre" },
          {
            data: null,
            render: (data, type, row) =>
              `<button class="btn btn-icon btn-2 btn-sm btn-info" type="button" data-id="${row.id_rol} onclick="getRol(\'${row.id_rol}\')">
	            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                </button>
                <button class="btn btn-icon btn-2 btn-sm btn-danger" type="button" data-id="${row.id_rol} onclick="deleteRol(\'${row.id_rol}\')">
	            <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                </button>`,
          },
        ],
      });
    }
  } catch (error) {
    console.error("Error:", error);
    return toast("No se encontraron datos", "info");
  }
}
