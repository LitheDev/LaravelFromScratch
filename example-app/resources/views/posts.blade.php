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

        <!-- For each post -->
        <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>"> <!-- Heading will link to slug -->
                        <?= $post->title; ?>          <!-- Heading will be the post title -->
                </a>
            </h1>
            <div>
                    <?= $post->excerpt; ?> <!-- Except will be displayed in listing -->
            </div>
        </article>
        <?php endforeach; ?>
    </body>
</html>
