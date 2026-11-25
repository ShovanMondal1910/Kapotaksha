document.addEventListener('DOMContentLoaded', async () => {
    const teacherGrid = document.getElementById('teacher-grid');
    const loadingIndicator = document.getElementById('loading-indicator');

    try {
        const apiBase = window.location.origin.includes('http') ? window.location.origin : 'http://localhost:3000';
        const response = await fetch(`${apiBase}/api/teacher/all`);
        
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        
        const teachers = await response.json();
        
        // Clear loading indicator
        if (teacherGrid) {
            teacherGrid.innerHTML = '';
        }
        
        if (!teachers || teachers.length === 0) {
            if (teacherGrid) {
                teacherGrid.innerHTML = '<div class="col-12 text-center"><p>No teachers found.</p></div>';
            }
            return;
        }

        function escapeHTML(str) {
            if (!str) return 'N/A';
            return String(str).replace(/[&<>'"]/g, tag => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                "'": '&#39;',
                '"': '&quot;'
            }[tag] || tag));
        }

        function sanitizePhotoUrl(url) {
            if (!url) return '../photos/KHS.png';
            const trimmed = String(url).trim();
            if (/^(https?:\/\/|\.\.\/|\.\/|\/|[a-zA-Z0-9_\-\.\/]+)/i.test(trimmed) && !trimmed.toLowerCase().startsWith('javascript:')) {
                return escapeHTML(trimmed);
            }
            return '../photos/KHS.png';
        }

        teachers.forEach(teacher => {
            const col = document.createElement('div');
            col.className = 'col-md-4';
            
            const name = escapeHTML(teacher.full_name);
            const designation = escapeHTML(teacher.designation);
            const joinDate = escapeHTML(teacher.joining_date);
            const mobile = escapeHTML(teacher.mobile_number);
            const mail = escapeHTML(teacher.email_address);
            
            const rawAddress = teacher.current_address ? teacher.current_address.replace(/\\n/g, ', ') : 'N/A';
            const address = escapeHTML(rawAddress);
            const photoUrl = sanitizePhotoUrl(teacher.photo_url);

            col.innerHTML = `
                <div class="teacher-card">
                    <div class="teacher-photo-container">
                        <img src="${photoUrl}" alt="Photo of ${name}" class="teacher-photo" loading="lazy">
                    </div>
                    <div class="teacher-info">
                        <div class="teacher-name-box">
                            <h5>Name: ${name}</h5>
                        </div>
                        <ul class="teacher-details-list">
                            <li><strong>Designation:</strong> ${designation}</li>
                            <li><strong>Join Date:</strong> ${joinDate}</li>
                            <li><strong>Mobile:</strong> ${mobile}</li>
                            <li><strong>Mail:</strong> ${mail}</li>
                            <li><strong>Address:</strong> ${address}</li>
                        </ul>
                        <div class="teacher-action">
                            <button class="btn-details" type="button">Details</button>
                        </div>
                    </div>
                </div>
            `;
            if (teacherGrid) {
                teacherGrid.appendChild(col);
            }
        });

    } catch (error) {
        console.error('Error fetching teachers:', error);
        if (teacherGrid) {
            teacherGrid.innerHTML = '<div class="col-12 text-center text-danger"><p>Failed to load teachers. Ensure the backend server is running.</p></div>';
        }
    }
});
