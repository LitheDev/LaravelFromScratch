<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;


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

        // Read a directory of files to $files
        $files = File::files(resource_path("posts/"));

        /* Array_map ($callback, $array)
        / Each item is passed to the callback function
        / Files is being looped over
        */
        return array_map(function ($file) {
            return $file->getContents();
        }, $files);
    }

    /* Function Find - Dynamically finds slug in file system */
    public static function find($slug)
    {

        // If post cannot be found, throw an exception
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }
        // Get contents of file, cache it and return it
        return cache()->remember("posts.{$slug}", now()->addMinutes(2), fn() => file_get_contents($path));
    }

}

