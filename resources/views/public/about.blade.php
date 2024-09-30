@extends('layouts.app')

@section('title', 'A propors | Bem executive school')

@section('content')
<br><br>
<div style="margin:60px;" >

<div class="">

<div class="card">
        <div class="row no-gutters">
            <!-- Colonne avec image -->
            <div class="col-md-6">
            <br>
            
                <img src="../../assets/1554450685082.jpeg" class="card-img w-100" style="  background-size: cover;"
                    alt="Image">

            </div>
            <!-- Colonne avec texte -->
            <div class="col-md-6">
                <div class="card-body">
                <h5 class="card-title"><span class="text-primary">Presentation</span></h5>
                <h2 class="card-title display-3">BEM Executive Education</h2>
                    <ul class="list-unstyled " style="font-size:14PX">
                        <li class="mb-2">

                            <span class="ms-2"><h3 >Fara Sakho   Directeur Général BEM </h3>
                            
                            <big>"</big>Dès sa création <span class="text-primary"> BEM Management School</span> s’est consacrée à la formation de managers africains responsables et immédiatement opérationnels. BEM Management School est un établissement d’enseignement supérieur privé général. Il a pour vocation de former et d’accompagner des managers africains responsables et opérationnels immédiatement. Il entend ainsi apporter une contribution décisive à l’émergence et à la consolidation d’une conscience africaine forte et ouverte sur le progrès, audacieuse, ambitieuse et responsable. </span>
                        </li>
                        <li class="mb-2">

                            <span class="ms-2">Avec le même objectif de montée en compétences et la même exigence d’excellence, BEM Executive Education souhaite accompagner aujourd’hui vos collaborateurs tout au long de leur carrière afin de leur permettre de progresser et de contribuer de manière croissante au développement, à la stratégie de votre organisation. En s’appuyant sur un panel de consultants internationaux expérimentés, BEM Executive Education intervient notamment dans les domaines de l’efficacité managériale, de la communication maîtrisée, du développement personnel et de la gouvernance. Grâce à ses séminaires et ses programmes certifiants, BEM Executive Education accompagne vos collaborateurs et les installe dans une culture de performance et de responsabilité.</span>
                        </li>
                        <li class="mb-2">
                        Notre philosophie réside cependant dans notre capacité à proposer des programmes sur mesure, construits sur la base des besoins spécifiques de chaque organisation. Notre méthodologie place le client au cœur du processus de définition, de validation et d’évaluation du parcours de formation. En complément du transfert de connaissances et de compétences, BEM Executive Education s’attache à communiquer à vos collaborateurs des valeurs éthiques et comportementales indispensables à la formation de collaborateurs responsables.
                            <span class="ms-2"><big>"</big></span><br><br>
                            

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class=" ">

    <br><br>
    <br>
    <div class="row  justify-content-center">
        <div class="col-lg-12 col-md-12">
            <div class="row align-items-center">

                <!-- heading -->
                <div class="col-lg-12 col-md-12 col-12 mb-1 ">
                    <center>
                        <h1 class="display-3 fw-bold Justify-content-center">Nos plus grandes forces</h1>
                    </center><br>
                </div>

            </div>
            <!-- row -->
            <div class="row">
                <!-- Première carte -->
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="card" >
                        <div class="card-body text-center">
                            <div class="display-4 text-primary mb-3">
                                <i class="fe fe-award"></i>
                            </div>
                            <h3 class="fw-semibold mb-2">Accompagnement sur mesure</h3>
                            <p class=" mb-0" sstyle="font-size:14px">Nous comprenons que chaque leader est
                                unique. Nos programmes sont conçus pour s'adapter à vos objectifs et aux défis
                                spécifiques de votre secteur. Bénéficiez d'un accompagnement personnalisé pour maximiser
                                votre impact dans un environnement en constante évolution.</p>
                        </div>
                    </div>
                </div>

                <!-- Deuxième carte -->
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="card" >
                        <div class="card-body text-center">
                            <div class="display-4 text-primary mb-3">
                                <i class="fe fe-user"></i>
                            </div>
                            <h3 class="fw-semibold mb-4">Partenaires académiques de renom</h3>
                            <p class=" mb-0" style="font-size:14px">Nous collaborons avec des institutions de classe mondiale. Ces
                                partenariats vous garantissent un accès aux meilleures pratiques et aux dernières
                                innovations dans le management et le leadership, assurant une formation de qualité
                                internationale. <br><br></p>
                        </div>
                    </div>
                </div>

                <!-- Troisième carte -->
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="card" >
                        <div class="card-body text-center">
                            <div class="display-4 text-primary mb-3">
                                <i class="fe fe-users"></i>
                            </div>
                            <h3 class="fw-semibold mb-2">Expertise Reconnue</h3>
                            <p class=" mb-0" style="font-size:14px">BEM Executive Education bénéficie d'une solide réputation dans le
                                domaine de la formation des managers, cadres et dirigeants. Nos programmes sont conçus
                                par des experts et constamment mis à jour pour répondre aux besoins du marché.<br><br></p>
                            <br>
                        </div>
                    </div>
                </div>
