<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titulo")</title>
    @vite('resources/css/app.css')
    
    @yield("cabecera")
</head>

<body>
    <div class="cabecera w-full h-20 mt-0 border-b-4 border-[#3DAE2B]" >
        <header>
            <img src="{{ asset('img/Alcaldia.png') }}" alt="Logo alcaldía" class="imagen_cabecera w-[13%] text-xs absolute mt-2 ml-[3%]">
        </header>
    </div>

   
    @yield("seccion")
    
    @yield("script")

</body>

</html>