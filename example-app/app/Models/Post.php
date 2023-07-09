<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;
    /* All, returns all files in the resource directory */
    /**
     * @param $title
     * @param $excerpt
     * @param $date
     * @param $body
     * @param $slug
     */
    // Constructor
    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path("posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file)) // Set current document to file metadata

                // Once documents are created, map over the documents
                ->map(fn($document) => new Post
                (
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                ))
                ->sortByDesc('date'); // Sort posts by date

        });
    }

    /* Function Find - Dynamically finds slug in file system */
    public static function find($slug)
    {
        // of all the blog posts, find the one with a slug that matches the one that was requested
        $posts = static::all();

        return static::all()->firstWhere('slug', $slug);

    }
}


