<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* body {
            font-family: 'Montserrat', sans-serif;
            background: black;
            color: #eee;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        .display {
            display: flex;
            background: linear-gradient(90deg, #0f2027, #203a43, #2c5364);
            height: 50px;
            color: white;
            align-items: center;
            padding: 0 20px;
        }

        .alignment {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .alignment2 {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .padding {
            padding-left: 10px;
            padding-right: 10px;
        }

        .find a {
            padding: 0 15px;
            color: white;
            text-decoration: none;
            transition: color 0.3s ease, border-bottom 0.3s ease;
        }

        .find a:hover {
            color: #56aaff;
            border-bottom: 2px solid #56aaff;
        }

        .button-style {
            background-color: rgb(86, 87, 141);
            border: none;
            color: white;
            font-size: 16px;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin: 20px auto;
            display: block;
        }

        .button-style:hover {
            background-color: #565787;
            transform: scale(1.05);
        }

        #avatar {
            border: 2px solid rgb(41, 35, 35);
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(86, 87, 141, 0.5);
        }

        h1 {
            font-weight: 700;
            font-size: 3em;
            margin: 0;
        }

        h2 {
            font-weight: 550;
        }

        h3 {
            font-weight: 400;
            margin-top: 10px;
            margin-bottom: 0;
        }

        .section1 {
            height: 100vh;
        }

        .about-image {
            align-items: center;
        }

        .about-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            color: #333;
            background-color: #fafafa;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .about-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .about-header h1 {
            font-size: 2.8rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .about-header p {
            font-size: 1.2rem;
            color: #555;
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
            justify-content: center;
        }

        .about-image img {
            width: 100%;
            max-width: 320px;
            height: auto;
            object-fit: cover;
            border-radius: 15px;
            border: 3px solid #2c3e50;
            box-shadow: 0 4px 12px rgba(44, 62, 80, 0.3);
            transition: transform 0.3s ease;
        }

        .about-image img:hover {
            transform: scale(1.05);
        }

        .about-text {
            display: flex;
            flex-wrap: wrap;
            max-width: 450px;
        }

        .about-text h2 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #2980b9;
        }

        .about-text p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #444;
        }

        .education-page {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            padding: 30px;
        }

        .education-card {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            
        }

        .ed-pd {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            color: #333;
            background-color: #fafafa;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        .ed-pd2 {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            color: #333;
            background-color: #fafafa;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .ed-pd3 {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            color: #333;
            background-color: #ceb3b3;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        

        .contact-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            color: white;
            background-color: rgb(43, 40, 40);
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        } */
        
        :root {
            --primary-color: #6c63ff;
            --secondary-color: #4d44db;
            --dark-color: #2f2e41;
            --light-color: #f8f9fa;
            --success-color: #28a745;
            --text-color: #333;
            --text-light: #777;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
            background-color: var(--light-color);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: 700;
            color: var(--dark-color);
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .section-title h2 span {
            color: var(--primary-color);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            text-transform: capitalize;
        }

        .btn:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .text-center {
            text-align: center;
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        header.scrolled {
            padding: 10px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark-color);
        }

        .logo span {
            color: var(--primary-color);
        }

        .nav-links {
            display: flex;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            font-size: 16px;
            font-weight: 500;
            color: var(--dark-color);
            transition: var(--transition);
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6));
            z-index: 1;
        }
        
        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 25%; /* Adjust this to position your face */
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            animation: fadeInDown 1s ease;
        }
        
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease;
        }
        
        .hero-btns {
            display: flex;
            gap: 1rem;
            justify-content: center;
            animation: fadeIn 1.5s ease;
        }
        
        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: #6c63ff;
            color: white;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: #5a52d6;
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid white;
        }
        
        .btn-outline:hover {
            background: white;
            color: #333;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .hero-btns {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .hero-image {
                object-position: center 30%; /* Adjust for mobile */
            }
        }

        /* About Section */
        .about {
            background: white;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-img {
            position: relative;
            text-align: center;
        }

        .about-img img {
            width: 350px;
            height: 350px;
            object-fit: cover;
            border-radius: 50%;
            border: 10px solid rgba(108, 99, 255, 0.1);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .about-text h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: var(--dark-color);
        }

        .about-text p {
            margin-bottom: 20px;
            color: var(--text-light);
        }

        .personal-info {
            margin-top: 30px;
        }

        .info-item {
            display: flex;
            margin-bottom: 15px;
        }

        .info-item span {
            font-weight: 600;
            min-width: 120px;
            color: var(--dark-color);
        }

        .info-item p {
            margin: 0;
            color: var(--text-light);
        }

        .social-links {
            display: flex;
            margin-top: 30px;
            gap: 15px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--light-color);
            border-radius: 50%;
            color: var(--dark-color);
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-5px);
        }

        /* Skills Section */
        .skills {
            background: #f8f9fa;
        }

        .skills-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .skill-category {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .skill-category h3 {
            font-size: 22px;
            margin-bottom: 20px;
            color: var(--dark-color);
        }

        .skill-item {
            margin-bottom: 20px;
        }

        .skill-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .skill-bar {
            height: 10px;
            background: #e9ecef;
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: var(--primary-color);
            border-radius: 5px;
            position: relative;
            transition: width 1.5s ease;
        }

        .skill-progress::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shine 2s infinite;
        }

        @keyframes shine {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        /* Projects Section */
        .projects {
            background: white;
        }

        .projects-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            margin: 0 10px;
            background: transparent;
            border: none;
            color: var(--text-light);
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            border-radius: 30px;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary-color);
            color: white;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .project-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .project-img {
            height: 250px;
            overflow: hidden;
        }

        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .project-card:hover .project-img img {
            transform: scale(1.1);
        }

        .project-content {
            padding: 20px;
        }

        .project-content h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .project-content p {
            color: var(--text-light);
            margin-bottom: 15px;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 15px;
        }

        .project-tag {
            padding: 5px 10px;
            background: var(--light-color);
            color: var(--text-light);
            font-size: 12px;
            border-radius: 5px;
        }

        .project-links {
            display: flex;
            gap: 10px;
        }

        .project-links a {
            padding: 8px 15px;
            font-size: 14px;
            border-radius: 5px;
            transition: var(--transition);
        }

        .project-links a:first-child {
            background: var(--primary-color);
            color: white;
        }

        .project-links a:last-child {
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
        }

        .project-links a:hover {
            opacity: 0.9;
        }

        /* Education Section */
        .education {
            background: #f8f9fa;
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background: var(--primary-color);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 50px;
        }

        .timeline-item:nth-child(odd) {
            padding-right: 50%;
            text-align: right;
            padding-right: calc(50% + 30px);
        }

        .timeline-item:nth-child(even) {
            padding-left: 50%;
            text-align: left;
            padding-left: calc(50% + 30px);
        }

        .timeline-dot {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: white;
            border: 4px solid var(--primary-color);
        }

        .timeline-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .timeline-date {
            display: inline-block;
            padding: 5px 15px;
            background: var(--primary-color);
            color: white;
            border-radius: 30px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .timeline-title {
            font-size: 20px;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .timeline-subtitle {
            font-size: 16px;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .timeline-description {
            color: var(--text-light);
        }

        /* Experience Section */
        .experience {
            background: white;
        }

        .experience-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .experience-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            border-top: 3px solid var(--primary-color);
        }

        .experience-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .experience-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .company-logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
            background: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .company-logo img {
            width: 80%;
            height: 80%;
            object-fit: contain;
        }

        .experience-title {
            font-size: 20px;
            margin-bottom: 5px;
            color: var(--dark-color);
        }

        .experience-company {
            font-size: 16px;
            color: var(--primary-color);
            margin-bottom: 5px;
        }

        .experience-date {
            font-size: 14px;
            color: var(--text-light);
        }

        .experience-description {
            color: var(--text-light);
            margin-bottom: 15px;
        }

        .experience-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .experience-skill {
            padding: 5px 10px;
            background: var(--light-color);
            color: var(--text-light);
            font-size: 12px;
            border-radius: 5px;
        }

        /* Achievements Section */
        .achievements {
            background: #f8f9fa;
        }

        .achievements-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .achievement-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .achievement-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--primary-color);
        }

        .achievement-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .achievement-icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .achievement-title {
            font-size: 20px;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .achievement-date {
            display: inline-block;
            padding: 5px 10px;
            background: var(--light-color);
            color: var(--text-light);
            font-size: 12px;
            border-radius: 30px;
            margin-bottom: 15px;
        }

        .achievement-description {
            color: var(--text-light);
        }

        /* Contact Section */
        .contact {
            background: white;
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
        }

        .contact-info h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--dark-color);
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .contact-icon {
            font-size: 20px;
            color: var(--primary-color);
            margin-right: 15px;
            margin-top: 5px;
        }

        .contact-text h4 {
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--dark-color);
        }

        .contact-text p {
            color: var(--text-light);
        }

        .contact-map {
            height: 250px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-map iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .contact-form .form-group {
            margin-bottom: 20px;
        }

        .contact-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-color);
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
            font-size: 16px;
            transition: var(--transition);
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(108, 99, 255, 0.2);
        }

        .contact-form textarea {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-col h3 {
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--primary-color);
        }

        .footer-col p {
            color: #aaa;
            margin-bottom: 20px;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #aaa;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }

        .footer-social {
            display: flex;
            gap: 15px;
        }

        .footer-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: var(--transition);
        }

        .footer-social a:hover {
            background: var(--primary-color);
            transform: translateY(-5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
            font-size: 14px;
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 999;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--secondary-color);
            transform: translateY(-5px);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-content,
            .contact-container {
                grid-template-columns: 1fr;
            }

            .about-img {
                margin-bottom: 40px;
                text-align: center;
            }

            .timeline-item:nth-child(odd),
            .timeline-item:nth-child(even) {
                padding: 0;
                text-align: left;
                padding-left: 30px;
            }

            .timeline::before {
                left: 10px;
            }

            .timeline-dot {
                left: 0;
            }

            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background: white;
                flex-direction: column;
                align-items: center;
                padding-top: 40px;
                transition: var(--transition);
            }

            .nav-links.active {
                left: 0;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .hamburger {
                display: block;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }

            .skills-container {
                grid-template-columns: 1fr;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .experience-container,
            .achievements-container {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .section {
                padding: 60px 0;
            }

            .section-title h2 {
                font-size: 28px;
            }

            .hero-btns {
                flex-direction: column;
                gap: 15px;
            }

            .hero-btns .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    @yield('main-content')
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
