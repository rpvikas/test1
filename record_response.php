<?php
header('Content-Type: application/json');

// Get the user's response from the POST request
$data = json_decode(file_get_contents('php://input'), true);

// Process the response (you can save it to a database, file, etc.)
$response = $data['response'];

// Return a JSON response (optional)
echo json_encode(['status' => 'success', 'message' => 'Response recorded successfully']);
?>
