/**
 * Lógica de Envío de Formulario - QuillaBit
 * Modo compatible con hosting tradicional / InfinityFree (POST Directo + UX Feedback)
 */

document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');
    const formResponse = document.getElementById('formResponse');
    const submitBtn    = document.getElementById('submitBtn');

    if (!contactForm) return;

    // 1. Verificar si la URL trae un parámetro de estado al regresar (status=success o status=error)
    const urlParams = new URLSearchParams(window.location.search);
    const status    = urlParams.get('status');

    if (status && formResponse) {
        formResponse.classList.remove('hidden');

        if (status === 'success') {
            formResponse.className = 'p-4 rounded-xl text-sm font-medium transition-all duration-300 bg-turquesa/10 border border-turquesa/40 text-turquesa';
            formResponse.innerHTML = `
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>¡Gracias por contactar a QuillaBit! Tu solicitud ha sido registrada correctamente. Nos pondremos en contacto pronto.</span>
                </div>
            `;
            contactForm.reset();
        } else if (status === 'error') {
            formResponse.className = 'p-4 rounded-xl text-sm font-medium transition-all duration-300 bg-rose-500/10 border border-rose-500/30 text-rose-400';
            formResponse.innerHTML = `
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Por favor, verifica que todos los campos estén diligenciados correctamente e inténtalo nuevamente.</span>
                </div>
            `;
        }

        // Limpiar la URL sin recargar para que no quede el parametro ?status=...
        window.history.replaceState({}, document.title, window.location.pathname + window.location.hash);
    }

    // 2. Manejador de evento Submit (Se envía de forma nativa por HTTP POST)
    contactForm.addEventListener('submit', () => {
        // NO usamos e.preventDefault() para dejar que InfinityFree procese el POST estándar.

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg class="animate-spin h-5 w-5 text-abismo inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span>Enviando mensaje...</span>
            `;
        }
    });
});