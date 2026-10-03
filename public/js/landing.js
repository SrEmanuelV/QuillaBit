document.addEventListener('DOMContentLoaded', () => {
    const simTipo = document.getElementById('sim-tipo');
    const simTiempo = document.getElementById('sim-tiempo');
    const simStack = document.getElementById('sim-stack');
    const modBtns = document.querySelectorAll('.sim-mod-btn');

    if (!simTipo) return;

    // Lógica para alternar botones de módulos
    modBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            btn.classList.toggle('border-turquesa');
            btn.classList.toggle('bg-turquesa/10');
            btn.classList.toggle('text-turquesa');
            btn.classList.toggle('border-marino');
            btn.classList.toggle('bg-abismo');
            btn.classList.toggle('text-niebla/70');
            calcularEstimacion();
        });
    });

    simTipo.addEventListener('change', calcularEstimacion);

    function calcularEstimacion() {
        const tipo = simTipo.value;
        let modsActivos = document.querySelectorAll('.sim-mod-btn.border-turquesa').length;

        if (tipo === 'web') {
            simTiempo.textContent = `${1 + modsActivos} a ${2 + modsActivos} Semanas`;
            simStack.textContent = "HTML5 + Tailwind CSS + JS + PHP";
        } else if (tipo === 'app') {
            simTiempo.textContent = `${3 + modsActivos} a ${5 + modsActivos} Semanas`;
            simStack.textContent = "Kotlin + Android + Room Database + REST API";
        } else if (tipo === 'saas') {
            simTiempo.textContent = `${4 + modsActivos} a ${7 + modsActivos} Semanas`;
            simStack.textContent = "PHP MVC + MySQL Transaccional + AJAX + Tailwind";
        }
    }
});