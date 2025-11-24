<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Académicos - Dashboard</title>
    
    {{-- CSS de Laravel (si existe) --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    {{-- Fuentes y Font Awesome --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-left">
            <div class="logo-icon"><i class="fa-solid fa-trophy"></i></div>
            <span class="brand-name">Eventos Académicos</span>
        </div>
        <div class="nav-right">
            <button class="icon-btn"><i class="fa-solid fa-moon"></i></button>
            <button class="icon-btn"><i class="fa-regular fa-bell"></i></button>
            <div class="user-profile">
                <i class="fa-regular fa-user"></i>
                <span>Perfil</span>
            </div>
            <div class="admin-link">
                <i class="fa-solid fa-user-shield"></i>
                <span>Admin</span>
            </div>
            <div class="logout-link">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Salir</span>
            </div>
        </div>
    </nav>

    <main class="container">
        
        <header class="welcome-header">
            <h1>Bienvenido {{ Auth::user()->name ?? 'Ángel' }}</h1>
            <p>Explora eventos, forma equipos y desarrolla proyectos innovadores</p>
        </header>

        <div class="dashboard-grid">
            
            <div class="left-column">
                
                <section class="card events-section">
                    <div class="card-header">
                        <h2><i class="fa-regular fa-calendar"></i> Eventos Disponibles</h2>
                        <div class="search-box">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Buscar eventos">
                        </div>
                    </div>

                    <div class="event-list">
                        {{-- Aquí después podrás hacer un @foreach con los eventos de la base de datos --}}
                        <div class="event-item">
                            <div class="event-info">
                                <h3>Hackaton 2025</h3>
                                <p>Programación , 13 Sept 2025 , 100 participantes</p>
                            </div>
                            <div class="event-actions">
                                <span class="badge badge-blue">Abierto</span>
                                <button class="btn-primary">Ver Detalles</button>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-info">
                                <h3>Innovatec 2025</h3>
                                <p>Innovación , 10 Sept 2025 , 100 participantes</p>
                            </div>
                            <div class="event-actions">
                                <span class="badge badge-blue">Abierto</span>
                                <button class="btn-primary">Ver Detalles</button>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-info">
                                <h3>Concurso 2025</h3>
                                <p>Innovación , 10 Dic 2025 , 100 participantes</p>
                            </div>
                            <div class="event-actions">
                                <span class="badge badge-pink">Próximamente</span>
                                <button class="btn-primary">Ver Detalles</button>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="card teams-section">
                    <div class="card-header">
                        <h2><i class="fa-solid fa-users-viewfinder"></i> Mis equipos</h2>
                    </div>
                    
                    <div class="team-list">
                        <div class="team-item">
                            <div class="team-details">
                                <div class="team-name-row">
                                    <h3>The Boings</h3>
                                    <span class="role-badge">Programador</span>
                                </div>
                                <p class="event-ref">Hackaton 2025</p>
                                <p class="members-count">4 miembros</p>
                            </div>
                            <div class="team-progress-area">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 75%;"></div>
                                </div>
                                <button class="btn-outline">Ver Detalles</button>
                            </div>
                        </div>

                        <div class="team-item">
                            <div class="team-details">
                                <div class="team-name-row">
                                    <h3>Los Deivis</h3>
                                    <span class="role-badge">Diseñador</span>
                                </div>
                                <p class="event-ref">Concurso 2025</p>
                                <p class="members-count">4 miembros</p>
                            </div>
                            <div class="team-progress-area">
                                <div class="progress-bar">
                                    <div class="progress-fill multi-color" style="width: 40%;"></div>
                                </div>
                                <button class="btn-outline">Ver Detalles</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="right-column">
                
                <section class="card actions-card">
                    <h3>Acciones Rápidas</h3>
                    <div class="action-buttons">
                        <button class="action-btn"><i class="fa-solid fa-plus"></i> Crear Equipos</button>
                        <button class="action-btn"><i class="fa-solid fa-user-group"></i> Unirse a Equipo</button>
                        <button class="action-btn"><i class="fa-solid fa-chart-simple"></i> Ver Progreso</button>
                    </div>
                </section>

                <section class="card stats-card">
                    <h3>Mis Estadísticas</h3>
                    <div class="stat-row">
                        <span>Eventos Participados</span>
                        <strong>2</strong>
                    </div>
                    <div class="stat-row">
                        <span>Equipos Formados</span>
                        <strong>2</strong>
                    </div>
                    <div class="stat-row">
                        <span>Proyectos Completados</span>
                        <strong>1</strong>
                    </div>
                    <div class="stat-row">
                        <span>Constancias Obtenidas</span>
                        <strong>1</strong>
                    </div>
                </section>

                <section class="card notif-card">
                    <h3><i class="fa-regular fa-bell"></i> Notificaciones</h3>
                    
                    <div class="notif-item">
                        <div class="notif-text">
                            <strong>Invitación a Equipo</strong>
                            <p>Te invitaron a "Data Wizards"</p>
                        </div>
                        <span class="notif-count">2</span>
                    </div>

                    <div class="notif-item">
                        <div class="notif-text">
                            <strong>Nuevo Evento</strong>
                            <p>Se abrió "AI Challenge 2024"</p>
                        </div>
                        <span class="notif-count">1</span>
                    </div>

                    <div class="notif-item">
                        <div class="notif-text">
                            <strong>Progreso Actualizado</strong>
                            <p>Tu equipo alcanzó 75% de progreso</p>
                        </div>
                        <span class="notif-count">1</span>
                    </div>
                </section>

            </div>
        </div>
    </main>
</body>
</html>