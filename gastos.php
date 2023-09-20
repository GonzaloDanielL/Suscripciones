<?php include("template/cabecera.php");
  
#### lista de costos ######################################################################################
  $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser");
  $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
  $sentenciaSQL->execute();
  $vista=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

##### lista de gastos por tipo de moneda
  ### lista de costos por dolar #############################################################################
  $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'USD'");
  $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
  $sentenciaSQL->execute();
  $dolar=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

  ### lista de costos por euro
  $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'EUR'");
  $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
  $sentenciaSQL->execute();
  $euro=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

  ### lista de costos por sol peruano
  $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'PEN'");
  $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
  $sentenciaSQL->execute();
  $sol=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

  ### lista de costos por peso mexicano
  $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'MXN'");
  $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
  $sentenciaSQL->execute();
  $pesoM=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

  ### lista de costos por yen japones
  $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'JPY'");
  $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
  $sentenciaSQL->execute();
  $yenj=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


###### lista de gastos por categoria

  ##### Streaming #####################################################################################
    ### lista de costos por dolar
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'USD' and categoria = 'Streaming'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $dolarStreaming=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por euro
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'EUR' and categoria = 'Streaming'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $euroStreaming=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por sol peruano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'PEN' and categoria = 'Streaming'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $solStreaming=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por peso mexicano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'MXN' and categoria = 'Streaming'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $pesoMStreaming=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por yen japones
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'JPY' and categoria = 'Streaming'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $yenjStreaming=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

  ##### Software ########################################################################################
    ### lista de costos por dolar
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'USD' and categoria = 'Software'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $dolarSoftware=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por euro
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'EUR' and categoria = 'Software'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $euroSoftware=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por sol peruano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'PEN' and categoria = 'Software'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $solSoftware=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por peso mexicano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'MXN' and categoria = 'Software'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $pesoMSoftware=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por yen japones
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'JPY' and categoria = 'Software'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $yenjSoftware=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

  ##### Contenido ########################################################################################
    ### lista de costos por dolar
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'USD' and categoria = 'Contenido'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $dolarContenido=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por euro
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'EUR' and categoria = 'Contenido'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $euroContenido=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por sol peruano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'PEN' and categoria = 'Contenido'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $solContenido=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por peso mexicano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'MXN' and categoria = 'Contenido'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $pesoMContenido=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por yen japones
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'JPY' and categoria = 'Contenido'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $yenjContenido=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

  ##### Musica ###########################################################################################
    ### lista de costos por dolar
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'USD' and categoria = 'Musica'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $dolarMusica=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por euro
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'EUR' and categoria = 'Musica'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $euroMusica=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por sol peruano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'PEN' and categoria = 'Musica'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $solMusica=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por peso mexicano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'MXN' and categoria = 'Musica'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $pesoMMusica=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por yen japones
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'JPY' and categoria = 'Musica'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $yenjMusica=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

  ##### Gaming ###########################################################################################
    ### lista de costos por dolar
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'USD' and categoria = 'Gaming'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $dolarGaming=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por euro
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'EUR' and categoria = 'Gaming'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $euroGaming=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por sol peruano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'PEN' and categoria = 'Gaming'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $solGaming=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por peso mexicano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'MXN' and categoria = 'Gaming'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $pesoMGaming=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por yen japones
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'JPY' and categoria = 'Gaming'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $yenjGaming=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

  ##### Otro #############################################################################################
    ### lista de costos por dolar
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'USD' and categoria = 'Otro'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $dolarOtro=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por euro
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'EUR' and categoria = 'Otro'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $euroOtro=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por sol peruano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'PEN' and categoria = 'Otro'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $solOtro=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por peso mexicano
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'MXN' and categoria = 'Otro'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $pesoMOtro=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

    ### lista de costos por yen japones
    $sentenciaSQL = $conexion->prepare("SELECT * FROM list_costos where idusuario = :iduser and moneda = 'JPY' and categoria = 'Otro'");
    $sentenciaSQL->bindParam(':iduser',$_SESSION['user_id']);
    $sentenciaSQL->execute();
    $yenjOtro=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>



