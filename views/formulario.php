<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar Producto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0 text-center">
                        Registrar Producto
                    </h3>

                </div>

                <div class="card-body">

                    <form method="POST">

                        <div class="mb-3">

                            <label class="form-label">
                                Nombre
                            </label>

                            <input
                                type="text"
                                name="nombre"
                                class="form-control"
                                placeholder="Ingrese el nombre del producto"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Categoría
                            </label>

                            <input
                                type="text"
                                name="categoria"
                                class="form-control"
                                placeholder="Ingrese la categoría"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Precio
                            </label>

                            <input
                                type="number"
                                step="0.01"
                                name="precio"
                                class="form-control"
                                placeholder="0.00"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Stock
                            </label>

                            <input
                                type="number"
                                name="stock"
                                class="form-control"
                                placeholder="Cantidad disponible"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Descripción
                            </label>

                            <textarea
                                name="descripcion"
                                class="form-control"
                                rows="3"
                                placeholder="Descripción del producto"
                                required></textarea>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="index.php" class="btn btn-secondary">
                                Cancelar
                            </a>

                            <button
                                type="submit"
                                name="guardar"
                                class="btn btn-success">

                                Guardar Producto

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>