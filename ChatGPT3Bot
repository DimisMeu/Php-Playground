<?php
    // Your OpenAI API key
    $api_key = '-YOUR-API-KEY-';

    // The question/prompt to send to the model
    $prompt = 'What is the capital of France?';

    // The API endpoint for the GPT-3 model
    $api_endpoint = 'https://api.openai.com/v1/engines/davinci/completions';

    // Create a new cURL resource
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $api_endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key
    ));

    // Create the data to send to the API
    $data = array(
        'prompt' => $prompt,
        'temperature' => 0.5,
        'max_tokens' => 100
    );
    $payload = json_encode($data);

    // Attach the data to the request
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // Send the request and get the response
    $response = curl_exec($ch);

    // Close the cURL resource
    curl_close($ch);

    // Decode the JSON response
    $response_data = json_decode($response, true);

    // Extract the generated text from the response
    $generated_text = $response_data['choices'][0]['text'];

    // Output the generated text
    echo $generated_text;
?>
