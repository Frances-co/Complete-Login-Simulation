<?php
require_once 'login.php';

// Directly get email and password from POST request
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

try {
    // Establish database connection
    $pdo = new PDO($attr, $user, $pass, $opts);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed.']);
    exit;
}

// Directly include variables in the SQL query (Note: This is not secure for real applications)
$query = "SELECT * FROM credentials WHERE email = '$email' AND password = '$password'";
$result = $pdo->query($query);

if ($result && $result->rowCount() > 0) {
    echo json_encode(['status' => 'success', 'message' => 'Welcome back honey UwU']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Wrong email or password!']);
}
