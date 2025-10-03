<?php 

$aProductos=["nombre"=> "IPHONE 17 PRO MAX", "precio"=> 1289, "url"=> "https://www.galaxyandorra.com/39604-home_default/iphone-17-pro-max-1tb-azul-oscuro-precompra.jpg", "descripcion"=>"El iPhone 17 Pro Max combina rendimiento de élite, autonomía óptima y fotografía profesional en un diseño ultrarresistente de titanio.", "stock"=>"20 disponibles", "color"=>"Negro"];
$aProductos2=["nombre"=> "IPHONE 16 PRO MAX", "precio"=> 1200, "url"=> "https://www.galaxyandorra.com/39604-home_default/iphone-17-pro-max-1tb-azul-oscuro-precompra.jpg", "descripcion"=>"El iPhone 16 Pro Max combina rendimiento de élite, autonomía óptima y fotografía profesional en un diseño ultrarresistente de titanio.", "stock"=>"No hay stock", "color"=>"Negro"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ficha de Producto</title>
  <!-- Bootstrap CSS -->
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body class="bg-light">

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        
        <!-- Ficha de producto -->
        <div class="card shadow-sm">
          <img src="<?php echo $aProductos["url"]; ?>" class="card-img-top" alt="Imagen del producto">
          <div class="card-body">
            <h5 class="card-title"><?php echo $aProductos["nombre"]; ?></h5>
            <p class="text-success fs-5 fw-bold"><?php echo $aProductos["precio"]; ?></p>
            
            <!-- Descripción -->
            <p class="card-text"><?php echo $aProductos["descripcion"]; ?></p>
            
            <!-- Stock -->
            <p><span class="fw-bold">Stock:</span> <span class="text-success"><?php echo $aProductos["stock"]; ?></span></p>
            
            <!-- Color -->
            <p><span class="fw-bold">Color:</span> <?php echo $aProductos["color"]; ?></p>

            <!-- Enlace -->
            <a href="https://example.com" class="btn btn-primary w-100" target="_blank">Ver producto</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        
        <!-- Ficha de producto -->
        <div class="card shadow-sm">
          <img src="<?php echo $aProductos2["url"]; ?>" class="card-img-top" alt="Imagen del producto">
          <div class="card-body">
            <h5 class="card-title"><?php echo $aProductos2["nombre"]; ?></h5>
            <p class="text-success fs-5 fw-bold"><?php echo $aProductos2["precio"]; ?></p>
            
            <!-- Descripción -->
            <p class="card-text"><?php echo $aProductos2["descripcion"]; ?></p>
            
            <!-- Stock -->
            <p><span class="fw-bold">Stock:</span> <span class="text-success"><?php echo $aProductos2["stock"]; ?></span></p>
            
            <!-- Color -->
            <p><span class="fw-bold">Color:</span> <?php echo $aProductos2["color"]; ?></p>

            <!-- Enlace -->
            <a href="https://example.com" class="btn btn-primary w-100" target="_blank">Ver producto</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>

        