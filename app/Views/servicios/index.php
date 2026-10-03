<?php 
$pageTitle = "Servicios de Ingeniería & Desarrollo Web | QuillaBit";
require_once __DIR__ . '/../layouts/header.php'; 
?>

<main class="pt-20 overflow-hidden">

    <!-- ========================================== -->
    <!-- 1. HERO SERVICIOS -->
    <!-- ========================================== -->
    <section class="relative bg-abismo py-20 lg:py-28 border-b border-marino">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-turquesa/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span class="inline-block px-4 py-1.5 rounded-full bg-turquesa/10 border border-turquesa/30 text-turquesa font-bold text-xs tracking-wider uppercase">
                Ingeniería Web Específica & Escalable
            </span>
            <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight mt-3 mb-6">
                Especialistas en la construcción de <span class="text-transparent bg-clip-text bg-gradient-to-r from-turquesa via-niebla to-sol">plataformas y sistemas web</span>
            </h1>
            <p class="text-lg text-niebla/80 max-w-3xl mx-auto font-normal leading-relaxed">
                Transformamos necesidades operativas complejas en arquitectura web limpia, paneles interactivos, bases de datos robustas e interfaces de alto rendimiento.
            </p>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 2. CATÁLOGO REAL DE SERVICIOS -->
    <!-- ========================================== -->
    <section class="py-24 bg-abismo border-b border-marino">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Servicio 1: Paneles Administrativos Multirrol & Dashboards -->
                <div class="bg-marino/60 border border-marino hover:border-turquesa/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-turquesa/10 border border-turquesa/30 rounded-xl flex items-center justify-center text-turquesa mb-6 group-hover:scale-105 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Paneles Multirrol & Dashboards</h3>
                        <p class="text-niebla/70 text-sm leading-relaxed mb-6">
                            Sistemas de gestión interna para empresas. Desarrollamos paneles con control de acceso por roles, reportes administrativos detallados y dashboards interactivos con gráficos en tiempo real.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs text-turquesa font-mono pt-4 border-t border-abismo/50">
                        <li class="flex items-center gap-2"><span>✓</span> Visualización de Datos con Chart.js</li>
                        <li class="flex items-center gap-2"><span>✓</span> Gestión Granular de Permisos</li>
                        <li class="flex items-center gap-2"><span>✓</span> Reportes & Métricas Administrativas</li>
                    </ul>
                </div>

                <!-- Servicio 2: Sitios Webs Corporativos & Landing Pages -->
                <div class="bg-marino/60 border border-marino hover:border-sol/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-sol/10 border border-sol/30 rounded-xl flex items-center justify-center text-sol mb-6 group-hover:scale-105 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Webs Corporativas & Negocios</h3>
                        <p class="text-niebla/70 text-sm leading-relaxed mb-6">
                            Diseñamos la presencia digital de negocios locales y empresas. Sitios web rápidos, totalmente responsivos y estructurados para captar clientes desde el primer segundo.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs text-sol font-mono pt-4 border-t border-abismo/50">
                        <li class="flex items-center gap-2"><span>✓</span> Carga Ultra Rápida & SEO Básico</li>
                        <li class="flex items-center gap-2"><span>✓</span> Formularios Inteligentes sin Recarga</li>
                        <li class="flex items-center gap-2"><span>✓</span> Diseño Adaptable a Móviles</li>
                    </ul>
                </div>

                <!-- Servicio 3: E-Commerce & Tiendas Virtuales -->
                <div class="bg-marino/60 border border-marino hover:border-turquesa/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-turquesa/10 border border-turquesa/30 rounded-xl flex items-center justify-center text-turquesa mb-6 group-hover:scale-105 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">E-Commerce & Ventas Online</h3>
                        <p class="text-niebla/70 text-sm leading-relaxed mb-6">
                            Plataformas de comercio electrónico a medida. Catálogos de productos organizados, carritos de compra fluidos y procesamiento ágil de pedidos para tu negocio.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs text-turquesa font-mono pt-4 border-t border-abismo/50">
                        <li class="flex items-center gap-2"><span>✓</span> Catálogos & Gestión de Stock</li>
                        <li class="flex items-center gap-2"><span>✓</span> Carrito & Flujo de Compra Claro</li>
                        <li class="flex items-center gap-2"><span>✓</span> Administración de Pedidos</li>
                    </ul>
                </div>

                <!-- Servicio 4: Arquitectura de Bases de Datos Relacionales -->
                <div class="bg-marino/60 border border-marino hover:border-sol/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-sol/10 border border-sol/30 rounded-xl flex items-center justify-center text-sol mb-6 group-hover:scale-105 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Bases de Datos & Backend Seguro</h3>
                        <p class="text-niebla/70 text-sm leading-relaxed mb-6">
                            Modelado, estructuración e integración de bases de datos relacionales robustas. Aseguramos integridad de la información con transacciones ACID y consultas preparadas.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs text-sol font-mono pt-4 border-t border-abismo/50">
                        <li class="flex items-center gap-2"><span>✓</span> MySQL & PostgreSQL</li>
                        <li class="flex items-center gap-2"><span>✓</span> ORMs (SQLAlchemy, Eloquent) & PDO</li>
                        <li class="flex items-center gap-2"><span>✓</span> Control de Migraciones</li>
                    </ul>
                </div>

                <!-- Servicio 5: Diseño UX/UI & Prototipado Web -->
                <div class="bg-marino/60 border border-marino hover:border-turquesa/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-turquesa/10 border border-turquesa/30 rounded-xl flex items-center justify-center text-turquesa mb-6 group-hover:scale-105 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Diseño UX/UI & Layouts Modernos</h3>
                        <p class="text-niebla/70 text-sm leading-relaxed mb-6">
                            Conceptualizamos y maquetamos interfaces elegantes y funcionales. Garantizamos una excelente experiencia de usuario con maquetación moderna mediante CSS3, Bootstrap y Tailwind CSS.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs text-turquesa font-mono pt-4 border-t border-abismo/50">
                        <li class="flex items-center gap-2"><span>✓</span> Prototipado centrado en Usabilidad</li>
                        <li class="flex items-center gap-2"><span>✓</span> Maquetación Tailwind / Bootstrap</li>
                        <li class="flex items-center gap-2"><span>✓</span> Consistencia de Marca & Colores</li>
                    </ul>
                </div>

                <!-- Servicio 6: Desarrollo de APIs REST & Frontend Dinámico -->
                <div class="bg-marino/60 border border-marino hover:border-sol/50 rounded-2xl p-8 transition-all duration-300 hover:-translate-y-1 group flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-sol/10 border border-sol/30 rounded-xl flex items-center justify-center text-sol mb-6 group-hover:scale-105 transition-transform">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">APIs REST & Frontends React/Next</h3>
                        <p class="text-niebla/70 text-sm leading-relaxed mb-6">
                            Construcción e integración de servicios backend (PHP, Python FastAPI, Node) con clientes web interactivos construidos en JavaScript moderno, React, Next.js o Vue.js.
                        </p>
                    </div>
                    <ul class="space-y-2 text-xs text-sol font-mono pt-4 border-t border-abismo/50">
                        <li class="flex items-center gap-2"><span>✓</span> Peticiones Asíncronas (Fetch / AJAX)</li>
                        <li class="flex items-center gap-2"><span>✓</span> APIs RESTful Formato JSON</li>
                        <li class="flex items-center gap-2"><span>✓</span> Aplicaciones Web Modernas (React / Next)</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- 3. METODOLOGÍA DE TRABAJO -->
    <!-- ========================================== -->
    <section class="py-20 bg-abismo">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-turquesa font-bold text-sm tracking-wider uppercase">Proceso de Trabajo</span>
                <h2 class="text-3xl font-extrabold text-white mt-2">¿Cómo desarrollamos tu proyecto en QuillaBit?</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="bg-marino/40 border border-marino p-6 rounded-xl text-center space-y-3">
                    <span class="inline-block w-10 h-10 rounded-full bg-turquesa/20 text-turquesa font-extrabold text-lg leading-10">1</span>
                    <h4 class="text-white font-bold text-base">Levantamiento</h4>
                    <p class="text-niebla/70 text-xs leading-relaxed">Entendemos a fondo los problemas y metas del negocio físico o digital.</p>
                </div>

                <div class="bg-marino/40 border border-marino p-6 rounded-xl text-center space-y-3">
                    <span class="inline-block w-10 h-10 rounded-full bg-sol/20 text-sol font-extrabold text-lg leading-10">2</span>
                    <h4 class="text-white font-bold text-base">Diseño & Modelado</h4>
                    <p class="text-niebla/70 text-xs leading-relaxed">Diseñamos la interfaz UX/UI y definimos la base de datos.</p>
                </div>

                <div class="bg-marino/40 border border-marino p-6 rounded-xl text-center space-y-3">
                    <span class="inline-block w-10 h-10 rounded-full bg-turquesa/20 text-turquesa font-extrabold text-lg leading-10">3</span>
                    <h4 class="text-white font-bold text-base">Desarrollo & Pruebas</h4>
                    <p class="text-niebla/70 text-xs leading-relaxed">Codificación limpia con revisiones continuas y pruebas de integración.</p>
                </div>

                <div class="bg-marino/40 border border-marino p-6 rounded-xl text-center space-y-3">
                    <span class="inline-block w-10 h-10 rounded-full bg-sol/20 text-sol font-extrabold text-lg leading-10">4</span>
                    <h4 class="text-white font-bold text-base">Despliegue & Soporte</h4>
                    <p class="text-niebla/70 text-xs leading-relaxed">Publicamos el sistema y brindamos el respaldo necesario para su uso.</p>
                </div>

            </div>

            <!-- CTA Final -->
            <div class="mt-16 text-center">
                <a href="<?= BASE_URL ?>/#contacto" class="inline-block bg-turquesa hover:bg-turquesa/90 text-abismo font-extrabold px-8 py-4 rounded-xl transition-all shadow-xl shadow-turquesa/20">
                    Cuéntanos tu Idea & Cotiza
                </a>
            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>