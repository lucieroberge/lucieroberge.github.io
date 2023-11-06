<?php
if(isset($_POST['submit'])) {
    // Récupérer les valeurs des champs du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adresse e-mail où vous voulez recevoir les données du formulaire
    $to = 'lucie_roberge@icloud.com';

    // Sujet de l'e-mail
    $subject = 'Nouveau message du formulaire de contact';

    // Corps de l'e-mail
    $email_body = "Nom: $name\n".
                  "Email: $email\n".
                  "Message: \n$message";

    // Entêtes de l'e-mail
    $headers = "From: $email";

    // Envoyer l'e-mail
    if(mail($to, $subject, $email_body, $headers)) {
        // Redirection après l'envoi du formulaire
        header('Location: merci.html');
    } else {
        echo 'Une erreur est survenue. Veuillez réessayer plus tard.';
    }
}
?>




