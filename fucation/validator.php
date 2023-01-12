<?php

// Function to check if email is valid and belongs to a specific company domain
function check_email($email) {
    // Regular expression to match email format
    $email_regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    // Company domain
    $company_domain = 'example.com';
    // Check if email format is valid
    if (!preg_match($email_regex, $email)) {
        return 'Invalid email format';
    }
    // Check if email belongs to company domain
    if (!preg_match("/$company_domain$/", $email)) {
        return 'Invalid company email';
    }
    // Check if email is a spam
    if (check_spam($email)) {
        return 'Email is spam';
    }
    return 'Email is valid';
}

// Function to check if email is a spam
function check_spam($email) {
    // Add your own spam checking logic here
    // For example, you can check against a list of known spam email addresses or use a service like Akismet
    // If email is found to be a spam, return true
    // Otherwise, return false
}

// Test the function
$email = 'user@example.com';
echo check_email($email); // Output: 'Email is valid'

?>
