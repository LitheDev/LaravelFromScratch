<?php

use Illuminate\Support\Facades\Route;

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
    return view('posts'); // Function, returns view, name is welcome
});

/* Route, shows individual post.
Uses Wildcard {post} to display posts dynamically

*/
Route::get('posts/{post}', function ($slug) {

    // Sets path to resources/
    $path = __DIR__ . "/../resources/posts/{$slug}.html";
    

    // If file does not exist in path, redirect to homepage
    if (!file_exists($path)) {
        return redirect('/');
    }

    $post = file_get_contents($path); // Set $post to contents in $path

    // Return view, 'post' to $post (in post.blade.php) to display contents
    return view('post', [
            'post' => $post // $post leads to CURRENT DIRECTORY (then up one, resources/post myfirstpost)
        ]);
})->where('post', '[A-z_\-]+'); // Uses regex, checks post contains one or more upper and lower case letters only, no numbers, symbols, etc. (Allows dashes)


