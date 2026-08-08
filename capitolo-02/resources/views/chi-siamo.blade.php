<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Chi siamo</title>
</head>
<body>
    <ul>
        @foreach ($competenze as $key => $value)
            <li>Key: {{ $key }}/Value: {{ $value }}</li>
        @endforeach
    </ul>
</body>
</html>
