<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentComplain extends Mailable
{
    use Queueable, SerializesModels;
    // na me add this line public $data
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // na me add the $data to the _construct function
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.complain');
    }
}
