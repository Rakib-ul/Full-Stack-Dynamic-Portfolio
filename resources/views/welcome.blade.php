@extends('index')
@push('style')
@endpush

@section('main-content')
    <nav>
        <div class="display alignment">
            <div class="padding">Rakibul</div>
            <div class="find">
                <a href="" class="padding top">Home</a>
                <a href="#about" class="padding top">About</a>
                <a href="#education" class="padding top">Education</a>
                <a href="#Projects" class="padding top">Projects</a>
                <a href="#contact" class="padding top">Contact</a>
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

    <div id="about" class="about-container section1">
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
    </div>
@endsection
