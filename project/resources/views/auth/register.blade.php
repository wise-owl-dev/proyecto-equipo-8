@extends('layouts.auth')

@section('titulo', 'Crear Cuenta')

@section('encabezado', 'Crear Cuenta')

@section('descripcion', 'Únete a la comunidad académica y forma tu equipo')

@section('pestana-registro-activa', 'activa')

@section('formulario')
    <!-- Formulario de Registro -->
    <form method="POST" action="{{ route('register') }}" class="formulario-autenticacion">
        @csrf

        <!-- Nombre y Apellidos en una fila -->
        <div class="fila-formulario">
            <div class="grupo-formulario">
                <label for="name">Nombre</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Angel"
                    value="{{ old('name') }}"
                    required 
                    autofocus
                    autocomplete="name"
                >
                @error('name')
                    <span class="mensaje-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="grupo-formulario">
                <label for="last_name">Apellidos</label>
                <input 
                    type="text" 
                    id="last_name" 
                    name="last_name" 
                    placeholder="Robles"
                    value="{{ old('last_name') }}"
                    required
                    autocomplete="family-name"
                >
                @error('last_name')
                    <span class="mensaje-error">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Número de control -->
        <div class="grupo-formulario">
            <label for="control_number">Número de control</label>
            <div class="contenedor-input">
                <svg class="icono-input" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M10 2a4 4 0 0 1 4 4v2H6V6a4 4 0 0 1 4-4z" stroke="#666" stroke-width="1.5"/>
                    <rect x="3" y="8" width="14" height="10" rx="2" stroke="#666" stroke-width="1.5"/>
                    <circle cx="10" cy="13" r="1.5" fill="#666"/>
                </svg>
                <input 
                    type="text" 
                    id="control_number" 
                    name="control_number" 
                    placeholder="22165154"
                    value="{{ old('control_number') }}"
                    required
                >
            </div>
            @error('control_number')
                <span class="mensaje-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Carrera -->
        <div class="grupo-formulario">
            <label for="carrera">Carrera</label>
            <div class="contenedor-select">
                <select id="carrera" name="carrera" required>
                    <option value="">Selecciona tu carrera</option>
                    <option value="sistemas" {{ old('carrera') == 'sistemas' ? 'selected' : '' }}>Ingeniería en Sistemas Computacionales</option>
                    <option value="industrial" {{ old('carrera') == 'industrial' ? 'selected' : '' }}>Ingeniería Industrial</option>
                    <option value="electronica" {{ old('carrera') == 'electronica' ? 'selected' : '' }}>Ingeniería Electrónica</option>
                    <option value="mecanica" {{ old('carrera') == 'mecanica' ? 'selected' : '' }}>Ingeniería Mecánica</option>
                    <option value="civil" {{ old('carrera') == 'civil' ? 'selected' : '' }}>Ingeniería Civil</option>
                    <option value="gestion" {{ old('carrera') == 'gestion' ? 'selected' : '' }}>Ingeniería en Gestión Empresarial</option>
                </select>
            </div>
            @error('carrera')
                <span class="mensaje-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Rol preferido -->
        <div class="grupo-formulario">
            <label for="rol_preferido">Rol preferido</label>
            <input 
                type="text" 
                id="rol_preferido" 
                name="rol_preferido" 
                placeholder="¿En qué te especializas?"
                value="{{ old('rol_preferido') }}"
            >
            @error('rol_preferido')
                <span class="mensaje-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Correo electrónico -->
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
                    autocomplete="username"
                >
            </div>
            @error('email')
                <span class="mensaje-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Contraseña -->
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
                    placeholder="••••••••"
                    required
                    autocomplete="new-password"
                >
            </div>
            @error('password')
                <span class="mensaje-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Confirmar Contraseña -->
        <div class="grupo-formulario">
            <label for="password_confirmation">Confirmar contraseña</label>
            <div class="contenedor-input">
                <svg class="icono-input" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <rect x="3" y="8" width="14" height="10" rx="2" stroke="#666" stroke-width="1.5"/>
                    <path d="M6 8V6a4 4 0 0 1 8 0v2" stroke="#666" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <input 
                    type="password" 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    placeholder="••••••••"
                    required
                    autocomplete="new-password"
                >
            </div>
            @error('password_confirmation')
                <span class="mensaje-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Botón de Enviar -->
        <button type="submit" class="boton-enviar">
            Crear cuenta
        </button>

        <!-- Términos -->
        <p class="terminos">
            Al registrarte, aceptas nuestros <a href="#">términos de servicio</a> y <a href="#">política de privacidad</a>
        </p>
    </form>
@endsection