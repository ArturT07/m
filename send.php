<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $checkbox = isset($_POST["checkbox"]) ? "Так" : "Ні";

    $to = "toba.artur@gmail.com";
    $subject = "Нова заявка від $name";
    $message = "Ім'я: $name\nТелефон: $phone\nEmail: $email\nОзнайомлений і приймає правила обробки персональних даних: $checkbox";

    mail($to, $subject, $message);

    // Опціонально: перенаправте користувача на сторінку після відправки форми
    header("Location: success.html");
}
?>
