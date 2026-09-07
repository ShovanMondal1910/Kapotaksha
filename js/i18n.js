/**
 * Kapotaksha High School (KHS)
 * Complete Site-Wide Bilingual Localization Engine (English / বাংলা)
 * Translates literally EVERYTHING on the page when Bangla is selected.
 */

(function () {
    'use strict';

    const STORAGE_KEY = 'khs_selected_lang';

    // ── Number Converter ──
    const EN_DIGITS = ['0','1','2','3','4','5','6','7','8','9'];
    const BN_DIGITS = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];

    function toBengaliNumber(str) {
        if (!str) return str;
        let s = String(str);
        for (let i = 0; i < 10; i++) {
            s = s.split(EN_DIGITS[i]).join(BN_DIGITS[i]);
        }
        return s;
    }

    // ── Comprehensive Bilingual Translation Dictionary ──
    const I18N_DICTIONARY = {
        // ── Navigation & Brand ──
        "About": "আমাদের সম্পর্কে",
        "About KHS": "কপোতাক্ষ হাই স্কুল পরিচিতি",
        "Rules & Regulation": "নিয়ম ও নীতিমালা",
        "Rules & Regulations": "নিয়ম ও নীতিমালা",
        "Intimidation Policy": "ভীতি প্রদর্শন প্রতিরোধ নীতি",
        "People": "ব্যক্তিবর্গ",
        "OSA": "প্রাক্তন শিক্ষার্থী পরিষদ (OSA)",
        "Founders": "প্রতিষ্ঠাতা ও ইতিহাস",
        "Executive Committee": "কার্যনির্বাহী কমিটি",
        "Former Committee": "প্রাক্তন কমিটি",
        "Adviser": "উপদেষ্টা পরিষদ",
        "Teachers & Staff": "শিক্ষক ও কর্মচারী",
        "Students": "শিক্ষার্থী তালিকা",
        "Activities & News": "কার্যক্রম ও সংবাদ",
        "Events": "ইভেন্টস",
        "Media": "মিডিয়া",
        "Gallery": "ফটো গ্যালারি",
        "Contact": "যোগাযোগ",
        "Campus & Facilities": "ক্যাম্পাস ও সুযোগ-সুবিধা",
        "Student Clubs": "শিক্ষার্থী ক্লাব",
        "Search": "অনুসন্ধান",

        // ── Global Footer ──
        "GET IN TOUCH": "যোগাযোগ করুন",
        "Location": "ঠিকানা",
        "Kapotaksha High School": "কপোতাক্ষ হাই স্কুল",
        "Padmapukur, Koyra, Khulna": "পদ্মপুকুর, কয়রা, খুলনা",
        "Padmapukur, Koyra, Khulna, Bangladesh": "পদ্মপুকুর, কয়রা, খুলনা, বাংলাদেশ",
        "Send us a message": "আমাদের বার্তা পাঠান",
        "Powered By": "পরিচালনায়",
        "Supported By": "সহযোগিতায়",
        "Bangladesh Government": "গণপ্রজাতন্ত্রী বাংলাদেশ সরকার",
        "Developed by": "কারিগরী রূপায়ণে",
        "Email:": "ইমেইল:",

        // ── Homepage Hero & About ──
        "Online Admission": "অনলাইন ভর্তি",
        "View Latest Notices": "নোটিশ বোর্ড দেখুন",
        "Explore Campus": "ক্যাম্পাস ঘুরে দেখুন",
        "Campus Life & Heritage": "ক্যাম্পাস জীবন ও ঐতিহ্য",
        "Inspiring Excellence, Character & Lifelong Learning": "মেধা, চরিত্র ও আজীবন শিক্ষার অনুপ্রেরণা",
        "Welcome to Kapotaksha High School — empowering coastal youth with disciplined education, moral values, and academic distinction since 1995.": "কপোতাক্ষ হাই স্কুলে স্বাগতম — ১৯৯৫ সাল থেকে সুশৃঙ্খল পাঠদান, নৈতিক শিক্ষা ও একাডেমিক শ্রেষ্ঠত্বের মাধ্যমে উপকূলীয় তরুণ প্রজন্মকে আলোকিত করার নিরবচ্ছিন্ন প্রয়াস।",
        "Practical STEM Innovation": "ব্যবহারিক বিজ্ঞান ও প্রযুক্তি উদ্ভাবন",
        "Cutting-Edge Science & Practical Laboratories": "আধুনিক বিজ্ঞান ও ব্যবহারিক গবেষণাগার",
        "Fostering curiosity and discovery through hands-on Physics, Chemistry, and Biology experiments guided by passionate educators.": "অভিজ্ঞ শিক্ষকদের প্রত্যক্ষ তত্ত্বাবধানে পদার্থবিজ্ঞান, রসায়ন ও জীববিজ্ঞানের বাস্তবধর্মী পরীক্ষার মাধ্যমে শিক্ষার্থীদের অনুসন্ধিৎসু মনন বিকাশ।",
        "Sports, Health & Athletics": "খেলাধুলা, স্বাস্থ্য ও ক্রীড়া সংস্কৃতি",
        "Annual Sports Day & Vibrant Athletic Spirit": "বার্ষিক ক্রীড়া প্রতিযোগিতা ও প্রাণবন্ত উৎসব",
        "Cultivating leadership, team spirit, and physical fitness on our vast turf grounds, football pitch, and championship track.": "আমাদের সুপ্রশস্ত খেলার মাঠ, ফুটবল পিচ ও দৌড় ট্র্যাকে নেতৃত্বগুণ, দলগত চেতনা এবং শারীরিক সক্ষমতা অর্জন।",
        "Smart Academic Environment": "স্মার্ট ও আধুনিক শিক্ষাঙ্গন",
        "Engaging Classroom Activities & Modern Pedagogy": "সৃজনশীল শ্রেণিকক্ষ কার্যক্রম ও আধুনিক পাঠদান",
        "Empowering every learner with interactive digital tools, experienced mentorship, and supportive student-centered pedagogy.": "ইন্টারেক্টিভ ডিজিটাল মাধ্যম, অভিজ্ঞ শিক্ষকমণ্ডলী এবং শিশুবান্ধব পাঠদান পদ্ধতির মাধ্যমে প্রতিটি শিক্ষার্থীর সুপ্ত প্রতিভার বিকাশ।",

        // ── Online Admission Modal ──
        "Academic Year 2026-27": "শিক্ষাবর্ষ ২০২৬-২৭",
        "Online Admission Application | Kapotaksha High School": "অনলাইন ভর্তি আবেদন | কপোতাক্ষ হাই স্কুল",
        "Admission Guidelines & Eligibility": "ভর্তি নির্দেশিকা ও যোগ্যতা",
        "Admissions are open for Classes 6 through 10. For Class 9 and 10, select your preferred academic discipline (Science, Business Studies, or Humanities).": "ষষ্ঠ থেকে দশম শ্রেণিতে ভর্তি চলছে। নবম ও দশম শ্রেণির জন্য আপনার পছন্দের বিভাগ (বিজ্ঞান, ব্যবসায় শিক্ষা, বা মানবিক) নির্বাচন করুন।",
        "EIIN: 117204 | Registered with DSHE & Jessore Education Board": "ইআইআইএন: ১১৭২০৪ | মাউশি ও যশোর শিক্ষা বোর্ডের আওতাধীন",
        "Student's Full Name (English) *": "শিক্ষার্থীর পুরো নাম (ইংরেজিতে) *",
        "Applying for Class *": "আবেদনের শ্রেণি *",
        "Select Class": "শ্রেণি নির্বাচন করুন",
        "Class 6": "ষষ্ঠ শ্রেণি",
        "Class 7": "সপ্তম শ্রেণি",
        "Class 8": "অষ্টম শ্রেণি",
        "Class 9": "নবম শ্রেণি",
        "Class 10": "দশম শ্রেণি",
        "Academic Group (Class 9-10)": "বিভাগ (নবম-দশম শ্রেণি)",
        "General (Class 6-8)": "সাধারণ (ষষ্ঠ-অষ্টম)",
        "Science (বিজ্ঞান)": "বিজ্ঞান",
        "Business Studies (ব্যবসায় শিক্ষা)": "ব্যবসায় শিক্ষা",
        "Humanities (মানবিক)": "মানবিক",
        "Gender *": "লিঙ্গ *",
        "Select Gender": "লিঙ্গ নির্বাচন করুন",
        "Male": "ছাত্র",
        "Female": "ছাত্রী",
        "Father's / Guardian's Name *": "পিতা / অভিভাবকের নাম *",
        "Guardian's Mobile Number *": "অভিভাবকের মোবাইল নম্বর *",
        "Previous School Name": "পূর্ববর্তী বিদ্যালয়ের নাম",
        "Village / Address *": "গ্রাম / ঠিকানা *",
        "Submit Application": "আবেদন জমা দিন",
        "View Admission Rules ↗": "ভর্তি নীতিমালা দেখুন ↗",
        "Close": "বন্ধ করুন",

        "Welcome to Kapotaksha High School": "কপোতাক্ষ হাই স্কুলে স্বাগতম",
        "Kapotaksha High School, established in 1996, is dedicated to academic excellence, leadership, and moral character in Koyra, Khulna.": "১৯৯৬ সালে প্রতিষ্ঠিত কপোতাক্ষ হাই স্কুল গুণগত শিক্ষা, নেতৃত্ব ও মানবিক মূল্যবোধ বিকাশে নিরলসভাবে নিবেদিত।",
        "Explore Campus & Facilities": "ক্যাম্পাস ও সুযোগ-সুবিধা পরিদর্শন",
        "Explore Student Clubs": "শিক্ষার্থী ক্লাবসমূহ",
        "About Kapotaksha High School": "কপোতাক্ষ হাই স্কুল পরিচিতি",
        "Empowering Youth in Coastal Bangladesh Through Quality Education": "গুণগত শিক্ষার মাধ্যমে উপকূলীয় তরুণ প্রজন্মকে আলোকিত করার দৃঢ় অঙ্গীকার",
        "Learn More": "আরও জানুন",
        "CHECK OUT MORE OF EVENTS": "আরও ইভেন্ট দেখুন",
        "READ MORE": "বিস্তারিত পড়ুন",
        "Load More": "আরও দেখুন",
        "Our Events": "আমাদের অনুষ্ঠানমালা",
        "Recent News": "সাম্প্রতিক সংবাদ ও কার্যক্রম",
        "Our Teams": "আমাদের টিমসমূহ",
        "AHS Development Team": "কপোতাক্ষ উন্নয়ন টিম",
        "AHS Design Team": "কপোতাক্ষ ডিজাইন টিম",
        "AHS Media Team": "কপোতাক্ষ মিডিয়া টিম",
        "AHS Event Organizer Team": "কপোতাক্ষ ইভেন্ট আয়োজক টিম",
        "AHS Public Relation Team": "কপোতাক্ষ জনসংযোগ টিম",
        "AHS Social Engagement Team": "কপোতাক্ষ সামাজিক কার্যক্রম টিম",
        "Like Us On Facebook": "ফেসবুকে যুক্ত হোন",
        "Follow Us On Instagram": "ইনস্টাগ্রামে ফলো করুন",
        "Subscribe Us On Youtube": "ইউটিউবে সাবস্ক্রাইব করুন",

        // ── Homepage Leadership Messages ──
        "Leadership & Vision": "নেতৃত্ব ও দিকনির্দেশনা",
        "Messages from School Leadership": "বিদ্যালয় নেতৃত্বের বাণী",
        "Guiding Kapotaksha High School towards academic excellence, moral integrity, and community empowerment.": "কপোতাক্ষ হাই স্কুলকে মেধা, নৈতিক সততা ও উপকূলীয় জনপদের ক্ষমতায়নের পথে এগিয়ে নেওয়ার প্রত্যয়।",
        "Chairman's Message": "সভাপতির বাণী",
        "CHAIRMAN": "সভাপতি",
        "Chairman, School Managing Committee (SMC)": "সভাপতি, বিদ্যালয় পরিচালনা পর্ষদ (এসএমসি)",
        "Chairman, SMC": "সভাপতি, এসএমসি",
        "Inspiring Excellence & Character": "মেধা ও আদর্শের অনুপ্রেরণা",
        "\"Education is the cornerstone of societal progress and personal character. At Kapotaksha High School, our vision has always been to extend quality, value-driven secondary education to our students so they can realize their fullest potential. We are dedicated to providing a safe, progressive environment equipped with modern resources, moral discipline, and dedicated mentorship. Together with our passionate teachers, supportive parents, and the broader community, we will continue fostering young leaders who serve the nation with honor and excellence.\"": "\"শিক্ষা হলো সমাজ প্রগতি ও মানবিক চরিত্র গঠনের প্রধান চালিকাশক্তি। কপোতাক্ষ হাই স্কুলে আমাদের লক্ষ্য হলো প্রতিটি শিক্ষার্থীর মাঝে নীতিবান, আধুনিক ও মানসম্মত মাধ্যমিক শিক্ষার আলো ছড়িয়ে দেওয়া, যাতে তারা তাদের মেধার পূর্ণ বিকাশ ঘটাতে পারে। আমরা একটি নিরাপদ, প্রগতিশীল এবং আধুনিক সুযোগ-সুবিধাসম্পন্ন পরিবেশ গড়ে তুলতে প্রতিশ্রুতিবদ্ধ। নিবেদিতপ্রাণ শিক্ষক, সচেতন অভিভাবক ও সুধী সমাজের সার্বিক সহযোগিতায় আমরা এমন ভবিষ্যৎ প্রজন্ম গড়ে তুলছি যারা সততা, মর্যাদা ও মেধার সাথে দেশসেবায় অবদান রাখবে।\"",

        "Head Teacher's Message": "প্রধান শিক্ষকের বাণী",
        "RAMEN CHANDRA ROY": "রমেন চন্দ্র রায়",
        "Head Teacher": "প্রধান শিক্ষক",
        "Ramen Chandra Roy": "রমেন চন্দ্র রায়",
        "Knowledge is Power | জ্ঞানই শক্তি": "জ্ঞানই শক্তি | Knowledge is Power",
        "\"A warm welcome to Kapotaksha High School. Having been a part of this esteemed institution since January 1995, I have witnessed our students achieve outstanding heights through discipline, curiosity, and steadfast determination. Our educational philosophy transcends textbook learning; we cultivate critical thinking, extracurricular talent, and moral uprightness across Science, Business Studies, and Humanities. Every teacher here is pledged to nurture your child's aspirations and build a foundation for lifelong success.\"": "\"কপোতাক্ষ হাই স্কুলের পক্ষ থেকে আন্তরিক শুভেচ্ছা ও অভিনন্দন। জানুয়ারি ১৯৯৫ সাল থেকে এই বিদ্যাপীঠের সাথে যুক্ত থেকে আমি শিক্ষার্থীদের শৃঙ্খলা, মেধা ও আত্মবিশ্বাসের অভূতপূর্ব বিকাশ প্রত্যক্ষ করেছি। আমাদের শিক্ষাদর্শ কেবল পাঠ্যবইয়ের মধ্যে সীমাবদ্ধ নয়; বিজ্ঞান, মানবিক ও ব্যবসায় শিক্ষা শাখায় সৃজনশীল চিন্তা, সহশিক্ষা প্রতিভা ও নৈতিক মূল্যবোধের সমন্বয়ে আমরা শিক্ষার্থীদের গড়ে তুলি। প্রতিটি শিক্ষক আপনার সন্তানের স্বপ্ন পূরণে এবং তাদের আজীবন সাফল্যের মজবুত ভিত্তি নির্মাণে আন্তরিকভাবে নিবেদিত।\"",

        // ── Why Choose KHS ──
        "Why Choose Kapotaksha High School?": "কেন কপোতাক্ষ হাই স্কুল বেছে নেবেন?",
        "We provide quality secondary education through experienced teachers, a structured curriculum, and a strong focus on academic excellence to help students achieve outstanding results.": "আমাদের অভিজ্ঞ শিক্ষকমণ্ডলী, সুবিন্যস্ত পাঠ্যক্রম এবং মেধা বিকাশের পরিবেশের মাধ্যমে শিক্ষার্থীদের বোর্ড পরীক্ষায় অসাধারণ ফলাফল অর্জনে প্রস্তুত করা হয়।",
        "Our school offers a safe and friendly learning environment with modern teaching methods that encourage creativity, critical thinking, discipline, and lifelong learning.": "বিদ্যালয়ে রয়েছে নিরাপদ ও শিশুবান্ধব শিক্ষার পরিবেশ, যেখানে আধুনিক পাঠদান পদ্ধতির মাধ্যমে সৃজনশীলতা, মননশীলতা ও শৃঙ্খলা চর্চা করা হয়।",
        "Along with academics, students participate in sports, cultural programs, science fairs, and extracurricular activities that develop leadership, confidence, teamwork, and social responsibility.": "পাঠ্যপড়ার পাশাপাশি খেলাধুলা, সাংস্কৃতিক অনুষ্ঠান, বিজ্ঞান মেলা ও স্কাউটিংয়ের মাধ্যমে শিক্ষার্থীদের নেতৃত্ব, আত্মবিশ্বাস ও সামাজিক দায়িত্ববোধ গড়ে ওঠে।",

        // ── Homepage Stats & Events ──
        "CURRENT STUDENT": "নিয়মিত শিক্ষার্থী",
        "ALUMNI": "প্রাক্তন শিক্ষার্থী",
        "ADVISORS": "উপদেষ্টামণ্ডলী",
        "CURRENT EXECUTIVES": "কার্যনির্বাহী সদস্য",
        "KHS Summer 2025-26 Orientation": "কপোতাক্ষ গ্রীষ্মকালীন ওরিয়েন্টেশন ২০২৫-২৬",
        "On 26 June 2026, Friday, Kapotaksha High School successfully organized a orientation and grand cultural evening celebrating...": "২৬ জুন ২০২৬, শুক্রবার কপোতাক্ষ হাই স্কুলে নবীন শিক্ষার্থীদের ওরিয়েন্টেশন ও মনোজ্ঞ সাংস্কৃতিক সন্ধ্যা অনুষ্ঠিত হয়...",
        "June 26, 2026": "২৬ জুন, ২০২৬",
        "Saraswati Puja 2026": "শ্রীশ্রী সরস্বতী পূজা ২০২৬",
        "On Friday, 23th January 2026, Kapotaksha High School held the annual Saraswati Puja celebration on campus...": "২৩ জানুয়ারি ২০২৬, শুক্রবার কপোতাক্ষ হাই স্কুল প্রাঙ্গণে সনাতন ধর্মাবলম্বী শিক্ষার্থীদের উদ্যোগে বাণী অর্চনা ও সরস্বতী পূজা উদযাপিত হয়...",
        "January 23, 2026": "২৩ জানুয়ারি, ২০২৬",
        "Holi Festival 2026": "বসন্ত উৎসব ও হোলি ২০২৬",
        "On Tuesday 3rd March, 2026 Kapotaksha High School (KHS) successfully organized the Holi festival...": "৩ মার্চ ২০২৬, মঙ্গলবার কপোতাক্ষ হাই স্কুলে আনন্দমুখর পরিবেশে বসন্ত উৎসব ও হোলি উদযাপিত হয়...",
        "March 3, 2026": "৩ মার্চ, ২০২৬",

        // ── Facilities Page ──
        "Interactive 3D Campus Tour": "ত্রিমাত্রিক (3D) ভার্চুয়াল ক্যাম্পাস পরিদর্শন",
        "Explore our modern academic buildings, science labs, computer center, and lush sports field in 3D.": "ত্রিমাত্রিক ভার্চুয়াল ভিউয়ারে ঘুরে দেখুন আমাদের শ্রেণিকক্ষ, আধুনিক গবেষণাগার, কম্পিউটার ল্যাব ও খেলার মাঠ।",
        "Day Mode ☀️": "দিনের আলো ☀️",
        "Night Mode 🌙": "রাতের আলো 🌙",
        "Reset View 🔄": "ভিউ রিসেট 🔄",
        "Rotate 360°": "৩৬০° ঘোরান",
        "Zoom In/Out": "জুম ইন/আউট",
        "Click Markers": "ভবন চিহ্নিত করুন",
        "Modern Campus Infrastructure": "আধুনিক ক্যাম্পাস অবকাঠামো",
        "State-of-the-Art Facilities": "উন্নত সুযোগ-সুবিধাসমূহ",
        "Smart Multimedia Classrooms": "স্মার্ট মাল্টিমিডিয়া শ্রেণিকক্ষ",
        "Modern Science Laboratories": "উন্নত বিজ্ঞান গবেষণাগার",
        "ICT & Computer Training Lab": "আইসিটি ও কম্পিউটার প্রশিক্ষণ কেন্দ্র",
        "Central School Library": "কেন্দ্রীয় সমৃদ্ধ পাঠাগার",
        "Main Sports & Athletic Grounds": "প্রধান ক্রীড়া ও খেলার মাঠ",
        "Purified Safe Drinking Water": "বিশুদ্ধ নিরাপদ খাবার পানির প্ল্যান্ট",
        "Clean Campus Sanitation": "স্বাস্থ্যসম্মত আধুনিক স্যানিটেশন",
        "Solar Green Energy System": "সৌর বিদ্যুৎ সবুজ শক্তি ব্যবস্থা",
        "Emergency Medical First Aid": "জরুরি প্রাথমিক চিকিৎসা কর্নার",
        "Interactive Facilities Catalog": "ক্যাম্পাস সুযোগ-সুবিধা ক্যাটালগ",
        "Equipped with interactive smart boards, multimedia projectors, audio systems, and high-speed internet to provide modern digital learning.": "ইন্টারেক্টিভ স্মার্ট বোর্ড, মাল্টিমিডিয়া প্রজেক্টর ও সাউন্ড সিস্টেম সমৃদ্ধ আধুনিক ডিজিটাল পাঠদান শ্রেণিকক্ষ।",
        "Fully equipped Physics, Chemistry, and Biology laboratories enabling students to conduct practical experiments safely.": "পদার্থবিজ্ঞান, রসায়ন ও জীববিজ্ঞান বিষয়ের আধুনিক যন্ত্রপাতি সমৃদ্ধ ব্যবহারিক বিজ্ঞান গবেষণাগার।",
        "Dedicated computer lab with 30+ modern PCs, broadband internet connection, and programming & office software for ICT literacy.": "৩০টিরও বেশি কম্পিউটার, উচ্চগতির ব্রডব্যান্ড ইন্টারনেট এবং প্রোগ্রামিং শিক্ষার আধুনিক আইসিটি ল্যাব।",
        "Extensive collection of academic textbooks, reference guides, literary classics, and quiet reading desks for self-study.": "হাজারো একাডেমিক ও সাহিত্যিক বই, পত্র-পত্রিকা এবং শিক্ষার্থীদের নিরিবিলি অধ্যয়নের সুপ্রশস্ত পাঠাগার।",
        "Spacious outdoor grounds for football tournaments, cricket leagues, badminton courts, sprint tracks, and annual sports events.": "ফুটবল, ক্রিকেট, ব্যাডমিন্টন ও বার্ষিক ক্রীড়া প্রতিযোগিতার জন্য উন্মুক্ত ও দৃষ্টিনন্দন প্রধান খেলার মাঠ।",
        "Heavy-duty deep-tube well reverse osmosis water filtration system ensuring pure, safe drinking water across campus.": "গভীর নলকূপ ও আধুনিক আরও ওয়াটার ফিল্টারিং প্ল্যান্টের মাধ্যমে শতভাগ নিরাপদ বিশুদ্ধ খাবার পানি সরবরাহ।",
        "Modern, hygienic restrooms separated for boys, girls, teachers, and staff with 24/7 running water and sanitation.": "ছেলে, মেয়ে ও শিক্ষকদের জন্য সার্বক্ষণিক বিশুদ্ধ পানিসহ পরিচ্ছন্ন ও স্বাস্থ্যসম্মত আধুনিক স্যানিটেশন ব্যবস্থা।",
        "Rooftop solar panel array providing clean, uninterrupted renewable energy for classrooms, labs, and school offices.": "ক্যাম্পাসের ছাদে স্থাপিত সৌর বিদ্যুৎ ব্যবস্থা, যা নিরবচ্ছিন্ন বিদ্যুৎ ও পরিবেশবান্ধব জ্বালানি নিশ্চিত করে।",
        "Equipped first-aid clinic with essential medicines, stretcher, and trained staff for immediate healthcare response.": "জরুরি প্রাথমিক চিকিৎসার জন্য প্রয়োজনীয় ওষুধপত্র ও প্রশিক্ষিত ফার্স্ট-এইড মেডিকেল কর্নার।",

        // ── Student Clubs Page ──
        "Student Clubs & Co-Curriculars": "শিক্ষার্থী ক্লাব ও সহশিক্ষা কার্যক্রম",
        "Fostering creativity, leadership, teamwork, and scientific innovation beyond textbooks at Kapotaksha High School.": "কপোতাক্ষ হাই স্কুলে পাঠ্যবইয়ের পাশাপাশি সৃজনশীলতা, নেতৃত্ব ও বিজ্ঞান চর্চার বিকাশ।",
        "All Clubs (8)": "সকল ক্লাব (৮টি)",
        "Academic & STEM": "শিক্ষা ও বিজ্ঞান",
        "Arts & Culture": "শিল্প ও সংস্কৃতি",
        "Sports & Fitness": "ক্রীড়া ও স্বাস্থ্য",
        "Leadership & Service": "নেতৃত্ব ও সমাজসেবা",
        "View Member 👥": "সদস্য তালিকা 👥",
        "Public Speaking": "বিতর্ক ও বক্তৃতা",
        "STEM & Robotics": "রোবোটিক্স ও উদ্ভাবন",
        "Music & Drama": "সঙ্গীত ও নাটক",
        "Athletics": "ক্রীড়া ও অ্যাথলেটিক্স",
        "Scouts & Guides": "স্কাউট ও গাইড",
        "Creative Writing": "সাহিত্য ও দেয়াল পত্রিকা",
        "Environment": "পরিবেশ ও সবুজায়ন",
        "Visual Arts": "চারুকলা ও ফটোগ্রাফি",

        // ── 8 Clubs Content ──
        "KHS Debating Society": "কপোতাক্ষ বিতর্ক পরিষদ",
        "Fosters eloquence, logical reasoning, and argumentation skills in both Bengali and English parliamentary debate formats. Prepares teams for inter-school, upazila, and national championships.": "বাংলা ও ইংরেজি সংসদীয় বিতর্ক চর্চার মাধ্যমে শিক্ষার্থীদের যুক্তিপূর্ণ চিন্তাভাবনা, বাগ্মীতা ও নেতৃত্বগুণ বিকশিত করে। আন্তঃস্কুল ও জাতীয় বিতর্ক প্রতিযোগিতায় দলের অংশগ্রহণ নিশ্চিত করে।",
        "Senior Language Faculty": "সিনিয়র ভাষা ও সাহিত্য শিক্ষক",
        "Every Tuesday, 3:30 PM": "প্রতি মঙ্গলবার, বিকাল ৩:৩০",
        "Annual Inter-House Debate Trophy": "বার্ষিক আন্তঃহাউস বিতর্ক ট্রফি",
        "45 Members": "৪৫ জন সদস্য",

        "Science & STEM Club": "বিজ্ঞান ও প্রযুক্তি সংঘ",
        "Hands-on scientific inquiry, robotics experiments, coding challenges, math olympiad training, and innovation projects for district and national science fairs.": "হাতে-কলমে বৈজ্ঞানিক গবেষণা, রোবোটিক্স পরীক্ষণ, কোডিং চর্চা এবং জেলা ও জাতীয় বিজ্ঞান মেলার জন্য উদ্ভাবনী প্রকল্প তৈরি।",
        "Science & ICT Department": "বিজ্ঞান ও আইসিটি বিভাগ",
        "Every Wednesday, 3:30 PM": "প্রতি বুধবার, বিকাল ৩:৩০",
        "District Inter-School Science Fair": "জেলা আন্তঃস্কুল বিজ্ঞান মেলা",
        "60 Members": "৬০ জন সদস্য",

        "Cultural & Performing Arts": "সাংস্কৃতিক একাডেমি",
        "Cultural & Performing Arts Club": "সাংস্কৃতিক একাডেমি",
        "Preserves and celebrates our rich Bengali cultural heritage through vocal music, classical and folk dance, theater productions, poetry recitation, and festival performances.": "বাঙালির সমৃদ্ধ সাংস্কৃতিক ঐতিহ্য ধারণ করে সঙ্গীত, নৃত্য, আবৃত্তি ও নাট্যচর্চার মাধ্যমে শিক্ষার্থীদের সুকুমার বৃত্তির বিকাশ ঘটায়।",
        "Cultural Activities Committee": "সাংস্কৃতিক কার্যক্রম কমিটি",
        "Every Thursday, 3:00 PM": "প্রতি বৃহস্পতিবার, বিকাল ৩:০০",
        "Puja & Pahela Baishakh Galas": "পূজা ও পহেলা বৈশাখ উৎসব",
        "75 Members": "৭৫ জন সদস্য",

        "Sports & Athletics Club": "ক্রীড়া ও অ্যাথলেটিক্স সংঘ",
        "Organizes inter-class football tournaments, cricket leagues, track and field training, badminton championships, and tactical chess competitions to build discipline and fitness.": "আন্তঃশ্রেণি ফুটবল, ক্রিকেট, দৌড় প্রতিযোগিতা, ব্যাডমিন্টন ও দাবা টুর্নামেন্ট আয়োজনের মাধ্যমে শারীরিক সক্ষমতা ও টিমওয়ার্ক গড়ে তোলে।",
        "Physical Education Department": "শারীরিক শিক্ষা বিভাগ",
        "Mon & Fri, 4:00 PM": "সোম ও শুক্রবার, বিকাল ৪:০০",
        "Annual Sports Meet & Tournament": "বার্ষিক ক্রীড়া প্রতিযোগিতা ও টুর্নামেন্ট",
        "90 Members": "৯০ জন সদস্য",

        "Scout & Girl Guide Troop": "স্কাউট ও গাইড দল",
        "Instills self-discipline, civic duty, outdoor survival, first aid, emergency disaster response, and leadership through national scout jamborees and community camps.": "নিয়মানুবর্তিতা, পরোপকার, ফার্স্ট এইড ও দুর্যোগ মোকাবেলার প্রশিক্ষণ প্রদানের মাধ্যমে শিক্ষার্থীদের আদর্শ নাগরিক হিসেবে গড়ে তোলে।",
        "Certified Scout Leader": "সার্টিফায়েড স্কাউট লিডার",
        "Every Saturday, 10:00 AM": "প্রতি শনিবার, সকাল ১০:০০",
        "Regional Camporee & Rallies": "আঞ্চলিক ক্যাম্পুরী ও র‍্যালি",
        "50 Scouts": "৫০ জন স্কাউট",

        "Literary & Publications Club": "সাহিত্য ও প্রকাশনা পরিষদ",
        "Encourages student writers and poets to express original thoughts. Curates and publishes the termly school wall magazine \"Kapotaksha Prabaha\" for 21st February and Victory Day.": "শিক্ষার্থীদের লেখা গল্প, কবিতা ও প্রবন্ধের মাধ্যমে ২১শে ফেব্রুয়ারি ও ১৬ই ডিসেম্বর উপলক্ষে বিদ্যালয়ের দেয়াল পত্রিকা 'কপোতাক্ষ প্রবাহ' প্রকাশ করে।",
        "Bengali Literature Faculty": "বাংলা সাহিত্য বিভাগ",
        "Alternate Thursdays, 3:30 PM": "পাক্ষিক বৃহস্পতিবার, বিকাল ৩:৩০",
        "Wall Magazine Exhibition": "দেয়াল পত্রিকা প্রদর্শনী",
        "35 Members": "৩৫ জন সদস্য",

        "Eco & Coastal Green Club": "পরিবেশ ও সবুজায়ন সংঘ",
        "Promotes coastal climate resilience and mangrove conservation around the Sundarbans region. Leads tree plantation weeks, plastic-free campus campaigns, and clean water drives.": "সুন্দরবন উপকূলীয় পরিবেশ সংরক্ষণ, বৃক্ষরোপণ অভিযান, প্লাস্টিকমুক্ত ক্যাম্পাস ও বিশুদ্ধ পানি সচেতনতায় কাজ করে।",
        "Geography & Social Science Faculty": "ভূগোল ও সমাজবিজ্ঞান বিভাগ",
        "Bi-weekly Saturdays, 2:00 PM": "পাক্ষিক শনিবার, দুপুর ২:০০",
        "Annual Tree Planting Week": "বার্ষিক বৃক্ষরোপণ সপ্তাহ",
        "40 Members": "৪০ জন সদস্য",

        "Fine Arts & Photography Club": "চারুকলা ও ফটোগ্রাফি সোসাইটি",
        "Develops artistic talent in sketching, watercolor painting, calligraphy, cartooning, and digital event photography. Decorates campus stages for all national and religious festivals.": "চিত্রাঙ্কন, জলরং, ক্যালিগ্রাফি ও ডিজিটাল ফটোগ্রাফি চর্চার মাধ্যমে জাতীয় ও ধর্মীয় অনুষ্ঠানসমূহের মঞ্চ সজ্জায় অংশ নেয়।",
        "Art & Design Teacher": "চারুকলা ও ডিজাইন শিক্ষক",
        "Every Friday, 3:00 PM": "প্রতি শুক্রবার, বিকাল ৩:০০",
        "Annual Fine Arts Exhibition": "বার্ষিক চারুকলা প্রদর্শনী",
        "30 Members": "৩০ জন সদস্য",

        // ── Annual Calendar & Hall of Fame ──
        "Activity Schedule": "কার্যক্রম সময়সূচি",
        "Annual Co-Curricular Calendar": "বার্ষিক সহশিক্ষা ক্যালেন্ডার",
        "Mark your calendar for this academic session's major inter-school and intra-house competitions.": "চলতি শিক্ষাবর্ষের প্রধান প্রধান আন্তঃস্কুল ও আন্তঃহাউস প্রতিযোগিতার দিনপঞ্জি।",
        "15 AUG 2026": "১৫ আগস্ট ২০২৬",
        "District Inter-School Science Fair": "জেলা আন্তঃস্কুল বিজ্ঞান মেলা",
        "Students from Classes 8 to 10 will showcase robotic prototypes, renewable energy solutions, and biology exhibitions at the Khulna District Science Fair.": "৮ম থেকে ১০ম শ্রেণির শিক্ষার্থীরা খুলনা জেলা বিজ্ঞান মেলায় রোবোটিক্স, নবায়নযোগ্য জ্বালানি ও জীববিজ্ঞান প্রদর্শনী উপস্থাপন করবে।",
        "20 SEP 2026": "২০ সেপ্টেম্বর ২০২৬",
        "KHS Inter-House Parliamentary Debate Championship": "কপোতাক্ষ আন্তঃহাউস সংসদীয় বিতর্ক প্রতিযোগিতা",
        "Three-day rigorous debate tournament in Bengali & English featuring 16 student teams arguing contemporary national and educational motions.": "বাংলা ও ইংরেজিতে ১৬টি শিক্ষার্থী দলের অংশগ্রহণে তিন দিনব্যাপী সংসদীয় বিতর্ক প্রতিযোগিতা।",
        "10 NOV 2026": "১০ নভেম্বর ২০২৬",
        "Annual Sports Competition & Athletic Meet": "বার্ষিক ক্রীড়া প্রতিযোগিতা ও অ্যাথলেটিক মিট",
        "Track sprints, high jump, cricket cup, and football finals held on the main sports grounds, followed by the grand championship prize distribution ceremony.": "প্রধান খেলার মাঠে দৌড়, হাই জাম্প, ক্রিকেট ও ফুটবল ফাইনাল অনুষ্ঠিত হবে এবং চ্যাম্পিয়নদের মাঝে পুরস্কার বিতরণ করা হবে।",
        "16 DEC 2026": "১৬ ডিসেম্বর ২০২৬",
        "Victory Day Cultural Gala & Wall Magazine Launch": "মহান বিজয় দিবস সাংস্কৃতিক অনুষ্ঠান ও দেয়াল পত্রিকা উন্মোচন",
        "Solemn patriotic assembly, parade by KHS Scout Troop, stage drama, and inauguration of the Victory Day edition of \"Kapotaksha Prabaha\" wall magazine.": "জাতীয় স্মৃতিচারণ, কপোতাক্ষ স্কাউট দলের কুচকাওয়াজ, নাটক মঞ্চায়ন এবং বিজয় দিবস স্মারক দেয়াল পত্রিকা 'কপোতাক্ষ প্রবাহ' উন্মোচন।",

        "Student Hall of Fame": "শিক্ষার্থী কৃতিত্ব ও সম্মাননা",
        "Celebrating the stellar achievements of our students in regional and national co-curricular arenas.": "আঞ্চলিক ও জাতীয় সহশিক্ষা অঙ্গনে আমাদের কৃতি শিক্ষার্থীদের গৌরবময় সাফল্য।",
        "1st Place - Upazila Debate": "১ম স্থান - উপজেলা বিতর্ক",
        "Koyra Upazila Inter-School Debate (2025)": "কয়রা উপজেলা আন্তঃস্কুল বিতর্ক (২০২৫)",
        "Awarded Champion Trophy for logical argumentation on \"Education & Technology in Coastal Development.\"": "\"উপকূলীয় উন্নয়নে শিক্ষা ও প্রযুক্তি\" বিষয়ে যুক্তিপূর্ণ বক্তব্যের জন্য চ্যাম্পিয়ন ট্রফি অর্জন।",
        "Best Science Innovation": "সেরা বিজ্ঞান উদ্ভাবন",
        "Khulna Division Science Fair (2025)": "খুলনা বিভাগীয় বিজ্ঞান মেলা (২০২৫)",
        "Project \"Coastal Saline Water Purification Model\" secured 2nd runner-up among 42 secondary schools.": "\"উপকূলীয় লবণাক্ত পানি বিশুদ্ধকরণ মডেল\" প্রকল্পে ৪২টি বিদ্যালয়ের মধ্যে দ্বিতীয় রানার-আপ অর্জন।",
        "Zilla Football Runners-Up": "জেলা ফুটবল রানার্স-আপ",
        "District Inter-School Summer Tournament": "জেলা আন্তঃস্কুল গ্রীষ্মকালীন ফুটবল টুর্নামেন্ট",
        "KHS football team demonstrated exceptional teamwork and sportsmanship across five competitive match rounds.": "কপোতাক্ষ হাই স্কুল ফুটবল দল ৫টি প্রতিযোগিতামূলক রাউন্ডে অসাধারণ ক্রীড়াশৈলী প্রদর্শন করে রানার্স-আপ হয়।",

        // ── Member Roster Modal ──
        "Club Member Directory": "ক্লাব সদস্য তালিকা",
        "Search members by name, class, or role...": "নাম, শ্রেণি বা পদবী দিয়ে সদস্য খুঁজুন...",
        "No members found matching your search.": "আপনার অনুসন্ধানের সাথে মিলিয়ে কোনো সদস্য পাওয়া যায়নি।",
        "Official Student Roster • Kapotaksha High School (KHS)": "অফিসিয়াল শিক্ষার্থী তালিকা • কপোতাক্ষ হাই স্কুল (KHS)",
        "Close": "বন্ধ করুন",
        "SL": "ক্রমিক",
        "Student Name": "শিক্ষার্থীর নাম",
        "Designation / Role": "পদবী / দায়িত্ব",
        "Class & Sec": "শ্রেণি ও শাখা",
        "Roll No": "রোল নং",

        // ── Subpage Shared Elements ──
        "Unique ID": "ইউনিক আইডি",
        "Roll": "রোল",
        "Name": "নাম",
        "Designation": "পদবী",
        "Section – A": "শাখা – ক",
        "Section – B": "শাখা – খ",
        "Section": "শাখা",
        "Class 10": "১০ম শ্রেণি",
        "Class 9": "৯ম শ্রেণি",
        "Class 8": "৮ম শ্রেণি",
        "Class 7": "৭ম শ্রেণি",
        "Class 6": "৬ষ্ঠ শ্রেণি",
        "Class 10 (A)": "১০ম শ্রেণি (ক)",
        "Class 10 (B)": "১০ম শ্রেণি (খ)",
        "Class 10 (Sci)": "১০ম শ্রেণি (বিজ্ঞান)",
        "Class 9 (A)": "৯ম শ্রেণি (ক)",
        "Class 9 (B)": "৯ম শ্রেণি (খ)",
        "Class 9 (Sci)": "৯ম শ্রেণি (বিজ্ঞান)",
        "Class 8 (A)": "৮ম শ্রেণি (ক)",
        "Class 8 (B)": "৮ম শ্রেণি (খ)",
        "Class 7 (A)": "৭ম শ্রেণি (ক)",
        "Class 7 (B)": "৭ম শ্রেণি (খ)",
        "Class 6 (A)": "৬ষ্ঠ শ্রেণি (ক)",
        "Class 6 (B)": "৬ষ্ঠ শ্রেণি (খ)",

        // Roles & Titles
        "President & Lead Debater": "সভাপতি ও দলনেতা",
        "Vice President": "সহ-সভাপতি",
        "General Secretary": "সাধারণ সম্পাদক",
        "Lead English Debater": "প্রধান ইংরেজি বক্তা",
        "Parliamentary Research Lead": "গবেষণা সমন্বয়ক",
        "Debate Squad Member": "বিতর্ক দল সদস্য",
        "Bengali Motion Speaker": "বাংলা বক্তা",
        "Junior Speaker": "কনিষ্ঠ বক্তা",
        "Club President & Lead Innovator": "ক্লাব সভাপতি ও প্রধান উদ্ভাবক",
        "Vice President (Robotics)": "সহ-সভাপতি (রোবোটিক্স)",
        "Lead Hardware Innovator": "হার্ডওয়্যার সমন্বয়ক",
        "Math Olympiad Captain": "গণিত অলিম্পিয়াড দলনেতা",
        "Coding & Web Coordinator": "কোডিং সমন্বয়ক",
        "Science Project Associate": "বিজ্ঞান প্রকল্প সহযোগী",
        "STEM Project Associate": "স্টেম প্রকল্প সহযোগী",
        "Electronics Apprentice": "ইলেকট্রনিক্স শিক্ষানবিস",
        "Junior STEM Researcher": "কনিষ্ঠ গবেষক",
        "Junior STEM Explorer": "কনিষ্ঠ সদস্য",
        "Robotics Team Member": "রোবোটিক্স দল সদস্য",
        "Science Fair Participant": "বিজ্ঞান মেলা প্রতিনিধি",
        "President & Lead Vocalist": "সভাপতি ও প্রধান কণ্ঠশিল্পী",
        "Dance Troupe Captain": "নৃত্য দলনেত্রী",
        "Cultural Secretary": "সাংস্কৃতিক সম্পাদক",
        "Recitation & Drama Lead": "আবৃত্তি ও নাট্য সমন্বয়ক",
        "Instrumental Accompanist": "বাদ্যযন্ত্র শিল্পী",
        "Classical Vocalist": "উচ্চাঙ্গ সঙ্গীত শিল্পী",
        "Theater & Stage Drama Artist": "মঞ্চ নাটক শিল্পী",
        "Folk Song Performer": "লোকসঙ্গীত শিল্পী",
        "Chorus Performer": "সমবেত সঙ্গীত শিল্পী",
        "Junior Performing Artist": "কনিষ্ঠ শিল্পী",
        "Captain (Football Team)": "অধিনায়ক (ফুটবল দল)",
        "Vice Captain (Cricket Team)": "সহ-অধিনায়ক (ক্রিকেট দল)",
        "Athletics & Track Captain": "দৌড় ও অ্যাথলেটিক্স দলনেতা",
        "Sports Secretary": "ক্রীড়া সম্পাদক",
        "Senior Goalkeeper": "গোলরক্ষক (সিনিয়র)",
        "Badminton Lead Player": "ব্যাডমিন্টন দলনেতা",
        "Tactical Chess Champion": "দাবা চ্যাম্পিয়ন",
        "All-Round Cricket Squad": "অলরাউন্ডার সদস্য",
        "Track & Field Runner": "অ্যাথলেটিক্স দৌড়বিদ",
        "Junior Athlete": "কনিষ্ঠ খেলোয়াড়",
        "Senior Patrol Leader (SPL)": "সিনিয়র পেট্রোল লিডার (এসপিএল)",
        "Senior Girl Guide Leader": "সিনিয়র গাইড লিডার",
        "Troop Quartermaster": "কোয়ার্টারমাস্টার",
        "Troop Scribe & First Aid Lead": "স্ক্রাইব ও প্রাথমিক চিকিৎসা সমন্বয়ক",
        "Tiger Patrol Leader": "টাইগার পেট্রোল লিডার",
        "Rose Patrol Leader": "রোজ পেট্রোল লিডার",
        "Camp Safety Officer": "ক্যাম্প নিরাপত্তা কর্মকর্তা",
        "Pioneer Scout": "পায়োনিয়ার স্কাউট",
        "Troop Member": "স্কাউট সদস্য",
        "Junior Scout": "কনিষ্ঠ স্কাউট",
        "Chief Student Editor": "প্রধান শিক্ষার্থী সম্পাদক",
        "Wall Magazine Editor": "দেয়াল পত্রিকা সম্পাদক",
        "Associate Editor (Bengali)": "সহকারী সম্পাদক (বাংলা)",
        "Associate Editor (English)": "সহকারী সম্পাদক (ইংরেজি)",
        "Staff Poet & Essayist": "কবি ও প্রাবন্ধিক",
        "Calligraphy & Layout Designer": "ক্যালিগ্রাফি ও লেআউট ডিজাইনার",
        "Contributing Writer": "নিয়মিত লেখক",
        "Editorial Proofreader": "প্রুফরিডার",
        "Junior Contributing Writer": "কনিষ্ঠ লেখক",
        "Junior Writer": "কনিষ্ঠ লেখক",
        "President & Green Ambassador": "সভাপতি ও পরিবেশ দূত",
        "Vice President (Biodiversity)": "সহ-সভাপতি (জীববৈচিত্র্য)",
        "Conservation Secretary": "সংরক্ষণ সম্পাদক",
        "Clean Campus Campaign Lead": "ক্যাম্পাস পরিচ্ছন্নতা সমন্বয়ক",
        "Mangrove Protection Lead": "ম্যানগ্রোভ সুরক্ষা সমন্বয়ক",
        "Plastic-Free Drive Coordinator": "প্লাস্টিকমুক্ত অভিযান সমন্বয়ক",
        "Plant Nursery Caretaker": "নার্সারি তত্ত্বাবধায়ক",
        "Eco Activist": "পরিবেশ কর্মী",
        "Green Volunteer": "সবুজ স্বেচ্ছাসেবক",
        "Junior Eco Ranger": "কনিষ্ঠ পরিবেশ কর্মী",
        "President & Lead Painter": "সভাপতি ও প্রধান চিত্রশিল্পী",
        "Lead Event Photographer": "প্রধান আলোকচিত্রী",
        "Sketch & Watercolor Lead": "অঙ্কন ও জলরং সমন্বয়ক",
        "Stage Decor Coordinator": "মঞ্চসজ্জা সমন্বয়ক",
        "Cartoon & Poster Artist": "কার্টুন ও পোস্টার শিল্পী",
        "Digital Media Archivist": "ডিজিটাল মিডিয়া সংরক্ষক",
        "Exhibition Curator": "প্রদর্শনী সমন্বয়ক",
        "Visual Arts Contributor": "চারুকলা সহযোগী",
        "Junior Photographer": "কনিষ্ঠ আলোকচিত্রী",
        "Junior Sketcher": "কনিষ্ঠ অঙ্কনশিল্পী"
    };

    // Words & Substring mapping for text nodes
    const PHRASE_REPLACEMENTS = [
        { en: /Every Tuesday, 3:30 PM/gi, bn: "প্রতি মঙ্গলবার, বিকাল ৩:৩০" },
        { en: /Every Wednesday, 3:30 PM/gi, bn: "প্রতি বুধবার, বিকাল ৩:৩০" },
        { en: /Every Thursday, 3:00 PM/gi, bn: "প্রতি বৃহস্পতিবার, বিকাল ৩:০০" },
        { en: /Mon & Fri, 4:00 PM/gi, bn: "সোম ও শুক্রবার, বিকাল ৪:০০" },
        { en: /Every Saturday, 10:00 AM/gi, bn: "প্রতি শনিবার, সকাল ১০:০০" },
        { en: /Alternate Thursdays, 3:30 PM/gi, bn: "পাক্ষিক বৃহস্পতিবার, বিকাল ৩:৩০" },
        { en: /Bi-weekly Saturdays, 2:00 PM/gi, bn: "পাক্ষিক শনিবার, দুপুর ২:০০" },
        { en: /Every Friday, 3:00 PM/gi, bn: "প্রতি শুক্রবার, বিকাল ৩:০০" },
        { en: /👨‍🏫 Moderator:/gi, bn: "👨‍🏫 মডারেটর:" },
        { en: /⏰ Sessions:/gi, bn: "⏰ সময়সূচি:" },
        { en: /🎯 Key Event:/gi, bn: "🎯 মূল প্রতিযোগিতা:" },
        { en: /👥 (\d+) Members/gi, bn: (m, p1) => `👥 ${toBengaliNumber(p1)} জন সদস্য` },
        { en: /👥 (\d+) Scouts/gi, bn: (m, p1) => `👥 ${toBengaliNumber(p1)} জন স্কাউট` },
        { en: /(\d+) Active Members/gi, bn: (m, p1) => `${toBengaliNumber(p1)} জন সক্রিয় সদস্য` },
        { en: /(\d+) Members Listed/gi, bn: (m, p1) => `${toBengaliNumber(p1)} জন সদস্য তালিকাভুক্ত` },
        { en: /(\d+) of (\d+) Found/gi, bn: (m, p1, p2) => `${toBengaliNumber(p2)} জনের মধ্যে ${toBengaliNumber(p1)} জন পাওয়া গেছে` },
        { en: /Showing Members/gi, bn: "সদস্য তালিকা প্রদর্শন" },
        { en: /View Member 👥/gi, bn: "সদস্য তালিকা 👥" },
        { en: /Read More/gi, bn: "বিস্তারিত পড়ুন" },
        { en: /READ MORE/gi, bn: "বিস্তারিত পড়ুন" }
    ];

    class CompleteI18nEngine {
        constructor() {
            this.currentLang = localStorage.getItem(STORAGE_KEY) || 'en';
            this.dict = I18N_DICTIONARY;
            this.originalNodes = new Map();
            this.init();
        }

        init() {
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', () => this.setup());
            } else {
                this.setup();
            }
        }

        setup() {
            this.injectLanguageToggle();
            this.applyLanguage(this.currentLang);
        }

        injectLanguageToggle() {
            if (document.getElementById('btnLangToggle')) {
                this.bindToggleEvent();
                return;
            }

            const navbarContainer = document.querySelector('.custom-navbar .container-fluid');
            const searchBtn = document.querySelector('.custom-navbar .btn-search');

            if (!navbarContainer) return;

            const toggleWrapper = document.createElement('div');
            toggleWrapper.className = 'lang-switch-wrapper ms-lg-2';
            toggleWrapper.innerHTML = `
                <button class="btn-lang-toggle" id="btnLangToggle" type="button" aria-label="Toggle Language" title="ভাষা পরিবর্তন / Switch Language">
                    <span class="lang-globe">🌐</span>
                    <span class="lang-opt lang-en ${this.currentLang === 'en' ? 'active' : ''}">EN</span>
                    <span class="lang-divider">/</span>
                    <span class="lang-opt lang-bn ${this.currentLang === 'bn' ? 'active' : ''}">বাংলা</span>
                </button>
            `;

            if (searchBtn && searchBtn.parentNode) {
                searchBtn.parentNode.insertBefore(toggleWrapper, searchBtn.nextSibling);
            } else {
                const navbarCollapse = document.querySelector('.custom-navbar .navbar-collapse');
                if (navbarCollapse) {
                    navbarCollapse.appendChild(toggleWrapper);
                } else {
                    navbarContainer.appendChild(toggleWrapper);
                }
            }

            this.bindToggleEvent();
        }

        bindToggleEvent() {
            const btn = document.getElementById('btnLangToggle');
            if (!btn) return;

            btn.onclick = (e) => {
                e.preventDefault();
                const next = this.currentLang === 'en' ? 'bn' : 'en';
                this.setLanguage(next);
            };
        }

        setLanguage(lang) {
            this.currentLang = lang;
            localStorage.setItem(STORAGE_KEY, lang);
            this.applyLanguage(lang);
        }

        applyLanguage(lang) {
            document.documentElement.lang = lang;
            document.body.setAttribute('data-current-lang', lang);

            const enOpt = document.querySelector('.lang-opt.lang-en');
            const bnOpt = document.querySelector('.lang-opt.lang-bn');
            if (enOpt && bnOpt) {
                if (lang === 'bn') {
                    enOpt.classList.remove('active');
                    bnOpt.classList.add('active');
                } else {
                    bnOpt.classList.remove('active');
                    enOpt.classList.add('active');
                }
            }

            if (lang === 'bn') {
                this.translateEntireDOMToBengali();
            } else {
                this.restoreOriginalEnglishDOM();
            }

            window.dispatchEvent(new CustomEvent('khs-lang-change', { detail: { lang } }));
        }

        translateEntireDOMToBengali() {
            // 1. Recursive Walk of ALL DOM text nodes
            const walker = document.createTreeWalker(
                document.body,
                NodeFilter.SHOW_TEXT,
                {
                    acceptNode: (node) => {
                        const parent = node.parentElement;
                        if (!parent) return NodeFilter.FILTER_REJECT;
                        const tag = parent.tagName.toLowerCase();
                        if (tag === 'script' || tag === 'style' || tag === 'svg' || tag === 'noscript') {
                            return NodeFilter.FILTER_REJECT;
                        }
                        if (parent.closest('#btnLangToggle')) {
                            return NodeFilter.FILTER_REJECT;
                        }
                        return NodeFilter.FILTER_ACCEPT;
                    }
                }
            );

            let node;
            const nodesToTranslate = [];
            while ((node = walker.nextNode())) {
                const text = node.nodeValue.trim();
                if (text.length > 0) {
                    nodesToTranslate.push(node);
                }
            }

            nodesToTranslate.forEach(n => {
                const raw = n.nodeValue;
                const trimmed = raw.trim();

                // Save original value
                if (!this.originalNodes.has(n)) {
                    this.originalNodes.set(n, raw);
                }

                // Check exact dictionary match
                if (this.dict[trimmed]) {
                    n.nodeValue = raw.replace(trimmed, this.dict[trimmed]);
                    return;
                }

                // Check phrase replacements
                let updated = raw;
                let matched = false;
                for (const item of PHRASE_REPLACEMENTS) {
                    if (typeof item.bn === 'function') {
                        if (item.en.test(updated)) {
                            updated = updated.replace(item.en, item.bn);
                            matched = true;
                        }
                    } else if (item.en.test(updated)) {
                        updated = updated.replace(item.en, item.bn);
                        matched = true;
                    }
                }

                // Translate any embedded digits or roll chips if numbers exist
                if (n.parentElement && (
                    n.parentElement.classList.contains('roster-roll-chip') ||
                    n.parentElement.classList.contains('col-roll') ||
                    n.parentElement.classList.contains('timeline-date-day') ||
                    n.parentElement.classList.contains('stat-number')
                )) {
                    updated = toBengaliNumber(updated);
                    matched = true;
                }

                if (matched) {
                    n.nodeValue = updated;
                }
            });

            // 2. Translate Input Placeholders
            document.querySelectorAll('input[placeholder], textarea[placeholder]').forEach(input => {
                const ph = input.getAttribute('placeholder');
                if (this.dict[ph]) {
                    if (!input.hasAttribute('data-orig-ph')) {
                        input.setAttribute('data-orig-ph', ph);
                    }
                    input.setAttribute('placeholder', this.dict[ph]);
                }
            });

            // 3. Translate Buttons & Dropdown text explicitly to ensure zero miss
            document.querySelectorAll('.nav-link, .dropdown-item, .btn-search, .btn-view-member, .club-filter-btn, .hero-btn').forEach(el => {
                const firstTextNode = Array.from(el.childNodes).find(child => child.nodeType === 3 && child.nodeValue.trim().length > 0);
                if (firstTextNode) {
                    const text = firstTextNode.nodeValue.trim();
                    if (this.dict[text]) {
                        if (!this.originalNodes.has(firstTextNode)) {
                            this.originalNodes.set(firstTextNode, firstTextNode.nodeValue);
                        }
                        firstTextNode.nodeValue = firstTextNode.nodeValue.replace(text, this.dict[text]);
                    }
                }
            });
        }

        restoreOriginalEnglishDOM() {
            // Restore all text nodes
            this.originalNodes.forEach((origText, node) => {
                try {
                    node.nodeValue = origText;
                } catch (e) {}
            });

            // Restore input placeholders
            document.querySelectorAll('[data-orig-ph]').forEach(input => {
                input.setAttribute('placeholder', input.getAttribute('data-orig-ph'));
            });
        }
    }

    // Expose & Instantiate
    window.KHS_I18N = new CompleteI18nEngine();

})();
