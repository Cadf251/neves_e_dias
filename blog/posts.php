<?php

$api_url = "http://localhost/wordpress/wp-json/wp/v2/posts";

$json = file_get_contents($api_url);
$posts = json_decode($json, true);

foreach ($posts as $post) {
  // var_dump($post);
    $title = $post['title']['rendered'];
    $excerpt = strip_tags($post['excerpt']['rendered']);
    $link = "/blog/" . $post['slug'];
    $thumbnail = null;

    // se tiver imagem destacada
    if (isset($post['featured_media']) && $post['featured_media'] != 0) {
        $media_api = "http://localhost/wordpress/wp-json/wp/v2/media/" . $post['featured_media'];
        $media_json = file_get_contents($media_api);
        $media = json_decode($media_json, true);

        $thumbnail = $media['source_url'];
    }

    echo "<div class='post'>";
    echo "<h2>$title</h2>";
    
    if ($thumbnail) {
        echo "<img src='$thumbnail' alt='$title'>";
    }

    echo "<p>$excerpt</p>";
    echo "<a href='$link'>Ler mais</a>";
    echo "</div>";
}
?>
