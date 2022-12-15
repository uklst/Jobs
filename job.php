// Create a new post
$post_id = wp_insert_post(array(
    'post_title' => 'Job Title',
    'post_content' => 'Job description',
    'post_status' => 'publish',
    'post_type' => 'job'
));

// Set the job location
update_post_meta($post_id, 'job_location', 'City, State');

// Set the application deadline
update_post_meta($post_id, 'application_deadline', '2022-12-31');

// Set the job type (full-time, part-time, etc.)
update_post_meta($post_id, 'job_type', 'Full-time');
