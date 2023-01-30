<?php
$url = 'https://www.youtube.com/watch?v=TBFCaKRYVfg';

// Get the video data from YouTube
$videoData = file_get_contents("http://youtube.com/get_video_info?video_id=" . parse_url($url, PHP_URL_QUERY));

// Extract the MP3 download URL from the video data
parse_str($videoData, $videoDataArray);
$streams = $videoDataArray['url_encoded_fmt_stream_map'];
$streams = explode(',', $streams);
$mp3Stream = '';

foreach ($streams as $stream) {
  parse_str($stream, $streamData);
  if (strpos($streamData['type'], 'audio/mp4;') !== false) {
    $mp3Stream = $streamData['url'];
    break;
  }
}

// Download the MP3 file
$mp3Data = file_get_contents($mp3Stream);
file_put_contents('video.mp3', $mp3Data);

echo 'Done';
?>
