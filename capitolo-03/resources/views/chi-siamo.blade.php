<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Chi Siamo</title>
</head>
<body>
    <h1>Profilo di {{ $sviluppatore }}</h1>

    <h2>Le mie competenze:</h2>
    <ul>
        @foreach($competenze as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    {{-- Questa è una condizione Blade --}}
    @if(count($competenze) > 3)
        <p><strong>Status:</strong> Sviluppatore con molte competenze!</p>
    @endif
</body>
</html>
