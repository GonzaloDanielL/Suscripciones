<div class="col-5 shadow card p-3 border-info bg-body" style="margin: 0 auto;">
      <div class="card-header">
        <h4><?php echo $txtasignar;?> Proveedor</h4> 
      </div>
      <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="submit" name="asignar" value="Asignar" class="btn btn-danger">Asignar</button>
            <button type="submit" name="asignar" value="Quitar" class="btn btn-warning">Quitar</button>
          </div>
          <div class="row">
            <div class="col">
              <div class = "form-group">
                <label for="id_proveedor">Proveedor:</label>
                <select for="id_proveedor" class="form-select" name="id_proveedor" id="id_proveedor">
                  <?php  foreach($listaproveedor as $listpvd) {?>
                  <option type="text" value="<?php echo $listpvd['id'];?>"><?php echo $listpvd['nombre'];?></option>
                  <?php }; ?>
                </select>
              </div>
              </br>
              <div aria-label="">
                <button type="submit" name="txtbuscarPVD" <?php echo ($txtasignar == "Asignar")?"disabled":""?> value="buscarsuspvd" class="btn btn-outline-info">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                  </svg>
                Buscar</button>
              </div>
              </br>
              <div class = "form-group">
                <label for="idsus">Suscripción:</label>
                <select for="idsus" class="form-select" name="idsus" id="idsus">
                  <?php  foreach($listasuscripcion as $listsus) {?>
                  <option type="text" value="<?php echo $listsus['id_suscrip'];?>"><?php echo $listsus['nombre'];?></option>
                  <?php }; ?>
                </select>
              </div>
              </br>
            </div>
          </div>
          <div aria-label="">
            <button type="submit" name="txtbuscarPVD" <?php echo ($txtasignar == "Quitar")?"disabled":""?> value="agregar" class="btn btn-outline-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
            </svg>
            Aplicar</button>

            <button type="submit" name="txtbuscarPVD" <?php echo ($txtasignar == "Asignar")?"disabled":""?> value="borrar" class="btn btn-outline-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
            </svg>
            Quitar</button>
          </div>
        </form>
      </div>
    </div>