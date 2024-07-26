@extends('welcome')

@section('titulo', 'Registro usuarios')

@section('cabecera')
    <style>
        .modal {
            display: none;
        }
    </style>
@endsection

@section('seccion')

    <div class="absolute">
        <input type="button" value="Crear usuario"
            class="bg-[#acbaf4] rounded-full w-36 h-12 p-2 m-10 cursor-pointer boton_modal1">
    </div>

    <section class="fixed w-full h-[80%] modal ">
        <div class="bg-gray-100 w-5/6 h-full mx-auto overflow-y-auto">
            <form action="" method="post" class="px-10 py-2 ">
                <div class="space-y-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombres
                                completos</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="nombre" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="apellido" class="block text-sm font-medium leading-6 text-gray-900">Apellidos
                                completos</label>
                            <div class="mt-2">
                                <input type="text" name="last-name" id="apellido" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 outline-none">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="numero_documento" class="block text-sm font-medium leading-6 text-gray-900">Número
                                de
                                documento</label>
                            <div class="mt-2">
                                <input type="number" name="numero_documento" id="numero_documento"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="genero" class="block text-sm font-medium leading-6 text-gray-900">Género</label>
                            <div class="mt-2">
                                <select name="genero" id="genero"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                                    <option value="masculino">MASCULINO</option>
                                    <option value="femenino">FEMENINO</option>
                                    <option value="otro">OTRO</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="telefono" class="block text-sm font-medium leading-6 text-gray-900">Número
                                telefonico</label>
                            <div class="mt-2">
                                <input type="number" name="telefono" id="telefono"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="correo" class="block text-sm font-medium leading-6 text-gray-900">Correo
                                electrónico</label>
                            <div class="mt-2">
                                <input type="email" name="correo" id="correo"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="dependencia"
                                class="block text-sm font-medium leading-6 text-gray-900">Dependencia</label>
                            <div class="mt-2">
                                <select name="dependencia" id="dependencia"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                                    <option value="defecto">SELECCIONE UNA OPCION</option>
                                    <option value="despacho_alcaldia">DESPACHO ALCALDE</option>
                                    <option value="secretaria_administrativa">SECRETARIA ADMINISTRATIVA</option>
                                    <option value="secretaria_de_agricultura">SECRETARIA DE AGRICULTURA</option>
                                    <option value="secretaria_de_cultura">SECRETARIA DE CULTURA</option>
                                    <option value="secretaria_de_desarrollo_academico">SECRETARIA DE DESARROLLO ECONOMICO
                                    </option>
                                    <option value="secretaria_de_educacion">SECRETARIA DE EDUCACION</option>
                                    <option value="secretaria_de_gabinete">SECRETARIA DE GABINETE</option>
                                    <option value="secretaria_de_gestion_social">SECRETARIA DE GESTION SOCIAL</option>
                                    <option value="secretaria_de_gobierno">SECRETARIA DE GOBIERNO</option>
                                    <option value="secretaria_de_hacienda">SECRETARIA DE HACIENDA</option>
                                    <option value="secretaria_de_infraestructura">SECRETARIA DE INFRAESTRUCTURA</option>
                                    <option value="secretaria_de_la_mujer">SECRETARIA DE LA MUJER</option>
                                    <option value="secretaria_de_movilidad">SECRETARIA DE MOVILIDAD</option>
                                    <option value="secretaria_de_planeacion">SECRETARIA DE PLANEACION</option>
                                    <option value="secretaria_de_salud">SECRETARIA DE SALUD</option>
                                    <option value="secretaria_juridica">SECRETARIA JURIDICA</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-3 mt-8 block">
                            <label for="tipo_funcionario" class=" text-sm font-medium leading-6 text-gray-900">Tipo de
                                funcionario</label>

                            <input type="radio" name="tipo_funcionario" id="planta" value="planta" class="ml-10">
                            <label for="planta" class="mr-20">PLANTA</label>

                            <input type="radio" name="tipo_funcionario" id="contratista" value="contratista"
                                class="">
                            <label for="contratista">CONTRATISTA</label>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="cargo" class="block text-sm font-medium leading-6 text-gray-900">Cargo</label>
                            <div class="mt-2">
                                <select name="cargo" id="cargo"
                                    class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus-ring-inset focus-ring-indigo-600 sm-text-sm sm-leading-6 outline-none">
                                    <option value="defecto">SELECCIONE UNA OPCION</option>
                                    <option value="alcalde">ALCALDE</option>
                                    <option value="asesor">ASESOR</option>
                                    <option value="auxiliar_administrativo">AUXILIAR ADMINISTRATIVO</option>
                                    <option value="auxiliar_area_de_la_salud">AUXILIAR AREA DE LA SALUD</option>
                                    <option value="comisaria_de_familia">COMISARIA DE FAMILIA</option>
                                    <option value="contratista">CONTRATISTA</option>
                                    <option value="corregidor">CORREGIDOR</option>
                                    <option value="inspector">INSPECTOR</option>
                                    <option value="inspector_de_policia">INSPECTOR DE POLICIA</option>
                                    <option value="profesional_especializado">PROFESIONAL ESPECIALIZADO</option>
                                    <option value="profesional_especializado_area_de_salud">PROFESIONAL ESPECIALIZADO AREA
                                        DE SALUD</option>
                                    <option value="profesional_universitario_area_de_la_salud">PROFESIONAL UNIVERSITARIO
                                        AREA DE LA SALUD</option>
                                    <option value="profesional_universitario">PROFESIONAL UNIVERSITARIO</option>
                                    <option value="secretario_de_despacho">SECRETARIO DE DESPACHO</option>
                                    <option value="secretario_de_despacho_e">SECRETARIO DE DESPACHO (E)</option>
                                    <option value="director">DIRECTOR</option>
                                    <option value="director_e">DIRECTOR(E)</option>
                                    <option value="jefe_de_oficina">JEFE DE OFICINA</option>
                                    <option value="jefe_de_oficina_e">JEFE DE OFICINA(E)</option>
                                    <option value="secretaria">SECRETARIA</option>
                                    <option value="secretario">SECRETARIO</option>
                                    <option value="secretario_ejecutivo_del_despacho_del_alcalde">SECRETARIO EJECUTIVO DEL
                                        DESPACHO DEL ALCALDE
                                    </option>
                                    <option value="tecnico_administrativo">TECNICO ADMINISTRATIVO</option>
                                    <option value="tecnico_area_de_la_salud">TECNICO AREA DE LA SALUD</option>
                                    <option value="tecnico_operativo">TECNICO OPERATIVO</option>
                                    <option value="pasante">PASANTE</option>
                                    <option value="comandante_de_transito">COMANDANTE DE TRANSITO</option>
                                    <option value="subcomandante_de_transito">SUBCOMANDANTE DE TRANSITO</option>
                                    <option value="agente_de_transito">AGENTE DE TRANSITO</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-3 mt-8 block">
                            <label for="rol" class=" text-sm font-medium leading-6 text-gray-900">Rol</label>

                            <input type="radio" name="rol" id="planta" value="planta" class="ml-36">
                            <label for="planta" class="mr-16">CREADOR</label>

                            <input type="radio" name="rol" id="contratista" value="contratista" class="">
                            <label for="contratista">VISOR</label>
                        </div>

                        <div class="col-span-full">
                            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Foto de
                                perfil</label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-2">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span>Selecciona una imagen</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">PNG o JPG máximo 2MB</p>
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-start-5 mb-5 bg-gray-200 p-2 text-center cursor-pointer volver_modal_1">
                            <input type="button" value="Volver">
                        </div>
                        <div class="sm:col-start-6 mb-5 bg-gray-200 p-2 text-center cursor-pointer">
                            <input type="submit" value="Crear usuario">
                        </div>

                    </div>
            </form>
        </div>
    </section>

@endsection

@section("script")
    <script src="js/crear_usuario.js"></script>
@endsection