<?php
session_start();

// Inicializar los productos si no están establecidos
if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = [
        'milk' => 3,
        'soft_drink' => 0
    ];
}

// Inicializar el nombre del trabajador si no está establecido
if (!isset($_SESSION['worker'])) {
    $_SESSION['worker'] = 'pere';
}

// Procesar la acción del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $quantity = intval($_POST['quantity']);
    $action = $_POST['action'];

    if ($action == 'add') {
        $_SESSION['inventory'][$product] += $quantity;
    } elseif ($action == 'remove') {
        if ($_SESSION['inventory'][$product] >= $quantity) {
            $_SESSION['inventory'][$product] -= $quantity;
        } else {
            $error = "Error: No se pueden quitar más unidades de las que hay en el inventario.";
        }
    } elseif ($action == 'reset') {
        $_SESSION['inventory'][$product] = 0;
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
        <label for="worker"><b>Worker name:</b><br></label>
        <input type="text" name="worker" value="<?php echo $_SESSION['worker']; ?>" readonly><br><br>

        <!-- Seleccionar el producto -->
        <label for="product"><b>Choose product:</b><br></label>
        <select name="product">
            <option value="milk">Milk</option>
            <option value="soft_drink">Soft Drink</option>
        </select><br><br>

        <!-- Cantidad de productos -->
        <label for="quantity"><b>Product quantity:</b><br></label>
        <input type="number" name="quantity" min="1" required><br><br>

        <!-- Botones de acción -->
        <button type="submit" name="action" value="add">add</button>
        <button type="submit" name="action" value="remove">remove</button>
        <button type="submit" name="action" value="reset">reset</button>
    </form>

    <!-- Mostrar el inventario -->
    <h3>Inventory:</h3>
    <p>worker: <?php echo $_SESSION['worker']; ?></p>
    <p>units milk: <?php echo $_SESSION['inventory']['milk']; ?></p>
    <p>units soft drink: <?php echo $_SESSION['inventory']['soft_drink']; ?></p>

    <!-- Mostrar error si hay -->
    <?php if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    } ?>
</body>
</html>
