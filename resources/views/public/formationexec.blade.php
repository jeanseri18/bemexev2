@extends('layouts.app')

@section('title', 'Formation | Bem executive school')

@section('content')
<br>
<section class="pb-lg-8">
    <div class="container">
        <!-- Section de formation -->
        <div class="row">
            <div class="col-xl-12  col-md-12 col style=" height:200px"-12">
                <div class="bg-primary text-white py-6 px-6 px-xl-0 rounded-4">
                    <div class="row align-items-center">
                        <div class="offset-xl-1 col-xl-4 col-md-4 col-4">
                            <h2 class="h1 text-white mb-3">Formations
                                Executive</h2>
                        </div>
                        <div class="col-xl-6 col-md-6 col-12">
                            <div class="text-center d-none d-md-block">
                                <img src="../../assets/formation.png" alt="learning" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12  col-md-12 col-12">
                <br>
                <h2>Choisissez des formations prestigieuses pour votre carrière</h2>
                <p> Nos programmes de formation exécutive s’adressent aux cadres et dirigeants d’entreprises ayant un
                    besoin de connaissances spécifique dans des domaines clés liés au management et à la gestion
                    d’organisations.
                    Nous dispensons la plupart de nos formations en partenariat avec des écoles de commerce
                    internationales.</p>
                <br>

            </div>

            <div class="col-xl-12  col-md-12 col-12">
                <h2> Decouvrez notre programmme de formation <a class="btn btn-primary"
                        href="{{ asset('pdf/BEM Executive Education.pdf') }}" target="blank"> Telecharger la brochure
                    </a></h2><br>

            </div>
            <!-- Section Partenaires -->
            <div class="col-xl-12 col-md-12 col-12">
                <div class="bg-white py-3">
                    <div class="container mt-lg-6">
                        <div class="row mb-6 justify-content-center">
                            <div class="col-lg-12 col-md-12 col-12 text-left">
                                <span class="text-primary mb-0 d-block text-uppercase fw-semibold ls-xl">
                                    Nos
                                    partenaires academique</span>
                            </div>
                        </div>
                        <div class="table-responsive-lg">
                            <div class="row mb-7 pb-2 text-center justify-content-center g-0">
                                <div class="col-lg-12 col-12">
                                    <div class="row" id="partenairesContainer">
                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="mb-4 text-center">


                                            <img src="{{asset('pdf/Logo.png')}}" alt="logo"
                                            height="70px">                                                
                                            </div>
                                        </div>
                                        @foreach($partenaires as $partenaire)
                                        <div class="col-lg-2 col-md-4 col-6">
                                            <div class="mb-4 text-center">
                                                @if($partenaire->image)
                                                <img src="{{ Storage::url($partenaire->image) }}" alt="logo"
                                                    height="70px">
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

            <!-- Section Témoignages -->
            <!-- Formulaire de contact -->

        </div>
    </div>
    @include('layouts.contact')
    @endsection