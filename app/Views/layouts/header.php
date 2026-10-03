<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle . ' | QuillaBit' : 'QuillaBit | Convertimos ideas en tecnología' ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= BASE_URL ?>/public/storage/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>/public/storage/img/favicon/apple-touch-icon.png">

    <!-- Tipografía Oficial: Poppins (Bold, Medium, Regular) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (CDN para desarrollo / pruebas) y CSS personalizado -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        abismo: '#06182B',
                        marino: '#0D2B45',
                        turquesa: '#1FD6C1',
                        sol: '#FFB627',
                        niebla: '#EAF6F5'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-abismo text-niebla font-sans antialiased selection:bg-turquesa selection:text-abismo min-h-screen flex flex-col justify-between">

    <!-- Header / Navbar Flotante -->
    <header class="fixed top-0 w-full z-50 bg-abismo/90 backdrop-blur-md border-b border-marino transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <!-- Branding: Isotipo + Texto QuillaBit -->
            <a href="<?= BASE_URL ?>/" class="flex items-center gap-3 group focus:outline-none focus:ring-2 focus:ring-turquesa rounded-lg p-1">
                <!-- Isotipo de la empresa -->
                <img 
                    src="<?= BASE_URL ?>/public/storage/img/logo/isotipo-oscuro.png" 
                    alt="QuillaBit Isotipo" 
                    class="h-10 w-auto object-contain transition-transform duration-300 group-hover:scale-105"
                    onerror="this.onerror=null; this.src='<?= BASE_URL ?>/public/storage/img/logo/logo-horizontal-claro.png';"
                >
                <!-- Texto del Nombre con Colores Combinados -->
                <span class="font-extrabold text-2xl tracking-tight text-white">
                    Quilla<span class="text-turquesa">Bit</span><span class="text-sol">.</span>
                </span>
            </a>

            <!-- Navegación de Escritorio -->
            <nav class="hidden md:flex items-center space-x-8 text-sm font-medium">
                <a href="<?= BASE_URL ?>/" class="text-niebla hover:text-turquesa transition-colors duration-200">
                    Inicio
                </a>
                <a href="<?= BASE_URL ?>/sobre-nosotros" class="text-niebla/80 hover:text-turquesa transition-colors duration-200">
                    Sobre Nosotros
                </a>
                <a href="<?= BASE_URL ?>/servicios" class="text-niebla/80 hover:text-turquesa transition-colors duration-200">
                    Servicios
                </a>
                <a href="<?= BASE_URL ?>/proyectos" class="text-niebla/80 hover:text-turquesa transition-colors duration-200">
                    Proyectos
                </a>
                <a href="<?= BASE_URL ?>/#contacto" class="bg-turquesa hover:bg-turquesa/90 text-abismo font-bold px-5 py-2.5 rounded-xl transition-all duration-200 shadow-lg shadow-turquesa/20 hover:shadow-turquesa/40 hover:-translate-y-0.5">
                    Hablemos
                </a>
            </nav>

            <!-- Botón Menú Hamburguesa (Móviles) -->
            <button 
                id="mobile-menu-btn"
                type="button" 
                class="md:hidden p-2.5 rounded-lg text-niebla hover:bg-marino focus:outline-none focus:ring-2 focus:ring-turquesa transition-colors"
                aria-label="Abrir menú"
            >
                <svg id="menu-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Menú Desplegable (Móviles) -->
        <div id="mobile-menu" class="hidden md:hidden bg-marino border-b border-abismo/50 px-4 pt-3 pb-6 space-y-3">
            <a href="<?= BASE_URL ?>/" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-abismo hover:text-turquesa transition-colors">
                Inicio
            </a>
            <a href="<?= BASE_URL ?>/sobre-nosotros" class="block px-3 py-2 rounded-md text-base font-medium text-niebla/80 hover:bg-abismo hover:text-turquesa transition-colors">
                Sobre Nosotros
            </a>
            <a href="<?= BASE_URL ?>/servicios" class="block px-3 py-2 rounded-md text-base font-medium text-niebla/80 hover:bg-abismo hover:text-turquesa transition-colors">
                Servicios
            </a>
            <a href="<?= BASE_URL ?>/proyectos" class="block px-3 py-2 rounded-md text-base font-medium text-niebla/80 hover:bg-abismo hover:text-turquesa transition-colors">
                Proyectos
            </a>
            <a href="<?= BASE_URL ?>/#contacto" class="block w-full text-center bg-turquesa text-abismo font-bold px-4 py-3 rounded-xl transition-colors mt-2">
                Hablemos
            </a>
        </div>
    </header>

    <script>
        // Lógica simple para toggle del menú móvil
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('menu-icon-open');
            const closeIcon = document.getElementById('menu-icon-close');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                    openIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                });
            }
        });
    </script>