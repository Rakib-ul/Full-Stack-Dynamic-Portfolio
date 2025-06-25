<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
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
        }
    
    </style>
</head>

<body>
    @yield('main-content')
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
