<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $to = "ton-email@example.com"; // Remplace par ton adresse email
    $subject = "Nouvelle inscription";
    $message = "Un nouvel utilisateur s'est inscrit avec l'email : " . $email;
    $headers = "From: noreply@whiteskytravel.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Merci pour votre inscription !";
    } else {
        echo "Erreur, veuillez réessayer.";
    }
}
?>
