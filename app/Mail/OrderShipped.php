<?php

namespace App\Mail;

use App\Imovel;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $imovel;
    public $dados;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Imovel $imovel)
    {
        $this->imovel = $imovel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.shipped')
            ->from('desenvolvimento3@interativasistemas.com')
            ->subject('Dados do Imovel');
    }
}
