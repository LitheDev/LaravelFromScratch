<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Page (When home page is loaded, load posts)
Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

// Find a post by its slug and pass it to a view called "post"
// Keywords; View, Post, pass, slug
Route::get('posts/{post}', function ($slug) {
    $post = Post::find($slug); // Find a post by its slug (assign to $post) (uses Post class function find)
    return view('post', [ // Find a post
        'post' => $post        // Pass it to $post and return it to the view
    ]);
})->where('post', '[A-z_\-]+'); // Uses regex, checks post contains one or more upper and lower case letters only, no numbers, symbols, etc. (Allows dashes)


