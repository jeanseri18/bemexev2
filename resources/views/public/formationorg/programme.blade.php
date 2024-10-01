@extends('layouts.app')
<style>
    /* Positionnement des boutons à côté du carousel */
  
    .carousel-control-prev {
        margin-right: 10px;
    }

    .carousel-control-next {
        margin-left: 10px;
    }

    /* Agrandir les boutons */
    .carousel-control-prev, .carousel-control-next {
        width: 70px; /* Augmente la largeur des boutons */
        height: 70px; /* Augmente la hauteur des boutons */
    }

    /* Rendre les icônes noires */
    .custom-carousel-icon {
        color:black;
        background-color: transparent; /* Mettre l'icône en noir */
        width: 50px; /* Ajuster la taille de l'icône */
        height: 50px; /* Ajuster la taille de l'icône */
        background-size: 100%, 100%; /* Ajuster la taille pour remplir l'espace */
    }

    /* Empêcher les images de passer à travers */
    .carousel-inner {
        overflow: hidden;
    }

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMjq1iY1qp03y+/c1F9vnF40D3D8s2V+R/6DD" crossorigin="anonymous">

@section('title', 'Formation sur mesure | Bem executive school')

@section('content')
<section class="py-lg-8 py-6 bg-primary">
    <div class=" my-lg-8">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-md-12 col-12">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="mb-5 mb-lg-0">
                            <h2 class="display-4 text-white fw-bold mb-3">
                                Programme sur
                                <u class="text-warning"><span class="text-white"> mesure</span></u>
                            </h2>
                            <p class="mb-5 text-white lead">

                                Nous concevons et délivrons des programmes de formation sur mesure à fort impact pour
                                les entreprises françaises et internationales ​
                            </p>
                            <a href="#!" class="btn btn-outline-white">Commencez</a>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                        <div class="d-flex justify-content-center align-items-center position-relative rounded border-gray-100 border border-4 rounded-3 bg-cover"
                            style="background-image: url(../../assets/images/formationorg/handsome-young-businessman.jpg); height: 300px">
                            <a class="glightbox icon-shape rounded-circle btn-play icon-xl" href="#">
                                <i class="fe fe-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pb-lg-8 ">
    <div class="  " style=" padding-left:70px /* 4px */;
    padding-right:70px;"><br>



        <br>
        <p class="mb-5 ">

            Les programmes sur-mesure de BEM EXECUTIVE EDUCATION sont conçus pour s'adapter aux besoins uniques de
            chaque organisation. En collaboration étroite avec vos équipes dirigeantes, nous analysons vos objectifs et
            vos défis spécifiques pour développer des formations qui répondent précisément à vos attentes.
        </p>
        <h2 class="display-5 fw-bold mb-3">

            <span class="fw-semibold display-4"> Nos clients</span>
        </h2>
        <p class="mb-5 ">
            Depuis plusieurs années, nous collaborons avec des acteurs nationaux et internationaux dans la montée en
            compétence, la fidélisation et la rétention de leurs collaborateurs.

            <font class="text-primary">Devenez partenaire de l'Executive Education</font> et bénéficiez d’un
            accompagnement en continu sur vos projets de formation et d'une gamme diversifiée de programmes adaptés aux
            besoins spécifiques de vos équipes.
        </p>
        <center>
            <h2 class="display-6 fw-bold mb-3">

                <span class="fw-semibold display-4">
                </span>
        </center>
        <div class="bg-light py-3">
            <div class="container mt-lg-6">
                <div class="row mb-6 justify-content-center">
                    <div class="col-lg-12 col-md-12 col-12 text-left">
                        <span class="text-primary mb-0 d-block text-uppercase fw-semibold ls-xl">Ils nous ont fais
                            confiance</span>
                    </div>
                </div>
<div class="table-responsive-lg">
    <div class="row flex-nowrap">
        <div id="partenairesCarousel" class="carousel carousel-dark slide d-flex" data-bs-ride="false" data-bs-touch="true">
            <div class="carousel-inner" style="padding: 0 70px;">
                @foreach($partenaires->chunk(6) as $key => $chunk)
                <div class="carousel-item @if($key === 0) active @endif">
                    <div class="row justify-content-center text-center">
                        @foreach($chunk as $partenaire)
                        <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center align-items-center">
                            <div class="mb-4 card mx-2" style="width: auto; height: 120px; display: flex; align-items: center; justify-content: center; padding: 10px;">
                                @if($partenaire->image)
                                <img src="{{ Storage::url($partenaire->image) }}" alt="logo" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                @else
                                <img src="../assets/images/default-placeholder.jpg" alt="logo" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#partenairesCarousel" data-bs-slide="next">

            <!-- Flèche personnalisée précédente -->
                <span class="custom-carousel-icon carousel-control-prev-icon" aria-hidden="true"></span> <!-- Icône précédente -->
                <span class="visually-hidden">Previous</span>
            </button>

            <!-- Flèche personnalisée suivante -->
            <button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#partenairesCarousel" data-bs-slide="next">
                <span class="custom-carousel-icon carousel-control-next-icon" aria-hidden="true"></span> <!-- Icône suivante -->
                <span class="visually-hidden">Next</span>
            </button>  <button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#partenairesCarousel" data-bs-slide="prev">
          
        </div>
    </div>
