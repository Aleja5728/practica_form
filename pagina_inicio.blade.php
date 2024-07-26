@extends("welcome")

@section("titulo", "Página de inicio")

@section("cabecera")
<style>
    .imagen_cabecera {
        cursor: pointer;
    }

    .menu_items {
        display: none;
    }
</style>
@endsection

@section("seccion")

<div class="">
    <div class="absolute right-14 top-4">
        <button>
            <img src=" {{ asset('img/user.png') }}" alt="" class="menu">
        </button>
    </div>

    <div class="w-64 absolute right-14 menu_items p-2 shadow-md rounded-3xl border-2 divide-y">
        <div class="rounded-md hover:bg-gray-50 px-2">
            <button class="w-full h-14 text-left ">
                <a href="" class="">Información personal</a>
            </button>
        </div>
        <div class="rounded-md hover:bg-gray-50 px-2">
            <button class="w-full h-14 text-left">
                <a href="" class="">Configuración</a>
            </button>
        </div>
        <div class="rounded-md hover:bg-gray-50 px-2">
            <button class="w-full h-14 text-left">
                <a href="" class="">Cerrar sesión</a>
            </button>
        </div>

    </div>
</div>

<div class="grid grid-cols-1 gap-x-2 gap-y-2 sm:grid-cols-6 mr-8">
    <div class="sm:col-span-2 ml-8 mt-8">
        <div class="w-full h-64 rounded-3xl border-2 shadow-md">
            <div class="w-full h-14 p-5">

                <div class="relative">
                    <p class="text-sm font-medium">Título del formulario</p>
                    <button class="absolute right-0 top-0">
                        <img src=" {{ asset('img/puntos.png')}} " alt="Tres puntos" class="w-5">
                    </button>

                <div class="bg-blue-400 w-32 h-10 p-2 rounded-lg text-center absolute right-0 top-8">
                    <button class="text-xs font-medium">
                        Descargar informe
                    </button>
                </div>

                </div>

            </div>
            <div class="w-full h-32 p-5 bg-gray-50">
            </div>
            <div class="w-full h-16 p-5">
                <p class="text-xs text-gray-400">Descripción del formulario</p>
            </div>
        </div>
    </div>


</div>

@endsection

@section("script")
<script src="js/pagina_inicio.js"></script>
@endsection