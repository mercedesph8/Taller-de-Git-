
<?php $usuario="admin"; ?>
<?php
$nombreUsuario="Mercedes Peña";
$edad=25;
$estudios="Desarrolladora web";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi página con Bootstrap</title>
  <!-- Bootstrap CSS (CDN) -->
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Mi Sitio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarNav" aria-controls="navbarNav" 
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
                 
        <?php if ($usuario == "admin"): ?>
             <li class="nav-item"><a class="nav-link active" href="#">Iniciar Sesion</a></li>
        <?php else: ?>
            <li class="nav-item"><a class="nav-link active" href="#">Cerrar sesion</a></li>
        <?php endif; ?>

          <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Acerca</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Contenido principal -->
    <main class="container my-5">
    <div class="row">
      <div class="col-md-8">

        <?php if ($usuario == "admin"): ?>
            <p>Bienvenido, esto te aparece porque eres administrador.</p>
        <?php else: ?>
            <p>Bienvenido, usuario.</p>
        <?php endif; ?>


        <h1>Bienvenido</h1>
        <p>Este es un ejemplo básico de una página con Bootstrap.</p>
      </div>
      <div class="col-md-4">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title"><?php echo $nombreUsuario?> </h5>
            <p class="card-text"><?php echo "Soy $estudios y tengo $edad años"?></p>
            <a href="#" class="btn btn-primary">Acción</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 Mi Sitio - Todos los derechos reservados</p>
  </footer>

  <!-- Bootstrap JS (CDN con Popper) -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>