</div>

<style>
    .custom-carousel-control {
        background-color: rgba(255, 255, 255, 0.8); /* Couleur de fond semi-transparente */
        border-radius: 50%; /* Arrondir les coins pour un effet circulaire */
        width: 40px; /* Largeur de la flèche */
        height: 40px; /* Hauteur de la flèche */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px; /* Taille de la flèche */
    }

    .custom-carousel-icon {
        font-size: 24px; /* Taille de l'icône */
        color: #000; /* Couleur de l'icône */
    }

    .custom-carousel-control:hover {
        background-color: rgba(255, 255, 255, 1); /* Couleur de fond au survol */
    }
</style>






            </div>

        </div>

        <div>
            <h2>
                <span class="mb-4 h1 fw-semibold">Comment pouvons-nous vous aider ?</span>
            </h2>
            <div>
                <div>
                    <p>En tant que Directeur de la Formation (CLO), Directeur de la Transformation (CTO), ou DRH, vous
                        êtes l’un des moteurs du changement au sein d'une entreprise qui opère à l’international.<br>
                        Vous êtes conscient que vos collaborateurs, individuellement et collectivement, sont essentiels
                        à la réalisation des objectifs de votre entreprise.</p>

                    <p>En tant que dirigeant, vous êtes confronté quotidiennement à des défis stratégiques commerciaux,
                        technologiques et sociaux. Permettre à vos cadres d’acquérir les compétences et les outils
                        appropriés est donc essentiel à votre réussite.<br>
                        C'est là que nous intervenons avec BEM Éducative.<br>
                        Nous collaborons avec des entreprises internationales comme la vôtre pour relever ces défis par
                        le biais de programmes de formation sur mesure.</p>

                    <p class="lead">Nous vous accompagnons à travers des programmes de formation axés sur :</p>

                    <ul>
                        <li>Le développement durable</li>
                        <li>Le leadership</li>
                        <li>Data Science &amp; l'IA</li>
                        <li>L'innovation et l’entrepreneuriat</li>
                    </ul>

                    <p>Grâce à nos programmes, les cadres et managers de votre entreprise acquièrent les compétences
                        dont ils ont besoin aujourd'hui pour pérenniser votre entreprise demain. Ensemble, nous pouvons
                        œuvrer pour un monde prospère, inclusif et durable.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-12 col-12">
                <div class="mb-8 pe-lg-8">
                    <!-- heading -->
                    <h2 class="mb-4 h1 fw-semibold">Pourquoi choisir Bem Executive Education Custom Programs</h2>
                    <p class="lead">Découvrez pourquoi nos programmes sont une solution incontournable pour vos besoins
                        de formation en entreprise</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-lg-12 col-12">
                <!-- accordions -->
                <div class="accordion accordion-flush" id="accordionHEC">
                    <!-- Card 1 -->
                    <div class="border p-3 rounded-3 mb-2" id="headingHEC1">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse"
                                data-bs-target="#collapseHEC1" aria-expanded="true" aria-controls="collapseHEC1">
                                <span class="me-auto">Des programmes de formation transformationnels</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>
                        <!-- collapse -->
                        <div id="collapseHEC1" class="collapse show" aria-labelledby="headingHEC1"
                            data-bs-parent="#accordionHEC">
                            <div class="pt-2">
                                Allez plus loin que la théorie grâce à une approche dynamique qui combine apprentissages
                                académiques et expérimentation en situation réelle. Nos programmes multi-sectoriels vous
                                permettent d'aborder des défis complexes avec une compréhension globale pour une
                                réussite durable.
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="border p-3 rounded-3 mb-2" id="headingHEC2">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse"
                                data-bs-target="#collapseHEC2" aria-expanded="false" aria-controls="collapseHEC2">
                                <span class="me-auto">Une expertise reconnue de notre équipe enseignante</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>
                        <!-- collapse -->
                        <div id="collapseHEC2" class="collapse" aria-labelledby="headingHEC2"
                            data-bs-parent="#accordionHEC">
                            <div class="pt-3">
                                Bénéficiez de l'expertise de professeurs de renommée mondiale et d'intervenants du monde
                                de l'entreprise. Nos coachs vous apportent un soutien personnalisé pour la mise en
                                pratique de vos apprentissages.
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="border p-3 rounded-3 mb-2" id="headingHEC3">
                        <h3 class="mb-0 fs-4">
                            <a href="#" class="d-flex align-items-center text-inherit" data-bs-toggle="collapse"
                                data-bs-target="#collapseHEC3" aria-expanded="false" aria-controls="collapseHEC3">
                                <span class="me-auto">Mettez en œuvre des idées innovantes et impactantes</span>
                                <span class="collapse-toggle ms-4">
                                    <i class="fe fe-chevron-down"></i>
                                </span>
                            </a>
                        </h3>
                        <!-- collapse -->
                        <div id="collapseHEC3" class="collapse" aria-labelledby="headingHEC3"
                            data-bs-parent="#accordionHEC">
                            <div class="pt-3">
                                Intégrez les recherches récentes de nos Instituts spécialisés à vos programmes pour
                                rester à l'avant-garde de l'innovation, et mettez en pratique les stratégies les plus
                                efficaces pour votre secteur d’activité.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</section>

        @include('layouts.contact')


@endsection