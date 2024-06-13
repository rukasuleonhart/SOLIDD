/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Lucas de Oliveira 
* DATA: 13/06/2024
*/ 
<?php
// dip_example.php

// Interface para serviço de notificação
interface NotificationService {
    public function sendNotification($message);
}

// Implementação de serviço de e-mail
class EmailNotification implements NotificationService {
    public function sendNotification($message) {
        echo "Sending email notification: {$message}\n";
    }
}

// Classe de alto nível que depende de NotificationService
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
$notifier = new Notifier($emailNotification);
$notifier->sendNotification("Hello, this is a notification.");
?>

