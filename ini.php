<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chempo-Blogs</title>
    <link rel="stylesheet" href="CSS/isc.css">

</head>
<body>
    <header> 
        <nav>
            <ul>
                <li id="ini">
                    <a href="Registro.html">Registro </a>  
                </li>
                
            </ul>
        </nav>
    </header>
    <br><br><br><br>
    <h1>
        IChempo-Blogs
    </h1>
    <h3>
        "Un simple blog, que destaca la sinceridad"
    </h3>
    <br>
    <?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "examen";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT titulo, imagen, descripcion, autor, fecha FROM articulos ORDER BY titulo DESC"; /*select items to display from the sensordata table in the data base*/

echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <th>titulo</th> 
        <th>imagen</th> 
        <th>descripcion</thh> 
        <th>autor</th> 
        <th>fecha</th> 
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_titulo = $row["titulo"];
        $row_imagen = $row["imagen"];
        $row_descripcion = $row["descripcion"];
        $row_autor = $row["autor"];
        $row_fecha = $row["fecha"];
        
      
        echo '<tr> 
                <td>' . $row_titulo . '</td> 
                <td>' . $row_imagen . '</td> 
                <td>' . $row_descripcion . '</td> 
                <td>' . $row_autor . '</td> 
                <td>' . $row_fecha . '</td>                 
              </tr>';
    }
    $result->free();
}

$conn->close();
?> 
</table>
</body>
</html>