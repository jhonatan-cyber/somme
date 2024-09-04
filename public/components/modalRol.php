<div class="modal fade" id="ModalRol" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h5 class="font-weight-bolder text-primary text-gradient" id="titulo_rol"></h5>
          </div>
          <div class="card-body pb-3">
            <form id="form_rol">
              <input type="hidden" class="form-control" id="id_rol" name="id_rol">
              <div class="input-group input-group-dynamic mb-4">
                <label class="form-label">Nombre</label>
                <input id="nombre_rol" type="text" class="form-control">
              </div>
              <hr class="dark horizontal my-0">
              <div class="text-center mt-2">
                <button type="button" class="btn btn-success btn-icon btn-sm m-2">
                  <span class="btn-inner--icon"><i class="fa-solid fa-floppy-disk"></i></span>
                  <span class="btn-inner--text">Guardar</span>
                </button>
                <button type="button" class="btn btn-danger btn-icon btn-sm m-2" data-bs-dismiss="modal">
                  <span class="btn-inner--icon"><i class="fa-solid fa-circle-xmark"></i></span>
                  <span class="btn-inner--text">Cancelar</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>