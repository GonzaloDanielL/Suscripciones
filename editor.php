<?php include('template/cabecera.php'); ?>
<h1 class="display-3 fw-bolder">Administracion
<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</h1>

<h6 class="text-info fst-italic" style="--bs-text-opacity: .7;">por favor introducir datos correctamente para evitar calculos erroneos</h6>
<hr class="my-2">
<h3 class="lead">Agregar, editar o borrar Suscripcion:</h3>
</p>


<div class="col-md-10 shadow card p-3 border-info bg-body" style="margin: 0 auto;">
  <div class="card-header">
    <h4> Tablero de Edicion - Suscripciones </h4> 
  </div>
  <div class="card-body">
      <div class="row">
        <div class="col">

          <div class = "form-group">
            <label for="idsus">ID:</label>
            <input type="number" required readonly class="form-control" value="" id="idsus" placeholder="id">
          </div>
          <br/>

          <div class = "form-group">
            <label for="nombresus">Nombre:</label>
            <input type="text" required class="form-control" value="" id="nombresus" placeholder="nombre" autocomplete="off">
          </div>
          <br/>

          <div class = "form-group">
            <label for="pagosus">pago:</label>
            <input type="number" required class="form-control" value="" id="pagosus" placeholder="Monto de pago" autocomplete="off">
          </div>
          <br/>

          <div class = "form-group">
            <label for="ciclosus">ciclo:</label>
            <select for="ciclosus" class="form-select" id="ciclosus">
              <option type="number" value="365">Diario</option>
              <option type="number" value="52">Semanal</option>
              <option type="number" value="24">Quincena</option>
              <option type="number" value="12">Mensual</option>
              <option type="number" value="6">Bimestre</option>
              <option type="number" value="4">Trimestre</option>
              <option type="number" value="2">Semestre</option>
              <option type="number" value="1">Anual</option>
            </select>
          </div>
          <br/>

          <div class = "form-group">
            <label for="monedasus">moneda:</label>
            <select for="monedasus" class="form-select" id="monedasus">
              <option type="text" value="USD">USD - Dólar Americano</option>
              <option type="text" value="EUR">EUR - Euro</option>
              <option type="text" value="PEN">PEN - Nuevo Sol Peruano</option>
              <option type="text" value="MXN">MXN - Peso mexicano</option>
              <option type="text" value="JPY">JPY - Yen Japonés</option>
            </select>
          </div>
          <br/>

        </div>
                
        <div class="col">

          <div class = "form-group">
            <label for="iniciosus">inicio:</label>
            <input type="date" required class="form-control" value="" id="iniciosus">
          </div>
          <br/>

          <div class = "form-group">
            <label for="categoriasus">categoria:</label>
            <select for="categoriasus" class="form-select" id="categoriasus">
              <option type="text" value="Streaming">Streaming</option>
              <option type="text" value="Software">Software</option>
              <option type="text" value="Contenido">Contenido</option>
              <option type="text" value="Musica">Musica</option>
              <option type="text" value="Gaming">Gaming</option>
              <option type="text" value="Otro">Otro</option>
            </select>
          </div>
          <br/>

          <div class = "form-group">
            <label for="duracionsus">duracion:</label>
            <input type="number" required class="form-control" value="" id="duracionsus" placeholder="Duracion de la Suscripción" autocomplete="off">

            <select for="indurasus" class="custom-select" id="indurasus">
              <option type="text" value="meses">meses</option>
              <option type="text" value="años">años</option>
            </select>
          </div>
          <br/>

          <div class = "form-group">
            <label for="recordsus">recordatorio:</label>
            <input type="number" required class="form-control" value="" id="recordsus" placeholder="Recordatorio de pago" autocomplete="off">
                    
            <select for="inrecordsus" class="custom-select" id="inrecordsus">
              <option type="text" value="dias">dias</option>
              <option type="text" value="semanas">semanas</option>
              <option type="text" value="meses">meses</option>
              <option type="text" value="años">años</option>
            </select>
          </div>
          <br/>
        </div>
      </div>

      <br/>

      <div>
      <button title="agregar suscripcion" id="botonagregarsus" onclick="add_sus()" class="btn btn-outline-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
        </svg>
        Agregar</button>

        <button disabled title="modificar suscripcion" id="botonmodificarsus" onclick="actualizar_sus()" class="btn btn-outline-warning">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
          <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
          <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
        </svg>
        Modificar</button>

        <button disabled title="cancelar cambios" id="botoncancelarsus" onclick="limpiar_sus()" class="btn btn-outline-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
        </svg>
        Cancelar</button>

      </div>
  </div>
