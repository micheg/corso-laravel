<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prodotti</title>
</head>
<body>
    <h1>Prodotti</h1>

    <ul>
        @foreach($prodotti as $prodotto)
            <li>{{ $prodotto }}</li>
        @endforeach
    </ul>

</body>
</html>
