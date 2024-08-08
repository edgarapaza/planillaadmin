<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar Composer's autoloader
//require '../vendor/autoload.php';
require dirname(__DIR__) . '/vendor/autoload.php';
class Actions extends Controller
{
	function __construct()
	{
		parent::__construct();
	}
    public function email()
	{
		ini_set("memory_limit","256M");
		$backup = $_GET['backup'];
		//Instancia de PHPMailer
		$mail = new PHPMailer(true);
		try {
			// Configuración del servidor SMTP
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';           // Servidor SMTP de Gmail
			$mail->SMTPAuth = true;
			$mail->Username = 'jersson.z032@gmail.com';
			// Tu correo de Gmail ===>>>  fxws idjg pqjo hmjd
			$mail->Password = 'fxws idjg pqjo hmjd';   // Tu contraseña de Gmail o contraseña de aplicación
			$mail->SMTPSecure = 'tls';                   // Encriptación TLS
			$mail->Port = 587;                           // Puerto TCP

			// Remitente y destinatario
			$mail->setFrom('jersson.z032@gmail.com', 'jersson');
			$mail->addAddress("dota2jersson3@gmail.com", 'Destinatario'); // Añadir destinatario
			$mail->addAttachment($backup);
			// Contenido del correo
			$mail->isHTML(true);                         // Configurar el correo en formato HTML
			$mail->Subject = 'Backup';
			$mail->Body = 'Backup de la base de datos';
			// $mail->AltBody = 'Este es el cuerpo del correo en texto plano para clientes de correo que no soportan HTML';
			$mail->send();
			//echo 'El mensaje ha sido enviado';
		} catch (Exception $e) {
			echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
		}
	}


}

?>