# 🌸 CRUD de Productos - PHP + MySQL + Bootstrap + MVC

<p align="center">

<img src="https://img.shields.io/badge/PHP-8.x-ff69b4?style=for-the-badge&logo=php&logoColor=white">
<img src="https://img.shields.io/badge/MySQL-Database-f8bbd0?style=for-the-badge&logo=mysql&logoColor=white">
<img src="https://img.shields.io/badge/Bootstrap-5-f48fb1?style=for-the-badge&logo=bootstrap&logoColor=white">
<img src="https://img.shields.io/badge/MVC-Pattern-fce4ec?style=for-the-badge">

</p>

---

# Descripción

Este proyecto consiste en el desarrollo de un **CRUD de Productos** utilizando **PHP**, **MySQL**, **Bootstrap** y el patrón de arquitectura **MVC (Modelo - Vista - Controlador)**.

Fue realizado como parte de la actividad de la materia, implementando las cuatro operaciones básicas sobre una base de datos:

- Crear
- Leer
- Actualizar
- Eliminar

---

# 🌸 Características

- Interfaz moderna con Bootstrap 5.
- Diseño personalizado en tonos rosa.
- Arquitectura MVC.
- Conexión a MySQL mediante **mysqli**.
- Confirmación antes de eliminar registros.
- Formularios responsivos.
- Tabla con efecto hover.
- Diseño adaptable.

---

#  Tecnologías utilizadas

| Tecnología | Uso |
|------------|-----|
| PHP | Lógica del sistema |
| MySQL | Base de datos |
| Bootstrap 5 | Diseño de la interfaz |
| HTML5 | Estructura |
| CSS3 | Personalización |
| MVC | Organización del proyecto |

---

#  Estructura del proyecto

```text
IVMact2_t4/

│
├── assets/
│   ├── css/
│   └── js/
│
├── config/
│   └── conexion.php
│
├── controller/
│   └── controlador.php
│
├── model/
│   └── modelo.php
│
├── views/
│   ├── inicio.php
│   ├── formulario.php
│   └── editar.php
│
└── index.php
```

---

# 🗄 Base de datos

Nombre de la base de datos

```sql
crud_productos
```

Tabla

```sql
productos
```

Campos

| Campo | Tipo |
|--------|------|
| id | INT |
| nombre | VARCHAR(100) |
| categoria | VARCHAR(100) |
| precio | DECIMAL(10,2) |
| stock | INT |
| descripcion | VARCHAR(255) |

---

#  Conexión a la base de datos

```php
<?php

$conexion = new mysqli("localhost","root","","crud_productos");

if($conexion->connect_error){
    die("Error de conexión");
}

?>
```

---

#  Operaciones CRUD

##  Crear

Permite registrar un nuevo producto.

```php
$modelo->insertarProducto(
    $nombre,
    $categoria,
    $precio,
    $stock,
    $descripcion
);
```

---

## Leer

Obtiene todos los productos almacenados.

```php
$modelo->listarProductos();
```

---

## Actualizar

Permite modificar la información de un producto.

```php
$modelo->actualizarProducto(
    $id,
    $nombre,
    $categoria,
    $precio,
    $stock,
    $descripcion
);
```

---

##  Eliminar

Elimina un producto mediante su ID.

```php
$modelo->eliminarProducto($id);
```

---

#  Instalación

Clonar el repositorio

```bash
git clone https://github.com/TUUSUARIO/IVMact2_t4.git
```

Entrar al proyecto

```bash
cd IVMact2_t4
```

Mover la carpeta a

```text
C:\xampp\htdocs\
```

Crear la base de datos

```text
crud_productos
```

Importar el script SQL.

Abrir

```text
http://localhost/IVMact2_t4/
```

---

#  Capturas

Agregar aquí imágenes del proyecto.

### 🌸Inicio

<img width="1366" height="590" alt="image" src="https://github.com/user-attachments/assets/f144827e-17de-4567-9996-523099b98a43" />


### 🟩Registrar 

<img width="755" height="607" alt="image" src="https://github.com/user-attachments/assets/8b1c33ef-95ea-475c-b7da-1649ef7993cb" />


### 🔵Editar

<img width="980" height="573" alt="image" src="https://github.com/user-attachments/assets/14c3da8e-cfbf-4a66-817e-082f4aac52c4" />



