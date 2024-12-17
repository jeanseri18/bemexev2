<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Valider les champs du formulaire
        $request->validate([
            'contactName' => 'required|string|max:255',
            'contactPhone' => 'required|string|max:20',
            'contactWhatsNumber' => 'required|string|max:20',
            'contactEmail' => 'required|email',
            'contactsubject' => 'nullable|string|max:255',
            'contactMessage' => 'nullable|string',
        ]);

        // Récupérer les données
        $data = $request->only([
            'contactName',
            'contactPhone',
            'contactWhatsNumber',
            'contactEmail',
            'contactsubject',
            'contactMessage',
        ]);

        // Envoyer l'e-mail
        Mail::to('contact@bemexecutive.education')->send(new ContactMail($data));

        // Retourner une réponse de succès
        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
