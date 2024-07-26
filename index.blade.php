@extends("welcome")

@section("titulo", "Inicio de sesión")

@section("seccion")
<div class="seccion_imagen w-[50%] h-[88%] absolute start-0">
    <img src="{{ asset('img/EscudoAlcaldiaFusa.png') }}" alt="Escudo alcaldia" class="w-[45%] m-auto mt-[15%]">
</div>

<hr class="w-[30%] rotate-90 absolute ml-[40%] mt-[22%] bg-gray-400">

<div class="seccion_formulario w-[50%] h-[88%] absolute end-0">
    <form action="/" method="post" class="w-[50%] h-[50%] m-auto mt-[20%] p-5 flex flex-col">
        <label for="correo" class="leading-6 text-gray-900 font-medium"> Correo electrónico </label>
        <input type="email" name="correo" id="correo" placeholder="usuario@example.com" class="w-[100%] rounded-md mt-[3%] text-[#666] ring-1 ring-inset ring-gray-100 border-gray-300 placeholder:text-gray-400 outline-none">


        <label for="claveIngreso" class="leading-6 text-gray-900 font-medium mt-6"> Contraseña </label>
        <input type="password" name="claveIngreso" id="claveIngreso" placeholder="*******" class="w-[100%] rounded-md mt-[3%] text-[#666] ring-1 ring-inset ring-gray-100 border-gray-300 placeholder:text-gray-400 outline-none">

        <a href="{{ url('reestablecimiento-clave') }}" class="text-xs text-right text-[#3264A2] mt-[2%] font-medium">¿Has olvidado tu contraseña?</a>

        <input type="submit" value="Iniciar sesión" class="w-[100%] h-[15%] bg-[#3DAE2B] rounded-md mt-[7%] cursor-pointer hover:bg-[#3FC828]/80 font-medium leading-8">
    </form>
</div>
@endsection