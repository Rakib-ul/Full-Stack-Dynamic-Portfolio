@extends('index')
@push('style')
@endpush

@section('main-content')
    {{-- <nav>
        <div class="display alignment">
            <div class="padding">Rakibul</div>
            <div class="find">
                <a href="" class="padding top">Home</a>
                <a href="#about" class="padding top">About</a>
                <a href="#education" class="padding top">Education</a>
                <a href="#Projects" class="padding top">Projects</a>
                <a href="#contact" class="padding top">Contact</a>
                <a href="https://github.com/Rakib-ul" class="padding top">GitHub</a>
            </div>
        </div>
    </nav>
    <div class="section1">
        <div class="alignment view">
            <div class="title">
                <h1 class="padding">Hi! I am MD Rakibu Islam</h1>
                <h3 class="padding">
                    Where Ideas Meet Execution.
                </h3>
            </div>
            <div class="padd">
                <img id = "avatar" src="images/phone2.jpg" alt="" width="200" height="250"
                    style="border:2px solid rgb(41, 35, 35); border-radius: 50%">
            </div>

        </div>
        <div class="padding">
            <button id = "button" class="button-style">Download CV</button>
        </div>
    </div>

    <div id="about" class=" about-container section1">
        <div class="about-header">
            <h1>About Me</h1>
            <p>Hello! I am Md Rakibul Islam, a student at Daffodil International University and an aspiring Software
                Engineer.</p>
        </div>

        <div class="about-content">
            <div class="about-image">
                <img src="images/phone2.jpg" alt="Md Rakibul Islam">
            </div>
            <div class="about-text">
                <h2>Software Engineer</h2>
                <p>
                    I have a passion for coding and building efficient software solutions that make a difference.
                    I have a passion for coding and building efficient software solutions that make a difference.
                    I have a passion for coding and building efficient software solutions that make a difference.

                </p>
                <p>
                    Beyond programming, I enjoy learning new technologies. Beyond programming, I enjoy learning new
                    technologiesBeyond programming, I enjoy learning new technologiesBeyond programming, I enjoy learning
                    new technologies.
                </p>
            </div>
        </div>
    </div>


    <div id="education" class="section1 education-page">
        <div>
            <h1>Education</h1>
        </div>
        <div class="education-card">
            <div class="ed-pd2">
                <h2>SSC</h2>
                <h3>Satkhira Police Line School</h3><br>
                <h3>Board: Jessore</h3><br>
                <h3>Result: GPA-5.00</h3><br>
                <h3>Year: 2017</h3><br>
            </div>

            <div class="ed-pd2">
                <h2>HSC</h2>
                <h3>Govt. BL Collage, Daulatpur</h3><br>
                <h3>Board: Jessore</h3><br>
                <h3>Result: GPA-5.00</h3><br>
                <h3>Year: 2019</h3><br>
            </div>
            <div class="ed-pd2">
                <h2>B.Sc</h2>
                <h3>Satkhira Police Line School</h3><br>
                <h3>Board: Jessore</h3><br>
                <h3>Result: GPA-5.00</h3><br>
                <h3>Year: 2017</h3><br>
            </div>

        </div>
    </div>

    <div id="Projects" class="section1 education-page">
        <div>
            <h1>Projects</h1>
        </div>
        <div class="education-card">
            <div class="ed-pd3">
                <h2>Kajwala</h2>
                <h3>This project will help others to find all workers in a single platform</h3><br>
            </div>

            <div class="ed-pd3">
                <h2>Kajwala</h2>
                <h3>This project will help others to find all workers in a single platform</h3><br>
            </div>
            <div class="ed-pd3">
                <h2>Kajwala</h2>
                <h3>This project will help others to find all workers in a single platform</h3><br>
            </div>

        </div>
    </div>

    <div id="contact" class="contact-container  section1">
        <div class="education-page">
            <h1>Contact</h1>
        </div>
        <div class="ed-pd2">
            <h2>Phone: 01885711459</h2>
            <h3>email: islam15-5674@diu.edu.bd</h3><br>
            <h3>email: islam15-5674@diu.edu.bd</h3><br>
            <h3>email: islam15-5674@diu.edu.bd</h3><br>
            <h3>email: islam15-5674@diu.edu.bd</h3><br>
        </div>
    </div> --}}

    <!-- Header -->
    <header id="header">
        <div class="container header-container">
            <a href="#" class="logo">MD<span> Rakibul</span></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#achievements">Achievements</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <!-- Image with proper positioning -->
        <img src="images/cover.jpg" alt="Your Name" class="hero-image">
        
        <div class="hero-content">
            <h1>Hi, I'm <span>MD Rakibul Islam</span></h1>
            <p>Full Stack Developer | AI & IoT Enthusiast | Turning Ideas into Innovative Solutions</p>
            <div class="hero-btns">
                <a href="#projects" class="btn">View My Work</a>
                <a href="#contact" class="btn btn-outline">Contact Me</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about" id="about">
        <div class="container">
            <div class="section-title">
                <h2>About <span>Me</span></h2>
            </div>
            <div class="about-content">
                <div class="about-img">
                    <img src="images/profile.jpg" alt="Your Name">
                </div>
                <div class="about-text">
                    <h3>Know Me Better</h3>
                    <p style="text-align: justify">Hi, I’m Rakibul Hasan, a passionate Full Stack Developer and AI enthusiast with a keen interest in building innovative and scalable digital solutions. My expertise spans across web development, machine learning, and IoT-based systems, with hands-on experience in technologies like Python, JavaScript, Laravel, and deep learning frameworks.

