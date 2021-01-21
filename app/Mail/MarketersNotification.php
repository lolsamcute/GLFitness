<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MarketersNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $name, $email, $password)
    {
         $this->name = $name;
         $this->email = $email;
           $this->password = $password;

    }

     /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $address = 'no-reply@greatlifefitness.ng';
        $name = 'Greatlife Fitness & Lifestyle Center';
        $subject = 'Marketers Portal Notification';
        return $this->markdown('emails.marketersPortal')
        ->from($address, $name)

         ->subject($subject)
        ->with([

             'name' => $this->name,
               'email' => $this->email,
                   'password' => $this->password,


        ]);
    }


}
