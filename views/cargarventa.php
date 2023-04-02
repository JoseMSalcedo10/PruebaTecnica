<section>
<div class="d-grid gap-2 col-6 mx-auto" >
  <div class="p-3 mb-2 bg-white text-dark">
    <div class="container" style="margin-bottom: 3%;">
      <div class="position-relative text-center">
        <h3 class="modal-title">Prestamo Ejemplar</h3>
      </div>
    </div>
    <div class="container">
      <div class="position-relative text-center">
        <form class="row g-4" action="javascript:void(0);" method="post">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 form-group">
              <label for="nombre">Nombre</label>
              <input type="text"  class="form-control" id="nombre" required>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 form-group">
              <label for="apellido">Apellido</label>
              <input type="text"  class="form-control" id="apellido" required>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 form-group">
              <label for="documento">No. Documento</label>
              <input type="text"  class="form-control" id="documento" required>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 form-group">
              <label for="venta">valor ventas</label>
              <input type="text"  class="form-control" id="venta" required>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 form-group">
              <label for="cargo">Cargo</label>
              <select class="form-control" id="id_cargo" required>
                
              </select>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 form-group">
              <label for="fecha">fecha de venta</label>
              <input type="date"  class="form-control" id="fecha" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md">

            </div>
              <button class="btn" id="guardarVenta">Guardar Venta</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>