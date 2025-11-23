@extends('layouts.auth')

@section('titulo', 'Iniciar Sesión')

@section('encabezado', 'Iniciar Sesión')

@section('descripcion', 'Accede a tu cuenta para participar en eventos')

@section('pestana-login-activa', 'activa')

@section('formulario')
    <!-- Estado de la Sesión -->
    @if (session('status'))
        <div class="alerta alerta-exito">
            {{ session('status') }}
        </div>
    @endif

    <!-- Formulario de Inicio de Sesión -->
    <form method="POST" action="{{ route('login') }}" class="formulario-autenticacion">
        @csrf

        <!-- Campo de Correo Electrónico -->
        <div class="grupo-formulario">
            <label for="email">Correo electrónico</label>
            <div class="contenedor-input">
                <svg class="icono-input" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M3 4h14a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1z" stroke="#666" stroke-width="1.5"/>
                    <path d="M2 5l8 5 8-5" stroke="#666" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="tucarreo@itoaxaca.edu.mx"
                    value="{{ old('email') }}"
                    required 
                    autofocus
                    autocomplete="username"
                >
            </div>
            @error('email')
                <span class="mensaje-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Campo de Contraseña -->
        <div class="grupo-formulario">
            <label for="password">Contraseña</label>
            <div class="contenedor-input">
                <svg class="icono-input" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <rect x="3" y="8" width="14" height="10" rx="2" stroke="#666" stroke-width="1.5"/>
                    <path d="M6 8V6a4 4 0 0 1 8 0v2" stroke="#666" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="••••••••••••"
                    required
                    autocomplete="current-password"
                >
            </div>
            @error('password')
                <span class="mensaje-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Recordarme y Olvidaste tu contraseña -->
        <div class="opciones-formulario">
            <label class="etiqueta-checkbox">
                <input type="checkbox" name="remember" id="remember_me">
                <span>Recordarme</span>
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="contrasena-olvidada">¿Olvidaste tu contraseña?</a>
            @endif
        </div>

        <!-- Botón de Enviar -->
        <button type="submit" class="boton-enviar">
            Iniciar sesión
        </button>

        <!-- Términos -->
        <p class="terminos">
            Al registrarte, aceptas nuestros <a href="#">términos de servicio</a> y <a href="#">política de privacidad</a>
        </p>
    </form>
@endsection