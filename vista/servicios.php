<?php
include_once 'app/config.inc.php';
include_once 'views/apertura.inc.php';
include_once 'views/navegacion.inc.php';
include_once 'app/escritores/escritorHelper.inc.php';
include_once 'app/objetos/usuario.inc.php';
include_once 'app/repos/repoUsuario.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/redireccion.inc.php';
 ?>
<div class="jumbotron">
  <h1>Servicios ofrecidos</h1>
  <p>Ventas y administrativo</p>
</div>
<div class="row">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Servicios ofrecidos</h3>
  </div>
  <div class="panel-body">
<div class="row">
<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Categorias actuales</h3>
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
<?php Helper::escribirCategoriasServicios($servicios);?>
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
    <h3 class="panel-title">Insertar categorias</h3>
  </div>
  <div class="panel-body">
<form class="" action="<?php echo RUTA_CREAR_SER;?>" method="post">
<div class="form-group">
  <label>Categoria</label>
  <input type="text" name="categoria" class="form-control">
</div>
<div class="form-group">
  <button type="submit" name="enviar" class="form-control btn btn-primary">Insertar</button>
</div>
</form>
  </div>
  <div class="panel-footer">

  </div>
</div>
</div>
</div>
  </div>
  <div class="panel-footer">

  </div>
</div>
</div>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Gestion de servicios</h3>
    </div>
    <div class="panel-body">
<div class="row">
  <div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Servicios actuales</h3>
  </div>
  <div class="panel-body">
<table class="table table-responsive">
<thead>
  <tr>
    <th>Id</th>
    <th>Categoria</th>
    <th>Servicio</th>
  </tr>
</thead>
<tbody>
<?php Helper::escribirServicios($servi);?>
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
    <h3 class="panel-title">Ingresar servicio</h3>
  </div>
  <div class="panel-body">
<form role="form" action="<?php echo RUTA_CREAR_SERVICIO;?>" method="post">
<div class="form-group">
<label>Categoria</label>
<select class="form-control" name="categoria">
<?php Helper::escribirCateOption($servicios);?>
</select>
</div>
<div class="form-group">
<label>Servicio</label>
<input type="text" name="servicio"class="form-control">
</div>
<div class="form-group">
  <button type="submit" name="enviar" class="btn btn-primary">Registrar</button>
</div>
</form>
  </div>
  <div class="panel-footer">

  </div>
</div>
  </div>
</div>
    </div>
    <div class="panel-footer">

    </div>
  </div>
</div>
<div class="row">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Precios de servicios</h3>
  </div>
  <div class="panel-body">
<div class="row">
  <div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Precios actuales</h3>
  </div>
  <div class="panel-body">
<table class="table table-responsive">
<thead>
  <tr>
    <th>Id</th>
    <th>Servicio</th>
    <th>Categoria auto</th>
    <th>Precio</th>
  </tr>
</thead>
<tbody>
<?php  ?>
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
    <h3 class="panel-title">Agregar precios</h3>
  </div>
  <div class="panel-body">
<form role="form" action="index.html" method="post">
<div class="form-group">
<label>Precio Servicio</label>
<input type="number" name="precio" class="form-control">
</div>
<div class="form-group">
<label>Categoria de auto</label>
<select class="form-control" name="categoria_auto">
<?php  ?>
</select>
</div>
<div class="form-group">
  <label>Servicio</label>
  <select class="form-control" name="servicio">
<?php  ?>
  </select>
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
  <div class="panel-footer">

  </div>
</div>
</div>
 <?php
include_once 'views/cierre.inc.php';
  ?>
