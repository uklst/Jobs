function sanitize_input($data) {
  // Remove all whitespace
  $data = preg_replace('/\s+/', '', $data);
  // Remove all HTML tags
  $data = strip_tags($data);
  // Remove all non-alphanumeric characters
  $data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
  // Convert special characters to HTML entities
  $data = htmlspecialchars($data);
  return $data;
}

// Sanitize all user input
$_GET = array_map('sanitize_input', $_GET);
$_POST = array_map('sanitize_input', $_POST);
$_COOKIE = array_map('sanitize_input', $_COOKIE);
$_REQUEST = array_map('sanitize_input', $_REQUEST);
