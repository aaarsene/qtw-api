<?php

include_once 'simple_html_dom.php';


function get_current_designs() {
    $html = file_get_html('https://www.qwertee.com');

    $images = [];

    foreach ($html->find('.big-slides .index-tee') as $image) {
        $url = $image->find('img', 0)->src;
        $title = $image->find('span, b', 0)->plaintext;
        $author = $image->find('a[href^="/profile/"]', 0)->plaintext;

        $url = str_replace('mens', 'zoom', $url);
        $url = str_replace('450x540', '500x600', $url);

        $images[] = compact('url', 'title', 'author');
    }

    return $images;
}
