<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>posts</title>
</head>
<body>
    <ul>
        @foreach($posts as $post)
            <li>
                <h1>{{ $post->titolo }}</h1>
                <span>{{ $post->pubblicato }}</span>
                <div>{{ $post->contenuto }}</div>
            </li>
        @endforeach
    </ul>

</body>
</html>
