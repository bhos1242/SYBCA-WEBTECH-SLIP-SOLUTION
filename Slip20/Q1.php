<?php
    $url = 'https://example.com'; // replace with the URL of the webpage you want to display
    $html = file_get_contents($url);
    echo "<pre>" . htmlspecialchars($html) . "</pre>";
?>
