<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #1f2937, #111827);
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

        h3 {
            font-weight: 400;
            margin-top: 10px;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <nav>
        <div class="display alignment">
            <div class="padding">Rakibul</div>
            <div class="find">
                <a href="" class="padding top">Home</a>
                <a href="" class="padding top">About</a>
                <a href="" class="padding top">Services</a>
                <a href="" class="padding top">Portfolio</a>
                <a href="" class="padding top">Pages</a>
                <a href="" class="padding top">Contact</a>
            </div>
        </div>
    </nav>
    <div class="alignment">
        <div class="title">
            <h1 class="padding">Where Ideas Meet Execution.</h1>
            <h3 class="padding">
                Hi, I'm MD Rakibul Islam.
            </h3>
            <h3 id="test">This is a file with id. </h3>
        </div>
        <div class="padd">
            <img id = "avatar" src="images/phone2.jpg" alt="" width="200" height="250"
                style="border:2px solid rgb(41, 35, 35); border-radius: 50%">
        </div>

    </div>
    <div class="padding">
        <button class="button-style">Download CV</button>
    </div>




    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
