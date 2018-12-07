<?php
echo "hola";
$link = mysqli_connect("datenbank.com", "test", "13vs07", "test_db");

if (!$link){
    echo "ERROR: No se pudo conectar con el servidor MYSQL." . PHP_EOL;
    echo "Debug-Número de Error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debug-Mensaje de error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Mensaje de Victoria: Se pudo conectar con el servidor MySQL! La base de datos \"datenbank\" es una pasada." . PHP_EOL;
echo "Host-Information: " . mysqli_get_host_info($link) . PHP_EOL;

/*
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // salida de los datos en fila
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Nachname"]. "<br>";
    }
} else {
    echo "0 results";
}
*/

mysqli_close($link);
?>

