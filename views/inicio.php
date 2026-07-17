<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD Productos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background-color:#FFF5F8;
        }

        .card{
            border:none;
            border-radius:18px;
        }

        .card-header{
            background:#F8BBD0 !important;
            color:#4A4A4A;
        }

        .card-footer{
            background:#FFF5F8;
        }

        .table thead th{
            background:#FCE4EC !important;
            color:#5C4B51;
            text-align:center;
        }

        .table tbody tr:nth-child(even){
            background:#FFF8FA;
        }

        .table tbody tr:hover{
            background:#FDEEF2;
        }

        .btn-success{
            background:#EC407A;
            border:none;
        }

        .btn-success:hover{
            background:#D81B60;
        }

        .btn-warning{
            background:#F8BBD0;
            border:none;
            color:#444;
        }

        .btn-warning:hover{
            background:#F48FB1;
            color:white;
        }

        .btn-danger{
            background:#E57373;
            border:none;
        }

        .btn-danger:hover{
            background:#D32F2F;
        }

    </style>

</head>

<body>

<div class="container py-5">

    <div class="card shadow-lg">

        <div class="card-header">

            <h2 class="mb-0 text-center fw-bold">
                CRUD de Productos
            </h2>

        </div>

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <h5 class="mb-0 fw-semibold">
                    Lista de Productos
                </h5>

                <a href="?accion=nuevo" class="btn btn-success">
                    + Nuevo Producto
                </a>

            </div>

            <table class="table table-hover table-bordered align-middle">

                <thead>

                    <tr>

                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Descripción</th>
                        <th width="180">Acciones</th>

                    </tr>

                </thead>

                <tbody>

                <?php while($fila = $productos->fetch_assoc()){ ?>

                    <tr>

                        <td class="text-center"><?= $fila['id'] ?></td>

                        <td><?= $fila['nombre'] ?></td>

                        <td><?= $fila['categoria'] ?></td>

                        <td class="text-end">
                            $<?= number_format($fila['precio'],2) ?>
                        </td>

                        <td class="text-center">
                            <?= $fila['stock'] ?>
                        </td>

                        <td><?= $fila['descripcion'] ?></td>

                        <td class="text-center">

                            <a href="?accion=editar&id=<?= $fila['id'] ?>"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <a href="?accion=eliminar&id=<?= $fila['id'] ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('¿Deseas eliminar este producto?')">
                                Eliminar
                            </a>

                        </td>

                    </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>

        

    </div>

</div>

</body>
</html>