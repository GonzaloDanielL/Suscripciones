        <?php 
          if(empty($_SESSION['user_id'])){
            header('Location:cuenta/inicio_sesion.php');
          }
        ?>
        </div>
    </div>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-3">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 AppWeb</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="editor.php" class="nav-link px-2 text-muted">Editor</a></li>
      <li class="nav-item"><a href="gastos.php" class="nav-link px-2 text-muted">Gastos</a></li>
      <li class="nav-item"><a href="config.php" class="nav-link px-2 text-muted">Configuración</a></li>
    </ul>
  </footer>
</div>
</body>
</html>