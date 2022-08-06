<?php
if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['object']) && !empty($_POST['message'])) {


    // Expediteur
    $to  = '<ryan42426@gmail.com>';
    
    // Sujet
    $subject = $_POST['object'];
    
    // Message
    $message = $_POST['name'] . ': '. $_POST['message'];
    
    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers  = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\n";
    
    // En-têtes additionnels
    $headers  .= 'Reply-To: '. $_POST['mail'] . ".\n";
    $headers  .= 'From: '. $to ."\n";
    
    // Envoi du mail
    if (mail($to, $subject, $message, $headers)) {
        echo 'le mail est envoye';
    } else {
    
        echo 'le mail n\'a pas été envoyer';
        header('Location:index.php');
    };
    
} else {
    header('Location:index.php');
}
?>
