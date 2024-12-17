@extends('layouts.app')

@section('title', 'Formation | Bem executive school')

@section('content')
<br>
<section class="pb-lg-8">
    <div class="container">
        <!-- Section de formation -->
        <div class="row">
            <div class="col-xl-12  col-md-12 col-12">
                <div class="bg-primary py-6 px-6 px-xl-0 rounded-4">
                    <div class="row align-items-center">
                        <div class="offset-xl-1 col-xl-4 col-md-4 col-4">
                            <h2 class="h1 text-white mb-3">Formations Pour Organisation</h2>
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
                <h2>Renforcez Votre Organisation avec des Formations d'Excellence</h2>
                <p>
                    Chez BEM EXECUTIVE EDUCATION, nous concevons des solutions de formation spécifiquement adaptées aux
                    besoins des entreprises. Que vous optiez pour nos programmes standards ou que vous choisissiez une
                    solution entièrement personnalisée, nos formations sont conçues pour transformer vos équipes et
                    améliorer la performance organisationnelle.</p>
                <br>
                <h2> Nos Type de formation :</h2><br>
            </div>

            <div class="col-xl-6 col-md-6 col-12">
                <div class="card card-lift h-100 text-center text-lg-start">
                    <div class="p-2">
                        <a href="{{ route('formationcat') }}"><img src="{{asset('../../assets/images/formationorg/form.webp')}}" alt=""
                                class="img-fluid rounded-3 w-100"></a>
                    </div>
                    <div class="card-body pt-2">
                        <h3><a class="text-inherit" href="{{ route('formationcat') }}">Formation catalogue
                            </a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <div class="card card-lift h-100 text-center text-lg-start">
                    <div class="p-2">
                        <a href="{{ route('formationprogramme') }}"><img src="{{asset('../../assets/images/formationorg/handsome-young-businessman_11zon.webp')}}" alt=""
                                class="img-fluid rounded-3 w-100"></a>
                    </div>
                    <div class="card-body pt-2">
                        <h3><a class="text-inherit" href="{{ route('formationprogramme') }}">Programme sur-mesure</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Partenaires -->
    <div class="col-xl-12  col-md-12 col-12">
        <div class="bg-white py-8">
            <div class="container mt-lg-6">
                <div class="row mb-6 justify-content-center">
                    <div class="col-lg-12 col-md-12 col-12 text-left">
                        <span class="text-primary mb-0 d-block text-uppercase fw-semibold ls-xl">Nos partenaires academique</span>
                    </div>
                </div>
                <div class="table-responsive-lg">
                <div class="row mb-7 pb-2 text-center justify-content-center g-0">
            <div class="col-lg-12 col-12">
                <div class=" row" id="partenairesContainer">
                <div class="col-lg-12 col-12">
                <div class="row" id="partenairesContainer">
                <div class="col-lg-2 col-md-4 col-6">
                <div class="mb-4 text-center">
                <img src="{{asset('pdf/Logo.png')}}" alt="logo"
                height="70px">                                                    </div>
                </div>
                    @foreach($partenaires as $partenaire)
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="mb-4 text-center">
                                @if($partenaire->image)
                                    <img src="{{ Storage::url($partenaire->image) }}" alt="logo" height="70px">
                                @else
                                    <img src="../assets/images/default-placeholder.jpg" alt="logo" height="70px">
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


</section>


        @include('layouts.contact')

@endsection 