<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Action;
use App\Models\Partenaire;

class PublicController extends Controller
{
    // Méthode pour afficher la page d'accueil
    public function welcome()
    {
        $events = Blog::where('type', 'evenement')
        ->where('statut', 'active')
        ->distinct()
        ->get();

    $orderedTypes = [
    'CIE',
    'SENELEC',
    'ecobank',
    'SOCIETE GENERAL',
    'Orange',
    'BOAD',
    'TOTAL',
    'BICIS',
    'bdu-ci',
    'DOUANE SENEGALE',
];

// Récupération de tous les partenaires en respectant l'ordre défini
$partenaires = Partenaire::where('type', 'ecole')->orderByRaw("FIELD(titre, '" . implode("', '", $orderedTypes) . "')DESC") 
    ->get();        Action::create([
            'action_type' => 'accueil',
            'performed_at' => now(),
        ]);
        return view('welcome',compact('events','partenaires'));
    }

    // Méthode pour afficher la page "About"
    public function about()
    {
        $ecoles = Partenaire::where('type', 'ecole')->get();
        $entreprises = Partenaire::where('type', 'entreprise')->get();
        Action::create([
            'action_type' => 'apropos',
            'performed_at' => now(),
        ]);
        return view('public.about',compact('entreprises','ecoles'));
    }

    // Méthode pour afficher la page "Partner"
    public function partner()
    {
        $partenaires = Partenaire::all();
        Action::create([
            'action_type' => 'partenaire',
            'performed_at' => now(),
        ]);
        return view('public.partner',compact('partenaires'));
    }

    // Méthode pour afficher la page "Contact Us"
    public function contactUs()
    {   Action::create([
        'action_type' => 'contact',
        'performed_at' => now(),
    ]);
        return view('public.contactus');
    }

    // Méthode pour afficher la page "Events"
    public function events()
    {
        $events = Blog::where('type', 'evenement')->where('statut', 'active')->get();
        $webinars = Blog::where('type', 'webinaire')->where('statut', 'active')->get();
        return view('public.events', compact('events','webinars'));    }
    public function formation()
    {
        Action::create([
            'action_type' => 'formation',
            'performed_at' => now(),
        ]);
        return view('public.formations');
    }

    public function showEvent($id)
{
    $event = Blog::findOrFail($id);
    return view('public.event-detail', compact('event'));
}

    public function formationcontinue()
    {
        $partenaires = Partenaire::where('type', 'ecole')->get();
        return view('public.formationcontinue', compact('partenaires'));
    }


    public function formationcertifiante()
    {
        $partenaires = Partenaire::where('type', 'ecole')->get();
        return view('public.formationcontinue.certifiante', compact('partenaires'));
    }

    public function formationdiplomante()
    {
        $partenaires = Partenaire::where('type', 'ecole')->get();
        return view('public.formationcontinue.diplomante', compact('partenaires'));
    }
    public function formationexec()
    {
        $partenaires = Partenaire::where('type', 'ecole')->get();

        return view('public.formationexec', compact('partenaires'));
    }
    public function formationorg()
    {
        $partenaires = Partenaire::where('type', 'ecole')->get();

        return view('public.formationorg', compact('partenaires'));
    }

    public function formationelearning()
    {
        $partenaires = Partenaire::where('type', 'ecole')->get();

        return view('public.formationcontinue.elearning', compact('partenaires'));
    }
    public function formationcat()
    {
        $partenaires = Partenaire::where('type', 'ecole')->get();

        return view('public.formationorg.catalogue', compact('partenaires'));
    }

    public function formationprogramme()
    {
$orderedTypes = [
    'CIE',
    'SENELEC',
    'ecobank',
    'SOCIETE GENERAL',
    'Orange',
    'BOAD',
    'TOTAL',
    'BICIS',
    'bdu-ci',
    'DOUANE SENEGALE',
];

$partenaires = Partenaire::where('type', 'entreprise')
    ->orderByRaw("FIELD(titre, '" . implode("', '", $orderedTypes) . "') DESC") // Utilisez DESC pour vous assurer que l'ordre est respecté
    ->get();

        return view('public.formationorg.programme', compact('partenaires'));
    }

    public function actualite()
    {
        // Utiliser la méthode paginate() pour la pagination, ici avec 10 résultats par page
        $events = Blog::where('type', 'actualite')
                      ->where('statut', 'active')
                      ->paginate(10); // Tu peux ajuster le nombre de résultats par page
    
        return view('public.blog', compact('events'));
    }
    
}