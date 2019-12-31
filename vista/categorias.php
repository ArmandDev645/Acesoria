<?php
include_once 'app/config.inc.php';
include_once 'views/apertura.inc.php';
include_once 'views/navegacion.inc.php';
include_once 'app/escritores/escritorHelper.inc.php';
include_once 'app/objetos/usuario.inc.php';
include_once 'app/repos/repoUsuario.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'app/escritores/escritorHelper.inc.php';
 ?>
<div class="jumbotron">
  <h1>Gestion de Categorias</h1>
  <p>Administrativo</p>
</div>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Automoviles</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Editar categorias</h3>
  </div>
  <div class="panel-body">
<table class="table table-responsive">
<thead>
  <tr>
    <th>Id</th>
    <th>Categoria</th>
  </tr>
</thead>
<tbody>
<?php Helper::escriirCategorias($categoria)?>
</tbody>
</table>
  </div>
  <div class="panel-footer">
<p>En esta seccion se editan las categorias de los autos</p>
  </div>
</div>
        </div>
        <div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Crear categorias</h3>
  </div>
  <div class="panel-body">
<form role="form" action="<?php echo RUTA_CREAR_CAT;?>" method="post">
<div class="form-group">
  <label>Categoria</label>
  <input type="text" name="categoria" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="registrar" class="btn btn-primary">Registrar</button>
</div>
</form>
  </div>
  <div class="panel-footer">

  </div>
</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Modelos</h3>
  </div>
  <div class="panel-body">
<div class="row">
  <div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Modelos de autos</h3>
  </div>
  <div class="panel-body">
<table class="table table-responsive">
<thead>
  <tr>
    <th>Id</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Categoria</th>
  </tr>
</thead>
<tbody>
<?php Helper::ecribirAutos($autos);?>
</tbody>
</table>
  </div>
  <div class="panel-footer">

  </div>
</div>
  </div>
  <div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Ingresar modelos</h3>
  </div>
  <div class="panel-body">
<form role="form" action="<?php echo RUTA_CREAR_AUTO;?>" method="post">
<div class="form-group">
  <label>Categoria de automovil</label>
  <select name="categoria" class="form-control">
  <?php  Helper::escribirCategorias($categoria);?>
  </select>
</div>
<div class="form-group">
<label>Marca auto</label>
<input type="text" name="marca" class="form-control">
</div>
<div class="form-group">
<label>Modelo auto</label>
<input type="text" name="modelo" class="form-control">
</div>
<div class="form-group">
  <button type="submit" name="registrar" class="btn btn-primary">Registrar</button>
</div>
</form>
  </div>
  <div class="panel-footer">
<p>En esta seccion ingresas a la base los autos </p>
  </div>
</div>
  </div>
</div>
  </div>
</div>
</div>
 <?php
include_once 'views/cierre.inc.php';
  ?>
