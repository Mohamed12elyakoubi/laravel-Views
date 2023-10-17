<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets Information</h1>
    <ul>
        @foreach ($planets as $name => $description)
            <li>
                <h2>{{ $name }}</h2>
                <p>{{ $description }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
