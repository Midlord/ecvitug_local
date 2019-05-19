<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;


    public $request;


    public function __construct($request)
    {
        $this->request = $request;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('mail.order.mail')->subject('Rental Order Approve');
    }
}