I love solving real-world problems using technology — from developing dynamic web applications to designing intelligent embedded systems. Currently, I am exploring AI-driven automation and IoT-based monitoring systems to create impactful solutions for industries and everyday life.

Apart from coding, I am a quick learner, a problem solver, and someone who enjoys experimenting with new tools and emerging technologies. My goal is to contribute to cutting-edge projects that make technology more accessible and useful to people.</p>
                    
                    <div class="personal-info">
                        <div class="info-item">
                            <span>Name:</span>
                            <p>MD Rakibul Islam</p>
                        </div>
                        <div class="info-item">
                            <span>Email:</span>
                            <p>hasnrakib11257@gmail.com</p>
                        </div>
                        <div class="info-item">
                            <span>Age:</span>
                            <p>26</p>
                        </div>
                        <div class="info-item">
                            <span>From:</span>
                            <p>Khulna, Bangladesh</p>
                        </div>
                        <div class="info-item">
                            <span>Freelance:</span>
                            <p>Available</p>
                        </div>
                        <div class="info-item">
                            <span>Phone:</span>
                            <p>+880 1885711459</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="https://github.com/Rakib-ul" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/md-rakibul-islam-hasan-831baa2b0/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Projects Section -->
    <section class="section projects" id="projects">
        <div class="container">
            <div class="section-title">
                <h2>My <span>Projects</span></h2>
            </div>
            <div class="projects-filter">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web Design</button>
                <button class="filter-btn" data-filter="app">App Development</button>
                <button class="filter-btn" data-filter="graphic">Graphic Design</button>
            </div>
            <div class="projects-grid">
                <div class="project-card" data-category="web">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Project 1">
                    </div>
                    <div class="project-content">
                        <h3>E-commerce Website</h3>
                        <p>A fully responsive e-commerce platform with product filtering and cart functionality.</p>
                        <div class="project-tags">
                            <span class="project-tag">HTML</span>
                            <span class="project-tag">CSS</span>
                            <span class="project-tag">JavaScript</span>
                            <span class="project-tag">React</span>
                        </div>
                        <div class="project-links">
                            <a href="#"><i class="fas fa-eye"></i> Live Demo</a>
                            <a href="#"><i class="fab fa-github"></i> Code</a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card" data-category="app">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Project 2">
                    </div>
                    <div class="project-content">
                        <h3>Task Management App</h3>
                        <p>A mobile application for managing daily tasks with drag-and-drop functionality.</p>
                        <div class="project-tags">
                            <span class="project-tag">React Native</span>
                            <span class="project-tag">Firebase</span>
                            <span class="project-tag">Redux</span>
                        </div>
                        <div class="project-links">
                            <a href="#"><i class="fas fa-eye"></i> Live Demo</a>
                            <a href="#"><i class="fab fa-github"></i> Code</a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card" data-category="graphic">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80" alt="Project 3">
                    </div>
                    <div class="project-content">
                        <h3>Brand Identity Design</h3>
                        <p>Complete brand identity package including logo, color palette, and typography.</p>
                        <div class="project-tags">
                            <span class="project-tag">Illustrator</span>
                            <span class="project-tag">Photoshop</span>
                            <span class="project-tag">Branding</span>
                        </div>
                        <div class="project-links">
                            <a href="#"><i class="fas fa-eye"></i> View Project</a>
                            <a href="#"><i class="fas fa-download"></i> Assets</a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card" data-category="web">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Project 4">
                    </div>
                    <div class="project-content">
                        <h3>Portfolio Website</h3>
                        <p>A minimalist portfolio website for a photographer with image gallery.</p>
                        <div class="project-tags">
                            <span class="project-tag">HTML</span>
                            <span class="project-tag">CSS</span>
                            <span class="project-tag">JavaScript</span>
                            <span class="project-tag">GSAP</span>
                        </div>
                        <div class="project-links">
                            <a href="#"><i class="fas fa-eye"></i> Live Demo</a>
                            <a href="#"><i class="fab fa-github"></i> Code</a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card" data-category="app">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Project 5">
                    </div>
                    <div class="project-content">
                        <h3>Fitness Tracker App</h3>
                        <p>Mobile application for tracking workouts, nutrition, and progress.</p>
                        <div class="project-tags">
                            <span class="project-tag">Flutter</span>
                            <span class="project-tag">Firebase</span>
                            <span class="project-tag">Dart</span>
                        </div>
                        <div class="project-links">
                            <a href="#"><i class="fas fa-eye"></i> Live Demo</a>
                            <a href="#"><i class="fab fa-github"></i> Code</a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card" data-category="graphic">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1541462608143-67571c6738dd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Project 6">
                    </div>
                    <div class="project-content">
                        <h3>Marketing Campaign</h3>
                        <p>Complete marketing materials for a product launch campaign.</p>
                        <div class="project-tags">
                            <span class="project-tag">Illustrator</span>
                            <span class="project-tag">InDesign</span>
                            <span class="project-tag">Marketing</span>
                        </div>
                        <div class="project-links">
                            <a href="#"><i class="fas fa-eye"></i> View Project</a>
                            <a href="#"><i class="fas fa-download"></i> Assets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="section skills" id="skills">
        <div class="container">
            <div class="section-title">
                <h2>My <span>Skills</span></h2>
            </div>
            <div class="skills-container">
                <div class="skill-category">
                    <h3>Technical Skills</h3>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>HTML/CSS</span>
                            <span>95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>JavaScript</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>React</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Node.js</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3>Professional Skills</h3>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>UI/UX Design</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Responsive Design</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Problem Solving</span>
                            <span>95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Team Collaboration</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="section education" id="education">
        <div class="container">
            <div class="section-title">
                <h2>My <span>Education</span></h2>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2022 - 2025</div>
                        <h3 class="timeline-title">Bachelor of Science in Computer Science and Engineering</h3>
                        <h4 class="timeline-subtitle">Daffodil International University</h4>
                        <p class="timeline-description">Specialized in Artificial Intelligence and Machine Learning. Completed thesis on "Neural Networks for Image Recognition".</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2018 - 2019</div>
                        <h3 class="timeline-title">Higher Secondary Certificate</h3>
                        <h4 class="timeline-subtitle">Govt. BL Collage, Khulna</h4>
                        <p class="timeline-description">Completed with a good schore and focused on research lab</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2016 - 2017</div>
                        <h3 class="timeline-title">Secoendary School Certificate</h3>
                        <h4 class="timeline-subtitle">Satkhira Police Line Secoendary School</h4>
                        <p class="timeline-description"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="section experience" id="experience">
        <div class="container">
            <div class="section-title">
                <h2>Work <span>Experience</span></h2>
            </div>
            <div class="experience-container">
                <div class="experience-card">
                    <div class="experience-header">
                        <div class="company-logo">
                            <img src="https://logo.clearbit.com/google.com" alt="Google">
                        </div>
                        <div>
                            <h3 class="experience-title">Senior Frontend Developer</h3>
                            <h4 class="experience-company">Google</h4>
                            <p class="experience-date">2021 - Present</p>
                        </div>
                    </div>
                    <p class="experience-description">Leading a team of developers to build and maintain Google's advertising platform UI. Implementing new features with React and optimizing performance.</p>
                    <div class="experience-skills">
                        <span class="experience-skill">React</span>
                        <span class="experience-skill">TypeScript</span>
                        <span class="experience-skill">Redux</span>
                        <span class="experience-skill">GraphQL</span>
                    </div>
                </div>
                
                <div class="experience-card">
                    <div class="experience-header">
                        <div class="company-logo">
                            <img src="https://logo.clearbit.com/facebook.com" alt="Facebook">
                        </div>
                        <div>
                            <h3 class="experience-title">Frontend Developer</h3>
                            <h4 class="experience-company">Facebook</h4>
                            <p class="experience-date">2019 - 2021</p>
                        </div>
                    </div>
                    <p class="experience-description">Worked on the Facebook Marketplace team, developing new features and improving user experience. Collaborated with designers to implement responsive UI components.</p>
                    <div class="experience-skills">
                        <span class="experience-skill">React</span>
                        <span class="experience-skill">JavaScript</span>
                        <span class="experience-skill">CSS-in-JS</span>
                        <span class="experience-skill">Jest</span>
                    </div>
                </div>
                
                <div class="experience-card">
                    <div class="experience-header">
                        <div class="company-logo">
                            <img src="https://logo.clearbit.com/amazon.com" alt="Amazon">
                        </div>
                        <div>
                            <h3 class="experience-title">Web Developer</h3>
                            <h4 class="experience-company">Amazon</h4>
                            <p class="experience-date">2017 - 2019</p>
                        </div>
                    </div>
                    <p class="experience-description">Developed and maintained e-commerce features for Amazon's retail website. Focused on improving product pages and checkout flow.</p>
                    <div class="experience-skills">
                        <span class="experience-skill">JavaScript</span>
                        <span class="experience-skill">jQuery</span>
                        <span class="experience-skill">CSS</span>
                        <span class="experience-skill">A/B Testing</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="section achievements" id="achievements">
        <div class="container">
            <div class="section-title">
                <h2>My <span>Achievements</span></h2>
            </div>
            <div class="achievements-container">
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3 class="achievement-title">Best UI Design Award 2022</h3>
                    <span class="achievement-date">June 2022</span>
                    <p class="achievement-description">Received the prestigious design award for innovative user interface design at the International Design Conference.</p>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="achievement-title">Google Certified Developer</h3>
                    <span class="achievement-date">March 2021</span>
                    <p class="achievement-description">Earned certification as a Google Professional Developer, demonstrating expertise in modern web technologies.</p>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="achievement-title">Published Author</h3>
                    <span class="achievement-date">October 2020</span>
                    <p class="achievement-description">Published "Modern Web Development with React" which became a bestseller in the programming category.</p>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-microphone"></i>
                    </div>
                    <h3 class="achievement-title">Keynote Speaker</h3>
                    <span class="achievement-date">May 2019</span>
                    <p class="achievement-description">Invited to speak at the annual Web Development Conference about the future of frontend frameworks.</p>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="achievement-title">Open Source Contributor</h3>
                    <span class="achievement-date">Ongoing</span>
                    <p class="achievement-description">Regular contributor to major open source projects including React and Vue.js ecosystems.</p>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3 class="achievement-title">Hackathon Winner</h3>
                    <span class="achievement-date">November 2018</span>
                    <p class="achievement-description">Won first place in the National Coding Challenge with an innovative accessibility solution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact <span>Me</span></h2>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Location</h4>
                                <p>Mirpur, Dahaka, Bangladesh </p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <p>hasanrakib11257@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Phone</h4>
                                <p>+880 1885711459</p>
                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div>
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.538259162462!2d-122.4199063243691!3d37.77492947185948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1689870000000!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>About Me</h3>
                    <p>Professional web developer and designer with passion for creating beautiful, functional digital experiences that make a difference.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#education">Education</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> Mirpur Dhaka, Bangladesh</li>
                        <li><i class="fas fa-envelope"></i> hasanrakib11257@gmail.com</li>
                        <li><i class="fas fa-phone"></i>+880 1885711459</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 MD Rakibul Islam. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>
@endsection
