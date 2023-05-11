<?php
// Conectarse a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'axios_php');

// Hacer consulta
$sql = "SELECT * FROM usuarios WHERE id_usuarios";
$resultado = mysqli_query($conn, $sql);

// Mostrar resultados
// if (mysqli_num_rows($resultado) == true) {
  // Recorremos los registros
//   while($fila = mysqli_fetch_assoc($resultado)) {
//     echo  "Nombre Usuario: " . $fila["id_usuarios"]. " Usuario: " . $fila["nombre"] . "<br>";
// }
// } else {
//     echo "0 resultados";
// }
 // create an empty array
 $array = array();

 if (mysqli_num_rows($resultado) == true) {
   // Recorremos los registros
   while($fila = mysqli_fetch_assoc($resultado)) {
     // rellenamos el array en con cada fila
     array_push($array, $fila["id_usuarios"] . " Usuario: " . $fila["nombre"] . "<br>");
   }
 } else {
   // si ni hay resultados
   array_push($array, "0 resultados");
 }

    header('Content-Type: application/json');
    echo json_encode($array);
 
//  print_r($array);
?>

