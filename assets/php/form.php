<? php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDatos = "trabajouy";

    $conn = new mysqli($servidor, $usuario, $clave, $baseDatos);

    if($conn -> connect_error){
        die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
    }


    $nomyapel = $_POST["nomyapel"];
    $email = $_POST["email"];
    $ci = $_POST["ci"];

    $sql_check = "SELECT * FROM usuarios WHERE ci='$ci'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0)
    {
        echo "La cedula ya existe en el sistema '$ci' ya existe.";
    }
    else
    {
        $sql_insert = "INSERT INTO usuarios (ci, nomyapel, email) VALUES ('$ci', '$nomyapel', '$email')";
        
            if ($conn->query($sql_insert) === TRUE) {
                echo "Usuario registrado con éxito ¡Bienvenido $nombre!";
            }
            else {
                echo "Error al registrar usuario" . $conn->error;
            }
    }

$conn->close();
?>