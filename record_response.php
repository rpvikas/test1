<?php
header('Content-Type: application/json');

// Get the user's response from the POST request
$data = json_decode(file_get_contents('php://input'), true);

// Process the response
$response = $data['response'];

// Map the button responses
$validResponses = ['yes', 'no'];
if (!in_array($response, $validResponses)) {
    // Invalid response, handle accordingly (optional)
    echo json_encode(['status' => 'error', 'message' => 'Invalid response']);
    exit;
}

// Store the response in a text file
$file = 'responses.txt';
$currentData = file_get_contents($file);
$currentData .= $response . "\n";
file_put_contents($file, $currentData);

// Return a JSON response (optional)
echo json_encode(['status' => 'success', 'message' => 'Response recorded successfully']);
?>

