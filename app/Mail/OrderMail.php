<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class OrderMail extends Mailable
{

    protected $requestData;

    public function __construct(array $requestData)
    {
        $this->requestData = $requestData;
    }

    public function build()
    {
        return $this->view('mail.test');
    }
}