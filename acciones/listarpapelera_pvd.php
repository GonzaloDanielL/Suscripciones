<?php 
$sentenciaSQL = $conexion->prepare("SELECT * FROM exproveedor where id_usuario = :iduser");
$sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
$sentenciaSQL->execute();
$listpapelerapvd=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>
<h3 class="lead">Borrados recientemente:
  <button title="Actualizar" onclick="recargar_tabla_pvd()" class="btn btn-outline-info">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
    </svg>
  </button>
</h3>
</p>
<table class="table table-borderless">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Teléfono</th>
          <th>Correo</th>
          <th>Servicios</th>
          <th>Sitio Web</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($listpapelerapvd as $listpvd) {
              $varid = $listpvd['id'];
              $var0 = $listpvd['nombre'];
              $var1 = $listpvd['telefono']; 
              $var2 = $listpvd['correo'];
              $var3 = $listpvd['servicios']; 
              $var4 = $listpvd['sitioweb']; 
          ?>
        <tr>
          <td><?php echo $listpvd['nombre'];?></td>
          <td><?php echo $listpvd['telefono'];?></td>
          <td><?php echo $listpvd['correo'];?></td>
          <td><?php echo $listpvd['servicios'];?></td>
          <td><?php echo $listpvd['sitioweb'];?></td>
          <td>
          <button onclick="recuperar_pvd(<?php echo $varid;?>,'<?php echo $var0;?>','<?php echo $var1;?>','<?php echo $var2;?>','<?php echo $var3;?>','<?php echo $var4;?>')" class="btn btn-info btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
              <path d="M8.5 1.75v2.716l.047-.002c.312-.012.742-.016 1.051.046.28.056.543.18.738.288.273.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716.075.09.141.175.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0z"/>
            </svg>
            Recupera</button>

            <button onclick="borrar_pvd(<?php echo $varid;?>,0)" class="btn btn-danger btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
            Borrar</button>
          </td>
        </tr>
        <?php }; ?>
      </tbody>
    </table>