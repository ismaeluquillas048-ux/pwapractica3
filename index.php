<?php

$productos = [

[
"id"=>1,
"nombre"=>"Laptop HP",
"descripcion"=>"Laptop Core i5 8GB RAM",
"precio"=>650,
"imagen"=>"https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=600"
],

[
"id"=>2,
"nombre"=>"Mouse Gamer",
"descripcion"=>"Mouse RGB inalámbrico",
"precio"=>25,
"imagen"=>"https://images.unsplash.com/photo-1527814050087-3793815479db?w=600"
],

[
"id"=>3,
"nombre"=>"Teclado Mecánico",
"descripcion"=>"Teclado RGB profesional",
"precio"=>35,
"imagen"=>"https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?w=600"
]

];

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tienda Tecnológica</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<h1>🛒 Tienda Tecnológica</h1>

<div class="contenedor">

<?php foreach($productos as $producto){ ?>

<div class="card">

<img src="<?php echo $producto['imagen']; ?>" alt="">

<h2><?php echo $producto['nombre']; ?></h2>

<p><?php echo $producto['descripcion']; ?></p>

<h3>$<?php echo $producto['precio']; ?></h3>

<button onclick="agregarCarrito('<?php echo $producto['nombre']; ?>', <?php echo $producto['precio']; ?>)">
Agregar al carrito
</button>

</div>

<?php } ?>

</div>

<div class="carrito">

<h2>🛍️ Carrito de Compras</h2>

<ul id="listaCarrito"></ul>

<h3>
Total: $
<span id="total">0</span>
</h3>

</div>

<script src="script.js"></script>

</body>

</html>