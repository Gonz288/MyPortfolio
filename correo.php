<?php 
    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['message'])){
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $message = $_POST['message'];
            
            $header = 'From: '. $email. "\r\n";
            $header .= 'Reply-To'. $email. "\r\n";
            $header .= 'X-Mailer: PHP/'. phpversion() . "\r\n";

            $destino = 'gonza_gonzalez28@hotmail.com';

            $mail = @mail($destino, $asunto, $message, $header);
            if($mail){
                echo "<script>alert('Se ha enviado el mail correctamente!'); </script>";
                header('Location:index.html');
            }
        }
    }
?>