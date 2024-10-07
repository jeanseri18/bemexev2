@extends('layouts.app')
<style>
.card-custom {
    min-height: 300px;
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
@section('title', 'Acceuil | Bem executive school')

@section('content')
<section class="bg-light" <div class="">
    <div>
        <div class="row align-items-center ">
            <div class="col-xl-12 col-lg-12">
                <!-- Carrousel -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active conatiner bg-slide1 ">
                            <div class="d-flex flex-column align-items-start text-start py-5 bg-spacing">
                                <span class="text-primary fw-semibold display-8">Bienvenue à BEM EXECUTIVE
                                    EDUCATION</span>
                                <h1 class="display-2 my-3" style="color:white;">Formations Sur Mesure pour Cadres et
                                    Dirigeants</h1>
                                <p class="mb-5 fs-3" style="color:white;">Accompagnez le développement de vos leaders
                                    avec des programmes adaptés à vos besoins et à votre culture d'entreprise.</p>
                                <a href="#" class="btn btn-primary btn-lg">En savoir plus</a>
                            </div>
                        </div>
                        <!-- Ajoutez d'autres items ici -->
                        <div class="carousel-item conatiner bg-slide2">
                            <div class="d-flex flex-column align-items-start text-start py-5 bg-spacing">
                                <span class="text-primary fw-semibold display-8">Formation Innovante</span>
                                <h1 class="display-2 my-3" style="color:white;">Développez le potentiel de vos
                                    collaborateurs</h1>
                                <p class="mb-5 fs-3" style="color:white;">Explorez nos programmes de formation sur
                                    mesure conçus pour catalyser la croissance et l'excellence de votre équipe</p>
                                <a href="#" class="btn btn-primary btn-lg">En savoir plus</a>
                            </div>
                        </div>

                        <div class="carousel-item conatiner bg-slide3">
                            <div class="d-flex flex-column align-items-start text-start py-5 bg-spacing">
                                <span class="text-primary fw-semibold display-8">Formation Innovante</span>
                                <h1 class="display-2 my-3" style="color:white;">Boostez votre carrière professionnelle
                                    et développez des Compétences </h1>
                                <p class="mb-5 fs-3" style="color:white;">Découvrez nos formations innovantes qui
                                    transforment vos capacités professionnelles et <br>personnelles.<br></p>
                                <a href="#" class="btn btn-primary btn-lg">En savoir plus</a>
                            </div>
                        </div>
                        <!-- Ajoutez autant d'items que nécessaire -->
                    </div>
                    <!-- Indicateurs -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <!-- Ajoutez d'autres boutons d'indicateur ici -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="bg-white shadow rounded-3 mt-n8 border">
                <div class="row justify-content-around py-5 gy-4 gy-lg-0">
                    <div class="col-xl-2 col-md-4 text-center px-4">
                        <div class="h1 mb-0">+10</div>
                        <span>Années d'experience</span>
                    </div>
                    <div class="col-xl-2 col-md-4 text-center px-4">
                        <div class="h1 mb-0">+20</div>
                        <span>Université partenaire</span>
                    </div>
                    <div class="col-xl-2 col-md-4 text-center px-4">
                        <div class="h1 mb-0">+10</div>
                        <span>Nationalités représentées</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->

<div class="container mt-5">
    <h5 class="card-title text-center"><span class="text-primary">Presentation</span></h5>
    <h2 class="card-title display-3 text-center">BEM Executive Education</h2><br>
    <div class="card">
        <div class="row no-gutters">
            <!-- Colonne avec image -->
            <div class="col-md-6">
                <img src="../../assets/1554450685082.jpeg" class="card-img w-100" style="  background-size: cover;"
                    alt="Image">

            </div>
            <!-- Colonne avec texte -->
            <div class="col-md-6">
                <div class="card-body">

                    <ul class="list-unstyled mb-5" style="font-size:14PX">
                        <li class="mb-2">

                            <span class="ms-2">
                                <h3>Mot du DG de BEM Executive Education </h3>

                                <big>"</big>Dès sa création <span class="text-primary"> BEM Management School</span>
                                s’est consacrée à la formation de managers africains responsables et immédiatement
                                opérationnels. BEM Management School est un établissement d’enseignement supérieur privé
                                général. Il a pour vocation de former et d’accompagner des managers africains
                                responsables et opérationnels immédiatement. Il entend ainsi apporter une contribution
                                décisive à l’émergence et à la consolidation d’une conscience africaine forte et ouverte
                                sur le progrès, audacieuse, ambitieuse et responsable.
                            </span>
                        </li>
                        <li class="mb-2">

                            <span class="ms-2">Avec le même objectif de montée en compétences et la même exigence
                                d’excellence, BEM Executive Education souhaite accompagner aujourd’hui vos
                                collaborateurs tout au long de leur carrière afin de leur permettre de progresser et de
                                contribuer de manière croissante au développement, à la stratégie de votre organisation.
                                En s’appuyant sur un panel de consultants internationaux expérimentés, BEM Executive
                                Education intervient notamment dans les domaines de l’efficacité managériale, de la
                                communication maîtrisée, du développement personnel et de la gouvernance. Grâce à ses
                                séminaires et ses programmes certifiants, BEM Executive Education accompagne vos
                                collaborateurs et les installe dans une culture de performance et de
                                responsabilité.</span>
                        </li>
                        <li class="mb-2">

                            <span class="ms-2">Notre philosophie réside cependant dans notre capacité à proposer des
                                programmes sur mesure, construits sur la base des besoins spécifiques de chaque
                                organisation. Notre méthodologie place le client au cœur du processus de définition, de
                                validation et d’évaluation du parcours de formation. En complément du transfert de
                                connaissances et de compétences, BEM Executive Education s’attache à communiquer à vos
                                collaborateurs des valeurs éthiques et comportementales indispensables à la formation de
                                collaborateurs responsables.<big>"</big></span><br><br>


                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <br>
</section>

<section class="py-8" style="background:#FF324A">
    <!-- container -->
    <div class="container">
        <div class="row">
            <!-- col -->
            <div class=" col-xl-12 col-md-12 col-12">
                <div class="row text-center">
                    <div class="col-md-12  mb-8 mt-6">
                        <!-- text -->
                        <!-- heading -->
                        <h2 class="h1 fw-bold mt-3" style="color:white">Nos domaines de compétence</h2>
                        <!-- text -->
                        <p class="mb-0 fs-4" style="color:white">Découvrez nos domaines clés pour optimiser vos
                            compétences et votre développement professionnel.</p>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card border-top border-4 card-hover-with-icon border-0 card-custom ">
                            <div class="card-body">
                                <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/images/competence/leadership.png" width="30px" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h2 class="mb-0">MANAGEMENT & STRATÉGIE</h2><BR>
                                            <p class="mb-0">L’expertise de BEM Executive Education dans l'enseignement
                                                et la recherche en Management et Stratégie est reconnue mondialement.
                                            </p>
                                            <br>
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: LEADERSHIP -->
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
                            <div class="card-body">
                                <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/images/competence/conferencier.png" width="30px" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h2 class="mb-0">LEADERSHIP</h2><br>


                                            <p class="mb-0">Chaque professionnel connaît dans son parcours des moments
                                                clés qui nécessitent de développer son leadership.</p>
                                            <br> <br>
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: COACHING -->
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
                            <div class="card-body">
                                <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/images/competence/image.png" width="30px" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h2 class="mb-0">COACHING</h2><br>
                                            <p class="mb-0">Notre conviction est que chacun porte en lui ses propres
                                                réponses, les plus efficientes possible, pour résoudre sa problématique.
                                            </p>
                                            <br>
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: FINANCE -->
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
                            <div class="card-body">
                                <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/images/competence/aimant.png" width="30px" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h2 class="mb-0">FINANCE</h2><br>
                                            <p class="mb-0">Après la crise financière, on ne peut plus douter de la
                                                nécessité de doter les organisations et managers d’une expertise en
                                                finance d’entreprise.</p>
                                            <br>
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: MARKETING, DATA & BUSINESS DEVELOPMENT -->
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
                            <div class="card-body">
                                <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/images/competence/social.png" width="30px" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h2 class="mb-0">MARKETING, DATA & BUSINESS DEVELOPMENT</h2>
                                            <p class="mb-0">Le Marketing, la data et le Développement Commercial sont
                                                des facteurs essentiels du processus de création de valeur des
                                                entreprises.</p>
                                            <br>
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6: ENTREPRENEURIAT & INNOVATION -->
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
                            <div class="card-body">
                                <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/images/competence/entrepreneuriat.png" width="30px" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h2 class="mb-0">ENTREPRENEURIAT & INNOVATION</h2>
                                            <p class="mb-0"> BEM Executive Education est engagée dans l’entrepreneuriat,
                                                l'innovation tant au niveau de la formation qu’à celui de la recherche.
                                            </p>
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7: DÉVELOPPEMENT DURABLE -->
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
                            <div class="card-body">
                                <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/images/competence/entrepreneuriat.png" width="30px" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h2 class="mb-0">DÉVELOPPEMENT DURABLE</h2>
                                            <p class="mb-0">Les entreprises doivent jouer un rôle clé dans la
                                                construction d'un avenir plus durable, et nos programmes sont conçus
                                                pour aider les leaders à prendre des décisions éclairées en la matière.
                                            </p>
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8: EXCELLENCE OPÉRATIONNELLE -->
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
                            <div class="card-body">
                                <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/images/competence/conferencier.png" width="30px">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h2 class="mb-0">EXCELLENCE OPÉRATIONNELLE</h2>
                                            <p class="mb-0">L'excellence opérationnelle est essentielle pour améliorer
                                                la performance, la qualité et la rentabilité des organisations.</p>
                                            <br>
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- Card 9: GESTION DE PROJET -->
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card-custom card border-top border-4 card-hover-with-icon border-0">
                            <div class="card-body">
                                <center>
                                    <div class="icon-shape icon-lg rounded-circle bg-light mb-3 card-icon">
                                        <img src="../../assets/images/competence/aimant.png" width="30px">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <h2 class="mb-0">GESTION DE PROJET</h2><br>
                                            <p class="mb-0">La gestion de projet est un atout clé pour piloter
                                                efficacement des initiatives complexes et multidimensionnelles.</p>
                                            <br>
                                        </div>
                                    </div>

                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
</section>

<section class="">

    <!-- Hero Section -->
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-12">
                <div class="mb-lg-12 mb-6">
                    <center>
                        <span class="text-primary">Séminaire </span>

                        <h2 class="h1 fw-bold">Nos récents
                            <u class="text-warning"><span class="text-primary"> séminaire</span></u>
                        </h2>
                        <p class="lead mb-0"></p>
                    </center>
                </div>
            </div>
        </div>
        <div class="table-responsive-xl pb-6">


            <!-- Tiny Slider pour les cours -->


            <div class="position-relative">
                <ul class="controls" id="my-sliderControls" aria-label="Carousel Navigation" tabindex="0">
                    <li class="prev" aria-controls="my-slider" tabindex="-1" data-controls="prev">
                        <i class="fe fe-chevron-left"></i>
                    </li>
                    <li class="next" aria-controls="my-slider" tabindex="-1" data-controls="next">
                        <i class="fe fe-chevron-right"></i>
                    </li>
                </ul>
                <div class="tns-outer" id="my-slider-ow">
                    <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span
                            class="current"></span> </div>
                    <div id="my-slider-mw" class="tns-ovh">
                        <div class="tns-inner" id="my-slider-iw">
                            <div class="sliderFirst tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                id="my-slider" style="transform: translate3d(-50%, 0px, 0px);">

                               <!-- <div class="item tns-item container" aria-hidden="true" tabindex="-1">
                                    <div class="card card-hover">
                                        <a href="{{ asset('pdf/FICHE INNONVATION & CREATIVE 1.pdf') }}">
                                            <img src="../../assets/images/certif/Capture d’écran 2024-09-16 à 18.14.30.png"
                                                alt="course" class="card-img-top">
                                        </a>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="badge bg-info-soft">Certificat Executif</span>
                                                <a href="{{ asset('pdf/FICHE INNONVATION & CREATIVE 1.pdf') }}"
                                                    class="fs-5"><i class="fe fe-heart align-middle"></i></a>
                                            </div>
                                            <h4 class="mb-2 text-truncate-line-2"><a
                                                    href="{{ asset('pdf/FICHE INNONVATION & CREATIVE 1.pdf') }}"
                                                    class="text-inherit">Certificat Innovation et Créativité </a></h4>
                                            <small>Programme combinant les méthodologies de gestion de projet
                                                prédictives et agiles pour une flexibilité maximale.</small>
                                            <br>
                                            <br>

                                        </div>
                                       
                                    </div><br>
                                </div>  Card Footer -->
                                
                            </div>
                        </div>
                    </div>

                  

</section>


<!-- Hero Section -->
<div class="container my-lg-8">
    <div class="row">
        <div class="col-xl-6 col-md-12 col-12">
            <div class="mb-lg-8 mb-6">
                <h2 class="h1 fw-bold">
                    Evenements
                    <u class="text-warning"><span class="text-primary">et agenda</span></u>
                </h2>
                <p class="lead mb-0">Decouvrez tous nos evenements </p>
            </div>
        </div>
    </div>

    <section>
        <div class="position-relative">
            <ul class="controls" id="eventCarouselControls" aria-label="Carousel Navigation" tabindex="0">
                <li class="prev" aria-controls="eventCarousel" tabindex="-1" data-controls="prev">
                    <i class="fe fe-chevron-left"></i>
                </li>
                <li class="next" aria-controls="eventCarousel" tabindex="-1" data-controls="next">
                    <i class="fe fe-chevron-right"></i>
                </li>
            </ul>
            <div class="tns-outer" id="eventCarousel-ow">
                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span
                        class="current">1 to {{ count($events) }}</span> of {{ count($events) }}</div>
                <div id="eventCarousel-mw" class="tns-ovh">
                    <div class="tns-inner" id="eventCarousel-iw">
                        <div class="sliderFirst tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                            id="eventCarousel" style="transform: translate3d(-50%, 0px, 0px);">

                            @foreach($events as $event)
                            <div class="item tns-item container" aria-hidden="true" tabindex="-1">
                                <div class="card mb-4 mb-xl-0 card-hover border">
                                    <a href="{{ route('event.show', $event->id) }}">
                                        @if($event->image)
                                        <img src="{{ Storage::url($event->image) }}" alt="{{ $event->titre }}"
                                            class="card-img-top">
                                        @else
                                        <img src="../assets/images/default-placeholder.jpg" class="card-img-top"
                                            alt="Image par défaut">
                                        @endif
                                    </a>
                                    <div class="card-body">
                                        <h3 class="mb-4 text-truncate">
                                            <a href="#!" class="text-inherit">{{ $event->titre }}</a>
                                        </h3>
                                        <div class="mb-4">
                                            <div class="mb-3 lh-1">
                                                <span class="me-1">
                                                    <i class="bi bi-calendar-check"></i>
                                                </span>
                                                <span>{{ $event->date }} </span>
                                            </div>
                                            <div class="lh-1">
                                                <span class="align-text-top me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                                        </path>
                                                        <path
                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span>@if($event->heure) à {{ $event->heure }} @endif</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card -->

                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>




</div>
<section class="my-xl-7 py-5">
    <div class="container" data-cue="fadeIn" data-show="true"
        style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="text-center mb-7 pb-2">
                    <h2 class="h1 fw-bold mb-3">Découvrez Nos Partenaires académiques :</h2>
                </div>
            </div>
        </div>
        <div class="row mb-7 pb-2 text-center justify-content-center g-0">
            <div class="col-lg-12 col-12">
                <div class="marquee" data-cue="slideInLeft" data-show="true"
                    style="animation-name: slideInLeft; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="track">
                        @foreach($partenaires as $partenaire)
                        <a href="#" class="btn btn-white rounded-pill me-1 mb-3 btn-logo btn-lift shadow">
                            <span
                                style="width: auto; height: 80px; display: flex; align-items: center; justify-content: center; padding: 10px;">
                                @if($partenaire->image)
                                <img src="{{ Storage::url($partenaire->image) }}" alt="{{ $partenaire->titre }}"
                                    class="partner-logo"
                                    style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                @else
                                <img src="../assets/images/default-placeholder.jpg" class="partner-logo"
                                    alt="Image par défaut">
                                @endif
                            </span>
                            <!--span class="ms-1 d-none d-lg-inline-flex">{{ $partenaire->titre }}</span-->
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inclure le CSS de Tiny Slider -->

<!-- Inclure le CSS de Tiny Slider -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">

<!-- Inclure le JS de Tiny Slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    tns({
        container: '#my-slider',
        responsive: {
            640: {
                items: 2,
            },

            768: {
                items: 3,
            }
        },

        slideBy: 'page',
        autoplay: false,
        nav: false,
        autoplayButtonOutput: false,

        controlsContainer: '#my-sliderControls',
    });

    tns({
        container: '#eventCarousel',
        responsive: {
            640: {
                items: 2,
            },

            768: {
                items: 3,
            }
        },

        slideBy: 'page',
        autoplay: false,
        nav: false,
        autoplayButtonOutput: false,

        controlsContainer: '#eventCarouselControls',
    });
});
</script>


@endsection