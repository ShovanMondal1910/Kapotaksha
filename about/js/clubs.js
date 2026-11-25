// Club Member Rosters Data
        const CLUB_ROSTERS = {
            "KHS Debating Society": {
                category: "Academic & Public Speaking",
                moderator: "Senior Language Faculty",
                total: 45,
                members: [
                    { sl: 1, name: "Subrata Mondal", role: "President & Lead Debater", classSec: "Class 10 (A)", roll: "02", roleType: "lead" },
                    { sl: 2, name: "Fatema Akter", role: "Vice President", classSec: "Class 10 (A)", roll: "05", roleType: "lead" },
                    { sl: 3, name: "Md. Arif Hossain", role: "General Secretary", classSec: "Class 9 (Sci)", roll: "01", roleType: "exec" },
                    { sl: 4, name: "Priya Das", role: "Lead English Debater", classSec: "Class 10 (B)", roll: "04", roleType: "exec" },
                    { sl: 5, name: "Raju Mondal", role: "Parliamentary Research Lead", classSec: "Class 9 (A)", roll: "03", roleType: "exec" },
                    { sl: 6, name: "Lata Biswas", role: "Debate Squad Member", classSec: "Class 8 (A)", roll: "10", roleType: "member" },
                    { sl: 7, name: "Farhan Ahmed", role: "Debate Squad Member", classSec: "Class 8 (B)", roll: "19", roleType: "member" },
                    { sl: 8, name: "Shova Rani", role: "Bengali Motion Speaker", classSec: "Class 7 (A)", roll: "12", roleType: "member" },
                    { sl: 9, name: "Tanvir Hasan", role: "Debate Squad Member", classSec: "Class 7 (B)", roll: "35", roleType: "member" },
                    { sl: 10, name: "Moumita Haldar", role: "Junior Speaker", classSec: "Class 6 (A)", roll: "20", roleType: "member" },
                    { sl: 11, name: "Karim Sheikh", role: "Debate Squad Member", classSec: "Class 8 (A)", roll: "09", roleType: "member" },
                    { sl: 12, name: "Minhaj Uddin", role: "Debate Squad Member", classSec: "Class 9 (B)", roll: "13", roleType: "member" }
                ]
            },
            "Science & STEM Club": {
                category: "STEM & Innovation",
                moderator: "Science & ICT Department",
                total: 60,
                members: [
                    { sl: 1, name: "Biplab Roy", role: "Club President & Lead Innovator", classSec: "Class 10 (Sci)", roll: "03", roleType: "lead" },
                    { sl: 2, name: "Swapna Dey", role: "Vice President (Robotics)", classSec: "Class 10 (Sci)", roll: "08", roleType: "lead" },
                    { sl: 3, name: "Minhaj Uddin", role: "Lead Hardware Innovator", classSec: "Class 9 (Sci)", roll: "07", roleType: "exec" },
                    { sl: 4, name: "Puja Mondal", role: "Math Olympiad Captain", classSec: "Class 9 (Sci)", roll: "11", roleType: "exec" },
                    { sl: 5, name: "Sajib Sarkar", role: "Coding & Web Coordinator", classSec: "Class 9 (Sci)", roll: "14", roleType: "exec" },
                    { sl: 6, name: "Ratan Gain", role: "Science Project Associate", classSec: "Class 8 (A)", roll: "09", roleType: "member" },
                    { sl: 7, name: "Sumi Akter", role: "STEM Project Associate", classSec: "Class 8 (B)", roll: "24", roleType: "member" },
                    { sl: 8, name: "Nirmal Halder", role: "Electronics Apprentice", classSec: "Class 7 (A)", roll: "23", roleType: "member" },
                    { sl: 9, name: "Keya Mondal", role: "Junior STEM Researcher", classSec: "Class 7 (B)", roll: "32", roleType: "member" },
                    { sl: 10, name: "Sohel Rana", role: "Junior STEM Explorer", classSec: "Class 6 (A)", roll: "05", roleType: "member" },
                    { sl: 11, name: "Farhan Ahmed", role: "Robotics Team Member", classSec: "Class 8 (B)", roll: "19", roleType: "member" },
                    { sl: 12, name: "Tanvir Hasan", role: "Science Fair Participant", classSec: "Class 7 (B)", roll: "35", roleType: "member" }
                ]
            },
            "Cultural & Performing Arts Club": {
                category: "Arts & Heritage",
                moderator: "Cultural Activities Committee",
                total: 75,
                members: [
                    { sl: 1, name: "Moumita Haldar", role: "President & Lead Vocalist", classSec: "Class 10 (A)", roll: "01", roleType: "lead" },
                    { sl: 2, name: "Anjali Das", role: "Dance Troupe Captain", classSec: "Class 10 (B)", roll: "12", roleType: "lead" },
                    { sl: 3, name: "Champa Rani", role: "Cultural Secretary", classSec: "Class 9 (B)", roll: "06", roleType: "exec" },
                    { sl: 4, name: "Rupa Sarkar", role: "Recitation & Drama Lead", classSec: "Class 9 (A)", roll: "15", roleType: "exec" },
                    { sl: 5, name: "Suman Roy", role: "Instrumental Accompanist", classSec: "Class 9 (B)", roll: "21", roleType: "exec" },
                    { sl: 6, name: "Shathi Mondal", role: "Classical Vocalist", classSec: "Class 8 (A)", roll: "18", roleType: "member" },
                    { sl: 7, name: "Prity Biswas", role: "Theater & Stage Drama Artist", classSec: "Class 8 (B)", roll: "28", roleType: "member" },
                    { sl: 8, name: "Mitu Begum", role: "Folk Song Performer", classSec: "Class 7 (A)", roll: "08", roleType: "member" },
                    { sl: 9, name: "Rina Khatun", role: "Chorus Performer", classSec: "Class 7 (B)", roll: "17", roleType: "member" },
                    { sl: 10, name: "Tania Sultana", role: "Junior Performing Artist", classSec: "Class 6 (B)", roll: "22", roleType: "member" }
                ]
            }
        };

        // Interactive Club Member Roster Modal Logic
        const rosterModal = document.getElementById('memberRosterModal');
        const btnRosterClose = document.getElementById('btnRosterModalClose');
        const btnRosterDismiss = document.getElementById('btnRosterDismiss');
        const modalTitle = document.getElementById('modalRosterClubTitle');
        const modalCategory = document.getElementById('modalRosterCategory');
        const modalModerator = document.getElementById('modalRosterModerator');
        const tableBody = document.getElementById('rosterTableBody');
        const countBadge = document.getElementById('rosterCountBadge');
        const searchInput = document.getElementById('rosterSearchInput');
        const emptyMsg = document.getElementById('rosterEmptyMsg');

        let currentClubMembers = [];

        function isBn() {
            return document.documentElement.lang === 'bn';
        }

        function toBnDigits(str) {
            const en = ['0','1','2','3','4','5','6','7','8','9'];
            const bn = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];
            let s = String(str);
            for (let i = 0; i < 10; i++) s = s.split(en[i]).join(bn[i]);
            return s;
        }

        function getLocalizedText(str) {
            if (!isBn()) return str;
            return (window.KHS_I18N && window.KHS_I18N.dict && window.KHS_I18N.dict[str]) ? window.KHS_I18N.dict[str] : str;
        }

        function escapeHTML(str) {
            if (!str) return '';
            return String(str).replace(/[&<>'"]/g, tag => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                "'": '&#39;',
                '"': '&quot;'
            }[tag] || tag));
        }

        function renderRosterRows(members) {
            tableBody.innerHTML = '';
            if (!members || members.length === 0) {
                emptyMsg.style.display = 'block';
                emptyMsg.textContent = isBn() ? "আপনার অনুসন্ধানের সাথে মিলিয়ে কোনো সদস্য পাওয়া যায়নি।" : "No members found matching your search.";
                return;
            }
            emptyMsg.style.display = 'none';

            members.forEach(m => {
                const tr = document.createElement('tr');
                const sl = escapeHTML(isBn() ? toBnDigits(m.sl) : m.sl);
                const name = escapeHTML(m.name);
                const role = escapeHTML(getLocalizedText(m.role));
                const classSec = escapeHTML(getLocalizedText(m.classSec));
                const roll = escapeHTML(isBn() ? toBnDigits(m.roll) : m.roll);
                const roleType = escapeHTML(m.roleType || 'member');

                tr.innerHTML = `
                    <td class="roster-td-sl">${sl}</td>
                    <td><strong class="roster-name-strong">${name}</strong></td>
                    <td><span class="role-badge ${roleType}">${role}</span></td>
                    <td><span class="roster-class-span">${classSec}</span></td>
                    <td><span class="roster-roll-chip">${roll}</span></td>
                `;
                tableBody.appendChild(tr);
            });
        }

        function filterRoster() {
            const q = searchInput.value.trim().toLowerCase();
            if (!q) {
                renderRosterRows(currentClubMembers);
                countBadge.textContent = isBn() 
                    ? `${toBnDigits(currentClubMembers.length)} জন সদস্য তালিকাভুক্ত` 
                    : `${currentClubMembers.length} Members Listed`;
                return;
            }
            const filtered = currentClubMembers.filter(m =>
                m.name.toLowerCase().includes(q) ||
                m.role.toLowerCase().includes(q) ||
                getLocalizedText(m.role).toLowerCase().includes(q) ||
                m.classSec.toLowerCase().includes(q) ||
                getLocalizedText(m.classSec).toLowerCase().includes(q) ||
                m.roll.includes(q) ||
                toBnDigits(m.roll).includes(q)
            );
            renderRosterRows(filtered);
            countBadge.textContent = isBn()
                ? `${toBnDigits(currentClubMembers.length)} জনের মধ্যে ${toBnDigits(filtered.length)} জন পাওয়া গেছে`
                : `${filtered.length} of ${currentClubMembers.length} Found`;
        }

        searchInput.addEventListener('input', filterRoster);

        document.querySelectorAll('.btn-view-member').forEach(btn => {
            btn.addEventListener('click', () => {
                const clubName = btn.getAttribute('data-club');
                const clubData = CLUB_ROSTERS[clubName];

                if (clubData) {
                    modalTitle.textContent = getLocalizedText(clubName);
                    modalCategory.textContent = getLocalizedText(clubData.category);
                    modalModerator.textContent = isBn() ? `👨‍🏫 মডারেটর: ${getLocalizedText(clubData.moderator)}` : `👨‍🏫 Moderator: ${clubData.moderator}`;
                    currentClubMembers = clubData.members;
                    searchInput.value = '';
                    renderRosterRows(currentClubMembers);
                    countBadge.textContent = isBn() 
                        ? `${toBnDigits(currentClubMembers.length)} জন সক্রিয় সদস্য`
                        : `${currentClubMembers.length} Active Members`;
                    rosterModal.classList.add('show');
                    searchInput.focus();
                }
            });
        });

        window.addEventListener('khs-lang-change', () => {
            if (rosterModal.classList.contains('show')) {
                renderRosterRows(currentClubMembers);
                filterRoster();
            }
        });

        function closeRosterModal() {
            rosterModal.classList.remove('show');
        }

        btnRosterClose.addEventListener('click', closeRosterModal);
        btnRosterDismiss.addEventListener('click', closeRosterModal);

        rosterModal.addEventListener('click', (e) => {
            if (e.target === rosterModal) {
                closeRosterModal();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && rosterModal.classList.contains('show')) {
                closeRosterModal();
            }
        });
