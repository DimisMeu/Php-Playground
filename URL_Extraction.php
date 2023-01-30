<?php

// Define the website URL to extract URLs from
$url = "https://www.dimism.eu";

// Use file_get_contents to get the source code of the website
$source_code = file_get_contents($url);

// Use preg_match_all to extract all URLs from the source code
preg_match_all("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $source_code, $matches);

// Get the extracted URLs
$urls = $matches[0];

// Remove duplicates from the list of URLs
$urls = array_unique($urls);

// Open the list.txt file for writing
$file = fopen("list.txt", "w");

// Write each URL in a separate line in the list.txt file
foreach ($urls as $url) {
    fwrite($file, $url . "\n");
}

// Close the list.txt file
fclose($file);

echo "URLs saved in list.txt";

?>
