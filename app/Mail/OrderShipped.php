<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Order;
use App\Voucher;
use Cart;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $orders;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $content = Cart::content();
        $subtotal = Cart::subtotal();
        $this->order->activation_link = route('activateOrder', $this->order->id);
        return $this->markdown('mails.shipped')
            ->with('subtotal', $subtotal)
            ->with('content', $content)
            ->with([
                'order' => $this->order,
            ]);
    }
}
