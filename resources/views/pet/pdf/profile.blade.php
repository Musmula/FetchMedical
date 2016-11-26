<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <h1>Fetch Medical® Records for {{ $pet->name }}</h1>

    <div>
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

    <div>
        <h2>Medical records</h2>
        Coming soon, Lauren ;)
    </div>

</body>
</html>