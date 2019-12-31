
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" name="colapsar">
    <span class="sr-only">
      Este boton despliega la barra de navegacion
    </span>
  <i class="fa fa-navicon" aria-hidden="true"></i>
    </button>
    <a href="<?php  echo SERVIDOR ?>" class="navbar-brand">Autolavado</a>
  </div>

  <div id="navbar" class="navbar-collapse collapse">
     <ul class="nav navbar-nav navbar-right">
       <?php
       if (ControlSesion::sesionIniciada()) {
         ?>
         <li><a href="<?php echo RUTA_VENTAS;?>"><i class="fa fa-child" aria-hidden="true"></i> <?php echo $_SESSION['nombre_usuario']; ?></a></li>
         <li><a href="<?php echo RUTA_VENTAS;?>"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> Ventas</a></li>
         <li><a href="<?php echo RUTA_SERVICIOS; ?>"><i class="fa fa-suitcase" aria-hidden="true"></i> Servicios</a></li>
         <li><a href="<?php echo RUTA_CATEGORIAS; ?>"><i class="fa fa-bookmark" aria-hidden="true"></i> Categorias</a></li>
         <li><a href="<?php echo RUTA_USUARIOS; ?>"><i class="fa fa-bookmark" aria-hidden="true"></i> Usuarios</a></li>
         <li><a href="<?php echo RUTA_LOGON; ?>"><i class="fa fa-graduation-cap " aria-hidden="true"></i> Log out</a></li>
         <?php
       }else {
         ?>
         <li><a href="<?php echo RUTA_LOGIN;?>"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> Login</a></li>
         <?php
       } ?>
     </ul>
   </div>


 </div>



 </nav>