</div> 


<p>
<p>

<div class="col-md-12 shadow card p-3 border-info bg-body table-responsive" style="margin: 0 auto;" id="list_sus">

    <?php include('acciones/listar_sus.php');?>

</div>


<p>
<p>

<div class="col-md-12 shadow card p-3 border-info bg-body table-responsive" style="margin: 0 auto;" id="list_sus_pape">

    <?php include('acciones/listarpapelera_sus.php');?>

</div>


<p>
<p>
<hr class="my-2">
<h3 class="lead">Agregar, editar o borrar Proveedor:</h3>
<p>

    <div class="col-md-8 shadow card p-3 border-info bg-body" style="margin: 0 auto;">
      <div class="card-header">
        <h4> Tablero de Edicion - Proveedores </h4> 
      </div>
      <div class="card-body">
          <div class="row">
            <div class="col">
              <div class = "form-group">
                <label for="idpvd">ID:</label>
                <input type="number" required readonly class="form-control" value="" id="idpvd" placeholder="id">
              </div>
              <br/>

              <div class = "form-group">
                <label for="nombrepvd">Nombre:</label>
                <input type="text" required class="form-control" value="" id="nombrepvd" placeholder="Nombre" autocomplete="off">
              </div>
              <br/>

              <div class = "form-group">
                <label for="telefonopvd">Telefono:</label>
                <input type="text" required class="form-control" value="" id="telefonopvd" placeholder="Telefono" autocomplete="off">
              </div>
              <br/>
                    
            </div>
            <div class="col">

              <div class = "form-group">
                <label for="correopvd">Correo:</label>
                <input type="text" required class="form-control" value="" id="correopvd" placeholder="Correo" autocomplete="off">
              </div>
              <br/>

              <div class = "form-group">
                <label for="serviciospvd">Servicios:</label>
                <input type="text" required class="form-control" value="" id="serviciospvd" placeholder="Servicios" autocomplete="off">
              </div>
              <br/>

              <div class = "form-group">
                <label for="sitiopvd">Sitio Web:</label>
                <input type="text" required class="form-control" value="" id="sitiopvd" placeholder="www.Sitio_Web.com" autocomplete="off">
              </div>
              <br/>
            </div>
          </div>
          </br>

          <div>
      <button title="agregar proveedor" id="agregarpvd" onclick="add_pvd()" class="btn btn-outline-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
          <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
        </svg>
        Agregar</button>

        <button disabled title="modificar proveedor" id="modificarpvd" onclick="actualizar_pvd()" class="btn btn-outline-warning">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
          <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
          <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
        </svg>
        Modificar</button>

        <button disabled title="cancelar cambios" id="cancelarpvd" onclick="limpiar_pvd()" class="btn btn-outline-info">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
        </svg>
        Cancelar</button>
      </div>
      </div>
    </div>

<p>
<p>

<div class="col-md-12 shadow card p-3 border-info bg-body table-responsive" style="margin: 0 auto;" id="list_pvd">

    <?php include('acciones/listar_pvd.php');?>

</div>


<p>
<p>

<div class="col-md-12 shadow card p-3 border-info bg-body table-responsive" style="margin: 0 auto;" id="list_pvd_pape">

    <?php include('acciones/listarpapelera_pvd.php')?>

</div>

<hr class="my-2">
<?php include('template/pie.php'); ?>