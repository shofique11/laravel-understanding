<?php
namespace App\Services;
use App\Contracts\MessageService;

 class SMSMessageService implements MessageService{
    public function pushMessage(string $message): string
    {
        return "Mobile sms: $message";
    }
 }
?>