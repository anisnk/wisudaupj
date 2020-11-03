<?php

namespace App\Mail;

use App\TamuUndangan;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QrMail extends Mailable
{
    use Queueable, SerializesModels;

    public $tamuUndangan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(TamuUndangan $tamuUndangan)
    {
        $this->tamuUndangan = $tamuUndangan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.undangan');
    }
}
