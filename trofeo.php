<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redes Sociales</title>

    <!-- Iconos de boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/white_egg.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/89f6e38e78.js" crossorigin="anonymous"></script>

    <style>
        .imagenTrofeo {
            display: flex;
            justify-content: center;
            align-items: center; 
            height: 100vh; 
        }

        .imagenTrofeo > div {
            text-align: center; 
        }
        body{
            margin: 0;
            font-family: "Poppins", sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: white;
            text-align: left;
            background-color: #212121;;
        }

        a[href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"] {
            display: none;
        }


        #btnRegreso{
            top: 5% !important;
            left: 2% !important;
            border-radius: 5px !important;
            background-color: #7AB730 !important;
            border-color: #7AB730 !important;
            text-decoration: none !important;
            position: fixed !important;
            color: #fff !important;
            padding: 10px 20px !important;
            border-radius: 5px !important;
            cursor: pointer !important;
        }

        #btnRegreso:hover {
            color: #fff !important;
            background-color: #669928 !important;
            border-color: #5f8f25 !important;
        }
    </style>
</head>
<body>
    <div class="imagenTrofeo">
    <?php
        if(isset($_GET['red'])) {
            $red = $_GET['red'];
        }
    ?>
    <a id="btnRegreso" href="index.php" class="boton-regreso">Regresar</a>

        <div>
            <p><h1>Aqui Pondría Mi <?php echo $red?></h1></p>
            <img src="img/trofeo.jpg" alt="">
            <p><h1>Si Tan Solo Tuviera Uno</h1></p>
        </div>
    </div>
</body>
</html>