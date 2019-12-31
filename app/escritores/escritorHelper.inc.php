<?php

class Helper{

  public static function escribirUsuarios($usuarios){
    if (count($usuarios)) {
      for ($i=0; $i <count($usuarios); $i++) {
        $usuario_actual = $usuarios[$i][0];
        ?>
        <tr>
          <th><?php echo $usuario_actual -> getIdUsuario();?></th>
          <th><?php echo $usuario_actual -> getNombreUsuario();?></th>
          <th><?php echo $usuario_actual -> getCorreoUsuario();?></th>
        </tr>
        <?php
      }
    }
  }

  public static function escriirCategorias($categorias){
if (count($categorias)) {
  for ($i=0; $i <count($categorias); $i++) {
      $id_categoria = $categorias[$i][0];
      $categoria = $categorias[$i][1];
      ?>
<tr>
  <th>
  <?php echo $id_categoria; ?>
  </th>
  <th>
    <label>
      <?php echo $categoria;?>
    </label>
  </th>
  <th>
    <form role="form" action="<?php echo RUTA_EDITAR_CAT; ?>" method="post">
<input type="hidden" name="id" value="<?php echo $id_categoria;?>" >
<input type="text" name="categoria" class="form-control"><br>
      <button type="submit" name="editar" class="btn btn-primary">Editar</button>
    </form>
  </th>
</tr>
      <?php
  }
}
  }

  public static function escribirCategorias($cat){
if (count($cat)) {
  for ($i=0; $i <count($cat); $i++) {
      $id_cat = $cat[$i][0];
      $cate = $cat[$i][1];
      ?>
<option value="<?php echo $id_cat;?>"><?php echo $cate;?></option>
      <?php
  }
}
  }
public static function ecribirAutos($autos){
  if(count($autos)){
    for($i=0; $i <count($autos); $i++){
      $auto_actual= $autos[$i][0];
      ?>
      <tr>
        <th><?php echo $auto_actual -> getIdAuto();?></th>
        <th><?php echo $auto_actual -> getAutoCategoria();?></th>
        <th><?php echo $auto_actual -> getMarca();?></th>
        <th><?php echo $auto_actual -> getModelo();?></th>
      </tr>
      <?php

    }

  }
}

public static function escribirCategoriasServicios($servicios){
if (count($servicios)) {
  for ($i=0; $i <count($servicios); $i++) {
    $id = $servicios[$i][0];
    $categoria_ser = $servicios[$i][1];
    ?>
    <tr>
      <th><?php echo $id;?></th>
      <th><?php echo $categoria_ser;?></th>
    </tr>
    <?php
  }
}
}

public static function escribirServicios($servi){
if (count($servi)) {
  for ($i=0; $i <count($servi); $i++) {
    $id = $servi[$i][0];
    $categori = $servi[$i][1];
    $nombre_servi = $servi[$i][2];
    ?>
<tr>
  <th><?php echo $id;?></th>
  <th><?php echo $categori;?></th>
  <th><?php echo $nombre_servi;?></th>
</tr>
    <?php
  }
}
}

public static function escribirCateOption($servicios){
if (count($servicios)) {
  for ($i=0; $i <count($servicios); $i++) {
    $id_ser = $servicios[$i][0];
    $nombre = $servicios[$i][1];
    ?>
    <option value="<?php echo $id_ser;?>"><?php echo $nombre;?></option>
    <?php
  }
}
}
}
 ?>
