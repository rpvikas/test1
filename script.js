function recordResponse(response) {
    // Send the user's response to the server
    fetch('record_response.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ response }),
    })
    .then(response => response.json())
    .then(data => {
        console.log('Server response:', data);
        // You can handle the server's response here (optional)
    })
    .catch(error => console.error('Error:', error));
}
