@extends('layouts.admin')

@section('content')


{{-- success message --}}
@include('partials.session_message')
{{-- /success message --}}

<h1 class="text-center mt-5 mb-4">Dettagli piatto</h1>
{{-- container --}}
<div class="form-container container w-75 form-padding">


        <a href="{{ route('admin.dishes.index') }}" class="btn-action-form d-inline-block btn-left">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <a class="btn-action-form btn-right" href="{{ route('admin.dishes.edit', ['dish' => $dish->slug]) }}">
            <i class="fa-solid fa-pen-to-square"></i>
        </a>

        <div class="row flex-center">

            {{-- img --}}
            <div class="col-sm-12 col-md-12 col-lg-6 p-0 text-center">
                    <img src="{{ asset('storage/' . $dish->image) }}" alt="" class="square-image">
            </div>
            {{-- /img --}}


            {{-- details dish --}}
            <div class="col-sm-12 col-md-12 col-lg-6 text-lg-start flex-center flex-column gap-2 font-restaurants-details">
                        <div>
                            <p class="p-0 m-0">
                                <strong>Nome del piatto: </strong>
                            </p>
                            <span>
                                {{ ucfirst(strtolower($dish->name)) }}
                            </span>
                            <p class="p-0 m-0">
                                <strong>Descrizione: </strong>
                            </p>
                            <span>
                                {{ ucfirst(strtolower($dish->description)) }}
                            </span>
                            <p class="p-0 m-0">
                                <strong>Prezzo: </strong>
                            </p>
                            <span>
                                {{ $dish->price }} €
                            </span>
                        </div>
            </div>
            {{-- /details dish --}}

        </div>
    </div>
    {{-- /container --}}

@endsection
