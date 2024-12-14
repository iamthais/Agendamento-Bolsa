// Obter os modais
const modalStatus = document.getElementById('modalStatus');
const modalPrincipal = document.getElementById('modalPrincipal');

// Fechar modal principal ao abrir o modal secundário
modalStatus.addEventListener('show.bs.modal', () => {
    const modalInstancePrincipal = bootstrap.Modal.getInstance(modalPrincipal);
    if (modalInstancePrincipal) {
        modalInstancePrincipal.hide();
    }
});

// Reabrir modal principal ao fechar o modal secundário
modalStatus.addEventListener('hidden.bs.modal', () => {
    const modalInstancePrincipal =
        bootstrap.Modal.getOrCreateInstance(modalPrincipal);
    modalInstancePrincipal.show();
});
