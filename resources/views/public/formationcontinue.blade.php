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
                            <h2 class="h1 text-white mb-3">Formations Continue</h2>
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
                <h2>Développez Vos Compétences avec la Formation Continue</h2>
                <p>Les exigences du monde professionnel évoluent constamment. Chez BEM EXECUTIVE EDUCATION, nous
                    proposons des programmes de formation continue pour vous permettre de rester à la pointe de votre
                    secteur, que vous cherchiez à obtenir un certificat ou un diplôme reconnu.</p>
                <br>
                <h2> Nos Type de formation :</h2><br>
            </div>

            <div class="col-xl-12  col-md-12 col-12">
                <div class="row gy-4 gy-xl-0">
                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="card card-lift h-100 text-center text-lg-start">
                            <div class="p-2">
                                <a href="{{ route('formationcertifiante') }}"><img
                                        src="../../assets/images/formationorg/portrait-senior-woman-professional-blazer-outdoors-laptop.jpg"
                                        alt="" class="img-fluid rounded-3 w-100" style=""></a>
                            </div>
                            <div class="card-body pt-2">
                                <h3><a class="text-inherit" href="{{ route('formationcertifiante') }}">Formations
                                        Certifiantes</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--div class="col-xl-6 col-md-6 col-12">
                        <div class="card card-lift h-100 text-center text-lg-start">
                            <div class="p-2">
                                <a href="#"><img src="../../assets/images/formationorg/entrepreneur-using-video-call-conference-laptop-talk-colleague-startup-office-business-man-attending-online-teleconference-meeting-with-person-discuss-project-strategy.jpg" alt=""
                                        class="img-fluid rounded-3 w-100"  style="height: 300px;"></a>
                            </div>
                            <div class="card-body pt-2">
                                <h3><a class="text-inherit" href="#">E-learning</a></h3>
                            </div>
                        </div>
                    </div-->
                    <!--div class="col-xl-6 col-md-6 col-12"><br>
                        <div class="card card-lift h-100 text-center text-lg-start">
                            <div class="p-2">
                                <a href="{{route('formationdiplomante')}}"><img src="../../assets/images/formationorg/WhatsApp Image 2024-09-17 at 14.36.18.jpeg" alt=""
                                        class="img-fluid rounded-3 w-100"  style="height: 300px;"></a>
                            </div>
                            <div class="card-body pt-2"><br>
                                <h3><a class="text-inherit" href="{{ route('formationexec') }}">Formations Diplômantes</a></h3>
                            </div>
                        </div>
                    </div-->

                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="card card-lift h-100 text-center text-lg-start">
                            <div class="p-2">
                                <a href="{{route('formationdiplomante')}}"><img
                                        src="../../assets/people-office-work-day 4.png" alt=""
                                        class="img-fluid rounded-3 w-100" style=""></a>
                            </div>
                            <div class="card-body pt-2">
                                <h3><a class="text-inherit" href="{{ route('formationdiplomante') }}">Formations
                                        executives</a></h3>
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
                                <span class="text-primary mb-0 d-block text-uppercase fw-semibold ls-xl">Tout nos
                                    partenaires academique</span>
                            </div>
                        </div>
                        <div class="table-responsive-lg">
                        <div class="row mb-7 pb-2 text-center justify-content-center g-0">
            <div class="col-lg-12 col-12">
                <div class="d-flex overflow-auto" id="partenairesContainer">
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


        </div>
</div></section>

        @include('layouts.contact')

        @endsection