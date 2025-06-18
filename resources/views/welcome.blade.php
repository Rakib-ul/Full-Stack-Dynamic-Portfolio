<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .display{
            display: flex;
            background-color: aqua;
            height: 40px;
        }
        .alignment{
            display: flex;
            justify-content: space-between;
            align-items: center;          
        }
        .padding{
            padding-left: 10px;
            padding-right: 10px;
        }
        .button-style{
            background-color: rgb(86, 87, 141);
            border: none;
            color: white;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            padding: 15px 30px
        }
        .find{

        }
    </style>
</head>
<body>
    <nav>
        <div class="display alignment">
            <div class="padding">Rakibul</div>
            <div class="find">
                <a href="" class="padding">Home</a>
                <a href="" class="padding">About</a>
                <a href="" class="padding">Services</a>
                <a href="" class="padding">Portfolio</a>
                <a href="" class="padding">Pages</a>
                <a href="" class="padding">Contact</a>
            </div>
        </div>
    </nav>
    <div class="alignment">
        <div>
            <h1 class="padding">Where Ideas Meet Execution.</h1>
            <h5 class="padding">
                Hi, I'm MD Rakibul Islam, a passionate and driven Computer Science student with a knack for building intelligent systems, intuitive applications, and impactful solutions. I specialize in turning ideas into functional, user-centered products using technologies like Flutter, Firebase, ESP32-CAM, and Machine Learning.

                From smart IoT systems to AI-powered apps, I love tackling real-world challenges with clean code, creative design, and scalable architecture. My journey is fueled by curiosity, continuous learning, and a mission to make tech accessible and meaningful.

                Let’s connect and create something awesome.
            </h5>
            <h5 id="test">This is a file with id. </h5>
        </div>
        <div>
            <img src="images/phone2.jpg" alt=""  width="400" height="600">
        </div>
        
    </div>
    <div class="padding">
        <button class="button-style">Download CV</button>
    </div>


    <script src="{{asset('assets/js/script.js')}}">
        
    </script>
</body>
</html>