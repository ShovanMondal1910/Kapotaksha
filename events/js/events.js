function showAllEvents() {
    const extra = document.getElementById('extra-events');
    const wrapper = document.getElementById('show-more-wrapper');
    if (extra) {
        extra.style.display = 'flex';
        extra.style.flexWrap = 'wrap';
    }
    if (wrapper) {
        wrapper.style.display = 'none';
    }
}
