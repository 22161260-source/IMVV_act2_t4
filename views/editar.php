<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Producto</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Editar Producto</h2>

<form method="POST">

<input type="hidden" name="id" value="<?= $producto['id'] ?>">

<div class="mb-3">
<label>Nombre</label>
<input type="text" class="form-control" name="nombre" value="<?= $producto['nombre'] ?>" required>
</div>

<div class="mb-3">
<label>Categoría</label>
<input type="text" class="form-control" name="categoria" value="<?= $producto['categoria'] ?>" required>
</div>

<div class="mb-3">
<label>Precio</label>
<input type="number" step="0.01" class="form-control" name="precio" value="<?= $producto['precio'] ?>" required>
</div>

<div class="mb-3">
<label>Stock</label>
<input type="number" class="form-control" name="stock" value="<?= $producto['stock'] ?>" required>
</div>

<div class="mb-3">
<label>Descripción</label>
<textarea class="form-control" name="descripcion" required><?= $producto['descripcion'] ?></textarea>
</div>

<button type="submit" name="actualizar" class="btn btn-primary">
Actualizar
</button>

<a href="index.php" class="btn btn-secondary">
Cancelar
</a>

</form>

</div>

</body>
</html>