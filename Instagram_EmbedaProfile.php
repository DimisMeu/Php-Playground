<?php

// Replace "INSTAGRAM_USERNAME" with the username of the Instagram profile you want to embed
$username = 'dimism.eu';

// Use Instagram's API to get the user's ID
$api_url = "https://www.instagram.com/$username/?__a=1";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);
$user_id = $data['graphql']['user']['id'];

// Use Instagram's embed API to get the HTML for the embedded profile
$embed_url = "https://www.instagram.com/embed.js/";
$query_params = http_build_query(array(
  'url' => "https://www.instagram.com/p/$user_id/",
  'hidecaption' => 'true',
  'maxwidth' => '640',
  'omitscript' => 'true',
));
$embed_url .= '?' . $query_params;

// Use cURL to fetch the HTML for the embedded profile
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $embed_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($ch);
curl_close($ch);

// Echo the HTML to embed the Instagram profile on your website
echo $html;

?>
