# 💻 KHS Developer Guide & Cookbooks

This practical guide is designed to get any engineer up to speed and productive within minutes. Follow these recipes to build and ship features quickly and reliably.

---

## 🧭 General Architecture Principles

1. **Zero-Build Architecture**: Everything runs directly in modern browsers using native ES6 and standard HTML5/CSS3. No transpilation, Webpack, or Babel required.
2. **Relative Path Awareness**: Because this is a static multi-page site, always verify relative path depth when linking styles, scripts, and media:
   - Root files (`index.html`): `css/`, `js/`, `photos/`, `libs/`
   - Subfolder files (`about/` [clubs, facilities, policies], `activities-and-news/`, `events/`, `people/`, `Media/`): `../css/`, `../js/`, `../photos/`, `../libs/`
   - Two-level deep files (`Media/events/`, `activities-and-news/templates/`): `../../css/`, `../../js/`, `../../photos/`, `../../libs/`
3. **Always Run the Link Checker**: Before committing changes, run:
   ```bash
   npm run check:links
   ```
   This guarantees that none of your relative links or image paths are broken.

---

## 🍳 Developer Cookbooks (Recipes)

### Recipe 1: How to Add a New Page in 2 Minutes
1. Copy the starter file:
   ```bash
   cp templates/page-starter.html your-section/your-page.html
   ```
2. Update the `<title>` and page header:
   ```html
   <title>Your Page Title | Kapotaksha High School</title>
   ```
3. Update the breadcrumb link:
   ```html
   <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
       <li class="breadcrumb-item active">Your Page Name</li>
   </ol>
   ```
