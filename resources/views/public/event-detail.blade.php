@extends('layouts.app')

@section('title', 'Detail evenement | Bem executive school')

@section('content')
<section class="py-7 py-lg-8">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
              <div class="text-center mb-4">
                <a href="#" class="fs-5 fw-semibold d-block mb-4 text-primary">{{ $event->Type }}</a>
              </div>
              <!-- Media -->
            </div>
          </div>
          <div class="row justify-content-center">
            <!-- Image -->
            <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
            @if($event->image)
                                        <img src="{{ Storage::url($event->image) }}" alt="{{ $event->titre }}"  class="img-fluid rounded-3 w-75">
                                        @else
                                        <img src="../assets/images/default-placeholder.jpg" alt="blogpost" class="img-fluid rounded-3 w-75">
                                        @endif
              
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
              <!-- Descriptions -->
              <div>
                <div class="mb-4">
                  <p class="lead text-dark">{{ $event->titre }}</p>
                  <p>
{{ Str::limit($event->detail, 150) }}
                  </p>
                  @if(trim(strtolower($event->type)) ==="actualite")
    <a href="{{ url($event->link) }}" class="btn btn-primary">Inscris</a>
@endif


                </div>
                
                
                <!-- List unstyled -->
        
      </section>
      @endsection