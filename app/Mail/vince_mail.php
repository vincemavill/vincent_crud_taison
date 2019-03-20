<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;


class vince_mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        
        $this->request = $request->all();


        // $this->phone = $request->input('phone');
        // $this->message = $request->input('message');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        
        return $this->view('themail')->with([
            'name' => $this->request->name,
            'quantity' => $this->request->quantity
        ]);
    }
}
