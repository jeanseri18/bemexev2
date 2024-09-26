@extends('layouts.app')

@section('title', 'Blog | Bem executive school')

@section('content')
<br><br>
<style>
    .card {
    overflow: hidden; /* Éviter que les images débordent du conteneur */
}

.item {
    display: flex;
    justify-content: center; /* Centrer les éléments horizontalement */
    align-items: center; /* Centrer les éléments verticalement */
}

.card-img-top {
    width: 100%;
    height: 200px; /* Hauteur fixe pour toutes les images */
    object-fit: cover; /* Couvrir le conteneur sans déformation */
}
</style>
<section class="pb-8">
    <div class="container">
        <h2>Actualité</h2>
        <div class="row">
        @if ($events->count())
    @foreach ($events as $event)
    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <!-- Card -->
                <div class="card mb-4 shadow-lg card-lift">
                <a href="{{ route('event.show', $event->id) }}">
                                        @if($event->image)
                                        <img src="{{ Storage::url($event->image) }}" alt="{{ $event->titre }}" class="card-img-top">
                                        @else
                                        <img src="../assets/images/default-placeholder.jpg" class="card-img-top"
                                            alt="Image par défaut">
                                        @endif
                                    </a>
                    <!-- Card body -->
                    <div class="card-body">
                        <a href="#" class="fs-5 fw-semibold d-block mb-3 text-danger">Actualité</a>
                        <h3>
                            <a href="blog-single.html" class="text-inherit">{{ $event->titre }}</a>
                        </h3>
                        <p> {{ $event->detail }}</p>
                        <!-- Media content -->
                        <div class="row align-items-center g-0 mt-4">
                        
                            <div class="col lh-1">
                                <h5 class="mb-1">{{ $event->date }}</h5>
                                <p class="fs-6 mb-0"></p>

                            </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

    <!-- Lien de pagination -->
    {{ $events->links() }}
@else
    <p>Aucune actualité disponible.</p>
@endif

            
        </div>


    </div>
</section>

@endsection