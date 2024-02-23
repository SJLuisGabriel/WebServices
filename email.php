<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo Electrónico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        h2 {
            color: #007bff;
        }
        p {
            margin-bottom: 20px;
        }
        footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>¡Hola!</h2>
        <p>Has recibido un nuevo mensaje a través del formulario de contacto en nuestro sitio web. A continuación, se muestran los detalles:</p>
        <ul>
            <li><strong>Nombre:</strong> <?php echo $name; ?></li>
            <li><strong>Correo Electrónico:</strong> <?php echo $email; ?></li>
            <li><strong>Asunto:</strong> <?php echo $subject; ?></li>
        </ul>
        <h3>Mensaje:</h3>
        <p><?php echo $message; ?></p>
        <footer>
            <p>Este correo electrónico fue enviado automáticamente. Por favor, no responda a este mensaje.</p>
        </footer>
    </div>
</body>
</html>
