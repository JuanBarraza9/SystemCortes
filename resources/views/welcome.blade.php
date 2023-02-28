@extends('app')
@section('title')
    System Court
@endsection
@section('content')

    <div id="hero">

        <div class="promo">
            <h1>Este sitio es de uso personal.</h1>
            <p>puedes visitar nuestra red publica en <span>www.fiberar.tech</a></span></p>

        </div>

        <video autoplay loop muted>
            <source src="{{asset('frontend/assets/background.mp4')}}" type="video/mp4">
        </video>
        <div class="capa"></div>
    </div>

    {{-- {{dd($userDebts)}} --}}

@endsection