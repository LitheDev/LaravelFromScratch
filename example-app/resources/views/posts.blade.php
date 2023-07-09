<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Blog</title>
        <link rel="stylesheet" href="/app.css">
        <script src="/app.js"></script>
    </head>
    <body class="antialiased">

        <!-- Article 1, Contains link to 'post' in header -->
        <article>
            <h1><a href="/posts/my-first-post">My First Post</a></h1>
            <p>A quick brown fox jumps over the lazy dog</p>
        </article>

        <!-- Article 2, Contains link to 'post' in header -->
        <article>
            <h1><a href="/posts/my-second-post">My Second Post</a></h1>
            <p>A quick brown fox jumps over the lazy dog</p>
        </article>

        <!-- Article 3, Contains link to 'post' in header -->
        <article>
            <h1><a href="/posts/my-third-post">My Third Post</a></h1>
            <p>A quick brown fox jumps over the lazy dog</p>
        </article>
    </body>
</html>