<h1 class="display-3 fw-bolder">Resumen de Gastos
<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
</svg>
</h1>

<h6 class="text-info fst-italic" style="--bs-text-opacity: .7;">estos calculos solo son una referencia.</h6>
<hr class="my-2">
<h3 class="lead">Gastos por Suscripción:</h3>
</p>

  <div class="col-md-12 shadow card p-3 border-info bg-body table-responsive" style="margin: 0 auto;">
    <table class="table table-borderless">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pago</th>
                <th>Duracion</th>
                <th>ciclo</th>
                <th>Gasto Anual</th>
                <th>Gasto Total</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($vista as $list){
              $total = $list['anual'] * $list['duracion'];

              switch ($list['ciclo']){
                case 365:
                  $txtciclotipo = "Diario";
                  break;
                case 52:
                  $txtciclotipo = "Semanal";
                  break;
                case 24:
                  $txtciclotipo = "Quicena";
                  break;
                case 12:
                  $txtciclotipo = "Mensual";
                  break;
                case 6:
                  $txtciclotipo = "Bimestre";
                  break;
                case 4:
                  $txtciclotipo = "Trimestre";
                  break;
                case 2:
                  $txtciclotipo = "Semestre";
                  break;
                case 1:
                  $txtciclotipo = "Anual";
                  break;
              }


              if ($txtciclotipo == "Semanal"){
                $ciclo = 4;

              }elseif($txtciclotipo == "Quincena"){
                $ciclo = 2;

              }else{
                $ciclo = 1;
              }


              if ($list['in_dura'] == "meses"){
                  $total = $list['pago'] * ($list['duracion']*$ciclo);

                  $anual = $list['pago'] * ($list['duracion']*$ciclo);             
              }else{
                  $total = $list['anual'] * $list['duracion'];
                  $anual = $list['anual'];
                  }
            ?>

            <tr>
                <td><?php echo $list['nombre'];?></td>
                <td><?php echo $list['pago']; echo " "; echo $list['moneda'];?></td>
                <td><?php echo $list['duracion']; echo " "; echo $list['in_dura'];?></td>
                <td><?php echo $txtciclotipo;?></td>
                <td><?php echo round($anual,2); echo " "; echo $list['moneda'];?></td>
                <td><?php echo round($total,2); echo " "; echo $list['moneda'];?></td>
            </tr>
            <?php }; ?>
        </tbody>
    </table>   
  </div>

<p>
<hr class="my-2">
<h3 class="lead">Gastos por tipo de Moneda:</h3>
  <?php 
    $totaldolar = 0;
    $totaleuro = 0;
    $totalsol = 0;
    $totalpesoM = 0;
    $totalyen = 0;

    $totaldolar2 = 0;
    $totaleuro2 = 0;
    $totalsol2 = 0;
    $totalpesoM2 = 0;
    $totalyen2 = 0;
  ?>