4. Put your HTML content inside the `<main class="container my-5">` block.
5. Register your new page in the search engine (see [Recipe 5](#recipe-5-how-to-register-content-in-searchjs)).
6. Run `npm run check:links` to verify all assets resolve correctly.

---

### Recipe 2: How to Add a New Event
1. Duplicate [`templates/event-starter.html`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/templates/event-starter.html) into `events/`:
   ```bash
   cp templates/event-starter.html events/annual-sports-2026.html
   ```
2. Edit the event metadata:
   - Title: `Annual Sports Day 2026`
   - Date, Location, and Itinerary list items.
3. Add a link to this new event inside [`events/Events.html`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/events/Events.html):
   ```html
   <div class="col-md-6 col-lg-4">
       <div class="event-card card h-100 shadow-sm">
           <img src="../photos/GroupPhoto.jpg" class="card-img-top" alt="Annual Sports 2026">
           <div class="card-body">
               <span class="badge bg-primary mb-2">Sports</span>
               <h5 class="card-title">Annual Sports Day 2026</h5>
               <p class="card-text">Annual track and field championships with all student houses.</p>
               <a href="annual-sports-2026.html" class="btn btn-sm btn-outline-primary">View Details</a>
           </div>
       </div>
   </div>
   ```

---

### Recipe 3: How to Add a Teacher or Staff Member
To add a new teacher to [`people/teachers.html`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/people/teachers.html):
1. Save the portrait photo to `photos/Teachers/` (e.g. `photos/Teachers/john_doe.jpg`).
2. Open [`people/teachers.html`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/people/teachers.html) and locate the relevant department grid.
3. Insert a teacher card:
   ```html
   <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
       <div class="teacher-card text-center shadow-sm">
           <div class="teacher-photo-wrapper">
               <img src="../photos/Teachers/john_doe.jpg" alt="Teacher Name" class="teacher-photo" loading="lazy">
           </div>
           <h5 class="teacher-name mt-3">Teacher Full Name</h5>
           <p class="teacher-designation text-primary mb-1">Senior Mathematics Teacher</p>
           <p class="teacher-qualification text-muted small">M.Sc. in Mathematics, Khulna University</p>
           <div class="teacher-contact small">
               <span>✉️ teacher.email@khs.edu.bd</span>
           </div>
       </div>
   </div>
   ```

---

### Recipe 4: How to Add English & Bangla Translations
The site's bilingual translation engine is located in [`js/i18n.js`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/js/i18n.js).
1. Open [`js/i18n.js`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/js/i18n.js).
2. Locate the `I18N_DICTIONARY` object.
3. Add your English string as the key and the Bengali translation as the value:
   ```javascript
   "Annual Sports Day 2026": "বার্ষিক ক্রীড়া প্রতিযোগিতা ২০২৬",
   "Senior Mathematics Teacher": "সিনিয়র গণিত শিক্ষক",
   ```
4. Save the file. When users click the language switcher to Bangla, the engine will automatically detect and translate this text everywhere on the page without requiring HTML changes.

---

### Recipe 5: How to Register Content in `search.js`
Search is in-memory and executes instantly across the whole school.
1. Open [`js/search.js`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/js/search.js).
2. Locate `SEARCH_INDEX`.
3. Append your new item:
   ```javascript
   {
       title: "Annual Sports Day 2026",
       category: "Events",
       url: "events/annual-sports-2026.html",
       snippet: "Track & field competitions, football final, and award ceremony."
   },
   ```
4. Users typing "Sports" or "Athletics" in the search box (`Ctrl + K`) will now instantly find your new page!

---

### Recipe 6: How the 3D Campus Viewer Works (`campus3d.js`)
The 3D model in [`js/campus3d.js`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/js/campus3d.js) builds the school environment programmatically using Three.js geometric primitives and materials:
- **School Buildings**: Created via `THREE.BoxGeometry` with custom brick and window textures.
- **Turf & Ground**: Created with `THREE.PlaneGeometry` colored in school grass green.
- **Lighting**: Ambient light + Directional sunlight with shadow mapping.
- **Camera Controls**: OrbitControls allows 360-degree rotation and zoom.

To embed the 3D viewer on any page, include the container and scripts:
```html
<div id="campus3d-canvas" style="width: 100%; height: 500px; border-radius: 12px; overflow: hidden;"></div>

<!-- Dependencies -->
<script src="../libs/three.min.js"></script>
<script src="../libs/OrbitControls.js"></script>
<script src="../js/campus3d.js"></script>
```

---

### Recipe 7: How to Update Global Navigation & Footer in 1 Step
Instead of editing 30+ separate HTML files, use the single source of truth component system:
1. Edit [`components/navbar.php`](components/navbar.php) or [`components/footer.php`](components/footer.php).
2. Use `{{ROOT}}` in front of any relative URL (e.g. `{{ROOT}}about/facilities.html`).
3. Run the component synchronizer:
   ```bash
   npm run sync
   ```
   The script automatically calculates the relative depth for every file (`./`, `../`, `../../`) and updates all 30+ HTML pages in 0.2 seconds!

---

### Recipe 8: Managing Data-Driven Content (Notices & Exams)
To add or update announcements, exam schedules, or news without touching complex markup:
1. Open [`data/notices.json`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/data/notices.json) or [`data/exams.json`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/data/exams.json).
2. Insert your notice or exam object with `title`, `date`, `excerpt`, and `link`.
3. Changes are instantly queryable and ready for API or dynamic feed consumption.

---

### Recipe 9: Optimizing Images for High Performance
To optimize large camera uploads and save bandwidth:
```bash
npm run optimize:images
```
This automatically resizes oversized images down to web-standard dimensions (max 1920px) and compresses them to 85% high visual quality, cutting load times by up to 80-95%!

---

## 🎨 Coding & Style Guidelines

### CSS Conventions
- **Use Tokens**: Always reference `--khs-primary`, `--khs-accent`, etc. from [`css/variables.css`](file:///c:/Users/Krishanu/OneDrive%20-%20American%20International%20University-Bangladesh/School/css/variables.css).
- **Avoid Inline Styles**: Keep presentation in CSS classes, not inline `style="..."`.
- **Responsive Layout**: Use Bootstrap 5 grid containers (`container`, `row`, `col-lg-*`, `col-md-*`).

### HTML Standards
- Always set `<meta name="viewport" content="width=device-width, initial-scale=1.0">`.
- Always provide descriptive `alt="..."` attributes on every `<img>` tag.
- Include unique IDs on interactive components and sections.

### JavaScript Conventions
- Use standard ES6 (`const`, `let`, arrow functions, template literals).
- Wrap page scripts in `document.addEventListener('DOMContentLoaded', () => { ... })`.
- Always check that a DOM element exists before querying properties on it:
  ```javascript
  const el = document.getElementById('my-element');
  if (el) {
    // perform action safely
  }
  ```

---

## 🔍 Automated Verification Command

Whenever you make any change to links, HTML files, or assets, execute:
```bash
npm run check:links
```
A 100% green check confirms the entire site has zero broken links or 404 images!
