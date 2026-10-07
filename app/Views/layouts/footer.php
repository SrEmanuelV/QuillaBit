<!-- Footer Principal QuillaBit -->
    <footer class="bg-[#06182B] text-[#EAF6F5] border-t border-[#0D2B45] pt-16 pb-8 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Grid de contenidos del Footer -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-[#0D2B45]">
                
                <!-- Columna 1: Branding, Logo y Eslogan -->
                <div class="space-y-4">
                    <a href="<?= BASE_URL ?>/" class="inline-block focus:outline-none focus:ring-2 focus:ring-[#1FD6C1] rounded-lg p-1">
                        <!-- Logo claro para fondo oscuro (Abismo) -->
                        <img 
                            src="<?= BASE_URL ?>/public/storage/img/footer/logo-footer.png" 
                            alt="QuillaBit Logo" 
                            class="h-10 w-auto object-contain"
                            onerror="this.onerror=null; this.src='<?= BASE_URL ?>/public/storage/img/logo/logo-horizontal-claro.png';"
                        >
                    </a>
                    <p class="text-sm text-[#EAF6F5]/70 leading-relaxed font-normal">
                        Convertimos ideas en tecnología.
                    </p>
                </div>

                <!-- Columna 2: Enlaces Rápidos de Navegación -->
                <div class="space-y-4">
                    <h3 class="text-base font-bold text-white tracking-wide uppercase border-l-2 border-[#1FD6C1] pl-3">
                        Navegación
                    </h3>
                    <ul class="space-y-2.5 text-sm font-medium">
                        <li>
                            <a href="<?= BASE_URL ?>/" class="text-[#EAF6F5]/80 hover:text-[#1FD6C1] transition-colors duration-200 flex items-center gap-2">
                                <span class="text-[#FFB627] text-xs">▸</span> Inicio
                            </a>
                        </li>
                        <li>
                            <a href="<?= BASE_URL ?>/sobre-nosotros" class="text-[#EAF6F5]/80 hover:text-[#1FD6C1] transition-colors duration-200 flex items-center gap-2">
                                <span class="text-[#FFB627] text-xs">▸</span> Sobre Nosotros
                            </a>
                        </li>
                        <li>
                            <a href="<?= BASE_URL ?>/servicios" class="text-[#EAF6F5]/80 hover:text-[#1FD6C1] transition-colors duration-200 flex items-center gap-2">
                                <span class="text-[#FFB627] text-xs">▸</span> Servicios
                            </a>
                        </li>
                        <li>
                            <a href="<?= BASE_URL ?>/proyectos" class="text-[#EAF6F5]/80 hover:text-[#1FD6C1] transition-colors duration-200 flex items-center gap-2">
                                <span class="text-[#FFB627] text-xs">▸</span> Proyectos
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Columna 3: Legales y Políticas -->
                <div class="space-y-4">
                    <h3 class="text-base font-bold text-white tracking-wide uppercase border-l-2 border-[#1FD6C1] pl-3">
                        Legales
                    </h3>
                    <ul class="space-y-2.5 text-sm font-medium text-[#EAF6F5]/80">
                        <li>
                            <a href="<?= BASE_URL ?>/terminos-y-condiciones" class="hover:text-[#1FD6C1] transition-colors duration-200 block">
                                Términos y Condiciones
                            </a>
                        </li>
                        <li>
                            <a href="<?= BASE_URL ?>/politica-de-privacidad" class="hover:text-[#1FD6C1] transition-colors duration-200 block">
                                Política de Privacidad
                            </a>
                        </li>
                        <li>
                            <a href="<?= BASE_URL ?>/mision-y-vision" class="hover:text-[#1FD6C1] transition-colors duration-200 block">
                                Misión y Visión
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Columna 4: Contacto e Información Directa -->
                <div class="space-y-4">
                    <h3 class="text-base font-bold text-white tracking-wide uppercase border-l-2 border-[#1FD6C1] pl-3">
                        Contacto
                    </h3>
                    <div class="space-y-3 text-sm text-[#EAF6F5]/80">
                        <p class="flex items-start gap-2.5">
                            <svg class="w-5 h-5 text-[#1FD6C1] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Barranquilla, Atlántico - Colombia</span>
                        </p>
                        <p class="flex items-center gap-2.5">
                            <svg class="w-5 h-5 text-[#1FD6C1] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:<?= COMPANY_EMAIL ?>" class="hover:text-[#1FD6C1] transition-colors duration-200 break-all">
                                <?= COMPANY_EMAIL ?>
                            </a>
                        </p>
                    </div>
                </div>

            </div>

            <!-- Sub-footer / Derechos reservados -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-medium text-[#EAF6F5]/60">
                <p class="text-center sm:text-left">
                    &copy; <?= date('Y') ?> <span class="text-white font-semibold">QuillaBit</span>. Todos los derechos reservados.
                </p>
                <div class="flex items-center gap-1">
                    <span>Construido con tecnología</span>
                    <span class="inline-block w-2 h-2 rounded-full bg-[#FFB627] animate-pulse"></span>
                </div>
            </div>

        </div>
    </footer>

    <!-- Carga del JS para AJAX en el formulario de contacto -->
    <script src="<?= BASE_URL ?>/public/js/contact.js"></script>
</body>
</html>