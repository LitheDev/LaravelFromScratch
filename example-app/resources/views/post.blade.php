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
            <?= $post; ?>
        </article>

        <!-- Link to home page -->
        <a href="/">Go Back</a>
    </body>
</html>
