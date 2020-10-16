<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addcontact" role="form">
  
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
  <!--Agregamos los campos que faltan de la propuesta-->
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Materno*</label>
    <div class="col-md-6">
      <input type="text" name="motherlastname" required class="form-control" id="motherlastname" placeholder="Apellido Materno">
    </div>
    <br>
    <br>

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