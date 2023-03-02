@extends('app')
@section('title')
    System Court
@endsection
@section('content')

    <div id="hero">

        <div class="promo">
            <h1>Este sitio es de uso personal.</h1>
            <p>puedes visitar nuestra red publica en <span>www.fiberar.tech</a></span></p>

            <button
                type="button"
                class="inline-block rounded bg-success px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)]">
                <a href="{{route('generar-active')}}">Generar Activación</a>
            </button>
            <button
                type="button"
                class="inline-block rounded bg-danger px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)]">
                <a href="{{route('generar-corte')}}">Generar Corte</a>
            </button>
            
            
        </div>

        <video autoplay loop muted>
            <source src="{{asset('frontend/assets/background.mp4')}}" type="video/mp4">
        </video>
        <div class="capa"></div>
    </div>

    {{-- {{dd($userDebts)}} --}}

@endsection