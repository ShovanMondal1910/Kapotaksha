/* -- Notice filter tabs --------------------------------------- */
const tabs    = document.querySelectorAll('.filter-tab');
const notices = document.querySelectorAll('.notice-card');
const empty   = document.getElementById('noticeEmpty');

if (tabs.length && notices.length) {
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Update active tab
            tabs.forEach(t => { t.classList.remove('active'); t.setAttribute('aria-selected', 'false'); });
            tab.classList.add('active');
            tab.setAttribute('aria-selected', 'true');

            const filter = tab.dataset.filter;
            let visible = 0;

            notices.forEach(card => {
                const cardTypes = (card.dataset.type || '').split(/\s+/);
                const match = filter === 'all' || cardTypes.includes(filter);
                card.style.display = match ? '' : 'none';
                if (match) visible++;
            });

            if (empty) {
                empty.style.display = visible === 0 ? 'block' : 'none';
            }
        });
    });
}
