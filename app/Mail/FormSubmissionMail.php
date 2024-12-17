<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Créez une nouvelle instance du message.
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
            subject: 'Nouvelle demande de formation',
        );
    }

    /**
     * Définit le contenu du message.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.form_submission', // Vue utilisée pour l'e-mail
            with: ['data' => $this->data], // Passe les données à la vue
        );
    }

    /**
     * Retourne les pièces jointes (optionnel).
     */
    public function attachments(): array
    {
        return [];
    }
}
