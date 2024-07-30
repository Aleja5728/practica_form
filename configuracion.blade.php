@extends("welcome")

@section("titulo", "Configuración")

@section("seccion")

<!-- Menú superior derecho -->
<x-menu></x-menu>

<div class="grid grid-cols-3 gap-3 m-10 mt-12">

    <button class="boton_usuarios h-36 m-2 bg-gradient-to-r from-[#68CA6E] to-[#47BF4F] shadow-md">
        <div class="absolute ml-3 mt-2">
            <img src="{{ asset('img/icons8-usuario-96.png') }}" alt="" class="w-12">
        </div>
        <div class="">
            <p class="text-xl text-white font-normal font-montserrat text-right mt-[26%] mr-6">USUARIOS</p>
        </div>
    </button>

    <button class="bg-red-100 h-36 m-2 bg-gradient-to-r from-[#74B2D5] to-[#54A1CA] shadow-md">
        <div class="absolute ml-3 mt-2">
            <img src="{{ asset('img/icons8-plantilla-96.png') }}" alt="" class="w-12">
        </div>
        <div class="relative right-0">
            <p class="text-xl text-white font-normal font-montserrat text-right mt-[26%] mr-6">PLANTILLA</p>
        </div>
    </button>

    <button class="bg-red-100 h-36 m-2 bg-gradient-to-r from-[#EF5751] to-[#EB312A] shadow-md">
        <div class="absolute ml-3 mt-2">
            <img src="{{ asset('img/navegador.png') }}" alt="" class="w-12">
        </div>
        <div class="relative right-0">
            <p class="text-xl text-white font-normal font-montserrat text-right mt-[26%] mr-6">CREAR FORMULARIOS</p>
        </div>
    </button>

    <button class="bg-red-100 h-36 m-2 bg-gradient-to-r from-[#F5CA4A] to-[#F2BF24] shadow-md">
        <div class="absolute ml-3 mt-2">
            <img src="{{ asset('img/sitio-web.png') }}" alt="" class="w-12">
        </div>
        <div class="relative right-0">
            <p class="text-xl text-white font-normal font-montserrat text-right mt-[26%] mr-6">PUBLICAR FORMULARIOS</p>
        </div>
    </button>
</div>
@endsection

@section("script")
    <script src="js/configuracion.js"></script>
    <script src="js/plantilla.js"></script>
@endsection