<br>
                <!-- Bouton -->
           
            </div>
<br>
            <div class="row align-items-center">
                
                <!-- heading -->
                <div class="col-lg-12 col-md-12 col-12 mb-1 " >
                  <center> <h1 class="display-6 fw-bold Justify-content-center" >Partenaires académiques et les entreprises qui nous ont fait confiance</h1></center><br>
                </div>

            </div>
            <div class="row mb-7 pb-2 text-center justify-content-center g-0">
            <div class="col-lg-12 col-12">
                <div class="marquee" data-cue="slideInLeft" data-show="true"
                    style="animation-name: slideInLeft; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="track">
     @foreach($partenaires as $partenaire)
                        <a href="#" class="btn btn-light rounded-pill me-1 mb-3 btn-logo btn-lift">
                            <span> @if($partenaire->image)
                                        <img src="{{ Storage::url($partenaire->image) }}" alt="{{ $partenaire->titre }}" class="icon-lg">
                                        @else
                                        <img src="../assets/images/default-placeholder.jpg" class="icon-xs"
                                            alt="Image par défaut">
                                        @endif</span>
                            <span class="ms-1 d-none d-lg-inline-flex">{{ $partenaire->titre }}</span>

                        </a>

@endforeach
                    </div>
                </div>
            </div>

        </div>

            <div class="row">
        <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-lg-12 mb-6">
                <center>
                 

                    <h3 class="h2 fw-bold">
                    Financer sa formation</u>
                    </h3>
                    <p class="lead mb-0 container"  style="font-size:14px">Booster votre carrière grâce aux formations professionnelles de BEM EXECUTIVE EDUCATION
Outre les modalités de financement individuel adaptées, il est possible chez BEM EXECUTIVE EDUCATION
de faire financer sa formation par un organisme spécialisé.</p>
                </center></div>
<div class="row">
    <br>
                 <!-- Carte pour FDFP -->
            <div class="col-lg-6 col-md-6 col-12 mb-3">
                <div class="card" style="height:320px">
                    <div class="card-body text-center">
                        <div class="display-4 text-primary mb-3">
                        <img src="../../assets/Logo-FDFP-recadre.png" width="150px">                        </div>
                        <h3 class="fw-semibold mb-2">FDFP</h3>
                        <p class="fs-4 mb-0">
                        Toutes nos formations sont éligibles au Fond de Développement de la Formation Professionnelle (FDFP), qui fait partie d’un dispositif de formation professionnelle mis en œuvre en 1991, dans le cadre d’un Programme de valorisation des ressources humaines (PVRH).

</p>
                    </div>
                </div>
            </div>

            <!-- Carte pour Partenaire Bancaire -->
            <div class="col-lg-6 col-md-6 col-12 mb-3">
                <div class="card" style="height:320px">
                    <div class="card-body text-center">
                        <div class="display-4 text-primary mb-3">
                        <img src="../../assets/bank-64.png" width="90px">                          </div>
                        <h3 class="fw-semibold mb-2">Partenaire Bancaire</h3>
                        <p class="fs-4 mb-0">Nous avons des accords-cadres avec des institutions bancaires pour vous aider à obtenir le soutien financier nécessaire pour réaliser votre projet de formation.</p>
                    </div>
                </div>
            </div>

            <!-- Bouton 
            <div class="col-md-12 text-center mt-3">
                <a href="#" class="btn btn-primary">Contactez nous</a>
            </div>-->
        </div>
            </div>
        </div>
    </div>





        </div>
    </div>
    <br>

</div>
@endsection