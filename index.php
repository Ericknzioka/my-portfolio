<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erick Nzioka | Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        /* Header styles */
        header {
            background-color: #1e2124;
            color: white;
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .logo-highlight {
            color: #66b2ff;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 1.5rem;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-links a:hover {
            color: #66b2ff;
        }
        
        .nav-links a.active {
            color: #66b2ff;
        }
        
        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0.5rem;
            right: 0.5rem;
            height: 2px;
            background-color: #66b2ff;
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }
        
        /* Main content */
        main {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }
        
        section {
            margin-bottom: 3rem;
            display: none;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        
        section.active {
            display: block;
            animation: fadeIn 0.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #333;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: #66b2ff;
        }
        
        h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #444;
        }
        
        p {
            margin-bottom: 1rem;
            font-size: 1.05rem;
        }
        
        /* Home Section */
        #home {
            text-align: center;
            padding: 4rem 2rem;
        }
        
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #66b2ff;
            margin-bottom: 2rem;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 3rem;
        }
        
        .hero-title {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            color: #666;
            margin-bottom: 2rem;
        }
        
        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }
        
        .btn {
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary {
            background-color: #66b2ff;
            color: white;
            border: none;
        }
        
        .btn-primary:hover {
            background-color: #4d99e6;
            transform: translateY(-2px);
        }
        
        .btn-outline {
            border: 2px solid #66b2ff;
            color: #66b2ff;
            background-color: transparent;
        }
        
        .btn-outline:hover {
            background-color: #66b2ff;
            color: white;
            transform: translateY(-2px);
        }
        
        /* Skills Section */
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .skill-card {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .skill-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #66b2ff;
        }
        
        .skill-title {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        
        /* Experience & Education Sections */
        .timeline {
            position: relative;
            margin-top: 2rem;
            padding-left: 2rem;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: #ddd;
        }
        
        .timeline-item {
            position: relative;
            padding-bottom: 2rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -2.5rem;
            top: 0.5rem;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            background-color: #66b2ff;
            border: 2px solid white;
        }
        
        .timeline-date {
            font-size: 0.9rem;
            color: #888;
            margin-bottom: 0.5rem;
        }
        
        /* Contact Section */
        .contact-form {
            max-width: 600px;
            margin: 2rem auto;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        
        input, textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        button[type="submit"] {
            background-color: #66b2ff;
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        button[type="submit"]:hover {
            background-color: #4d99e6;
        }
        
        .contact-info {
            margin-top: 3rem;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .contact-icon {
            font-size: 1.5rem;
            color: #66b2ff;
        }
        
        /* CV Section */
        .cv-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .cv-icon {
            font-size: 3rem;
            color: #66b2ff;
            margin-bottom: 1.5rem;
        }
        
        /* Footer styles */
        footer {
            background-color: #1e2124;
            color: white;
            padding: 3rem 2rem;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .footer-info {
            text-align: left;
        }
        
        .social-links {
            display: flex;
            gap: 1.5rem;
        }
        
        .social-link {
            color: white;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            width: 2.5rem;
            height: 2.5rem;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .social-link:hover {
            color: #66b2ff;
            background-color: rgba(255,255,255,0.2);
            transform: translateY(-3px);
        }
        
        .copyright {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
            color: #aaa;
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }
            
            .nav-links {
                position: fixed;
                top: 70px;
                left: -100%;
                flex-direction: column;
                background-color: #1e2124;
                width: 100%;
                padding: 1rem;
                transition: left 0.3s ease;
                z-index: 999;
            }
            
            .nav-links.active {
                left: 0;
            }
            
            .footer-content {
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .footer-info {
                text-align: center;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo"><span class="logo-highlight">Erick</span> Nzioka</div>
            <ul class="nav-links">
                <li><a href="#home" class="nav-link active" data-section="home">Home</a></li>
                <li><a href="#about" class="nav-link" data-section="about">About</a></li>
                <li><a href="#skills" class="nav-link" data-section="skills">Skills</a></li>
                <li><a href="#experience" class="nav-link" data-section="experience">Experience</a></li>
                <li><a href="#education" class="nav-link" data-section="education">Education</a></li>
                <li><a href="#contact" class="nav-link" data-section="contact">Contact</a></li>
                <li><a href="#cv" class="nav-link" data-section="cv">CV</a></li>
            </ul>
            <div class="hamburger">☰</div>
        </nav>
    </header>
    
    <main>
        <!-- Home Section -->
       <!-- Home Section -->
<section id="home" class="active">
    <div class="hero">
        <!-- Changed this div to use your profile image -->
        <img src="images/profile.jpg" alt="Erick Nzioka" class="profile-pic">
        <h1 class="hero-title">Erick Nzioka</h1>
        <p class="hero-subtitle">Web Developer, Designer & Network Engineer</p>
        <p>Welcome to my portfolio! I'm passionate about creating beautiful, functional websites that deliver exceptional user experiences.</p>
        <div class="hero-buttons">
            <a href="#contact" class="btn btn-primary"><i class="fas fa-envelope"></i> Contact Me</a>
            <a href="#cv" class="btn btn-outline"><i class="fas fa-file-alt"></i> View CV</a>
        </div>
    </div>
</section>
        
        <!-- About Section -->
        <section id="about">
            <h1>About Me</h1>
            <p>Hello! I'm Erick Nzioka, a passionate web developer and designer with expertise in creating responsive and user-friendly websites.</p>
            <p>I have several years of experience in web development, focusing on clean code, modern frameworks, and intuitive user interfaces. My goal is to create websites that not only look great but also provide exceptional user experience.</p>
            <p>When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or sharing my knowledge with the developer community.</p>
        </section>
        
        <!-- Skills Section -->
        <section id="skills">
            <h1>My Skills</h1>
            <div class="skills-container">
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-html5"></i></div>
                    <h3 class="skill-title">HTML5</h3>
                    <p>Semantic markup and structure</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-css3-alt"></i></div>
                    <h3 class="skill-title">CSS3</h3>
                    <p>Responsive design, animations</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-js"></i></div>
                    <h3 class="skill-title">JavaScript</h3>
                    <p>DOM manipulation, ES6+</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-react"></i></div>
                    <h3 class="skill-title">React</h3>
                    <p>Components, hooks, state management</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-vuejs"></i></div>
                    <h3 class="skill-title">Vue.js</h3>
                    <p>Reactive components, directives</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fas fa-database"></i></div>
                    <h3 class="skill-title">MySQL</h3>
                    <p>Database design and management</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-php"></i></div>
                    <h3 class="skill-title">PHP</h3>
                    <p>Server-side processing</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3 class="skill-title">Responsive Design</h3>
                    <p>Mobile-first approach</p>
                </div>
            </div>
        </section>
        
        <!-- Experience Section -->
        <section id="experience">
            <h1>Work Experience</h1>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2020 - Present</div>
                    <h2>Senior Web Developer</h2>
                    <p class="timeline-company">ABC Company</p>
                    <p>Developed and maintained company websites and web applications. Led a team of junior developers and implemented best practices for code quality and performance optimization.</p>
                    <ul>
                        <li>Redesigned the main company website, increasing conversion rates by 25%</li>
                        <li>Implemented responsive design principles across all web properties</li>
                        <li>Integrated payment gateways and e-commerce functionality</li>
                    </ul>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2018 - 2020</div>
                    <h2>Web Developer</h2>
                    <p class="timeline-company">XYZ Agency</p>
                    <p>Created responsive websites for various clients across different industries. Collaborated with designers and project managers to ensure timely delivery of projects.</p>
                    <ul>
                        <li>Developed over 15 client websites using modern frameworks</li>
                        <li>Optimized website performance and SEO</li>
                        <li>Implemented custom CMS solutions for content management</li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Education Section -->
        <section id="education">
            <h1>Education</h1>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2021 - 2025</div>
                    <h2>Master of Computer Science</h2>
                    <p class="timeline-company">Meru University of Science Technology</p>
                    <p>Specialized in Web Technologies and User Interface Design. Graduated with honors.</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2021 - 2025</div>
                    <h2>Bachelor of Science in computer security and Forensics</h2>
                    <p class="timeline-company">Meru University of science and Technology</p>
                    <p>Focused on software development and database management. Completed several practical projects involving web applications.</p>
                </div>
            </div>
        </section>
        
        <!-- Contact Section -->
        <section id="contact">
            <h1>Contact Me</h1>
            <p>I'm always open to discussing new projects, creative ideas or opportunities to be part of your vision. Feel free to reach out to me using the form below or through my social media channels.</p>
            
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
            
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h3>Email</h3>
                        <p>ericknzioka83@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
                    <div>
                        <h3>WhatsApp</h3>
                        <p><a href="https://whatsapp.com/dl/" target="_blank" style="color: #333; text-decoration: none;">Connect on WhatsApp</a></p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h3>Location</h3>
                        <p>Kenya</p>
                    </div>
                </div>
            </div>
        </section>
        
       <!-- CV Section -->
<section id="cv">
    <h1>Curriculum Vitae</h1>
    <div class="cv-container">
        <div class="cv-icon"><i class="fas fa-file-alt"></i></div>
        <p>You can download my CV in PDF format by clicking the button below:</p>
        <a href="ErickNziokaCV.pdf" class="btn btn-primary" style="margin-top: 1rem;" download="ErickNziokaCv_pdf">
            <i class="fas fa-download"></i> Download CV
        </a>
    </div>
</section>
    <footer>
        <div class="footer-content">
            <div class="footer-info">
                <h3>Erick Nzioka</h3>
                <p>Web Developer, Designer and Network Engineer</p>
            </div>
            <div class="social-links">
                <a href="https://www.linkedin.com/in/erick-nzioka-08b910356" target="_blank" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://github.com/Ericknzioka" target="_blank" class="social-link" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="https://whatsapp.com/dl/" target="_blank" class="social-link" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="social-link" title="Twitter"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="copyright">
            © 2025 Erick Nzioka. All Rights Reserved.
        </div>
    </footer>

    <script>
        // Get all navigation links
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section');
        const hamburger = document.querySelector('.hamburger');
        const navLinksContainer = document.querySelector('.nav-links');
        
        // Handle navigation click events
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links and sections
                navLinks.forEach(item => item.classList.remove('active'));
                sections.forEach(section => section.classList.remove('active'));
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Get the section id from data attribute
                const sectionId = this.getAttribute('data-section');
                
                // Show the corresponding section
                document.getElementById(sectionId).classList.add('active');
                
                // Close mobile menu if open
                if (window.innerWidth <= 768) {
                    navLinksContainer.classList.remove('active');
                }
                
                // Update URL hash
                window.location.hash = sectionId;
            });
        });
        
        // Handle hamburger menu click for mobile
        hamburger.addEventListener('click', function() {
            navLinksContainer.classList.toggle('active');
        });
        
        // Check URL hash on page load
        window.addEventListener('DOMContentLoaded', function() {
            const hash = window.location.hash.substring(1);
            if (hash) {
                // Find the link with matching section
                const link = document.querySelector(`[data-section="${hash}"]`);
                if (link) {
                    // Simulate a click on the link
                    link.click();
                }
            }
        });
    </script>
</body>
</html>