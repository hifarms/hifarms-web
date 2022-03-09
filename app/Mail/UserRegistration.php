<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegistration extends Mailable
{
    use Queueable, SerializesModels;

    Public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
       $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = " no_reply@domain.com";
        $name = "Hi Farms";
        $subject = "User Verification";
        return $this->view('email.userverification')
        ->from($address, $name)
        ->cc($address, $name)
        ->bcc($address, $name)
        ->replyTo($address, $name)
        ->subject($address, $name);
    }
}
 