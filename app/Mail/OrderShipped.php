<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orders.shipped')
						->with([
								'orderName' => $this->order->name,
								'orderPrice' => $this->order->price,
							]);
    }

    public function ship(Request $request, $orderId)
    {

        $order = Order::findOrFail($orderId);
        dd($order);

        $message = (new OrderShipped($order))
            ->onConnection('sqs')
            ->onQueue('emails');


        Mail::to($request->user())
            ->queue($message);
    }
}
