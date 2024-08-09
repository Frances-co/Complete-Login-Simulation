// Ensure that JavaScript file is correctly loaded
//alert('JavaScript file loaded');

document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    //alert('Form submission intercepted');

    const formData = new FormData(this);

    fetch('LoginHandling.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Assuming the PHP script returns 'status' and 'message'
        if (data.status === 'success') {
            alert('Login successful: ' + data.message); // Display the success message
            // Handle successful login, e.g., redirect to another page or update the DOM
        } else if (data.status === 'error') {
            alert('Login failed: ' + data.message); // Display the error message
            // Show error message to the user
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
