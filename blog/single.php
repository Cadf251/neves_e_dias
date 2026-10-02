<?php

$slug = $_GET['slug'];

var_dump($slug);

$api_url = "http://localhost/wordpress/wp-json/wp/v2/posts?slug=" . $slug;
$json = file_get_contents($api_url);
$post = json_decode($json, true)[0];

$title = $post['title']['rendered'];
$content = $post['content']['rendered'];

echo "<h1>$title</h1>";
echo "<div>$content</div>";

?>
