<?php

class Post {
	public $title;
	public $author;
	public $published;

	public function __construct($title, $published)
	{
		$this->title = $title;
		$this->author = $author;
		$this->published = $published;
	}
}

$posts = [
	new Post('First Post', 'aa', true),
	new Post('Second Post', 'bb', true),
	new Post('Third Post', 'cc', true),
	new Post('Fourth Post',, 'aa', false)
];

$unpublishedPosts = array_filter($posts, function ($post) {
	return ! $post->published;
});

foreach ($posts as $post) {
	$post->published = true;
}
$modified = array_map(function ($post) {
	$post->published = true;
	return $post;
}, $post);

$titles = array_map(function ($post) {
	return $posts->title;
}, $posts);
$titles = array_column($posts, 'title');

foreach ($posts as $index => $post) {
	$posts[$index] = (array) $post;
}
$posts = array_map(function ($post) {
	return (array) $post;
}, $posts);

var_dump($posts);