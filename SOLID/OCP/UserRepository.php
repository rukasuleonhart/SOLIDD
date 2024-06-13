/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Lucas Oliveira   
* DATA: 13/06/2024
*/ 
<?php
// ocp_example.php

// Interface para um serviço de notificação
interface NotificationService {
    public function sendNotification($message);
}

// Implementação de um serviço de e-mail
class EmailNotification implements NotificationService {
    public function sendNotification($message) {
        echo "Sending email notification: {$message}\n";
    }
}

// Implementação de um serviço de SMS
class SMSNotification implements NotificationService {
    public function sendNotification($message) {
        echo "Sending SMS notification: {$message}\n";
    }
}

// Classe que envia notificações usando um serviço de notificação
class Notifier {
    private $notificationService;

    public function __construct(NotificationService $notificationService) {
        $this->notificationService = $notificationService;
    }

    public function sendNotification($message) {
        $this->notificationService->sendNotification($message);
    }
}

// Utilização
$emailNotification = new EmailNotification();
$smsNotification = new SMSNotification();

$emailNotifier = new Notifier($emailNotification);
$emailNotifier->sendNotification("Hello, this is an email notification.");

$smsNotifier = new Notifier($smsNotification);
$smsNotifier->sendNotification("Hello, this is an SMS notification.");
?>
