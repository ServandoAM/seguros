<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addcontact" role="form">
  
<div class="row">
	<div class="col-md-12">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombres*</label>
    <div class="col-md-6">
      <input type="text" name="name" required  class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Paterno*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" required class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Materno*</label>
    <div class="col-md-6">
      <input type="text" name="motherlastname" required class="form-control" id="motherlastname" placeholder="Apellido Materno">
    </div>
    <br>
    <br>
    <div class="input-group">
    <span class="input-group-addon">Telefonos</span>
    <input type="text" name="movil" required class="col-lg-3 control-label" id="movil" placeholder="Movil">
    <input type="text" name="trabajo" class="col-lg-3 control-label" id="trabajo" placeholder="Trabajo">
    <input type="text" name="casa" class="col-lg-3 control-label" id="casa" placeholder="Casa">
    <input type="text" name="otros" class="col-lg-3 control-label" id="otros" placeholder="Otros">
    </div>
    <br>
    <br>
    <div class="input-group">
    <span class="input-group-addon">Correo Electrónico</span>
    <input type="text" name="personal" required class="col-lg-3 control-label" id="personal" placeholder="Personal">
    <input type="text" class="col-lg-3 control-label" placeholder="Trabajo">
    <input type="text" class="col-lg-3 control-label" placeholder="Adicional 1">
    <input type="text" class="col-lg-3 control-label" placeholder="Adicional 2">
    </div>
    <br>
    <br>
  <div class="form-group">
  <label for="inputEmail1" class="col-lg-2 control-label">Compañía/Empresa</label>
    <div class="col-md-6">
      <input type="text" name="empresa" class="form-control" id="empresa" placeholder="Escribe el nombre de la compañia">
      </div>
  </div>

  <div class="form-group">
  <label for="inputEmail1" class="col-lg-2 control-label">Referencias</label>
    <div class="col-md-8">
    <textarea required class="form-control" rows="5" name="referencias" placeholder="Escribe las referencias"></textarea>
      </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Observaciones</label>
    <div class="col-lg-10">
    <textarea class="form-control" rows="5" name="observaciones" placeholder="Escribe las observaciones"></textarea>
    </div>
  </div>

  <script type="text/javascript">
           var discounted = document.getElementById('isDiscounted');
var no_discounted = document.getElementById('isNotDiscounted')
var discount_percentage = document.getElementById('discountPercentage')

function updateStatus() {
  if (discounted.checked) {
    discount_percentage.disabled = true;
  } else {
    discount_percentage.disabled = false;
  }
}

discounted.addEventListener('change', updateStatus)
no_discounted.addEventListener('change', updateStatus)
   </script>
  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Cliente</button>
    </div>
  </div>
</form>
	</div>
</div>