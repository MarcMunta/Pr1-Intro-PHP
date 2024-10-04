<?php
session_start();

//Inicializar el array si no está establecido
if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [10, 20, 30];
}

//Procesar las acciones del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];
        $posicion = intval($_POST['posicion']);
        $new_value = isset($_POST['new_value']) ? intval($_POST['new_value']) : null;

        //Modificar el valor en la posición seleccionada
        if ($accion == 'Modify' && $new_value !== null) {
            $_SESSION['array'][$posicion] = $new_value;
        }

        //Calcular la media
        if ($accion == 'Average') {
            $media = array_sum($_SESSION['array']) / count($_SESSION['array']);
        }

        //Resetear el array a los valores originales
        if ($accion == 'Reset') {
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
    <form method="post">
        <label for="posicion">Position to modify: </label>
        <select name="posicion">
            <?php
            foreach ($_SESSION['array'] as $index => $value) {
                echo "<option value='$index'>$index</option>";
            }
            ?>
        </select><br><br>
        <label for="new_value">New value: </label>
        <input type="number" name="new_value"><br><br>
        <button type="submit" name="accion" value="Modify">Modify</button>
        <button type="submit" name="accion" value="Average">Average</button>
        <button type="submit" name="accion" value="Reset">Reset</button>
    </form><br>
    <p>Current array: <?php echo implode(", ", $_SESSION['array']); ?></p>

    <?php if (isset($media)) {
        echo "<p>Average: " . number_format($media, 2) . "</p>";
    } ?>

</body>
</html>