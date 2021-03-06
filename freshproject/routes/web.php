<?php

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

// Konou Notes: When the user makes a GET request, we get a 'view' which is an HTML view
// Views are stored in the 'resources' directory

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return 'Hello World';
});

Route::get('/test', function () {
    return view('test');
});

// Konou Notes: The request() helper function can be used to fetch data from any GET or POST request.
// Fetch data from the query-string, pass it to a view, and then encode it to protected against potential XSS attacks.

Route::get('/', function () {
    $name = request('name');

    return view('test', [
        'name' => $name
    ]);
});

// ^In the browser use this to return a name http://freshproject.test/?name=Konou

// Route::get('/posts/{post}', function () {
//     return view('post');
// });


// ** This routing for shifting thru an array and a 404 error message if key doesn't exist

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'Hello, This is my first post',
//         'my-second-post' => 'Now I am getting the hang of this'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found.');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });    

Route::get('/posts/{post}', 'PostsController@show');


