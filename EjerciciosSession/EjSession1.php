<?php
session_start();

// Inicializar los productos si no están establecidos
if (!isset($_SESSION['inventario'])) {
    $_SESSION['inventario'] = [
        'milk' => 3,
        'soft_drink' => 0
    ];
}

// Inicializar el nombre del trabajador si no está establecido
if (!isset($_SESSION['trabajador'])) {
    $_SESSION['trabajador'] = 'pere';
}

// Procesar la acción del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cantidad = $_POST['producto'];
    $cantidad = intval($_POST['cantidad']);
    $action = $_POST['accion'];

    if ($accion == 'add') {
        $_SESSION['inventario'][$producto] += $cantidad;
    } elseif ($accion == 'remove') {
        if ($_SESSION['inventario'][$producto] >= $cantidad) {
            $_SESSION['inventario'][$producto] -= $cantidad;
        } else {
            $error = "Error: No se pueden quitar más unidades de las que hay en el inventario.";
        }
    } elseif ($action == 'reset') {
        $_SESSION['inventario'][$product] = 0;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Supermarket Management</title>
</head>
<body>
    <h1>Supermarket management</h1>

    <!-- Mostrar el nombre del trabajador -->
    <form method="post">
        <label for="trabajador"><b>Worker name:</b><br></label>
        <input type="text" name="trabajador" value="<?php echo $_SESSION['trabajador']; ?>" readonly><br><br>

        <!-- Seleccionar el producto -->
        <label for="producto"><b>Choose product:</b><br></label>
        <select name="producto">
            <option value="milk">Milk</option>
            <option value="soft_drink">Soft Drink</option>
        </select><br><br>

        <!-- Cantidad de productos -->
        <label for="cantidad"><b>Product quantity:</b><br></label>
        <input type="number" name="cantidad" min="1" required><br><br>

        <!-- Botones de acción -->
        <button type="submit" name="accion" value="add">add</button>
        <button type="submit" name="accion" value="remove">remove</button>
        <button type="submit" name="accion" value="reset">reset</button>
    </form>

    <!-- Mostrar el inventario -->
    <h3>Inventory:</h3>
    <p>worker: <?php echo $_SESSION['trabajador']; ?></p>
    <p>units milk: <?php echo $_SESSION['inventario']['milk']; ?></p>
    <p>units soft drink: <?php echo $_SESSION['inventario']['soft_drink']; ?></p>

    <!-- Mostrar error si hay -->
    <?php if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    } ?>
</body>
</html>
