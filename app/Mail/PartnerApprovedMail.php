<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartnerApprovedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $partner;

    /**
     * Create a new message instance.
     */
    public function __construct($partner)
    {
        $this->partner = $partner;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        $registrationLink = route('admin.barber.register', encrypt($this->partner->email));

        return $this->subject('Your Inquiry is Approved')
            ->view('emails.partner_approved', compact('registrationLink'));
    }
}
