<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/evento-detalle.css') }}">
    
    <div class="page-container">
        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <div class="header-nav">
                    <a href="/" class="back-link">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Volver
                    </a>
                    <div class="header-title-wrapper">
                        <div class="header-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6" />
                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18" />
                                <path d="M4 22h16" />
                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22" />
                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22" />
                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z" />
                            </svg>
                        </div>
                        <h1 class="header-title">Eventos Académicos</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="content-grid">
                <!-- Contenido Principal -->
                <div class="main-column">
                    <!-- Encabezado del Evento -->
                    <div class="card">
                        <div class="event-header">
                            <div>
                                <h2 class="event-title">Hackaton 2025</h2>
                                <div class="event-meta">
                                    <div class="event-meta-item">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        15 Mar 2025
                                    </div>
                                    <div class="event-meta-item">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        Campus Central - Auditorio Principal
                                    </div>
                                    <div class="event-meta-item">
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        48 horas
                                    </div>
                                </div>
                            </div>
                            <div class="event-actions">
                                <span class="badge badge-success">Abierto</span>
                                <button class="btn btn-primary">Registrarse al Evento</button>
                            </div>
                        </div>
                    </div>

                    <!-- Descripción del Evento -->
                    <div class="card">
                        <h3 class="section-title">Descripción del Evento</h3>
                        <p class="event-description">
                            Competencia de programación de 48 horas donde equipos desarrollan soluciones innovadoras a problemas reales.
                        </p>

                        <div class="grid-2col">
                            <!-- Premios -->
                            <div>
                                <div class="subsection-title">
                                    <svg fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <h4>Premios</h4>
                                </div>
                                <ul class="list-items">
                                    <li class="list-item star-gold">
                                        <svg fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        $10,000 MXN
                                    </li>
                                    <li class="list-item star-silver">
                                        <svg fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        $5,000 MXN
                                    </li>
                                    <li class="list-item star-bronze">
                                        <svg fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        $2,000 MXN
                                    </li>
                                </ul>
                            </div>

                            <!-- Requisitos -->
                            <div>
                                <div class="subsection-title">
                                    <svg fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                    </svg>
                                    <h4>Requisitos</h4>
                                </div>
                                <ul class="list-items">
                                    <li class="list-item bullet">
                                        <span class="bullet-point">•</span>
                                        Estudiante Activo
                                    </li>
                                    <li class="list-item bullet">
                                        <span class="bullet-point">•</span>
                                        Conocimientos Básicos de Programación
                                    </li>
                                    <li class="list-item bullet">
                                        <span class="bullet-point">•</span>
                                        Laptop Personal
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Equipos Participantes -->
                    <div class="card">
                        <div class="team-header">
                            <h3 class="team-title">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                Equipos Participantes (2)
                            </h3>
                        </div>

                        <div class="team-list">
                            <!-- Equipo 1: The Boings -->
                            <div class="team-card">
                                <div class="team-card-header">
                                    <div class="team-info">
                                        <h4>The Boings</h4>
                                        <p>Equipo enfocado en desarrollo web y mobile con experiencia en React y Node.js</p>
                                    </div>
                                    <div class="team-actions">
                                        <button class="btn btn-secondary btn-sm">Ver Equipo</button>
                                        <button class="btn btn-primary btn-sm">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                            Solicitar Unirse
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="team-details">
                                    <div class="team-section">
                                        <h5>Miembros Actuales</h5>
                                        <ul class="member-list">
                                            <li class="member-item">
                                                <span class="member-name">Angel Zarate</span>
                                                <span class="role-badge">Programador</span>
                                            </li>
                                            <li class="member-item">
                                                <span class="member-name">Karla Rocío</span>
                                                <span class="role-badge">Diseñador</span>
                                            </li>
                                            <li class="member-item">
                                                <span class="member-name">Jesús Martínez</span>
                                                <span class="role-badge">Analista De Datos</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-section">
                                        <h5>Roles Disponibles</h5>
                                        <ul class="list-items">
                                            <li class="available-role">
                                                <span class="status-dot"></span>
                                                Ing. Software
                                            </li>
                                            <li class="available-role">
                                                <span class="status-dot"></span>
                                                Analista de Negocios
                                            </li>
                                            <li class="available-role">
                                                <span class="status-dot"></span>
                                                Diseño Gráfico
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Equipo 2: HackerBoys -->
                            <div class="team-card">
                                <div class="team-card-header">
                                    <div class="team-info">
                                        <h4>HackerBoys</h4>
                                        <p>Equipo enfocado en desarrollo web y mobile con experiencia en Dart y CSS</p>
                                    </div>
                                    <div class="team-actions">
                                        <button class="btn btn-secondary btn-sm">Ver Equipo</button>
                                        <button class="btn btn-primary btn-sm">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                            Solicitar Unirse
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="team-details">
                                    <div class="team-section">
                                        <h5>Miembros Actuales</h5>
                                        <ul class="member-list">
                                            <li class="member-item">
                                                <span class="member-name">Carlos Ruiz</span>
                                                <span class="role-badge">Programador</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-section">
                                        <h5>Roles Disponibles</h5>
                                        <ul class="list-items">
                                            <li class="available-role">
                                                <span class="status-dot"></span>
                                                Ing. Software
                                            </li>
                                            <li class="available-role">
                                                <span class="status-dot"></span>
                                                Analista de Negocios
                                            </li>
                                            <li class="available-role">
                                                <span class="status-dot"></span>
                                                Diseñador
                                            </li>
                                            <li class="available-role">
                                                <span class="status-dot"></span>
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
                <div class="sidebar-column">
                    <!-- Cronograma -->
                    <div class="card">
                        <h3 class="section-title">Cronograma</h3>
                        <div class="timeline-list">
                            <div class="timeline-item">
                                <div class="timeline-label">
                                    <span class="timeline-dot"></span>
                                    <span>Registro</span>
                                </div>
                                <span class="timeline-date">1 - 14 Mar</span>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-label">
                                    <span class="timeline-dot"></span>
                                    <span>Evento</span>
                                </div>
                                <span class="timeline-date">15 - 17 de Mar</span>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-label">
                                    <span class="timeline-dot"></span>
                                    <span>Evaluación</span>
                                </div>
                                <span class="timeline-date">18 Mar</span>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-label">
                                    <span class="timeline-dot"></span>
                                    <span>Premiación</span>
                                </div>
                                <span class="timeline-date">20 Mar</span>
                            </div>
                        </div>
                    </div>

                    <!-- Acciones -->
                    <div class="card">
                        <h3 class="section-title">Acciones</h3>
                        <div class="action-buttons">
                            <button class="btn btn-primary btn-full">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                                Crear Nuevo Equipo
                            </button>
                            <button class="btn btn-secondary btn-full">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                Explorar Equipos
                            </button>
                            <button class="btn btn-secondary btn-full">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                                Descargar Recursos
                            </button>
                        </div>
                    </div>

                    <!-- Información del Evento -->
                    <div class="card">
                        <h3 class="section-title">Información del Evento</h3>
                        <div class="info-list">
                            <div class="info-item">
                                <span class="info-label">Participantes</span>
                                <span class="info-value">45</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Equipos Máximo</span>
                                <span class="info-value">5 Miembros</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Tipo</span>
                                <span class="info-value">Programación</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Estado</span>
                                <span class="badge-small">Abierto</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
