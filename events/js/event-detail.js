const galleryImgs = Array.from(document.querySelectorAll('.event-gallery-grid img'));
let currentIndex = 0;

function openLightbox(imgEl) {
    currentIndex = galleryImgs.indexOf(imgEl);
    const lightboxImg = document.getElementById('lightbox-img');
    const lightbox = document.getElementById('lightbox');
    if (lightboxImg && imgEl) {
        lightboxImg.src = imgEl.src;
        lightboxImg.alt = imgEl.alt;
    }
    if (lightbox) {
        lightbox.classList.add('active');
    }
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    if (lightbox) {
        lightbox.classList.remove('active');
    }
    document.body.style.overflow = '';
}

function shiftLightbox(dir) {
    if (!galleryImgs.length) return;
    currentIndex = (currentIndex + dir + galleryImgs.length) % galleryImgs.length;
    const img = galleryImgs[currentIndex];
    const lightboxImg = document.getElementById('lightbox-img');
    if (lightboxImg && img) {
        lightboxImg.src = img.src;
        lightboxImg.alt = img.alt;
    }
}

const lightboxEl = document.getElementById('lightbox');
if (lightboxEl) {
    lightboxEl.addEventListener('click', e => {
        if (e.target === e.currentTarget) closeLightbox();
    });
}

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeLightbox();
    if (e.key === 'ArrowLeft') shiftLightbox(-1);
    if (e.key === 'ArrowRight') shiftLightbox(1);
});
