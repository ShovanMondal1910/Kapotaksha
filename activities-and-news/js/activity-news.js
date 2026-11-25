/* -- Notice Board: Filter Tabs & Step-by-Step "Show More" Pagination -- */
const tabs         = document.querySelectorAll('.filter-tab');
const notices      = document.querySelectorAll('.notice-card');
const empty        = document.getElementById('noticeEmpty');
const loadMoreWrap = document.getElementById('noticeLoadMoreWrap');
const loadMoreBtn  = document.getElementById('btnShowMoreNotices');

const STEP = 3;
let currentLimit = STEP;
let currentFilter = 'all';

function updateNoticeVisibility() {
    const matchingCards = [];

    // Classify cards based on current category filter
    notices.forEach(card => {
        const cardTypes = (card.dataset.type || '').split(/\s+/);
        const match = currentFilter === 'all' || cardTypes.includes(currentFilter);
        if (match) {
            matchingCards.push(card);
        } else {
            card.style.display = 'none';
        }
    });

    // Display only up to currentLimit of matching cards
    matchingCards.forEach((card, index) => {
        if (index < currentLimit) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });

    // Handle empty state message
    if (empty) {
        empty.style.display = matchingCards.length === 0 ? 'block' : 'none';
    }

    // Handle "Show More" button visibility
    if (loadMoreWrap) {
        if (matchingCards.length > currentLimit) {
            loadMoreWrap.style.display = 'flex';
        } else {
            loadMoreWrap.style.display = 'none';
        }
    }
}

if (tabs.length && notices.length) {
    // Tab switching
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            tab.classList.add('active');
            tab.setAttribute('aria-selected', 'true');

            currentFilter = tab.dataset.filter;
            currentLimit = STEP; // Reset count back to 3 on filter change
            updateNoticeVisibility();
        });
    });

    // "Show More" click handler: reveals next 3 (or remaining)
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', () => {
            currentLimit += STEP;
            updateNoticeVisibility();
        });
    }

    // Initial display
    updateNoticeVisibility();
}
