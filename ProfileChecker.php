<?php

// Define the username to search for
$username = "dimism.eu";

// Define the list of social media profiles to search for
$social_media_profiles = array(
    "Twitter" => "https://twitter.com/$username",
    "Instagram" => "https://www.instagram.com/$username/",
    "Facebook" => "https://www.facebook.com/$username",
    "LinkedIn" => "https://www.linkedin.com/in/$username",
    "YouTube" => "https://www.youtube.com/$username",
    "Pinterest" => "https://www.pinterest.com/$username"
);

// Iterate through the list of social media profiles
foreach ($social_media_profiles as $social_media => $profile_url) {
    // Use curl to check if the profile exists
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $profile_url);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);

    // Get the HTTP status code of the profile page
    $http_status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close the curl handle
    curl_close($ch);

    // Check if the profile exists
    if ($http_status_code === 200) {
        echo "$social_media profile found at $profile_url<br>";
    }
}

?>
