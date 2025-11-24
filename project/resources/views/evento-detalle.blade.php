<x-guest-layout>
    <div class="min-h-screen bg-gray-50">
        <!-- Header -->
        <div class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex items-center space-x-4">
                    <a href="/" class="flex items-center text-gray-600 hover:text-gray-900">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Volver
                    </a>
                    <div class="flex items-center space-x-3">
                        <div class="bg-indigo-600 p-3 rounded-lg text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6" />
                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18" />
                                <path d="M4 22h16" />
                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22" />
                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22" />
                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z" />
                            </svg>
                        </div>
                        <h1 class="text-2xl font-bold text-gray-900">Eventos Académicos</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Contenido Principal -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Encabezado del Evento -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h2 class="text-3xl font-bold text-gray-900 mb-3">Hackaton 2025</h2>
                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        15 Mar 2025
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        Campus Central - Auditorio Principal
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        48 horas
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-end space-y-2">
                                <span class="bg-green-100 text-green-800 text-sm font-semibold px-4 py-2 rounded-lg">
                                    Abierto
                                </span>
                                <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-150">
                                    Registrarse al Evento
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Descripción del Evento -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Descripción del Evento</h3>
                        <p class="text-gray-600 mb-6">
                            Competencia de programación de 48 horas donde equipos desarrollan soluciones innovadoras a problemas reales.
                        </p>

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Premios -->
                            <div>
                                <div class="flex items-center mb-4">
                                    <svg class="w-5 h-5 mr-2 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <h4 class="font-semibold text-gray-900">Premios</h4>
                                </div>
                                <ul class="space-y-2">
                                    <li class="flex items-center text-gray-600">
                                        <svg class="w-5 h-5 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        $10,000 MXN
                                    </li>
                                    <li class="flex items-center text-gray-600">
                                        <svg class="w-5 h-5 mr-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        $5,000 MXN
                                    </li>
                                    <li class="flex items-center text-gray-600">
                                        <svg class="w-5 h-5 mr-2 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        $2,000 MXN
                                    </li>
                                </ul>
                            </div>

                            <!-- Requisitos -->
                            <div>
                                <div class="flex items-center mb-4">
                                    <svg class="w-5 h-5 mr-2 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                    </svg>
                                    <h4 class="font-semibold text-gray-900">Requisitos</h4>
                                </div>
                                <ul class="space-y-2">
                                    <li class="flex items-start text-gray-600">
                                        <span class="text-indigo-600 mr-2">•</span>
                                        Estudiante Activo
                                    </li>
                                    <li class="flex items-start text-gray-600">
                                        <span class="text-indigo-600 mr-2">•</span>
                                        Conocimientos Básicos de Programación
                                    </li>
                                    <li class="flex items-start text-gray-600">
                                        <span class="text-indigo-600 mr-2">•</span>
                                        Laptop Personal
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Equipos Participantes -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-gray-900 flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                Equipos Participantes (2)
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <!-- Equipo 1: The Boings -->
                            <div class="border border-gray-200 rounded-lg p-5 hover:border-indigo-300 transition duration-150">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900 mb-2">The Boings</h4>
                                        <p class="text-sm text-gray-600">Equipo enfocado en desarrollo web y mobile con experiencia en React y Node.js</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="px-4 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-150">
                                            Ver Equipo
                                        </button>
                                        <button class="px-4 py-2 text-sm bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-150 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                            Solicitar Unirse
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="grid md:grid-cols-2 gap-4 mt-4">
                                    <div>
                                        <h5 class="text-sm font-semibold text-gray-700 mb-2">Miembros Actuales</h5>
                                        <ul class="space-y-2">
                                            <li class="flex items-center justify-between text-sm">
                                                <span class="text-gray-600">Angel Zarate</span>
                                                <span class="bg-pink-100 text-pink-700 text-xs px-2 py-1 rounded">Programador</span>
                                            </li>
                                            <li class="flex items-center justify-between text-sm">
                                                <span class="text-gray-600">Karla Rocío</span>
                                                <span class="bg-pink-100 text-pink-700 text-xs px-2 py-1 rounded">Diseñador</span>
                                            </li>
                                            <li class="flex items-center justify-between text-sm">
                                                <span class="text-gray-600">Jesús Martínez</span>
                                                <span class="bg-pink-100 text-pink-700 text-xs px-2 py-1 rounded">Analista De Datos</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h5 class="text-sm font-semibold text-gray-700 mb-2">Roles Disponibles</h5>
                                        <ul class="space-y-2">
                                            <li class="flex items-center text-sm text-gray-600">
                                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                                Ing. Software
                                            </li>
                                            <li class="flex items-center text-sm text-gray-600">
                                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                                Analista de Negocios
                                            </li>
                                            <li class="flex items-center text-sm text-gray-600">
                                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                                Diseño Gráfico
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Equipo 2: HackerBoys -->
                            <div class="border border-gray-200 rounded-lg p-5 hover:border-indigo-300 transition duration-150">
                                <div class="flex justify-between items-start mb-4">
                                    <div>
                                        <h4 class="text-lg font-bold text-gray-900 mb-2">HackerBoys</h4>
                                        <p class="text-sm text-gray-600">Equipo enfocado en desarrollo web y mobile con experiencia en Dart y CSS</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="px-4 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-150">
                                            Ver Equipo
                                        </button>
                                        <button class="px-4 py-2 text-sm bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-150 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                            Solicitar Unirse
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="grid md:grid-cols-2 gap-4 mt-4">
                                    <div>
                                        <h5 class="text-sm font-semibold text-gray-700 mb-2">Miembros Actuales</h5>
                                        <ul class="space-y-2">
                                            <li class="flex items-center justify-between text-sm">
                                                <span class="text-gray-600">Carlos Ruiz</span>
                                                <span class="bg-pink-100 text-pink-700 text-xs px-2 py-1 rounded">Programador</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h5 class="text-sm font-semibold text-gray-700 mb-2">Roles Disponibles</h5>
                                        <ul class="space-y-2">
                                            <li class="flex items-center text-sm text-gray-600">
                                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                                Ing. Software
                                            </li>
                                            <li class="flex items-center text-sm text-gray-600">
                                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                                Analista de Negocios
                                            </li>
                                            <li class="flex items-center text-sm text-gray-600">
                                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                                Diseñador
                                            </li>
                                            <li class="flex items-center text-sm text-gray-600">
                                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                                Analista de Datos
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Cronograma -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Cronograma</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="w-2 h-2 bg-indigo-600 rounded-full mr-3"></span>
                                    <span class="text-sm text-gray-600">Registro</span>
                                </div>
                                <span class="text-sm font-medium text-gray-900">1 - 14 Mar</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="w-2 h-2 bg-indigo-600 rounded-full mr-3"></span>
                                    <span class="text-sm text-gray-600">Evento</span>
                                </div>
                                <span class="text-sm font-medium text-gray-900">15 - 17 de Mar</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="w-2 h-2 bg-indigo-600 rounded-full mr-3"></span>
                                    <span class="text-sm text-gray-600">Evaluación</span>
                                </div>
                                <span class="text-sm font-medium text-gray-900">18 Mar</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <span class="w-2 h-2 bg-indigo-600 rounded-full mr-3"></span>
                                    <span class="text-sm text-gray-600">Premiación</span>
                                </div>
                                <span class="text-sm font-medium text-gray-900">20 Mar</span>
                            </div>
                        </div>
                    </div>

                    <!-- Acciones -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Acciones</h3>
                        <div class="space-y-3">
                            <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-4 py-3 rounded-lg transition duration-150 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                                Crear Nuevo Equipo
                            </button>
                            <button class="w-full border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium px-4 py-3 rounded-lg transition duration-150 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                Explorar Equipos
                            </button>
                            <button class="w-full border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium px-4 py-3 rounded-lg transition duration-150 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                                Descargar Recursos
                            </button>
                        </div>
                    </div>

                    <!-- Información del Evento -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Información del Evento</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Participantes</span>
                                <span class="text-sm font-semibold text-gray-900">45</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Equipos Máximo</span>
                                <span class="text-sm font-semibold text-gray-900">5 Miembros</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Tipo</span>
                                <span class="text-sm font-semibold text-gray-900">Programación</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-600">Estado</span>
                                <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                                    Abierto
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
