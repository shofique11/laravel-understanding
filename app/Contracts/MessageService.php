<?php
namespace App\Contracts;
interface MessageService{
    public function pushMessage(string $message): string;
}
?>