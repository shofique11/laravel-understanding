<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\MessageService;

class MessageDeliverController extends Controller
{
    protected $messageService;

    public function __construct(MessageService $messageService){
        $this->messageService = $messageService;
    }

    public function sendEmail(){
        $response = $this->messageService->pushMessage("Hi from shofique, Your are selected for interview for our requirement posistion");
        return response()->json(['message' => $response]);
    }

    public function sendSMS(){
      $response = $this->messageService->pushMessage("Please attend  your interview at 10.00 am");
      return response()->json(['message' => $response]);
    }
}
