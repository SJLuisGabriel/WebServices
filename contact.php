<?php
    include 'header.php';
?>

    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Contacto</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contacto</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    
    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require 'recursos/class.phpmailer.php';
            require 'recursos/class.smtp.php';

            // Recoge los datos del formulario
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            // Configura PHPMailer
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail -> Username = "webluisgabriel@gmail.com";
            $mail -> Password = "odypwhaubgch ksqz";
            // odypwhaubgch ksqz otro correo de webgabo
            // swobwxshfyekdosa del correo institucional
            $mail->From = $email;
            $mail->FromName = $name;
            $mail->Subject = $subject;
            $email_body = "
                <!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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
                    <div class='container'>
                        <h2>¡Hola!</h2>
                        <p>Has recibido un nuevo mensaje a través del formulario de contacto en nuestro sitio web. A continuación, se muestran los detalles:</p>
                        <ul>
                            <li><strong>Nombre:</strong> $name</li>
                            <li><strong>Correo Electrónico:</strong> $email</li>
                            <li><strong>Asunto:</strong> $subject</li>
                        </ul>
                        <h3>Mensaje:</h3>
                        <p>$message</p>
                    </div>
                </body>
                </html>
            ";

            $mail->IsHTML(true);
            $mail->Body = $email_body;

            $mail->AddAddress("webluisgabriel@gmail.com");

            if ($mail->Send()) {
                echo "El mensaje se ha enviado correctamente";
            } else {
                echo "Error al enviar el mensaje: " . $mail->ErrorInfo;
            }
        }
    ?>


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contacto</h6>
                <h1>Contactanos Para Cualquier Consulta</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" name="name" placeholder="Nombre Completo"
                                        required="required" data-validation-required-message="Por favor, introduce tu nombre" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" name="email" placeholder="Tu Correo"
                                        required="required" data-validation-required-message="Por favor, introduce tu correo" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Asunto"
                                    required="required" data-validation-required-message="Por favor, ingresa un asunto" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" name="message" placeholder="Mensaje"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    
<?php
    include 'footer.php';
?>