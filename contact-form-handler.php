<?php
// Simple contact form handler - replace/extend as needed
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $company = isset($_POST['company']) ? strip_tags(trim($_POST['company'])) : '';
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

    if (empty($name) || empty($email) || empty($message)) {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    $to = 'YOUR-EMAIL@EXAMPLE.COM'; // <-- CHANGE THIS to your business email
    $subject = "Website contact from $name - Technopaedia";
    $body = "Name: $name\nEmail: $email\nCompany: $company\n\nMessage:\n$message\n";
    $headers = "From: noreply@" . $_SERVER['SERVER_NAME'] . "\r\n" .
               "Reply-To: $email\r\n";

    $sent = mail($to, $subject, $body, $headers);
    if ($sent) {
        header('Location: contact.html?sent=1');
        exit;
    } else {
        http_response_code(500);
        echo "Failed to send email. Please try again later.";
        exit;
    }
}
?>
