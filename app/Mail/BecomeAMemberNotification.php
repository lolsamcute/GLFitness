<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BecomeAMemberNotification extends Mailable
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
    public function __construct( $first_name, $last_name, $email, $phone, $member_id)
    {
         $this->first_name = $first_name;
         $this->last_name = $last_name;
         $this->email = $email;
           $this->phone = $phone;
             $this->member_id = $member_id;

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
        $subject = 'Become A Memeber Notification';
        return $this->markdown('emails.becomeAmember')
        ->from($address, $name)

         ->subject($subject)
        ->with([

             'first_name' => $this->first_name,
             'last_name' => $this->last_name,
               'email' => $this->email,
                   'phone' => $this->phone,
                    'member_id' => $this->member_id,


        ]);
    }


}
