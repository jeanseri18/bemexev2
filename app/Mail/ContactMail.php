<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Crée une nouvelle instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Définit l'enveloppe du message.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle demande de contact',
        );
    }

    /**
     * Définit le contenu de l'e-mail.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact', // Vue Blade
            with: ['data' => $this->data]
        );
    }

    /**
     * Retourne les pièces jointes.
     */
    public function attachments(): array
    {
        return [];
    }
}
