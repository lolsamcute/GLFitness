<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentNotification extends Mailable
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
    public function __construct( $full_name, $email, $phone, $spa_id, $date)
    {
         $this->full_name = $full_name;
         $this->email = $email;
           $this->phone = $phone;
             $this->spa_id = $spa_id;
             $this->date = $date;

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
        $subject = 'Appointment Notification';
        return $this->markdown('emails.appointment')
        ->from($address, $name)

         ->subject($subject)
        ->with([

             'full_name' => $this->full_name,
               'email' => $this->email,
                   'phone' => $this->phone,
                    'spa_id' => $this->spa_id,
                    'date' => $this->date,


        ]);
    }


}
