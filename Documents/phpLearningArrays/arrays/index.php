<?php

class Post
{
    public $title;

    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', 'KV', true),
    new Post('My Second Post', 'KV', true),
    new Post('My Third Post', 'WW', true),
    new Post('My Fourth Post', 'HG', false)

];

// $unpublishedPosts = array_filter($posts, function ($post) {
//     return ! $post->published;

// });

// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;

// });

// foreach ($posts as $post) {
//     $post->published = true;
// }

// $modified = array_map(function ($post) {
//     return ['title' => $post->title];
// }, $posts);

// $titles = array_map(function ($post) {
//     return $post->title;
// }, $posts);

// $titles = array_column($posts, 'title');

// foreach ($posts as $index => $post)
// {
//     $posts[$index] = (array) $post;
// }

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

$titles = array_column($posts, 'title');

$authors = array_column($posts, 'author', 'title');

var_dump($authors);