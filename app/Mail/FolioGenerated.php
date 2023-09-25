<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FolioGenerated extends Mailable
{
    use Queueable, SerializesModels;

    public $folio;

    /**
     * Create a new message instance.
     *
     * @param  string  $folio  El folio generado
     * @return void
     */
    public function __construct($folio)
    {
        $this->folio = $folio;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.folio-generated')
            ->subject('Folio Generado Exitosamente')
            ->with([
                'folio' => $this->folio,
            ]);
    }
}
