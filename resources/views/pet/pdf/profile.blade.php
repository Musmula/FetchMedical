<!DOCTYPE html>
<html>
<head>
    <title>Fetch Medical® Records for {{ $pet->name }}</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h1 {
            width: 100%;
            padding: 20px 10px;
            background: #1EA8E6;
            color: #fff;
        }

        h2 {
            margin: 0;
        }

        .box {
            background: #F5F5F5;
            padding: 20px;
            margin: 10px 0;
            border-radius: 3px;
            /*border: 1px solid #1EA8E6*/
        }
    </style>
</head>
<body>

    <div class="container">

        <h1>Fetch Medical® Records for {{ $pet->name }}</h1>

        <div class="box">
            <h2>General Info</h2>
            <ul>
                <li>Name: {{ $pet->name }}</li>
                <li>Species: {{ $pet->species }}</li>
                <li>Breed: {{ $pet->breed }}</li>
                <li>Color: {{ $pet->color }}</li>
                <li>Gender: {{ $pet->gender }}</li>
                <li>Notes: {{ $pet->notes }}</li>
            </ul>
        </div>

        <div class="box">
            <h2>Medical records</h2>
            <p>Coming soon, Lauren ;)</p>
        </div>

    </div>
</body>
</html>