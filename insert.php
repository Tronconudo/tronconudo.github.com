

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Tania Grande, Pesonal Shopper</title>
    <link rel="shortcut icon" href="favicon_io/android-chrome-512x512.png">
    <meta http-equiv="refresh" content="3;url=https://fashionpersonalshopper.000webhostapp.com/">
</head>
<body>

    <header>
        <div class="nav" style="background-color: #ad5f63;">
            <nav class="navegacion-principal contenedor">
                <a href="index.html">Inicio</a>
                <a href="https://taniagrande.myshopify.com/collections/all">Servicios</a>
                <a href="index.html"><img class="logo-img" src="images/logo_recortado.png" alt="logo"></a>
                <a href="nosotros.html">Nosotros</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>

    </header>
    <section class="contenedor margin-top">
        <div>
            <h1 class="l-margin">
            <?php
$servername = "localhost";
$database = "id18881029_insert";
$username = "id18881029_tronconudo";
$password = "\h8]0Sy0B3c|6}0l";

$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {
    die("Connection faialed: " . mysqli_connect_error());
}



$nombre = $_POST ["nombre"] ;
$telefono = $_POST ["telefono"] ;
$email = $_POST ["email"] ;
$mensage = $_POST ["mensage"] ;

$sql = "INSERT INTO form (nombre, telefono, email, mensage) VALUES ('$nombre', '$telefono' , '$email', '$mensage')";

if (mysqli_query($conn, $sql)) {
    echo "Enviado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
            </h1>

        </div>
    </section>

    </section>

    <footer>
        <div class="bottom-container">
            <a class="footer-link" href="https://www.linkedin.com/in/rafaelgrande/">LinkedIn</a>
            <a class="footer-link" href="https://www.instagram.com/tronconudo/">Instagram</a>

            <p class="copyright">© 2022 Rafael Grande.</p>
        </div>
    </footer>

</body>
</html>