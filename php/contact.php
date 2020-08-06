<?php

if (isset($_POST['enviar'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $header = "From: enzoleonelbenitez@gmail.com" . "\r\n";
        $header = "Reply-To: enzoleonelbenitez@gmail.com" . "\r\n";
        $header = "X-Mailer:PHP/" . phpversion();
        $mail = @mail($email,$subject,$message,$header);
        if ($mail) {
            echo "Mail enviado exitosamente";
        }
    }
}
?>