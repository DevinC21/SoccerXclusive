<?php
require_once '../config/config.php';
require_once '../app/models/Order.php';
require_once '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

class OrderController {
    public function checkout() {
        require '../app/views/checkout.php';
    }

    public function complete() {
        $cart = $_SESSION['cart'] ?? [];
        if (empty($cart)) {
            echo "Cart is empty.";
            return;
        }

        $summary = "";
        $total = 0;
        foreach ($cart as $kit) {
            $summary .= "{$kit['team']} ({$kit['season']}) - £{$kit['price']}<br>";
            $total += $kit['price'];
        }

        (new Order())->save($_POST['email'], $summary, $total);
        $this->sendEmail($_POST['email'], $_POST['name'], $summary, $total);
        unset($_SESSION['cart']);
        echo "Order placed! Confirmation sent.";
    }

    private function sendEmail($to, $name, $summary, $total) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'your-email@gmail.com';
            $mail->Password = 'your-password';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('your-email@gmail.com', 'SoccerXclusive');
            $mail->addAddress($to, $name);
            $mail->isHTML(true);
            $mail->Subject = 'Order Confirmation';
            $mail->Body = "<h2>Thanks {$name}</h2><p>{$summary}<strong>Total: £{$total}</strong></p>";

            $mail->send();
        } catch (Exception $e) {
            error_log("Mail error: {$mail->ErrorInfo}");
        }
    }
}
