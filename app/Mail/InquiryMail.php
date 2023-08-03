<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use Carbon\Carbon;

class InquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $Subject;
    public $inquirer_name;
    public $mailaddress;
    public $question;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inquirer_name,$mailaddress,$question)
    {

        $now = Carbon::now();        

        $this->Subject = "【" . $now->toDateTimeString() . "】のお問い合わせです。";
        $this->inquirer_name = $inquirer_name;
        $this->mailaddress = $mailaddress;
        $this->question = $question;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->view('mails.inquiry_mail')
        ->subject($this->Subject)
        ->with(['inquirer_name' => $this->inquirer_name , 'mailaddress' => $this->mailaddress , 'question' => $this->question]); 
    }
}
