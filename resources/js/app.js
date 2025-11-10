import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('submit', function(e) {
        if (e.target.classList.contains('needs-confirmation')) {
            e.preventDefault();

            const formId = e.target.id;
            if (!formId) {
                console.error('Form requiring confirmation must have an ID attribute.');
                return;
            }

            const confirmationTitle = e.target.dataset.confirmationTitle || 'Konfirmasi Tindakan';
            const confirmationMessage = e.target.dataset.confirmationMessage || 'Apakah Anda yakin ingin melanjutkan tindakan ini?';

            window.dispatchEvent(new CustomEvent('open-confirmation-data', {
                detail: {
                    formId: formId,
                    title: confirmationTitle,
                    message: confirmationMessage
                }
            }));
        }
    });
});

