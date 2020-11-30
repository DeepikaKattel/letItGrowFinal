<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;



class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    

    public function __construct($data=[])
    {
        $this->data = $data;       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Someone Wants to Contact')
            ->view('mail.career')->with('data', $this->data);
        // ->attach($this->data['cv']->getRealPath(),
        // [
        //     'as' => $this->data['cv']->getOriginalClientName(),
        //     'mime' => $this->data['cv']->getClientMimeType(),
        // ]);
    }
}
