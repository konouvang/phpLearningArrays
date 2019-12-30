<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($post)
    {
        $posts = [
            'my-first-post' => 'Hello, This is my first post',
            'my-second-post' => 'Now I am getting the hang of this'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, 'Sorry, that post was not found.');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);

    }
}
