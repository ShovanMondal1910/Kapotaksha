// Lightbox: load clicked image into modal
const lightboxModal = document.getElementById('lightboxModal');
if (lightboxModal) {
    lightboxModal.addEventListener('show.bs.modal', function (e) {
        const trigger = e.relatedTarget;
        if (trigger) {
            const img = document.getElementById('lightboxImg');
            const caption = document.getElementById('lightboxCaption');
            if (img) img.src = trigger.dataset.imgSrc || '';
            if (caption) caption.textContent = trigger.dataset.imgCaption || '';
        }
    });
    lightboxModal.addEventListener('hidden.bs.modal', function () {
        const img = document.getElementById('lightboxImg');
        if (img) img.src = '';
    });
}
