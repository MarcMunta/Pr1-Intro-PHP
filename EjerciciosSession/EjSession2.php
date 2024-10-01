<?php
session_start();

// Inicializar el array si no está establecido
if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [10, 20, 30];
}

// Procesar las acciones del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        $position = intval($_POST['position']);
        $new_value = isset($_POST['new_value']) ? intval($_POST['new_value']) : null;

        // Modificar el valor en la posición seleccionada
        if ($action == 'Modify' && $new_value !== null) {
            $_SESSION['array'][$position] = $new_value;
        }

        // Calcular la media
        if ($action == 'Average') {
            $average = array_sum($_SESSION['array']) / count($_SESSION['array']);
        }

        // Resetear el array a los valores originales
        if ($action == 'Reset') {
            $_SESSION['array'] = [10, 20, 30];
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modify Array in Session</title>
</head>
<body>
    <h1>Modify array saved in session</h1>

    <!-- Formulario -->
    <form method="post">
        <label for="position">Position to modify: </label>
        <select name="position">
            <?php
            foreach ($_SESSION['array'] as $index => $value) {
                echo "<option value='$index'>$index</option>";
            }
            ?>
        </select><br><br>

        <label for="new_value">New value: </label>
        <input type="number" name="new_value"><br><br>

        <!-- Botones de acción -->
        <button type="submit" name="action" value="Modify">Modify</button>
        <button type="submit" name="action" value="Average">Average</button>
        <button type="submit" name="action" value="Reset">Reset</button>
    </form>

    <br>
    <!-- Mostrar el array actual -->
    <p>Current array: <?php echo implode(", ", $_SESSION['array']); ?></p>

    <!-- Mostrar la media si fue calculada -->
    <?php if (isset($average)) {
        echo "<p>Average: " . number_format($average, 2) . "</p>";
    } ?>
</body>
</html>
