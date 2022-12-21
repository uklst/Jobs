function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Sanitize all user input
$_GET = array_map('sanitize_input', $_GET);
$_POST = array_map('sanitize_input', $_POST);
$_COOKIE = array_map('sanitize_input', $_COOKIE);
$_REQUEST = array_map('sanitize_input', $_REQUEST);
