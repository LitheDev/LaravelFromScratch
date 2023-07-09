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

        <article>
            <!-- Heading -->
            <h1><?= $post->title ?></h1>
            <div>
                <!-- Body -->
                <?= $post->body ?>
            </div>
        </article>

        <!-- Link to home page -->
        <a href="/">Go Back</a>
    </body>
</html>
