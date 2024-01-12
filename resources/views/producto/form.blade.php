<h3>{{$modo}} Producto</h3>
	<div class="form-group">
    	<label for="name">Nombre</label>
    	<input type="text" class="form-control" name="name" value="{{ isset($producto->name)?$producto->name:'' }}" id="name" placeholder="Nombre del producto">
  	</div>
  	<div class="form-group">
    	<label for="description">Descripcion</label>
    	<input type="text" class="form-control" name="description"  value="{{ isset($producto->description)?$producto->description:'' }}" id="description"  placeholder="Descripcion del producto">
  	</div>
	<div class="form-group">
    	<label for="unit">Unidad Medida</label>
    	<input type="text" class="form-control" name="unit"  value="{{ isset($producto->unit)?$producto->unit:'' }}" id ="unit" placeholder="Unidad de medida del producto">
  	</div>
	<div class="form-group">
    	<label for="stock">Existencia</label>
    	<input type="text" class="form-control" name="stock"  value="{{ isset($producto->stock)?$producto->stock:'' }}" id="stock" placeholder="Existencia del producto">
  	</div>
	<div class="form-group">
    	<label for="price">Precio</label>
    	<input type="text" class="form-control" name="price"  value="{{ isset($producto->price)?$producto->price:'' }}" id="price" placeholder="Precio del producto">
  	</div>
	<br>
  	<input type="submit" value = "{{$modo}} datos "  class= "btn btn-success">


	  <a href=" {{ url('producto')}}" class= "btn btn-warning"  > Regresar</a> 

