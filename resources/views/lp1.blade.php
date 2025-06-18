<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .card {
            display: flex;
            flex-wrap: wrap;
            background: aqua;
            border: 2px solid black;
            border-radius: 2px;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .card:hover {
            background: blue;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>This is the title.</h1>
        <h5>This a dynamic web page using card</h5>
    </div>

    <script>
        doc = document.querySelectorAll(".card").forEach((abc => {
            abc.onclick = function() {
                prompt(this.innerText);
            };
        }))



    </script>
</body>

</html>
