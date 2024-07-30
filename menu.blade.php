<style>
    .menu_items,
    .modal_informacion {
        display: none;
    }
</style>

<!-- Componente de menú desplegable -->

<div>
    <div class="absolute right-14 top-4">
        <button>
            <img src=" {{ asset('img/user.png') }}" alt="" class="menu">
        </button>
    </div>

    <div class="relative z-10">
        <div class="w-64 absolute right-14 menu_items p-2 shadow-md rounded-3xl border-2 divide-y  bg-[#fff]">
            <div class="rounded-md hover:bg-gray-50 px-2 ">
                <button class="w-full h-14 text-left informacion_personal">
                    Información personal
                </button>
            </div>
            <div class="rounded-md hover:bg-gray-50 px-2">
                <button class="w-full h-14 text-left configuracion">
                    Configuración
                </button>
            </div>
            <div class="rounded-md hover:bg-gray-50 px-2">
                <button class="w-full h-14 text-left">
                    <a href="" class="">Cerrar sesión</a>
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Componente de información personal -->
<div class="fixed w-full h-[80%] top-[10%] left-[10%] modal_informacion z-20">

    <div class="absolute w-5/6 h-full overflow-y-auto bg-[#fff] border-2 border-color-gray-100 rounded-lg">
        <form action="" class="px-10 py-2 ">
            <!-- Botones para editar y guardar información-->
            <div>
                <button class="relative top-4 boton_editar">
                    <img src="{{ asset('img/icons8-editar-24.png') }}" alt="">
                </button>
                <button class="relative top-4 left-5">
                    <img src=" {{ asset('img/icons8-guardar-30.png') }}" alt="">
                </button>
            </div>

            <!-- Imagen de perfil -->
            <div class="mx-[42%] mt-8">
                <img src="{{ asset('img/icons8-invitado-masculino-90.png')}}" alt="" class="w-36">
            </div>

            <!-- Botón para cerrar modal -->
            <div class="absolute top-3 right-4">
                <button class="cerrar_modal"> X </button>
            </div>

            <!-- Datos de usuario -->
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombres completos</label>
                    <div class="mt-2">
                        <input type="text" name="nombre" id="nombre" disabled class="nombre block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="apellido" class="block text-sm font-medium leading-6 text-gray-900">Apellidos completos</label>
                    <div class="mt-2">
                        <input type="text" name="apellido" id="apellido" disabled class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="numero_documento" class="block text-sm font-medium leading-6 text-gray-900">Número de documento</label>
                    <div class="mt-2">
                        <input type="number" name="numero_documento" id="numero_documento" disabled class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="ndependencia" class="block text-sm font-medium leading-6 text-gray-900">Dependencia</label>
                    <div class="mt-2">
                        <input type="text" name="dependencia" id="dependencia" disabled autocomplete="given-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="telefono" class="block text-sm font-medium leading-6 text-gray-900">Telefono</label>
                    <div class="mt-2">
                        <input type="text" name="telefono" id="telefono" disabled autocomplete="given-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="correo" class="block text-sm font-medium leading-6 text-gray-900">Correo electrónico</label>
                    <div class="mt-2">
                        <input type="text" name="correo" id="correo" disabled autocomplete="given-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 outline-none">
                    </div>
                </div>

            </div>
        </form>
    </div>

</div>

<script src="js/menu.js"></script>