</p>
<div class="row">
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-info bg-body">
      <div class="card-body">
      <?php foreach($dolar as $dolarlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($dolarlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($dolarlist['in_dura'] == "meses"){
          $meses = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
          $meses2 = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
        }else{
          $años = $dolarlist['anual'];
          $años2 = $dolarlist['anual'] * $dolarlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaldolar += $años;
        $totaldolar2 += $años2;
        }?>

        <h5 class="card-title">Total por Dolar - USD</h5>
        <p class="card-text">Anual = <?php echo round($totaldolar,2);?> USD </br>
                            Total = <?php echo round($totaldolar2,2);?> USD</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-info bg-body">
      <div class="card-body">
      <?php foreach($euro as $eurolist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($eurolist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($eurolist['in_dura'] == "meses"){
          $meses = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
          $meses2 = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
        }else{
          $años = $eurolist['anual'];
          $años2 = $eurolist['anual'] * $eurolist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaleuro += $años;
        $totaleuro2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Euro</h5>
        <p class="card-text">Anual = <?php echo round($totaleuro,2);?> EUR</br>
                            Total = <?php echo round($totaleuro2,2);?> EUR</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-info bg-body">
      <div class="card-body">
      <?php foreach($sol as $sollist){

        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($sollist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($sollist['in_dura'] == "meses"){
          $meses = $sollist['pago'] * ($sollist['duracion']*$ciclo);
          $meses2 = $sollist['pago'] * ($sollist['duracion']*$ciclo);
        }else{
          $años = $sollist['anual'];
          $años2 = $sollist['anual'] * $sollist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalsol += $años;
        $totalsol2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Nuevo Sol - PEN</h5>
        <p class="card-text">Anual = <?php echo round($totalsol,2);?> PEN </br>
                            Total = <?php echo round($totalsol2,2);?> PEN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-info bg-body">
      <div class="card-body">
      <?php foreach($pesoM as $pesoMlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($pesoMlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($pesoMlist['in_dura'] == "meses"){
          $meses = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
          $meses2 = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
        }else{
          $años = $pesoMlist['anual'];
          $años2 = $pesoMlist['anual'] * $pesoMlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalpesoM += $años;
        $totalpesoM2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Peso Mexicano - MXN</h5>
        <p class="card-text">Anual = <?php echo round($totalpesoM,2);?> MXN</br>
                            Total = <?php echo round($totalpesoM2,2);?> MXN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-info bg-body">
      <div class="card-body">
      <?php foreach($yenj as $yenjlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($yenjlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($yenjlist['in_dura'] == "meses"){
          $meses = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
          $meses2 = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
        }else{
          $años = $yenjlist['anual'];
          $años2 = $yenjlist['anual'] * $yenjlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalyen += $años;
        $totalyen2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Yen Japonés - JPY</h5>
        <p class="card-text">Anual = <?php echo round($totalyen,2);?> JPY</br>
                            Total = <?php echo round($totalyen2,2);?> JPY</p>
      </div>
    </div>
  </div>
</div>


<p>
<hr class="my-2">
<h3 class="fw-normal">Resultados por Categoria:</h3>
<h3 class="lead">Streaming:</h3>
</p>
<div class="row">
  <?php 
    $totaldolar = 0;
    $totaleuro = 0;
    $totalsol = 0;
    $totalpesoM = 0;
    $totalyen = 0;

    $totaldolar2 = 0;
    $totaleuro2 = 0;
    $totalsol2 = 0;
    $totalpesoM2 = 0;
    $totalyen2 = 0;
  ?>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-success bg-body">
      <div class="card-body">
      <?php foreach($dolarStreaming as $dolarlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($dolarlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($dolarlist['in_dura'] == "meses"){
          $meses = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
          $meses2 = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
        }else{
          $años = $dolarlist['anual'];
          $años2 = $dolarlist['anual'] * $dolarlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaldolar += $años;
        $totaldolar2 += $años2;
        }?>

        <h5 class="card-title">Total por Dolar - USD</h5>
        <p class="card-text">Anual = <?php echo round($totaldolar,2);?> USD </br>
                            Total = <?php echo round($totaldolar2,2);?> USD</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-success bg-body">
      <div class="card-body">
      <?php foreach($euroStreaming  as $eurolist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($eurolist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($eurolist['in_dura'] == "meses"){
          $meses = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
          $meses2 = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
        }else{
          $años = $eurolist['anual'];
          $años2 = $eurolist['anual'] * $eurolist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaleuro += $años;
        $totaleuro2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Euro</h5>
        <p class="card-text">Anual = <?php echo round($totaleuro,2);?> EUR</br>
                            Total = <?php echo round($totaleuro2,2);?> EUR</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-success bg-body">
      <div class="card-body">
      <?php foreach($solStreaming  as $sollist){

        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($sollist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($sollist['in_dura'] == "meses"){
          $meses = $sollist['pago'] * ($sollist['duracion']*$ciclo);
          $meses2 = $sollist['pago'] * ($sollist['duracion']*$ciclo);
        }else{
          $años = $sollist['anual'];
          $años2 = $sollist['anual'] * $sollist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalsol += $años;
        $totalsol2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Nuevo Sol - PEN</h5>
        <p class="card-text">Anual = <?php echo round($totalsol,2);?> PEN </br>
                            Total = <?php echo round($totalsol2,2);?> PEN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-success bg-body">
      <div class="card-body">
      <?php foreach($pesoMStreaming  as $pesoMlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($pesoMlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($pesoMlist['in_dura'] == "meses"){
          $meses = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
          $meses2 = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
        }else{
          $años = $pesoMlist['anual'];
          $años2 = $pesoMlist['anual'] * $pesoMlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalpesoM += $años;
        $totalpesoM2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Peso Mexicano - MXN</h5>
        <p class="card-text">Anual = <?php echo round($totalpesoM,2);?> MXN</br>
                            Total = <?php echo round($totalpesoM2,2);?> MXN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-success bg-body">
      <div class="card-body">
      <?php foreach($yenjStreaming  as $yenjlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($yenjlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($yenjlist['in_dura'] == "meses"){
          $meses = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
          $meses2 = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
        }else{
          $años = $yenjlist['anual'];
          $años2 = $yenjlist['anual'] * $yenjlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalyen += $años;
        $totalyen2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Yen Japonés - JPY</h5>
        <p class="card-text">Anual = <?php echo round($totalyen,2);?> JPY</br>
                            Total = <?php echo round($totalyen2,2);?> JPY</p>
      </div>
    </div>
  </div>
</div>
<hr class="my-2">

<h3 class="lead">Software:</h3>
</p>
<div class="row">
  <?php 
    $totaldolar = 0;
    $totaleuro = 0;
    $totalsol = 0;
    $totalpesoM = 0;
    $totalyen = 0;

    $totaldolar2 = 0;
    $totaleuro2 = 0;
    $totalsol2 = 0;
    $totalpesoM2 = 0;
    $totalyen2 = 0;
  ?>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-warning bg-body">
      <div class="card-body">
      <?php foreach($dolarSoftware as $dolarlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($dolarlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($dolarlist['in_dura'] == "meses"){
          $meses = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
          $meses2 = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
        }else{
          $años = $dolarlist['anual'];
          $años2 = $dolarlist['anual'] * $dolarlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaldolar += $años;
        $totaldolar2 += $años2;
        }?>

        <h5 class="card-title">Total por Dolar - USD</h5>
        <p class="card-text">Anual = <?php echo round($totaldolar,2);?> USD </br>
                            Total = <?php echo round($totaldolar2,2);?> USD</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-warning bg-body">
      <div class="card-body">
      <?php foreach($euroSoftware as $eurolist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($eurolist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($eurolist['in_dura'] == "meses"){
          $meses = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
          $meses2 = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
        }else{
          $años = $eurolist['anual'];
          $años2 = $eurolist['anual'] * $eurolist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaleuro += $años;
        $totaleuro2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Euro</h5>
        <p class="card-text">Anual = <?php echo round($totaleuro,2);?> EUR</br>
                            Total = <?php echo round($totaleuro2,2);?> EUR</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-warning bg-body">
      <div class="card-body">
      <?php foreach($solSoftware as $sollist){

        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($sollist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($sollist['in_dura'] == "meses"){
          $meses = $sollist['pago'] * ($sollist['duracion']*$ciclo);
          $meses2 = $sollist['pago'] * ($sollist['duracion']*$ciclo);
        }else{
          $años = $sollist['anual'];
          $años2 = $sollist['anual'] * $sollist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalsol += $años;
        $totalsol2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Nuevo Sol - PEN</h5>
        <p class="card-text">Anual = <?php echo round($totalsol,2);?> PEN </br>
                            Total = <?php echo round($totalsol2,2);?> PEN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-warning bg-body">
      <div class="card-body">
      <?php foreach($pesoMSoftware as $pesoMlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($pesoMlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($pesoMlist['in_dura'] == "meses"){
          $meses = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
          $meses2 = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
        }else{
          $años = $pesoMlist['anual'];
          $años2 = $pesoMlist['anual'] * $pesoMlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalpesoM += $años;
        $totalpesoM2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Peso Mexicano - MXN</h5>
        <p class="card-text">Anual = <?php echo round($totalpesoM,2);?> MXN</br>
                            Total = <?php echo round($totalpesoM2,2);?> MXN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-warning bg-body">
      <div class="card-body">
      <?php foreach($yenjSoftware as $yenjlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($yenjlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($yenjlist['in_dura'] == "meses"){
          $meses = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
          $meses2 = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
        }else{
          $años = $yenjlist['anual'];
          $años2 = $yenjlist['anual'] * $yenjlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalyen += $años;
        $totalyen2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Yen Japonés - JPY</h5>
        <p class="card-text">Anual = <?php echo round($totalyen,2);?> JPY</br>
                            Total = <?php echo round($totalyen2,2);?> JPY</p>
      </div>
    </div>
  </div>
</div>
<hr class="my-2">

<h3 class="lead">Contenido:</h3>
</p>
<div class="row">
  <?php 
    $totaldolar = 0;
    $totaleuro = 0;
    $totalsol = 0;
    $totalpesoM = 0;
    $totalyen = 0;

    $totaldolar2 = 0;
    $totaleuro2 = 0;
    $totalsol2 = 0;
    $totalpesoM2 = 0;
    $totalyen2 = 0;
  ?>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-danger  bg-body">
      <div class="card-body">
      <?php foreach($dolarContenido as $dolarlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($dolarlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($dolarlist['in_dura'] == "meses"){
          $meses = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
          $meses2 = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
        }else{
          $años = $dolarlist['anual'];
          $años2 = $dolarlist['anual'] * $dolarlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaldolar += $años;
        $totaldolar2 += $años2;
        }?>

        <h5 class="card-title">Total por Dolar - USD</h5>
        <p class="card-text">Anual = <?php echo round($totaldolar,2);?> USD </br>
                            Total = <?php echo round($totaldolar2,2);?> USD</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-danger  bg-body">
      <div class="card-body">
      <?php foreach($euroContenido as $eurolist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($eurolist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($eurolist['in_dura'] == "meses"){
          $meses = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
          $meses2 = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
        }else{
          $años = $eurolist['anual'];
          $años2 = $eurolist['anual'] * $eurolist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaleuro += $años;
        $totaleuro2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Euro</h5>
        <p class="card-text">Anual = <?php echo round($totaleuro,2);?> EUR</br>
                            Total = <?php echo round($totaleuro2,2);?> EUR</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-danger  bg-body">
      <div class="card-body">
      <?php foreach($solContenido as $sollist){

        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($sollist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($sollist['in_dura'] == "meses"){
          $meses = $sollist['pago'] * ($sollist['duracion']*$ciclo);
          $meses2 = $sollist['pago'] * ($sollist['duracion']*$ciclo);
        }else{
          $años = $sollist['anual'];
          $años2 = $sollist['anual'] * $sollist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalsol += $años;
        $totalsol2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Nuevo Sol - PEN</h5>
        <p class="card-text">Anual = <?php echo round($totalsol,2);?> PEN </br>
                            Total = <?php echo round($totalsol2,2);?> PEN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-danger  bg-body">
      <div class="card-body">
      <?php foreach($pesoMContenido as $pesoMlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($pesoMlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($pesoMlist['in_dura'] == "meses"){
          $meses = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
          $meses2 = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
        }else{
          $años = $pesoMlist['anual'];
          $años2 = $pesoMlist['anual'] * $pesoMlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalpesoM += $años;
        $totalpesoM2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Peso Mexicano - MXN</h5>
        <p class="card-text">Anual = <?php echo round($totalpesoM,2);?> MXN</br>
                            Total = <?php echo round($totalpesoM2,2);?> MXN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-danger  bg-body">
      <div class="card-body">
      <?php foreach($yenjContenido as $yenjlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($yenjlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($yenjlist['in_dura'] == "meses"){
          $meses = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
          $meses2 = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
        }else{
          $años = $yenjlist['anual'];
          $años2 = $yenjlist['anual'] * $yenjlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalyen += $años;
        $totalyen2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Yen Japonés - JPY</h5>
        <p class="card-text">Anual = <?php echo round($totalyen,2);?> JPY</br>
                            Total = <?php echo round($totalyen2,2);?> JPY</p>
      </div>
    </div>
  </div>
</div>
<hr class="my-2">

<h3 class="lead">Musica:</h3>
</p>
<div class="row">
  <?php 
    $totaldolar = 0;
    $totaleuro = 0;
    $totalsol = 0;
    $totalpesoM = 0;
    $totalyen = 0;

    $totaldolar2 = 0;
    $totaleuro2 = 0;
    $totalsol2 = 0;
    $totalpesoM2 = 0;
    $totalyen2 = 0;
  ?>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-info bg-body">
      <div class="card-body">
      <?php foreach($dolarMusica as $dolarlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($dolarlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($dolarlist['in_dura'] == "meses"){
          $meses = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
          $meses2 = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
        }else{
          $años = $dolarlist['anual'];
          $años2 = $dolarlist['anual'] * $dolarlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaldolar += $años;
        $totaldolar2 += $años2;
        }?>

        <h5 class="card-title">Total por Dolar - USD</h5>
        <p class="card-text">Anual = <?php echo round($totaldolar,2);?> USD </br>
                            Total = <?php echo round($totaldolar2,2);?> USD</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-info bg-body">
      <div class="card-body">
      <?php foreach($euroMusica as $eurolist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($eurolist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($eurolist['in_dura'] == "meses"){
          $meses = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
          $meses2 = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
        }else{
          $años = $eurolist['anual'];
          $años2 = $eurolist['anual'] * $eurolist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaleuro += $años;
        $totaleuro2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Euro</h5>
        <p class="card-text">Anual = <?php echo round($totaleuro,2);?> EUR</br>
                            Total = <?php echo round($totaleuro2,2);?> EUR</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-info bg-body">
      <div class="card-body">
      <?php foreach($solMusica as $sollist){

        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($sollist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($sollist['in_dura'] == "meses"){
          $meses = $sollist['pago'] * ($sollist['duracion']*$ciclo);
          $meses2 = $sollist['pago'] * ($sollist['duracion']*$ciclo);
        }else{
          $años = $sollist['anual'];
          $años2 = $sollist['anual'] * $sollist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalsol += $años;
        $totalsol2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Nuevo Sol - PEN</h5>
        <p class="card-text">Anual = <?php echo round($totalsol,2);?> PEN </br>
                            Total = <?php echo round($totalsol2,2);?> PEN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-info bg-body">
      <div class="card-body">
      <?php foreach($pesoMMusica as $pesoMlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($pesoMlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($pesoMlist['in_dura'] == "meses"){
          $meses = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
          $meses2 = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
        }else{
          $años = $pesoMlist['anual'];
          $años2 = $pesoMlist['anual'] * $pesoMlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalpesoM += $años;
        $totalpesoM2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Peso Mexicano - MXN</h5>
        <p class="card-text">Anual = <?php echo round($totalpesoM,2);?> MXN</br>
                            Total = <?php echo round($totalpesoM2,2);?> MXN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-info bg-body">
      <div class="card-body">
      <?php foreach($yenjMusica as $yenjlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($yenjlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($yenjlist['in_dura'] == "meses"){
          $meses = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
          $meses2 = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
        }else{
          $años = $yenjlist['anual'];
          $años2 = $yenjlist['anual'] * $yenjlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalyen += $años;
        $totalyen2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Yen Japonés - JPY</h5>
        <p class="card-text">Anual = <?php echo round($totalyen,2);?> JPY</br>
                            Total = <?php echo round($totalyen2,2);?> JPY</p>
      </div>
    </div>
  </div>
</div>
<hr class="my-2">

<h3 class="lead">Gaming:</h3>
</p>
<div class="row">
  <?php 
    $totaldolar = 0;
    $totaleuro = 0;
    $totalsol = 0;
    $totalpesoM = 0;
    $totalyen = 0;

    $totaldolar2 = 0;
    $totaleuro2 = 0;
    $totalsol2 = 0;
    $totalpesoM2 = 0;
    $totalyen2 = 0;
  ?>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-primary  bg-body">
      <div class="card-body">
      <?php foreach($dolarGaming as $dolarlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($dolarlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($dolarlist['in_dura'] == "meses"){
          $meses = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
          $meses2 = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
        }else{
          $años = $dolarlist['anual'];
          $años2 = $dolarlist['anual'] * $dolarlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaldolar += $años;
        $totaldolar2 += $años2;
        }?>

        <h5 class="card-title">Total por Dolar - USD</h5>
        <p class="card-text">Anual = <?php echo round($totaldolar,2);?> USD </br>
                            Total = <?php echo round($totaldolar2,2);?> USD</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-primary  bg-body">
      <div class="card-body">
      <?php foreach($euroGaming as $eurolist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($eurolist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($eurolist['in_dura'] == "meses"){
          $meses = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
          $meses2 = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
        }else{
          $años = $eurolist['anual'];
          $años2 = $eurolist['anual'] * $eurolist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaleuro += $años;
        $totaleuro2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Euro</h5>
        <p class="card-text">Anual = <?php echo round($totaleuro,2);?> EUR</br>
                            Total = <?php echo round($totaleuro2,2);?> EUR</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-primary  bg-body">
      <div class="card-body">
      <?php foreach($solGaming as $sollist){

        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($sollist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($sollist['in_dura'] == "meses"){
          $meses = $sollist['pago'] * ($sollist['duracion']*$ciclo);
          $meses2 = $sollist['pago'] * ($sollist['duracion']*$ciclo);
        }else{
          $años = $sollist['anual'];
          $años2 = $sollist['anual'] * $sollist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalsol += $años;
        $totalsol2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Nuevo Sol - PEN</h5>
        <p class="card-text">Anual = <?php echo round($totalsol,2);?> PEN </br>
                            Total = <?php echo round($totalsol2,2);?> PEN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-primary  bg-body">
      <div class="card-body">
      <?php foreach($pesoMGaming as $pesoMlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($pesoMlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($pesoMlist['in_dura'] == "meses"){
          $meses = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
          $meses2 = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
        }else{
          $años = $pesoMlist['anual'];
          $años2 = $pesoMlist['anual'] * $pesoMlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalpesoM += $años;
        $totalpesoM2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Peso Mexicano - MXN</h5>
        <p class="card-text">Anual = <?php echo round($totalpesoM,2);?> MXN</br>
                            Total = <?php echo round($totalpesoM2,2);?> MXN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-primary  bg-body">
      <div class="card-body">
      <?php foreach($yenjGaming as $yenjlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($yenjlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($yenjlist['in_dura'] == "meses"){
          $meses = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
          $meses2 = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
        }else{
          $años = $yenjlist['anual'];
          $años2 = $yenjlist['anual'] * $yenjlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalyen += $años;
        $totalyen2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Yen Japonés - JPY</h5>
        <p class="card-text">Anual = <?php echo round($totalyen,2);?> JPY</br>
                            Total = <?php echo round($totalyen2,2);?> JPY</p>
      </div>
    </div>
  </div>
</div>
<hr class="my-2">

<h3 class="lead">Otro:</h3>
</p>
<div class="row">
  <?php 
    $totaldolar = 0;
    $totaleuro = 0;
    $totalsol = 0;
    $totalpesoM = 0;
    $totalyen = 0;

    $totaldolar2 = 0;
    $totaleuro2 = 0;
    $totalsol2 = 0;
    $totalpesoM2 = 0;
    $totalyen2 = 0;
  ?>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-secondary  bg-body">
      <div class="card-body">
      <?php foreach($dolarOtro as $dolarlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($dolarlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($dolarlist['in_dura'] == "meses"){
          $meses = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
          $meses2 = $dolarlist['pago'] * ($dolarlist['duracion']*$ciclo);
        }else{
          $años = $dolarlist['anual'];
          $años2 = $dolarlist['anual'] * $dolarlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaldolar += $años;
        $totaldolar2 += $años2;
        }?>

        <h5 class="card-title">Total por Dolar - USD</h5>
        <p class="card-text">Anual = <?php echo round($totaldolar,2);?> USD </br>
                            Total = <?php echo round($totaldolar2,2);?> USD</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-secondary  bg-body">
      <div class="card-body">
      <?php foreach($euroOtro as $eurolist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($eurolist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($eurolist['in_dura'] == "meses"){
          $meses = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
          $meses2 = $eurolist['pago'] * ($eurolist['duracion']*$ciclo);
        }else{
          $años = $eurolist['anual'];
          $años2 = $eurolist['anual'] * $eurolist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totaleuro += $años;
        $totaleuro2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Euro</h5>
        <p class="card-text">Anual = <?php echo round($totaleuro,2);?> EUR</br>
                            Total = <?php echo round($totaleuro2,2);?> EUR</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-secondary  bg-body">
      <div class="card-body">
      <?php foreach($solOtro as $sollist){

        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($sollist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($sollist['in_dura'] == "meses"){
          $meses = $sollist['pago'] * ($sollist['duracion']*$ciclo);
          $meses2 = $sollist['pago'] * ($sollist['duracion']*$ciclo);
        }else{
          $años = $sollist['anual'];
          $años2 = $sollist['anual'] * $sollist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalsol += $años;
        $totalsol2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Nuevo Sol - PEN</h5>
        <p class="card-text">Anual = <?php echo round($totalsol,2);?> PEN </br>
                            Total = <?php echo round($totalsol2,2);?> PEN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-secondary  bg-body">
      <div class="card-body">
      <?php foreach($pesoMOtro as $pesoMlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($pesoMlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($pesoMlist['in_dura'] == "meses"){
          $meses = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
          $meses2 = $pesoMlist['pago'] * ($pesoMlist['duracion']*$ciclo);
        }else{
          $años = $pesoMlist['anual'];
          $años2 = $pesoMlist['anual'] * $pesoMlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalpesoM += $años;
        $totalpesoM2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Peso Mexicano - MXN</h5>
        <p class="card-text">Anual = <?php echo round($totalpesoM,2);?> MXN</br>
                            Total = <?php echo round($totalpesoM2,2);?> MXN</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card shadow p-3 mb-3 border-secondary  bg-body">
      <div class="card-body">
      <?php foreach($yenjOtro as $yenjlist){
        $años = 0;
        $meses = 0;
        $años2 = 0;
        $meses2 = 0;

        switch ($yenjlist['ciclo']){
          case 365:
            $txtciclotipo = "Diario";
            break;
          case 52:
            $txtciclotipo = "Semanal";
            break;
          case 24:
            $txtciclotipo = "Quicena";
            break;
          case 12:
            $txtciclotipo = "Mensual";
            break;
          case 6:
            $txtciclotipo = "Bimestre";
            break;
          case 4:
            $txtciclotipo = "Trimestre";
            break;
          case 2:
            $txtciclotipo = "Semestre";
            break;
          case 1:
            $txtciclotipo = "Anual";
            break;
        }

        if ($txtciclotipo == "Semanal"){
          $ciclo = 4;

        }elseif($txtciclotipo == "Quincena"){
          $ciclo = 2;

        }else{
          $ciclo = 1;
        }

        if ($yenjlist['in_dura'] == "meses"){
          $meses = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
          $meses2 = $yenjlist['pago'] * ($yenjlist['duracion']*$ciclo);
        }else{
          $años = $yenjlist['anual'];
          $años2 = $yenjlist['anual'] * $yenjlist['duracion'];

        }

        $años += $meses;
        $años2 += $meses2;

        $totalyen += $años;
        $totalyen2 += $años2;
        }?>

        <h5 class="card-title">Gastos por Yen Japonés - JPY</h5>
        <p class="card-text">Anual = <?php echo round($totalyen,2);?> JPY</br>
                            Total = <?php echo round($totalyen2,2);?> JPY</p>
      </div>
    </div>
  </div>
</div>
<hr class="my-2">
<?php include("template/pie.php");?>