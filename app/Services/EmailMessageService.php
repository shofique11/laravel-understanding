<?
namespace App\Services;
use App\Contracts\MessageService;
 class EmailMessageService implements MessageService{
    public function pushMessage(string $message): string
    {
        return "Email message: $message";
    }
 }
?>