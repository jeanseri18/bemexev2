<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormSubmissionMail;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    
    public function sendEmail(Request $request)
    {
        // Valider les champs
        $request->validate([
            'companyName' => 'required|string|max:255',
            'fullName' => 'required|string|max:255',
            'jobTitle' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:20',
            'email' => 'required|email',
            'trainingNeeds' => 'required|string',
        ]);
        // Récupérer les données du formulaire
        $data = $request->only([
            'companyName', 'fullName', 'jobTitle', 'phoneNumber', 'email', 'trainingNeeds'
        ]);
    
        // Envoyer l'e-mail
        Mail::to('contact@bemexecutive.education')->cc('jeansetoneseri@gmail.com')               // Adresse en copie (CC)
        ->send(new FormSubmissionMail($data));
    
        // Rediriger avec un message de succès
        return back()->with('success', 'Votre demande a été envoyée avec succès.');
    }
}
    