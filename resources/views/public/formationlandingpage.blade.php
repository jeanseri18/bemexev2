@extends('layouts.app')

@section('title', 'Formation certifiante | Bem executive school')
<style>
.card-custom {
    min-height: 450px;
    /* Ajustez cette valeur selon vos besoins */

    flex-direction: column;
    justify-content: space-between;
}

.bg-slide1 {
    background: linear-gradient(#0C3396B8, #000000F1), url('../../assets/images/backhome.png') no-repeat right;
    background-size: auto;
    background-position: right;
    height: 610px;
    background-size: cover;

}

.bg-slide2 {
    background: linear-gradient(#0C3396B8, #000000F1), url('../../assets/images/formationorg/handsome-young-businessman.jpg') no-repeat right;
    background-size: auto;
    background-position: right;
    height: 610px;

    background-size: cover;
}

.bg-slide3 {
    background: linear-gradient(#0C3396B8, #000000F1), url('../../assets/images/about/geeksui-img-3.jpg') no-repeat right;
    background-size: auto;
    background-position: right;
    height: 610px;
    background-size: cover;
}

.bg-spacing {
    margin-left: 15%;
    margin-top: 5%;
    margin-right: 15%;
}

.my-slider .card-img-top {
    width: 100%;
    height: 200px;
    /* Hauteur fixe pour toutes les images */
    object-fit: cover;
    /* Couvrir le conteneur sans déformation */
}

.card {
    overflow: hidden;
    /* Éviter que les images débordent du conteneur */
}

.item {
    display: flex;
    justify-content: center;
    /* Centrer les éléments horizontalement */
    align-items: center;
    /* Centrer les éléments verticalement */
}

.card-img-top {
    width: 100%;
    height: 200px;
    /* Hauteur fixe pour toutes les images */
    object-fit: cover;
    /* Couvrir le conteneur sans déformation */
}

#certifCarouselControls {
    display: flex;
    justify-content: space-between;
    position: absolute;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
}

#certifCarouselControls .prev,
#certifCarouselControls .next {
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    padding: 10px;
    cursor: pointer;
}
</style>
@section('content')
<section class="py-lg-8 py-6 bg-primary text-white">
    <div class="container my-lg-10">
        <div class="row">
            <div class="col-xl-12  col-md-12 col-12">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="mb-5 mb-lg-0">
                            <h4 class="display-6 fw-bold mb-3 text-white">
                            CERTIFICAT EXECUTIF  </h4>        <h2 class="display-4 fw-bold mb-3 text-white">                 <u class="text-warning"><span class="text-white">  ADMINISTRATEUR DE BANQUES   </span></u>
                            </h2>
                            <p class="mb-5 lead">

                            Les responsabilités des membres de conseils d’administration de banques se renforcent de plus en plus en Afrique Sub Saharienne notamment eu égard au niveau de tolérance aux risques des établissements financiers.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-12 col-12">
                        <div class="d-flex justify-content-center align-items-center position-relative rounded border-gray-100 border border-4 rounded-3 bg-cover"
                            style="background-image: url(pdf/Admin_Banques.jpg); height:500px;">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-lg-8 ">
    <div class="container  "><br>

        <p>
            <br>
            <br>
            Les administrateurs se doivent donc de disposer d’une bonne connaissance des principaux mécanismes et enjeux de la banque, des composantes essentielles de la réglementation et de développer le jugement nécessaire à l’appréciation de l’efficacité des dispositifs de maîtrise des risques.
            </p>    <p>
BEM EXECUTIVE EDUCATION et ESSEC Business School collaborent afin de proposer aux administrateurs (et futurs administrateurs) de banques, dirigeants d’organismes bancaires et administrateurs indépendants en Afrique Sub Saharienne francophone les connaissances nécessaires, tant théoriques que pratiques, afin prendre part aux décisions stratégiques de leur institution et des comités spécialisés.
</p>    <p>
Sous la direction experte d’Alain MARTEL, ancien Délégué général de L’IFA (Institut Français des Administrateurs), ce programme offre une opportunité unique aux participants de renforcer l’efficacité de la gouvernance de leur organisation financière grâce un séminaire de 6 jours sur le campus de l’ESSEC à Rabat (Maroc) suivi d’un accompagnement individualisé avec des experts internationaux en ligne et des Masterclass
        </p>
        <h2>Point forts du programme</h2>
<div class="row">
    <div class="col-lg-12 col-12">
        <!-- accordions -->
        <div class="accordion accordion-flush" id="accordionHEC">
            <!-- Card 1 -->
            <div class="border p-3 rounded-3 mb-2" id="headingHEC1">
                <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse"
                        data-bs-target="#collapseHEC1" aria-expanded="true" aria-controls="collapseHEC1">
                        <span class="me-auto">Comprendre le rôle et la mission d'un administrateur et d'un conseil d'administration</span>
                        <span class="collapse-toggle ms-4">
                            <i class="fe fe-chevron-down"></i>
                        </span>
                    </a>
                </h3>
                <!-- collapse -->
                <div id="collapseHEC1" class="collapse show" aria-labelledby="headingHEC1"
                    data-bs-parent="#accordionHEC">
                    <div class="pt-2">
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush" id="accordionHEC2">
            <!-- Card 1 -->
            <div class="border p-3 rounded-3 mb-2" id="headingHEC2">
                <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse"
                        data-bs-target="#collapseHEC2" aria-expanded="true" aria-controls="collapseHEC2">
                        <span class="me-auto">                         Maîtriser le rôle de l’administrateur bancaire dans la gestion des risques opérationnels et la gestion de situations de crises<br>
                        </span>
                        <span class="collapse-toggle ms-4">
                            <i class="fe fe-chevron-down"></i>
                        </span>
                    </a>
                </h3>
                <!-- collapse -->
                <div id="collapseHEC2" class="collapse show" aria-labelledby="headingHEC12"
                    data-bs-parent="#accordionHEC2">
                    <div class="pt-2">
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionHEC3">
            <!-- Card 1 -->
            <div class="border p-3 rounded-3 mb-2" id="headingHEC3">
                <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse"
                        data-bs-target="#collapseHEC3" aria-expanded="true" aria-controls="collapseHEC3">
                        <span class="me-auto">Savoir décrypter un plan stratégique</span>
                        <span class="collapse-toggle ms-4">
                            <i class="fe fe-chevron-down"></i>
                        </span>
                    </a>
                </h3>
                <!-- collapse -->
                <div id="collapseHEC3" class="collapse show" aria-labelledby="headingHEC3"
                    data-bs-parent="#accordionHEC3">
                    <div class="pt-2">
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordion6">
            <!-- Card 1 -->
            <div class="border p-3 rounded-3 mb-2" id="headingHEC6">
                <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse"
                        data-bs-target="#collapseHEC3" aria-expanded="true" aria-controls="collapseHEC6">
                        <span class="me-auto">Savoir décrypter un plan stratégique</span>
                        <span class="collapse-toggle ms-4">
                            <i class="fe fe-chevron-down"></i>
                        </span>
                    </a>
                </h3>
                <!-- collapse -->
                <div id="collapseHEC6" class="collapse show" aria-labelledby="headingHEC6"
                    data-bs-parent="#accordionHEC6">
                    <div class="pt-2">
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion accordion-flush" id="accordionHEC4">
            <!-- Card 1 -->
            <div class="border p-3 rounded-3 mb-2" id="headingHEC4">
                <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse"
                        data-bs-target="#collapseHEC4" aria-expanded="true" aria-controls="collapseHEC4">
                        <span class="me-auto"> Identifier les meilleures pratiques de gouvernance bancaire</span>
                        <span class="collapse-toggle ms-4">
                            <i class="fe fe-chevron-down"></i>
                        </span>
                    </a>
                </h3>
                <!-- collapse -->
                <div id="collapseHEC4" class="collapse show" aria-labelledby="headingHEC4"
                    data-bs-parent="#accordionHEC4">
                    <div class="pt-2">
                       
                    </div>
                </div>
            </div>
        </div>


        <div class="accordion accordion-flush" id="accordionHEC5">
            <!-- Card 1 -->
            <div class="border p-3 rounded-3 mb-2" id="headingHEC5">
                <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse"
                        data-bs-target="#collapseHEC5" aria-expanded="true" aria-controls="collapseHEC5">
                        <span class="me-auto">Apprécier les missions des différents comités spécialisés et leur lien avec le conseil d’administration</span>
                        <span class="collapse-toggle ms-4">
                            <i class="fe fe-chevron-down"></i>
                        </span>
                    </a>
                </h3>
                <!-- collapse -->
                <div id="collapseHEC5" class="collapse show" aria-labelledby="headingHEC5"
                    data-bs-parent="#accordionHEC5">
                    <div class="pt-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
    <div class="">
        <div class="header">
           
        </div>
        <div class="content">
           
        </div>
     
    </div>

</div>
</section>
<section class="bg-light ">
<div class="  " style=" padding:70px /* 4px */;
 ">
        

<div class="text-left  ">
   
</div>
<div class="row">
    <div class=" col-md-6">
        <div class="row gy-4 gy-lg-0">
            <br>
            <div class="col-md-12"><br><br>
            <span class="fw-semibold display-4">    Séminaire à Rabat
    </span>
    <p>17 - 22 Février 2025</p>
    <h3 class=" mt-3 mb-0 text-black">Prêt à franchir un nouveau cap dans votre carrière ?</h3>
    <br>
                <div class="card">
                    <div class="card-body">
                    <p>Pour plus d’informations, merci de contacter :</p><br>
            <ul>
                <li><b>Mme Astou CISSE</b> (<a href="mailto:astou.cisse@bem.ci">astou.cisse@bem.ci</a>)</li>
                <li><b>Mme Ndeye Yacine Cissé</b> (<a href="mailto:nycisse@bemexecutive.education">nycisse@bemexecutive.education</a>)</li>
            </ul><br>
            <div class="contact-info">
            <p><b>Contact :</b> +221 78 608 23 97</p>
        </div>
                    </div>
                </div>
            </div>
            <br>
        
        
        </div>
    </div>

    <div class="card col-md-6">
        <div class="card-body p-6">
        <form method="POST" action="{{ route('send.email') }}">
            
    @csrf
    <div class="row">

        <!-- Nom de l'entreprise -->
        <div class="col-6 mb-3">
            <label for="companyName" class="form-label">Nom de l’entreprise <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="companyName" placeholder="Entrez le nom de votre entreprise" required>
        </div>

        <!-- Nom et Prénoms -->
        <div class="col-6 mb-3">
            <label for="fullName" class="form-label">Nom et Prénoms <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="fullName" placeholder="Entrez votre nom et prénom" required>
        </div>

        <!-- Votre Poste -->
        <div class="col-6 mb-3">
            <label for="jobTitle" class="form-label">Votre Poste <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="jobTitle" placeholder="Entrez votre poste" required>
        </div>

        <!-- Numéro de téléphone -->
        <div class="col-6 mb-3">
            <label for="phoneNumber" class="form-label">Numéro de téléphone <span class="text-danger">*</span></label>
            <input type="tel" class="form-control" name="phoneNumber" placeholder="Entrez votre numéro de téléphone" required>
        </div>

        <!-- Adresse E-mail -->
        <div class="col-12 mb-3">
            <label for="email" class="form-label">Adresse E-mail <span class="text-danger">*</span></label>
            <input type="email" class="form-control" name="email" placeholder="Entrez votre adresse e-mail" required>
        </div>

        

        <!-- Besoin en Formation -->
        <div class="col-12 mb-3">
            <label for="trainingNeeds" class="form-label">Votre Besoin en Formation <span class="text-danger">*</span></label>
            <textarea class="form-control" name="trainingNeeds" rows="4" placeholder="Décrivez vos besoins en formation" required></textarea>
        </div>

        <!-- Bouton de soumission -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Envoyer la demande</button>
        </div>
    </div>
</form>
        </div>
    </div>
</div>
<br>
<br>
</div></section>
@endsection