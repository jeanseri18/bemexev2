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
    <div class="container my-lg-8">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-md-12 col-12">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="mb-5 mb-lg-0">
                            <h2 class="display-4 fw-bold mb-3 text-white">
                                Formation
                                <u class="text-warning"><span class="text-white"> certifiante</span></u>
                            </h2>
                            <p class="mb-5 lead">

                                Renforcez Votre Expertise avec nos Formations Certifiantes
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
    <div class="container  "><br>

        <p>
            <br>
            <br>
            Nos formations certifiantes sont conçues pour répondre aux besoins des professionnels souhaitant acquérir
            des compétences rapidement et de manière ciblée. Obtenez une certification reconnue pour donner un nouvel
            élan à votre carrière.
        </p>

        <h3> Une Reconnaissance Internationale</h3>

        <p>Nos certifications sont délivrées en collaboration avec des institutions académiques et professionnelles de
            renommée internationale. En suivant une formation certifiante avec BEM EXECUTIVE EDUCATION, vous bénéficiez
            d’une reconnaissance qui vous ouvrira les portes du marché mondial.</p>
        <div class="col-xl-12  col-md-12 col-12">
            <div class="bg-white py-3">
                <div class="container mt-lg-6">
                    <div class="row mb-6 justify-content-center">
                        <div class="col-lg-12 col-md-12 col-12 text-left">
                            <span class="text-primary mb-0 d-block text-uppercase fw-semibold ls-xl">Tous nos
                                partenaires academique</span>
                        </div>
                    </div>
                    <div class="table-responsive-lg">
                        <div class="row mb-7 pb-2 text-center justify-content-center g-0">
                            <div class="col-lg-12 col-12">
                                <div class="row" id="partenairesContainer">
                                    @foreach($partenaires as $partenaire)
                                    <div class="col-lg-2 col-md-4 col-6">
                                        <div class="mb-4 text-center">
                                            @if($partenaire->image)
                                            <img src="{{ Storage::url($partenaire->image) }}" alt="logo" height="70px">
                                            @else
                                            <img src="../assets/images/default-placeholder.jpg" alt="logo"
                                                height="70px">
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3> Des Programmes Ciblés et Pratiques</h3>
        <p>
            Nos formations certifiantes couvrent un large éventail de compétences clés pour les cadres et dirigeants :
        </p>
        <d<div class="row">
    <div class="col-md-4 container" aria-hidden="true" tabindex="-1">
        <!-- Card -->
        <div class="card card-hover card-custom ">
            <a href="{{ asset('pdf/Gestion_Projet_Syllabus 1.pdf') }}">
                <img src="../../assets/images/certif/Capture d’écran 2024-09-16 à 18.14.40.png" alt="course" class="card-img-top">
            </a>
            <!-- Card Body -->
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-info-soft">Certificat Executif</span>
                    <a href="{{ asset('pdf/Gestion_Projet_Syllabus 1.pdf') }}" class="fs-5"><i class="fe fe-heart align-middle"></i></a>
                </div>
                <h4 class="mb-2 text-truncate-line-2"><a href="{{ asset('pdf/Gestion_Projet_Syllabus 1.pdf') }}" class="text-inherit">Gestion de Projet</a></h4>
                <!-- List -->
                <small>Ce programme enseigne les méthodologies modernes de gestion de projet pour garantir la livraison efficace des projets dans les délais et budgets impartis.</small>
               
            </div>
            <!-- Card Footer -->
        </div><br>
    </div>

    <div class="col-md-4 container" aria-hidden="true" tabindex="-1">
        <!-- Card -->
        <div class="card card-hover card-custom  ">
            <a href="{{ asset('pdf/FICHE INNONVATION & CREATIVE 1.pdf') }}">
                <img src="../../assets/images/certif/Capture d’écran 2024-09-16 à 18.14.30.png" alt="course" class="card-img-top">
            </a>
            <!-- Card Body -->
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-info-soft">Certificat Executif</span>
                    <a href="{{ asset('pdf/FICHE INNONVATION & CREATIVE 1.pdf') }}" class="fs-5"><i class="fe fe-heart align-middle"></i></a>
                </div>
                <h4 class="mb-2 text-truncate-line-2"><a href="{{ asset('pdf/FICHE INNONVATION & CREATIVE 1.pdf') }}" class="text-inherit">Certificat Innovation et Créativité</a></h4>
                <!-- List -->
                <small>Programme dédié à la stimulation de la créativité et à l'innovation dans les entreprises, favorisant le développement de solutions novatrices.</small>
               
            </div>
            <!-- Card Footer -->
        </div><br>
    </div>

    <div class="col-md-4 container" aria-hidden="true" tabindex="-1">
        <!-- Card -->
        <div class="card card-hover card-custom ">
            <a href="{{ asset('pdf/FICHE BUSINESS D & MARKETING 1.pdf') }}">
                <img src="../../assets/images/certif/Capture d’écran 2024-09-16 à 18.13.08.png" alt="course" class="card-img-top">
            </a>
            <!-- Card Body -->
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-info-soft">Certificat Executif</span>
                    <a href="{{ asset('pdf/FICHE BUSINESS D & MARKETING 1.pdf') }}" class="fs-5"><i class="fe fe-heart align-middle"></i></a>
                </div>
                <h4 class="mb-2 text-truncate-line-2"><a href="{{ asset('pdf/FICHE BUSINESS D & MARKETING 1.pdf') }}" class="text-inherit">Certificat Business Développement et Marketing</a></h4>
                <!-- List -->
                <small>Ce programme fournit les outils nécessaires pour élaborer des stratégies de marketing efficaces et développer les affaires de manière durable.</small>
               
            </div>
            <!-- Card Footer -->
        </div><br>
    </div>

    <div class="col-md-4 container" aria-hidden="true" tabindex="-1">
        <!-- Card -->
        <div class="card card-hover card-custom ">
            <a href="{{ asset('pdf/FICHE CAPITAL HUMAIN 1.pdf') }}">
                <img src="../../assets/images/certif/Capture d’écran 2024-09-16 à 18.14.49.png" alt="course" class="card-img-top">
            </a>
            <!-- Card Body -->
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-info-soft">Certificat Executif</span>
                    <a href="{{ asset('pdf/FICHE CAPITAL HUMAIN 1.pdf') }}" class="fs-5"><i class="fe fe-heart align-middle"></i></a>
                </div>
                <h4 class="mb-2 text-truncate-line-2"><a href="{{ asset('pdf/FICHE CAPITAL HUMAIN 1.pdf') }}" class="text-inherit">Certificat Capital Humain</a></h4>
                <!-- List -->
                <small>Formation axée sur la gestion des ressources humaines et le développement des talents au sein des organisations.</small>
               
            </div>
            <!-- Card Footer -->
        </div><br>
    </div>

    <div class="col-md-4 container" aria-hidden="true" tabindex="-1">
        <!-- Card -->
        <div class="card card-hover card-custom ">
            <a href="{{ asset('pdf/FICHE COM RELATION P 1.pdf') }}">
                <img src="../../assets/images/certif/Capture d’écran 2024-09-16 à 18.13.27.png" alt="course" class="card-img-top">
            </a>
            <!-- Card Body -->
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-info-soft">Certificat Executif</span>
                    <a href="{{ asset('pdf/FICHE COM RELATION P 1.pdf') }}" class="fs-5"><i class="fe fe-heart align-middle"></i></a>
                </div>
                <h4 class="mb-2 text-truncate-line-2"><a href="{{ asset('pdf/FICHE COM RELATION P 1.pdf') }}" class="text-inherit">Certificat Communication Et Relation Publique</a></h4>
                <!-- List -->
                <small>Ce programme aborde les principes de la communication et des relations publiques pour améliorer l'image de marque et la communication des entreprises.</small>
                
            </div>
            <!-- Card Footer -->
        </div><br>
    </div>

    <div class="col-md-4 container" aria-hidden="true" tabindex="-1">
        <!-- Card -->
        <div class="card card-hover card-custom ">
            <a href="{{ asset('pdf/Supply_Chain_Management_Syllabus (2) 1.pdf') }}">
                <img src="../../assets/images/certif/Capture d’écran 2024-09-16 à 18.13.37.png" alt="course" class="card-img-top">
            </a>
            <!-- Card Body -->
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-info-soft">Certificat Executif</span>
                    <a href="{{ asset('pdf/Supply_Chain_Management_Syllabus (2) 1.pdf') }}" class="fs-5"><i class="fe fe-heart align-middle"></i></a>
                </div>
                <h4 class="mb-2 text-truncate-line-2"><a href="{{ asset('pdf/Supply_Chain_Management_Syllabus (2) 1.pdff') }}" class="text-inherit">Certificat en Supply Chain</a></h4>
                <!-- List -->
                <small>Programme axé sur la gestion efficace de la chaîne d'approvisionnement, abordant la logistique, l'approvisionnement et la gestion des stocks.</small>
               
            </div>
            <!-- Card Footer -->
        </div><br>
    </div>
    <div class="col-xl-4 col-md-4 col-12"> </div>
    <div class="col-xl-4 col-md-4 col-12">
                        <div class="  h-100 text-center text-lg-start  text-white">
                            <div class=" h-100 text-center text-lg-start  text-white ">
                                <div class="p-2">
                                    <div class="card card-hover">
                                        <a href="#">
                                            <img src="../../assets/images/certif/Capture d’écran 2024-09-16 à 18.13.08.png"
                                                alt="course" class="card-img-top">
                                        </a>
                                        <!-- Card Body -->
                                        <div class="card-body">

                                            <h4 class="mb-2 text-truncate-line-2"><a href="#"
                                                    class="text-inherit">Administrateurs de societé</a></h4>
                                            <!-- List -->
                                            <small>Ce programme aborde les compétences essentielles en gestion d'entreprise, leadership et stratégies de croissance. Les participants acquerront des outils pour optimiser la performance organisationnelle et gérer efficacement les ressources humaines et financières.</small>

                                            <br>
                                            <br>

                                        </div>
                                        <!-- Card Footer -->
                                    </div><br>

                                </div>
                            </div>
                        </div>
                    </div>    <div class="col-xl-4 col-md-4 col-12"> </div>

</div>





</section>

@include('layouts.contact')
@endsection